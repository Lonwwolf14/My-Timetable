<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>HOME</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel='stylesheet' id='camera-css' href='assets/css/camera.css' type='text/css' media='all'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="VIT Logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="homw.php">Home</a></li>
					<li><a href="slot.php">Slot</a></li>
					<li><a href="timetable.php">Timetable</a></li>
					<li><a href="mytt.php">MY TimeTable</a></li>
					<li><a href="event.php">Events</a></li>
					<li class="nav-items" id="profile">
						<?php
						session_start();

						// Destroy existing session
						session_destroy();

						// Start a new session
						session_start();

						if (isset($_SESSION['first_name']) && $_SESSION['first_name'] !== null) {
							echo '<a href="#">' . $_SESSION['first_name'] . '</a>';
						} else {
							echo '<a href="L-index.html">Login</a>';
						}
						?>

					</li>


				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">

			<div class="fluid_container">
				<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
					<div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
						<h2>We develop.</h2>
					</div>
					<div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
					</div>
				</div><!-- #camera_wrap_3 -->
			</div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/1.png" alt="" />
					</div><!--icon box top -->
					<h4>Dr.Mandar Sohani</h4>
					<p><a href="https://vit.edu.in/MandarSohani.html"><em>Read More</em></a></p>
				</div><!--grey box -->
			</div><!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/2.png" alt="" />
					</div><!--icon box top -->
					<h4>Pankaj Vanwari</h4>
					<p><a href="https://vit.edu.in/PankajVanwari.html"><em>Read More</em></a></p>
				</div><!--grey box -->
			</div><!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/3.png" alt="" />
					</div><!--icon box top -->
					<h4>Suja Jayachandran</h4>
					<p><a href="https://vit.edu.in/SujaJayachandran.html"><em>Read More</em></a></p>
				</div><!--grey box -->
			</div><!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/4.png" alt="" />
					</div><!--icon box top -->
					<h4>Dr.Sachin Bojewar</h4>
					<p><a href="https://vit.edu.in/SachinBojewar.html"><em>Read More →</em></a></p>
				</div><!--grey box -->
			</div><!--/span3-->
		</div>
	</div>

	<section class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="title-box clearfix ">
					<h2 class="title-box_primary">About Us</h2>
				</div>
				<p><span>The Institute is accredited by National Assessment and Accreditation Council (NAAC): A+
The following courses are accredited by National Board of Accreditation (NBA): Biomedical Engineering, Electronics Engineering, and Electronics and Telecommunication Engineering.</p>
				<a href="https://vit.edu.in/index.html" title="read more" class="btn-inline " target="_self">read more</a>
			</div>


			<!-- <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Courses</h2></div> 
			<div class="list styled custom-list">
			<ul>
			<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Mathematics and Computer Science</a></li>
			<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mathematics and Philosophy</a></li>
			<li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Philosophy and Modern Languages</a></li>
			<li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
			<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
			<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
			</ul>
			</div>
		 </div> -->
		</div>
	</section>


	<footer id="footer">

		<div class="container">
			<div class="row">
				<div class="footerbottom">
					<div class="col-md-3 col-sm-6">
						<div class="footerwidget">
							<h4>Contact</h4>
							<p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i> Wadala, Inida<br>
								<i class="fa fa-phone"></i>+91 7498187460 <br>
								<i class="fa fa-envelope-o"></i>parabraviraj142730@email.com
							</div>
						</div><!-- end widget -->
					</div>
				</div>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
	<script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

	<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
	<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='assets/js/camera.min.js'></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		jQuery(function () {

			jQuery('#camera_wrap_4').camera({
				transPeriod: 500,
				time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
				playPause: false,
				navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});

	</script>

</body>

</html>