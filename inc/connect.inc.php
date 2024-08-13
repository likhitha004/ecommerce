<?php 
	$connect=mysqli_connect("localhost:3307","root","") or die("Couldn't connet to SQL server");
	mysqli_select_db($connect,"dbms") or die("Couldn'ttt select DB");
?>