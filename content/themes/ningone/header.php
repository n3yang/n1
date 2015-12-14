<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */

?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><? bloginfo( 'name' );?></title>
		<link href="//apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
			<script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="//apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
		<link href="<? bloginfo('template_url'); ?>/css/common.css" rel="stylesheet">
	</head>
	<body>

		<!-- navbar -->
		<nav class="navbar navbar-common navbar-fixed-top">
			<div class="container">
				<div id="navbar" class="collapse navbar-collapse vertical-center">
					<ul class="nav navbar-nav">
						<li class="active"><a href="/about-us">关于我们</a></li>
						<li class=""><a href="/case">成功案例</a></li>
						<li><a href="/cooperation">服务体系</a></li>
						<li><img class="logo-45" src="<? bloginfo('template_url'); ?>/images/logo-120.png"></li>
						<li><a href="/product">文创产品</a></li>
						<li><a href="/jobs">招贤纳士</a></li>
						<li><a href="/contacts">联系我们</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
