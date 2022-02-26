<?php
	#set connection variables
	$host= "localhost";
	$password="chymdy";
	$user="chymdy";
	$db="notification";
	$conn= mysqli_connect($host,$user,$password,$db);
	#test connection
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
?>