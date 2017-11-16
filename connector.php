<?php

	$hostname="localhost";
	$username="root";
	$password="";
	$database="dbvisitantes";
	$connector= new mysqli($hostname,$username, $password);

	$sql="CREATE DATABASE IF NOT EXISTS dbvisitantes";
	
	if ($connector -> query($sql)===TRUE){
		//echo "Database created";
	} else{
		//echo "Database not created";
	}
	$connector= mysqli_connect($hostname,$username,$password,"dbvisitantes");
	
	
?>