<?php
include "database/db_connection.php";

page_protect ();



if (isset ( $_POST ['Admit'] )||isset ( $_POST ['Reject'] )) {
	$appID = $_POST["appid"];
	
	if ($_POST ['Admit'] == 'Admit') {
		$check_user_sql = "update Application set Status = 'Admitted' where applicationID ='$appID'";
		
		$result = mysqli_query ( $dbcon, $check_user_sql );
		header('Location:/futureniners/recruiterappreview.php');
		// Match row found with more than 1 results - the user is authenticated.
//		if (mysqli_num_rows ( $result ) > 0) {
//			
//			
//		} else {
//			$err [] = "Error - Invalid login. No such user exists";
//			// echo "<script>alert('username or password is incorrect!')</script>";
//			// header("Location: login.php");
//		}
	}


	if ($_POST ['Reject'] == 'Reject') {
		$check_user_sql = "update Application set Status = 'Rejected' where applicationID ='$appID'";
		
		$result = mysqli_query ( $dbcon, $check_user_sql );
		header('Location:/futureniners/recruiterappreview.php');
		
		// Match row found with more than 1 results - the user is authenticated.
//		if (mysqli_num_rows ( $result ) > 0) {
//			
//			
//		} else {
//			$err [] = "Error - Invalid login. No such user exists";
//			// echo "<script>alert('username or password is incorrect!')</script>";
//			// header("Location: login.php");
//		}
	}
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
    
        .btn-reject{color:#fff;background-color:#3d84e6;border-color:#3d84e6}.btn-reject:hover,.btn-reject:focus,.btn-reject:active,.btn-reject.active,.open>.dropdown-toggle.btn-reject{color:#fff;background-color:#FA0505;border-color:#FA0505}.btn-reject:active,.btn-reject.active,.open>.dropdown-toggle.btn-reject{background-image:none}.btn-reject.disabled,.btn-reject[disabled],fieldset[disabled] .btn-reject,.btn-reject.disabled:hover,.btn-reject[disabled]:hover,fieldset[disabled] .btn-reject:hover,.btn-reject.disabled:focus,.btn-reject[disabled]:focus,fieldset[disabled] .btn-reject:focus,.btn-reject.disabled:active,.btn-reject[disabled]:active,fieldset[disabled] .btn-reject:active,.btn-reject.disabled.active,.btn-reject[disabled].active,fieldset[disabled] .btn-reject.active{background-color:#FA0505;border-color:#FA0505}.btn-reject .badge{color:#FA0505;background-color:#fff}.
    
        
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
			<h1>Application under review</h1>
			<p>After review, update the status of the application!</p>
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
$an = $_GET["appl"];
$sql = "SELECT * from Application where ApplicationId=$an";

$result = mysqli_query ( $dbcon, $sql );

if (mysqli_num_rows ( $result ) > 0) {
	
	// output data of each row
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
		echo "<ul>";
		echo "<li><b>ApplicationId Id: </b>" . $row ["ApplicationId"] . "</li>";
		echo "</br>";
		echo "<li><b>Status: </b>" . $row ["Status"]; 
		echo "<br></br>";
		echo "<li><b>Application DATE: </b>" . $row ["ApplicationDATE"];
echo "<br></br>";
		echo "<li><b>High School GPA: </b>" . $row ["HighSchoolGPA"]; 
echo "<br></br>";
		echo "<li><b>SAT Score: </b>" . $row ["SATScore"]; 
echo "<br></br>";
		echo "<li><b>Undergrad GPA: </b>" . $row ["UndergradGPA"]; 
echo "<br></br>";
		echo "<li><b>GRE score: </b>" . $row ["GREscore"]; 
echo "<br></br>";
		echo "<li><b>TOEFL score: </b>" . $row ["TOEFLscore"]; 
echo "<br></br>";
		echo "<li><b>IELTSscore: </b>" . $row ["IELTSscore"]; 
		echo "</ul>";
		echo "<hr>";
	}
} else {
	echo "<p class= \" error\"> Sorry, No Departments found</p>";
}
echo "</tbody></table>";

	

?>
                    <form action="RecApplDisplay.php" method="post">
                    <input name="appid" value="<?php echo $an; ?>" hidden>
				
					                    <input class="btn btn-success" type="submit" value="Admit" name="Admit"> 
                    <input class="btn btn-reject" type="submit" value="Reject" name="Reject">
                    </form>

					</div>
<br>

				</content>
			</div>
		<?php echo "<a href=\"RecruiterAppReview.php\"> &#8592; Back to Review Applications </a>"; ?>
		</section>
	</div>







	<footer class="footer2">
		<!-- <div class="footer2"> -->
		<div class="container">
			<div class="row">

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="simplenav">
							<a href="RecruiterAppReview.php">Home</a> | <a href="ListofDepts.php">Departments</a>
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
