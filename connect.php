<?php 
	$dbserver = "localhost";
	$dbusername ="root";
	$dbpassword = "";
	$dbname = "loginsystem";

	$con = mysqli_connect($dbserver, $dbusername,$dbpassword,$dbname);
    if(!$con)
        {
          die('Could not Connect MySql Server:' .mysqli_error());
        }
?>