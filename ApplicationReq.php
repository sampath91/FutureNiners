<?php 
session_start();
if (isset ( $_SESSION ['user_name'] )) {
	
	$usr = $_SESSION['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Future Niners</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
.login-panel {
	margin-top: 150px;
}
.error
{
  color: red;
}
.success
{
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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Apply <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="ApplicationReq.php">Application Requirements</a></li>
							<li><a href="Apply.php">Apply</a></li>
							<li><a href="Myapplications.php">My Applications</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="ListofDepts.php">List of Departments</a></li>
							<li><a href="Facilities.php">Facilities</a></li>
							<li><a href="VisitingCompanies.php">Visiting Companies</a></li>
							<li><a href="Scholarships.php">Scholarships</a></li>
							<li><a href="Research.php">Research</a></li>
							<li><a href="Faculty.php">Faculty</a></li>
							<li><a href="Jobs.php">Jobs</a></li>
						</ul>
					</li>
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
// 						foreach ( $usr as $e ) {
// 							echo "$e <br>";
// 						}
						echo "Welcome, ". $usr.". ";
						echo "<a href=\"logout.php\">Sign Out</a>";
						echo "</div>";
					}
					else{
						echo "<div align=right class= \" success\">";
						// 						foreach ( $usr as $e ) {
						// 							echo "$e <br>";
						// 						}
						echo "<a href=\"login.php\">Sign In</a>";
						echo "</div>";
					}
					/**
					 * ***************************** END *******************************
					 */
					?></p>
			<!--/.nav-collapse --><hr>
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary">
            <div class="container">
                    <h1>Application Requirements</h1>
<!--                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p> -->
                </div>
    </header>

	<!-- container -->
	<section class="container">

		<div class="row">

			<!-- Article main content -->
			<content class="col-md-8 maincontent">
				<br />
				<br />
			<h2>Applying for Admission</h2>
<h5>The freshman admission application for 2015 is now OPEN.</h5>
<p>Please note: freshmen are not eligible to apply for the Spring or Summer I terms.</p>
<p>The following is required to complete your application for admission:</p>
<p><strong>1. Complete and submit your online application.</strong></p>
<p><strong>2. Pay the $60 application fee.</strong></p>
<p><strong>3. Submit an official high school transcript.</strong></p>
<p><em>- High school transcripts must be mailed directly from the high school. North Carolina schools using NCWISE may submit electronic transcripts through the NCWISE electronic delivery system.</em></p>
<p><strong>4. Submit official SAT or ACT test scores.</strong><em>- Test scores must be sent directly to UNC Charlotte from the College Board (SAT) or ACT. </em><em>- Screen shots or score reports sent to the student are not considered official and will not be accepted.</em></p>
<p><strong>Essays and letters of recommendation are not required. Please check your Future 49er Web Portal to ensure all documents have been received.</strong></p>
<h2>Deadlines and Notifications:</h2>
<p>*A complete application (application, fee, transcript, and test scores) must be submitted by the deadlines below in order to receive a decision by the notification date.</p>
<table class="table table-striped" summary="Table" border="1" cellspacing="2" cellpadding="1"><thead><tr align="left" valign="top"><th>APPLICATION COMPLETE BY*:</th>
<th>YOU WILL BE NOTIFIED OF OUR DECISION BY:</th>
</tr></thead><tbody><tr align="left" valign="top"><td>November 1</td>
<td >January 30</td>
</tr><tr align="left" valign="top"><td>February 1</td>
<td>April 1</td>
</tr><tr align="left" valign="top"><td>June 1</td>
<td>On a rolling basis after April 1</td>
</tr></tbody></table><p><strong>Applications complete after February 1st will be reviewed after April 1 on a rolling basis (decisions will be made in the order that the completed applications are received). </strong></p>
<p>Admission to UNC Charlotte has become increasingly competitive. Because of the limited number of spaces available in our incoming freshman class, applicants who apply late in the admissions cycle are expected to present an academic profile that exceeds our freshman averages (see chart below). If your grades and test scores do not meet this elevated criteria, we encourage you to consider future transfer options. Many students attend another university or a community college for one year, transfer to UNC Charlotte, and fulfill their educational goals. Please review our transfer student admission criteria</a> for more information.</p>
				
				</content>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

<!-- 				<div class="row panel"> -->
<!-- 					<div class="col-xs-12"> -->
<!-- 						<h3>Lorem ipsum dolor sit</h3> -->
<!-- 						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque cursus erat vitae interdum. Nam vehicula, felis eu semper tincidunt, mauris risus ultricies dolor, a tristique arcu libero sit amet felis. Donec venenatis sed velit eget dignissim.</p> -->
<!-- 					</div> -->
<!-- 				</div> -->
				<div class="row panel">
					<div class="col-xs-12">
						<h3>Lorem ipsum dolor sit</h3>
						<p>
							<img src="assets/images/1.jpg" alt="">
						</p>
						<p>Morbi vitae diam felis. Mauris vulputate nisi erat, adipiscing pretium lacus lacinia quis. Sed consectetur ipsum.</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</section>
	
	<footer class="footer2">	
		<!-- <div class="footer2"> -->
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="ListofDepts.php">Departments</a> |
								<a href="Programs.php">Program</a> |
								<a href="Contact.php">Contact</a> 			|
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-flickr"></i></a>
								<a href="#"><i class="fa fa-github"></i></a>
			
							</p>
			
										</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2015. Designed by <a href="http://uncc.edu/" rel="develop">FutureNiners.com</a>
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
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
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
	