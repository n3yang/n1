<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Ningone
 * @subpackage Ningone
 */

get_header();
echo $post->post_content;
get_footer();
?>