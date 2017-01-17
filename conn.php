<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "phptest";

	$con    = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if(!$con){
		exit();
	}
?>