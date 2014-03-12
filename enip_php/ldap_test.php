<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];
if ($http_origin == "https://www.getvesseltracker.com" || $http_origin == "https://getvesseltracker.com")
{ 
   header('Access-Control-Allow-Origin: *');
}

ini_set('display_errors',true);
error_reporting(E_ALL);

$username = $_POST['username'];
$password = $_POST['password'];

// $username = 'vidya.sagar@bs-shipmanagement.com';
// $password = '';


if (empty($username) || empty($password)) {
	echo 'failed1';
	exit;
}

// echo $username." ".$password;

if ($username == 'opdr' && $password == 'OPDR') {
	// Logged in
    echo 'success';	
} else {
	echo 'failed';	
}

?>
