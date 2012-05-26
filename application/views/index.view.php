<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Welcome to Foundation</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<script src="javascripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<style>
	.border-box {
		border:solid;
		border-width:1px;
		border-color:gray;
		height:300px;
	}

	</style>

</head>
<body>
	<!-- container -->
	<div class="container">

		<div class="row">
			<div class="twelve columns">
				<br><br><br><br>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns text-center">
				<center>
					<h2>Hsien Tsung Wu</h2>
					<br>
					<br>
				</center>
			</div>
		</div>

		<div class="row">
			<div class="four columns text-center ">
				<div class="border-box">
					<h2>About Me</h2>
					<ul>
						<li>Taiwanese-Belizean</li>
						<li>USF Alumini</li>
					</ul>
				</div>
			</div>
			<div class="four columns text-center">
				<div class="border-box">
					<h2>My Projects</h2>
					<ul>
						<li>USF - SGCS</li>
						<li>SanFa</li>
						<li>Qgiv</li>
					</ul>
				</div>
			</div>
			<div class="four columns text-center">
				<div class="border-box">
					<h2>Socials</h2>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Google+</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns text-center">
				<br>
				<h6><i>HsienTsungWu Copyright 2012</i></h6>
			</div>
		</div>


	</div>
	<!-- end container -->
	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
