<?php
	require_once('conn.php');
	$d=$_GET["id"];
	$sql = "delete from customers where c_id=$d";
     mysqli_query($con,$sql) or die('Unable to check for requests');
	 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='customers.php?delcon=1'
				</SCRIPT>");
	?>