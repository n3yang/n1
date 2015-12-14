<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Here is other meta tags -->
		<title><? bloginfo( 'name' );?></title>

		<!-- Bootstrap -->
		<link href="//apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
			<script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="//apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
		<link href="<? bloginfo('template_url'); ?>/css/common.css" rel="stylesheet">
		<style type="text/css">

html, body{
	height: 100%;
	margin: 0;
}
#index-wrap{
	margin: 0px;
	padding: 0px;
	background-color: #3f3b3a;
	height: 100%;
	width: 100%;
	min-width: 700px;
	min-height: 600px;
	text-align: center;
}

#index-wrap .nav-footer{
	height: 60px;
	min-height: 60px;
	position: relative;
	top: -60px;
	display: none;
	background-color: #fff;
	overflow: hidden;
}
#index-wrap .nav-footer ul {
	margin-top: 5px;
	display: inline-block;
}
#index-wrap .nav-footer ul li {
	margin: 0 20px 0 20px;
	color: #555;
	font-size: 13px;
}
#index-wrap .nav-footer ul li a, #index-wrap .nav-footer ul li a:hover {
	background-color: #FFF;
	color: #555;
}
#index-wrap .nav-footer .nav .logo {
	width: 32px;
	margin-top: -5px;
}


#index-wrap .showcase{
	display: block;
	color: #fff;
	height: 100%;
	width: 100%;
	overflow: hidden;
	min-height: 300px;
}
#index-wrap .showcase .slice{
	position: relative;
	width: 1px;
	height: 1px;
}
#index-wrap .showcase .slice img{
	opacity: .5
}
#index-wrap .showcase .slice {
	opacity: .0;
}

#slice-1 {
	top: 6%;
	left: 0%;
	z-index: 1;
}

#slice-2 {
	top: 6%;
	left: 30%;
	z-index: 2;
}

#slice-3 {
	top: 6%;
	left: 66%;
	z-index: 3;
}

#slice-4 {
	display: block;
	top: 45%;
	left: 0;
	z-index: 4;
}
#slice-5 {
	top: 40%;
	left: 30%;
	z-index: 5;
}
#slice-6 {
	top: 40%;
	left: 66%;
	z-index: 6;
}
#slice-7 {
	top: 52.2%;
	left: 26%;
	z-index: 7;
}
#slice-8 {
	top: 66%;
	left: 30%;
	z-index: 8;
}
#slice-9 {
	top: 52.2%;
	left: 76%;
	z-index: 9;
}


.showcase-logo{
	display: none;
	opacity: 0;
	/*transform: scale(0);*/
	zoom: 0.001;
}
.showcase-background{
	display: none;
	opacity: .05;
}


		</style>
	</head>
	<body>

		<div id="index-wrap" class="container-fluid">
			<div class="showcase hidden-xs" style="display: inline-block;">
				<div id="slice-1" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-1.png"></div>
				<div id="slice-2" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-2.png"></div>
				<div id="slice-3" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-3.png"></div>
				<div id="slice-4" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-4.png"></div>
				<div id="slice-5" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-5.png"></div>
				<div id="slice-6" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-6.png"></div>
				<div id="slice-7" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-7.png"></div>
				<div id="slice-8" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-8.png"></div>
				<div id="slice-9" class="slice"><img src="<? bloginfo('template_url'); ?>/images/logo-slice-9.png"></div>
				<div class="vertical-center showcase-logo"><img src="<? bloginfo('template_url'); ?>/images/logo-120.png" alt=""></div>
				<div class="showcase-background"></div>
			</div>
			<div class="showcase visible-xs-inline-block">
				<img src="<? bloginfo('template_url'); ?>/images/logo-120.png" alt="">
			</div>
			<nav class="nav-footer">
				<ul class="nav nav-pills">
					<!-- <li><a><img src="images/menu-1.png"></a></li> -->
					<li><a href="/about-us">关于我们</a></li>
					<li><a href="/case">成功案例</a></li>
					<li><a href="/cooperation">服务体系</a></li>
					<li><a><img class="logo" src="<? bloginfo('template_url'); ?>/images/logo-120.png"></a></li>
					<li><a href="/products">文创产品</a></li>
					<li><a href="/jobs">招贤纳士</a></li>
					<li><a href="/contacts">联系我们</a></li>
				</ul>
			</nav>
			<input id="sliceIndex" type="hidden" value="">
		</div>



		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="<? bloginfo('template_url'); ?>/js/qtransform.js"></script>
		<script type="text/javascript">
$(document).ready(function(){

	var sliceOpacity = [
		[],
		[1, 1, 5, 2, 5, 1],
		[1, 2, 4, 5, 4, 1],
		[1, 5, 2, 5, 1, 1],
		[1, 2, 4, 5, 4, 1],
		[1, 5, 1, 5, 4, 1],
		[1, 2, 4, 5, 4, 1],
		[1, 1, 5, 1, 5, 1],
		[1, 2, 2, 5, 5, 1],
		[1, 5, 1, 5, 1, 1]
	];

	var sliceRotate = [0, 45, 45, 90, -90, -90, 80, -90, -90, 90];

	var sc = $('.showcase');
	// if (sc.width()>650 || sc.height()>650) {
	// 	sc.width(650);
	// 	sc.height(650);
	// }
	sc.width(sc.height());


	function moveSlice(sliceIndex){
		for (actionIndex = 0; actionIndex<=5; actionIndex++) {
			animateOpacity = sliceOpacity[sliceIndex][actionIndex];
			$('#slice-'+sliceIndex).animate({opacity: '.' + animateOpacity, }, 800)
		}
		animateRotate = sliceRotate[sliceIndex];

		$('#slice-'+sliceIndex).animate({
			top: '50%', 
			left: '50%', 
			zoom: '0.0001', 
			rotate: animateRotate/30
		}, {
			queue: false, 
			duration: 4000
		})
	
	}
	function _moveSlice(_sliceIndex){
		return function(){
			moveSlice(_sliceIndex);
		}
	}
	
	for (var sliceIndex = 1; sliceIndex <= 9; sliceIndex++) {
		setTimeout(_moveSlice(sliceIndex), (sliceIndex-1)*500)
	};
	

	// show center logo
	setTimeout(function(){
		$('.showcase-logo').show().animate({opacity:"1", zoom:"1"}, 5000, function(){
			// $('#index-wrap .nav-footer').css('right', '100%').animate({right: '0%'}, 500).show();
			$('#index-wrap .nav-footer').fadeIn(2000);

			sb_height = sb_width = $(window).height() - $('#index-wrap .nav-footer').height();
			$('.showcase-background').css({
				'background': 'url(<? bloginfo('template_url'); ?>/images/logo-white.png) center top no-repeat',
				'backgroundSize': 'contain',
				'height': sb_height,
				'width': sb_width})
				.fadeIn(3000)
				.css('display', 'inline-block');
		});
	}, 8000);
	// $("#box").animate({marginTop:"50px"});
	// http://www.w3school.com.cn/jquery/effect_animate.asp
	// show nav bar
	// setTimeout(function(){
		// $('#index-wrap .nav-footer').show().css('width', '0%').animate({width: '100%'}, 1000);
		
	// }, 6000);
});
		</script>
	</body>
</html>