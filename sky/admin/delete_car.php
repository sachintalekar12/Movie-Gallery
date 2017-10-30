<?php
	require_once('conn.php');
	$d=$_GET["id"];
	$q="select * from cars where id=$d ";
	$res=mysqli_query($con,$q);
	$img=mysqli_fetch_assoc($res);
	$f="../".$img['front'];
	$s1="../".$img['side_1'];
	$s2="../".$img['side_2'];
	$r="../".$img['rear'];
	 $car = $img['car'];  
     $model = $img['model'];  
     $year = $img['year']; 
 $price = $img['price'];
	if($f != "imgs/$car$model$year$price"){
	unlink($f);	}if($s1 != "imgs/$car$model$year$price"){
	unlink($s1);}if($s2 != "imgs/$car$model$year$price"){	
	unlink($s2);}if($r != "imgs/$car$model$year$price"){	
	unlink($r);}	
	
    
	$sql = "delete from cars where id=$d";
     mysqli_query($con,$sql) or die('Unable to check for requests');
	 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='uploaded_cars.php?delcon=1'
				</SCRIPT>");
	?>