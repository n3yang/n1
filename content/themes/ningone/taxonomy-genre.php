<?
$paged = get_query_var('paged');
$genre = get_term_by( 'slug',  get_query_var('term'), 'genre' );
get_header();
?>

		<!-- Begin page content -->
		<!-- thumbnail: 760x760 -->

		<div class="product-page container-fluid product-list">
			<!-- BEGIN breadcrumb -->
			<div class="product-banner"></div>
			<div class="breadcrumb-bar row">
				<div class="col-xs-6">
					<?=$genre->name?>
				</div>
				<div class="col-xs-6">
					<a href="/product/">浏览全部</a> <span class="glyphicon glyphicon-menu-down"></span>
				</div>
			</div>

			<div class="filter-bar row">
				<!--
				<div class="col-xs-6">
					<span class="glyphicon glyphicon-list"></span>筛选
				</div>
				<div class="col-xs-6">
					排序方式：热门度 <span class="glyphicon glyphicon-menu-down"></span>
				</div>
				-->
			</div>
			<!-- BEGIN content -->
			<div class="content container">
				<ul class="grid effect-1" id="grid">
					<?
					$args = array(
						'genre'				=> $genre->slug,
						'post_type'			=> 'product',
						'paged'				=> $paged>1 ? $paged : 1
					);
					$posts = query_posts($args);
					if (have_posts()){ while(have_posts()) : the_post();
						$imgsrc = get_post_thumbnail_src( get_the_ID(), 'full' );
					?>
					<li><a href="<?=the_permalink()?>"><img src="<?=$imgsrc?>"></a></li>
					<? endwhile;} ?>
				</ul>
			</div>

			<div>
				<? ningone_pagin_nav() ?>
				<!--
				<nav>
					<ul class="pagination">
						<li><a href="#"><span class="glyphicon glyphicon-menu-left"></a></li>
						<li class="active"><a href="">1</a></li>
						<li class="total"><a href="">/ 4</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></a></li>
					</ul>
				</nav>
				-->
			</div>

			<div class="breadcrumb-bar breadcrumb-bar-bottom row">
				<ol class="breadcrumb">
					<li><img src="<? bloginfo('template_url'); ?>/images/logo-120.png" style="width: 16px"></li>
					<li><?=$genre->name?></li>
				</ol>
			</div>

		</div>


		<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/css/component.css" />
		<script src="<? bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
		<script src="<? bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>
		<script src="<? bloginfo('template_url'); ?>/js/imagesloaded.js"></script>
		<script src="<? bloginfo('template_url'); ?>/js/classie.js"></script>
		<script src="<? bloginfo('template_url'); ?>/js/animonscroll.js"></script>
<script type="text/javascript">
// 
new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.9,
	viewportFactor : 0.2
} );
// 
var banner_height = $(window).height()*0.8;
$('.product-banner').css('background', 'url(<? if (function_exists('z_taxonomy_image')) echo z_taxonomy_image_url($genre->term_id); ?>) top center no-repeat')
	.height(banner_height);
$('.product-list .filter-bar').css('marginTop', banner_height-120);
</script>


<?
get_footer()
?>