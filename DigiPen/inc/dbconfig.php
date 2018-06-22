<?php

	global $install;
	global $con;

	$hostname = 'localhost'; 	// Host Name
	
	$user = 'root'; // username of host
	
	$password = ''; // password of host
	
	$dbname = 'digiword'; 	//database name
	
	$blogname = 'techtanzeel'; // Name of Your Blog
	
	$admin = 'techtanzeel';  	// blog admin username for login
	
	$adminpass = 'tanzeel0121';  // password for blog admin
			
	$con = new mysqli($hostname,$user,$password,$dbname);
	if (mysqli_connect_errno())
		{
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  		die();
	  	}
	
	define('BLOG', $blogname);
	require_once('head.php');

	if($install != 1)
	{
		require_once('action.php');
		$install = 1;
	}

?>