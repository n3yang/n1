<?php

/**
* 
*/
class PostProduct
{
	public $debug = true;

	function __construct()
	{
		if ( is_admin() ) {
			add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
			add_action( 'save_post', array( $this, 'save' ) );
		}

		// hook into the init action and call create_product_taxonomies when it fires
		add_action( 'init', array( $this, 'create_taxonomies') );
		add_action( 'init', array( $this, 'create_post_type' ) );
	}

	/**
	 * create two taxonomies, genres and writers for the post type "product"
	 * @return [type] [description]
	 */
	public function create_taxonomies()
	{
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'				=> '产品分类',
			'all_items'			=> '所有分类',
			'add_new_item'		=> '添加新分类',
			'menu_name'			=> '产品分类',
		);
		$args = array(
			'hierarchical'		=> true,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'genre' ),
		);

		register_taxonomy( 'genre', array( 'product' ), $args );
	}

	public function create_post_type()
	{
		$post_type = "product";
		$args = array(
			'label'				=> '产品',
			'public'			=> true,
			'menu_position'		=> 5,
			'capability_type'	=> 'post',
			'hierarchical'		=> false,
			'show_ui'			=> true,
			'show_in_menu'		=> true,
			'supports'			=> array(
				'title','editor','author','thumbnail','excerpt','page-attributes','custom-fields'
			),
			'taxonomies' 		=> array('genre'),
			'labels'			=>array(
				'add_new'			=>'添加',
				'all_items'			=>'所有产品',
				'add_new_item'		=>'增加一个新的产品',
				'view_item'			=>'查看',
				'edit_item'			=>'编辑',
				'search_items'		=>'搜索',
				'not_found'			=>'没有找到此产品',
				'not_found_in_trash'	=>'回收站中没有找到此产品',
				'menu_name'			=>'产品',
				'description'		=>'展示创意产品，show time',
			),
			'rewrite' => array('slug' => 'product', 'with_front'=>false),
			'has_archive' => true,
		);
		register_post_type($post_type, $args);

		// add filter param in rewrite rules
		// add_rewrite_tag('%filter%','([^&]+)');
		// add_rewrite_rule('^product/genre/([^/]*)/filter/([^/]*)/?$', 'index.php?genre=$matches[1]&filter=$matches[2]', 'top' );
		// add_rewrite_rule('^product/genre/([^/]*)/filter/([^/]*)/page/?([0-9]{1,})/?$', 'index.php?genre=$matches[1]&filter=$matches[2]&paged=$matches[3]', 'top' );
	}

	/**
	 * Adds the meta box container
	 * @param string $post_type 
	 */
	public function add_meta_box($post_type)
	{
		add_meta_box( 
			'product-shopping-url', 
			'购买地址', 
			array( $this, 'render_meta_box' ), 
			'product', 
			'normal',
			'default' 
		);
	}

	/**
	 * display meta box
	 * @param  object $post 
	 */
	public function render_meta_box($post)
	{
		wp_nonce_field( 'product_save', 'product_save_nonce' );
		$shopping_url = get_post_meta($post->ID, '_product_shopping_url', true);

		echo '
			<input type="input" name="product_shopping_url" value="'.$shopping_url.'" placeholder="请输入购买地址" style="width:100%">
		';
	}

	/**
	 * Save the meta when the post is saved.
	 * @param  int $post_id 
	 */
	public function save($post_id)
	{
		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $_POST['product_save_nonce'], 'product_save' ) ) {
			return $post_id;
		}
		// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'product' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_posts', $post_id ) ) {
				return $post_id;
			}
		}
		// save data
		if ( ! isset( $_POST['product_shopping_url'] ) ) {
			return $post_id;
		}

		$shopping_url = sanitize_text_field( $_POST['product_shopping_url'] );
		update_post_meta( $post_id, '_product_shopping_url', $shopping_url );
	}


}

new PostProduct();
