<?

$terms = get_the_terms(get_the_ID(), 'genre');
$genre = $terms[0];


// $prodcut->shopping_url = get_post_meta(get_the_ID(), '_product_shopping_url', true);

get_header();
?>

		<!-- Begin page content -->
		<!-- big image: 500x500 -->

		<div class="product-page container-fluid background-gray">
			<div class="breadcrumb-bar text-center">
				<ol class="breadcrumb">
					<li>在线商城</li>
					<li><?=$genre->name?></li>
					<li><? the_title() ?></li>
				</ol>
			</div>
			<div class="product-block text-center">
				<div class="product-item text-left">
					<div class="item-title">
						<h1><? the_title() ?></h1>
					</div>
					<div class="item-info">
						<div class="item-left">
							<!-- BEGIN left info -->
							<div id="product-item-carousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#product-item-carousel" data-slide-to="0" class="active"></li>
									<li data-target="#product-item-carousel" data-slide-to="1"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">

								<?php
								for ($i=1; $i <= 5; $i++) {
									$active = $i==1 ? ' active' : '';
									if (MultiPostThumbnails::has_post_thumbnail(get_post_type(), "product-image-$i")){
										echo '<div class="item'.$active.'"><img src="'
										.MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), "product-image-$i", NULL, 'product-image-thumbnail')
										.'" /></div>';
									}
								}
								?>

								</div>

								<!-- Controls -->
								<!-- glyphicon-menu-left -->
								<a class="left carousel-control" href="#product-item-carousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#product-item-carousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<!-- BEGIN right info -->
						<div class="item-right">
							<div class="item-sub-title">
								<h3><? the_title() ?></h3>
							</div>
							<hr>
							<div class="item-detail"><?=$post->post_content?></div>
							<div class="item-price">RMB <?=get_post_meta(get_the_ID(), '_product_shopping_price', true); ?></div>
						</div>
						<!-- BEGIN bottom -->
						<div class="item-bottom">
							<div>
								<img src="<?=get_post_thumbnail_src(get_the_ID(), '150')?>" width="50">
								<h5><? the_title() ?></h5>
							</div>
							<div class="pull-right">
								<a class="btn btn-gotoshop btn-lg" href="<?=get_post_meta(get_the_ID(), '_product_shopping_url', true)?>">立即订购</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?
get_footer();
?>