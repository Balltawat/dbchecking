<?php
	$dbserver = 'localhost';
	$dbuser = 'root';
	$dbname = 'durablegood';
	$dbpass = "";
	
	$conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
		if(!$conn){
			die("Connection failed:" .mysqli_connect_error());  //mysqli_connect_error() เช็คว่าผิดอะไร
		}
		mysqli_query($conn,"SET NAMES utf8");
?>