<?php 
	
	$host='mysql';
	$username='root';
	$pass='root';
	$db='deliburger';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>