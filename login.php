<?php
include ("database/db_connection.php");
// session_start (); // session starts here

if (isset ( $_SESSION ['user_name'] )) {
	header ( "Location: index.php" );
}

$err = array ();
foreach ( $_GET as $key => $value ) {
	$get [$key] = filter ( $value ); // get variables are filtered.
}

if (isset ( $_POST ['login'] )) {
	if ($_POST ['login'] == 'login') {
		
		foreach ( $_POST as $key => $value ) {
			$data [$key] = filter ( $value ); // post variables are filtered
		}
		$user_username = $data ['username'];
		$user_pass = $data ['pass'];
		
		$check_user_sql = "select userid,username,password from users WHERE Username='$user_username'AND Password='$user_pass'";
		
		$result = mysqli_query ( $dbcon, $check_user_sql );
		
		// Match row found with more than 1 results - the user is authenticated.
		if (mysqli_num_rows ( $result ) > 0) {
			
			list ( $userid, $username, $password ) = mysqli_fetch_row ( $result );
			// echo $username;
			// check against salt
			$check_user_sql = "select userid from student WHERE UserID='$userid'";
			
			$result2 = mysqli_query ( $dbcon, $check_user_sql );
			if (mysqli_num_rows ( $result2 ) == 1) {
				
				$pwd = PwdHash ( $password, substr ( $password, 0, 9 ) );
				if ($pwd === PwdHash ( $user_pass, substr ( $password, 0, 9 ) )) {
					session_start ();
					
					session_regenerate_id ( true ); // prevent against session fixation attacks.
					                                
					// this sets variables in the session
					$_SESSION ['user_name'] = $username;
					// $_SESSION['user_level'] = $user_level;
					$_SESSION ['HTTP_USER_AGENT'] = md5 ( $_SERVER ['HTTP_USER_AGENT'] );
					// $_SESSION['user'] = $user;
					
					header ( "Location: index.php" );
				} else {
					// $msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
					$err [] = "Invalid Login. Please try again with correct user email and password.";
					// header("Location: login.php");
				}
			}
		} else {
			$err [] = "Error - Invalid login. No such user exists";
			// echo "<script>alert('username or password is incorrect!')</script>";
			// header("Location: login.php");
		}
	}
}
?>


<html>
<head lang="en">
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet"
	href="bootstrap-3.2.0-dist\css\bootstrap.css">
<title>Login</title>
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
<style>
.login-panel {
	margin-top: 150px;
}
</style>

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
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-success">
					<div>
						<h3 class="panel-title">Sign In</h3>
					</div>
					<p><?php
					/**
					 * ****************** ERROR MESSAGES*************************************************
					 * This code is to show error messages
					 * ************************************************************************
					 */
					if (! empty ( $err )) {
						echo "<div class= \" alert alert-danger msg\">";
						foreach ( $err as $e ) {
							echo "$e <br>";
						}
						echo "</div>";
					}
					/**
					 * ***************************** END *******************************
					 */
					?></p>
					<div class="panel-body">
						<form role="form" method="post" action="login.php">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="username"
										name="username" type="username" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="password" name="pass"
										type="password" value="">
								</div>


								<input class="btn btn-lg btn-success btn-block" type="submit"
									value="login" name="login">

								<!-- Change this to a button or input when using this as a form -->
								<!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
							</fieldset>
						</form>
						<center>
							<b>New User ?</b> </b><a href="Registration.php">Sign Up</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
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
