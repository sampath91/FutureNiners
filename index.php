<?php
session_start ();
if (isset ( $_SESSION ['user_name'] )) {
	
	$usr = $_SESSION ['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Future Niners</title>
<link rel="favicon" href="assets/images/favicon.png">
<link rel="stylesheet" media="screen"
	href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css"
	media="screen">
<link rel="stylesheet" href="assets/css/style.css">
<link rel='stylesheet' id='camera-css' href='assets/css/camera.css'
	type='text/css' media='all'>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<style>

.login-panel {
	margin-top: 150px;
}

.error {
	color: red;
}

.success {
	color: green;
}

</style>	
	
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="icon-bar"></span><span class="icon-bar"></span><span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"> <img
					src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Apply <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="ApplicationReq.php">Application Requirements</a></li>
							<li><a href="Apply.php">Apply</a></li>
							<li><a href="Myapplications.php">My Applications</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Departments<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="ListofDepts.php">List of Departments</a></li>
							<li><a href="Facilities.php">Facilities</a></li>
							<li><a href="VisitingCompanies.php">Visiting Companies</a></li>
							<li><a href="Scholarships.php">Scholarships</a></li>
							<li><a href="Research.php">Research</a></li>
							<li><a href="Faculty.php">Faculty</a></li>
							<li><a href="Jobs.php">Jobs</a></li>
						</ul></li>
					<li><a href="Programs.php">Programs</a></li>
				</ul>
			</div>

			<p><?php
			/**
			 * ****************** Session MESSAGES*************************************************
			 * This code is to show session messages
			 * ************************************************************************
			 */
			if (! empty ( $usr )) {
				echo "<div align = right class= \" success\">";
				// foreach ( $usr as $e ) {
				// echo "$e <br>";
				// }
				echo "Welcome, " . $usr . ". ";
				echo "<a href=\"logout.php\">Sign Out</a>";
				echo "</div>";
			} else {
				echo "<div align=right class= \" success\">";
				// foreach ( $usr as $e ) {
				// echo "$e <br>";
				// }
				echo "<a href=\"login.php\">Sign In</a>";
				echo "</div>";
			}
			/**
			 * ***************************** END *******************************
			 */
			?></p>
			<!--/.nav-collapse -->
			<hr>
		</div>
	</div>
	<!-- /.navbar -->







	<!-- Header
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Welcome to UNC at Charlotte</h1>
							<p>Free Online education template for elearning and online education institute.</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div> #camera_wrap_3
                </div>.fluid_container
		</div>
	</header>
<!-- 	 /Header  -->

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/1.png" alt="" />
					</div>
					<!--icon box top -->
					<h4>Programs</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Praesent tempus eleifend risus ut congue eset nec lacus elit dor
						broma.</p>
					<p>
						<a href="Programs.php"><em>Read More</em></a>
					</p>
				</div>
				<!--grey box -->
			</div>
			<!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/2.png" alt="" />
					</div>
					<!--icon box top -->
					<h4>Departments</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Praesent tempus eleifend risus ut congue eset nec lacus elit dor
						broma.</p>
					<p>
						<a href="listofdepts.php"><em>Read More</em></a>
					</p>
				</div>
				<!--grey box -->
			</div>
			<!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/3.png" alt="" />
					</div>
					<!--icon box top -->
					<h4>Campus Life</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Praesent tempus eleifend risus ut congue eset nec lacus elit dor
						broma.</p>
					<p>
						<a href="Campuslife.php"><em>Read More</em></a>
					</p>
				</div>
				<!--grey box -->
			</div>
			<!--/span3-->
			<div class="col-md-3">
				<div class="grey-box-icon">
					<div class="icon-box-top grey-box-icon-pos">
						<img src="assets/images/4.png" alt="" />
					</div>
					<!--icon box top -->
					<h4>Faculty</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Praesent tempus eleifend risus ut congue eset nec lacus elit dor
						broma.</p>
					<p>
						<a href="Faculty.php"><em>Read More</em></a>
					</p>
				</div>
				<!--grey box -->
			</div>
			<!--/span3-->

		</div>
	</div>



	<hr>





	<section class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="title-box clearfix ">
					<h2 class="title-box_primary">About Us</h2>
				</div>
				<p>
					<span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum
						sociis natoque penatibus et magnis dis parturient montes ascetur
						ridiculus musull dui.</span>
				</p>
				<p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque
					penatibus et magnis dis parturient montes ascetur ridiculus mus.
					Null dui. Fusce feugiat malesuada odio.</p>
				<p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque
					penatibus et magnis dis parturient montes ascetur ridiculus mus.
					Null dui. Fusce feugiat malesuada odio.</p>
				<a href="#" title="read more" class="btn-inline " target="_self">read
					more</a>
			</div>


			<div class="col-md-4">
				<div class="title-box clearfix ">
					<h2 class="title-box_primary">Up Coming Courses</h2>
				</div>
				<div class="list styled custom-list">
					<ul>
						<li><a
							title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus."
							href="#">Mathematics and Computer Science</a></li>
						<li><a
							title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus."
							href="#">Mathematics and Philosophy</a></li>
						<li><a
							title="Penatibus et magnis dis parturient montes ascetur ridiculus mus."
							href="#">Philosophy and Modern Languages</a></li>
						<li><a
							title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci."
							href="#">History (Ancient and Modern)</a></li>
						<li><a
							title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus."
							href="#">Classical Archaeology and Ancient History</a></li>
						<li><a
							title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus."
							href="#">Physics and Philosophy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>







	<footer class="footer2">
		<!-- <div class="footer2"> -->
		<div class="container">
			<div class="row">

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="simplenav">
							<a href="index.php">Home</a> | <a href="ListofDepts.php">Departments</a>
							| <a href="Programs.php">Program</a> | <a href="Contact.php">Contact</a>
							| <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
								class="fa fa-facebook"></i></a> <a href="#"><i
								class="fa fa-dribbble"></i></a> <a href="#"><i
								class="fa fa-flickr"></i></a> <a href="#"><i
								class="fa fa-github"></i></a>

						</p>

					</div>
				</div>

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="text-right">
							Copyright &copy; 2015. Designed by <a href="http://uncc.edu/"
								rel="develop">FutureNiners.com</a>
						</p>
					</div>
				</div>

			</div>
			<!-- /row of panels -->
		</div>
		<!-- </div>-->
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
	<script type='text/javascript'
		src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

	<script type='text/javascript'
		src='assets/js/jquery.mobile.customized.min.js'></script>
	<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='assets/js/camera.min.js'></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		jQuery(function(){
			
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
