<?php
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

//$dbhost = constant("DB_HOST"); // Host name 
//$dbport = constant("DB_PORT"); // Host port
//$dbusername = constant("DB_USER"); // Mysql username 
//$dbpassword = constant("DB_PASS"); // Mysql password 
//$db_name = constant("DB_NAME"); // Database name 

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, "", DB_PORT) or die("Error: " . mysqli_error($dbcon));
mysqli_select_db($dbcon, DB_NAME) or die("Error: " . mysqli_error($dbcon));


//$dbcon=mysqli_connect(DB_HOST,"root","root","futureniner")or die("Error " . mysqli_error($dbcon));

define('SALT_LENGTH', 9);

function filter($data) {
	global $dbcon;
	$data = trim(htmlentities(strip_tags($data)));

	if (get_magic_quotes_gpc())
		$data = stripslashes($data);

	$data = mysqli_real_escape_string($dbcon,$data);

	return $data;
}

// Password and salt generation
function PwdHash($pwd, $salt = null)
{
	if ($salt === null)     {
		$salt = substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
	}
	else     {
		$salt = substr($salt, 0, SALT_LENGTH);
	}
	return $salt . sha1($pwd . $salt);
}


function page_protect() {
	session_start();

	global $dbcon;

	/* Secure against Session Hijacking by checking user agent */
	if (isset($_SESSION['HTTP_USER_AGENT']))
	{	
		//take username and search in database and if found authenticate
		$user_username=mysqli_real_escape_string($dbcon,$_SESSION['user_name']);
		$check_user_sql="select * from users WHERE Username='$user_username'";
		
		$result=mysqli_query($dbcon,$check_user_sql);
		
		// Match row found with more than 1 results  - the user is authenticated.
		if(!(mysqli_num_rows($result)>0) || $_SESSION['HTTP_USER_AGENT'] != 
				md5($_SERVER['HTTP_USER_AGENT']))
		{
			echo "Invalid User";
			//logout();
			exit;
		}
	}
	else {
			header("Location: login.php");
			exit();
		}
	}

	
	function logout()
	{
		global $dbcon;
		session_start();
	
		
		/************ Delete the sessions****************/
		//unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		//unset($_SESSION['user_level']);
		unset($_SESSION['HTTP_USER_AGENT']);
		session_unset();
		session_destroy();
	
		header("Location: index.php");
	}


?>