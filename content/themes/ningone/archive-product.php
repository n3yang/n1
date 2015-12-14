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
						<div class="item active">
							<img src="images/product-c1.jpg" alt="">
						</div>
						<div class="item">
							<img src="images/product-c2.jpg" alt="">
						</div>
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
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
						<li><a><img src="images/product-sm-1.png"></a></li>
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
	$('.footer').css('backgroundColor', '#fff');
});
</script>


<?
get_footer()
?>