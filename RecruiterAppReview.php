<?php
include "database/db_connection.php";

page_protect ();

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
				<a class="navbar-brand" href="RecruiterAppReview.php"> <img
					src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="RecruiterAppReview.php">Home</a></li>
					<li><a href="logout.php">Sign Out</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<h1>Application Review</h1>
			<p>Applications to be reviewed!</p>
		</div>
	</header>






	<div>
		<section class="container">

			<div class="row">

				<!-- Article main content -->
				<content class="maincontent"> <br>
				<div>
<?php

$username=$_SESSION['user_name'];
$sql = "SELECT A.ApplicationId AS AppId, P.Degree AS deg, P.ProgName AS pname, A.ApplicationDATE AS appldate, A.Status AS stat, HighSchoolGPA , SATScore, UndergradGPA, GREscore, TOEFLscore, IELTSscore, Email, City, State, Country FROM Application A, Applies B, Program P, Student S, Users U WHERE A.ApplicationID=B.ApplicationID AND P.ProgID=B.ProgID AND S.SID=B.SID AND S.UserId=U.UserId AND A.RecID = (SELECT RecID FROM Recruiter R, Users U WHERE R.UserID=U.UserID AND U.Username='".$_SESSION['user_name']."');";

	$result = mysqli_query ( $dbcon, $sql );
	if (mysqli_num_rows ( $result ) > 0) {
		
	echo "<table class=\"table table-striped\" summary=\"Table\" border=\"1\" cellspacing=\"2\" cellpadding=\"1\">
		<thead><tr align=\"left\" valign=\"top\" style=\"color:black;font-style:regular\"><th>Application ID*</th>
<th>Degree</th><th>Program Name</th><th>Application Date</th><th>Application Status</th><th>HighSchool GPA</th><th>SAT Score </th><th>Undergrad GPA</th><th>GRE score</th><th>TOEFL Score</th><th>IELTS score</th><th>Email</th><th>City</th><th>State</th><th>Country</th>
</tr></thead><tbody>";
		// output data of each row
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			
			$appl = $row ["AppId"];
			$apLink = "<a href=RecApplDisplay.php?appl=$appl>" . $row ["AppId"] . "</a>";

echo "<tr align=\"left\" valign=\"top\" style=\"color:blue\"><td>" . "<h5>" .  $apLink . "</h5>" . "</td><td>" . $row ["deg"] . "</td><td>" . $row ["pname"] . "</td><td>" . $row ["appldate"] . "</td><td>" . $row ["stat"] . "</td><td>" . $row ["HighSchoolGPA"] . "</td><td>" . $row ["SATScore"] . "</td><td>" . $row ["UndergradGPA"] . "</td><td>" . $row ["GREscore"] . "</td><td>" . $row ["TOEFLscore"] . "</td><td>" . $row ["IELTSscore"] . "</td><td>" . $row ["Email"] . "</td><td>" . $row ["City"] . "</td><td>" . $row ["State"] . "</td><td>" . $row ["Country"] . "</td></tr>";
		}
	} else {
		echo "<p class= \" error\"> Sorry, No Applications found.</p> ";
		echo "Create a new application here - <a href=Apply.php>Apply Now</a>";
	}
	echo "</tbody></table>";
	echo "*See more details about application by clicking application id";

?>
</div>
<br>

				</content>
			</div>
		</section>
	</div>









	<footer class="footer2">
		<!-- <div class="footer2"> -->
		<div class="container">
			<div class="row">

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="simplenav">
							<a href="RecruiterAppReview.php">Home</a> 
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
