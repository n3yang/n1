<?
get_header()
?>

		<!-- Begin page content -->
		<div class="product-page container-fluid">
			<!-- Begin carousel -->
			<div class="carousel-show">
				<div id="product-carousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#product-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#product-carousel" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<!-- 2000x800 -->
					<div class="carousel-inner" role="listbox">
						<?
						$posts = get_posts( array( 'category_name'=>'product-index-carousel' ) );
						for ($i=0; $i < count($posts); $i++) {
							$active = $i==0 ? ' active' : '';
							$imgsrc = get_post_thumbnail_src( $posts[$i], 'full' );
						?>
							<div class="item<?=$active?>"><img src="<?=$imgsrc?>" ></div>
						<? } // endfor ?>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- End carousel -->

			<!-- Begin  -->
			<div class="navbar-bottom">
				<div class="container">
					<ul class="nav navbar-nav">
						<?
						$posts = get_posts(array('category_name'=>'product-index-genre-list'));
						for ($i=0; $i < count($posts); $i++) { 
							$src = get_post_thumbnail_src($posts[$i], 'full');
							$link = $posts[$i]->post_content;
						?>
						<li><a href="<?=$link?>"><img src="<?=$src?>"></a></li>
						<?
						} // endfor;
						?>
					</ul>
				</div>
			</div>


		</div>
	
<script type="text/javascript">
// image size: 2000x800
// $('.carousel-show, .navbar-common').hide();
showimg = $('.product-page .carousel-show .item img');
showimg.height($(window).height() * 0.7);
showimg.width(showimg.height() * 2.5);
$(function(){
	// change footer background color
	$('.footer').css('backgroundColor', '#fff');
	// show bottom nav step by step
	var nbul = $('.navbar-bottom ul');
		nbnum = parseInt(nbul.width() / 200);
		nbround = 0;

	function showNbul(){
		$('.navbar-bottom ul li').each(function(i,el) {
			start = nbnum * nbround;
			if ( i>=start && i<=start+nbnum){
				$(el).fadeIn();
			} else {
				$(el).fadeOut();
			}
		});
		nbround++;
		if ((nbround * nbnum) > $('.navbar-bottom ul').children().length){
			nbround = 0;
		}
	}
	setInterval(showNbul, 5000);
});
</script>


<?
get_footer()
?>