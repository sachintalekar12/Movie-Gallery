<!DOCTYPE html>
<html lang="en">
<head>
  <title>SKY MOTORS</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="boot_offline/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!--google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo|Philosopher|Ubuntu|Varela" rel="stylesheet">
	<!--google font style-->
	<style>
	h1,h2,h3,h4,h5,h6,p,label,button{
		font-family: 'Varela', sans-serif;
	}
	
	a{
	font-family: 'Orbitron', sans-serif;
	}
	</style>
	
	 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style>
		  *{
		  margin:0px;
		  padding:0px;
		  }
		  
			/* Remove the navbar's default margin-bottom and rounded borders */
			  .navbar {
			  margin-bottom: 0;
			  background-color: #909497  ;
			  z-index: 9999;
			  border: 0;
			  font-size: 12px !important;
			  line-height: 1.42857143 !important;
			  letter-spacing: 4px;
			  border-radius: 0;
			  font-family: Montserrat, sans-serif;
		  }
			/* h2 {
			  font-size: 24px;
			  text-transform: uppercase;
			  color: #303030;
			  font-weight: 600;
			  margin-bottom: 30px;
		  }
		  h4 {
			  font-size: 19px;
			  line-height: 1.375em;
			  color: #303030;
			  font-weight: 400;
			  margin-bottom: 30px;
		  }*/
			  .navbar li a, .navbar .navbar-brand {
			  color:  white   !important;
			  font-weight:bold;
			  
		  }
			  .navbar-nav li a:hover, .navbar-nav li.active a {
			  color: #21618C  !important;
			  background-color: #fff !important;
		  }
			/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
			.row.content {height: 200px}
			
			/* Set gray background color and 100% height */
			.sidenav {
			  padding-top: 20px;
			  background-color: #f1f1f1;
			  height: 100%;
			}
			
			/* Set black background color, white text and some padding */
			footer {
			  background-color: #555;
			  color: white;
			  padding: 15px;
			}
			
			/* On small screens, set height to 'auto' for sidenav and grid 
			@media screen and (max-width: 767px) {
			  .sidenav {
				height: auto;
				padding: 5px;
			  }
			  .row.content {height:auto;}
			}
			*/
			.thumbnail:hover{
			transition:1s;
			border:1px solid gray;
			}
			
			.thumbnail:hover{
			box-shadow:10px 10px 10px;
			}
	</style>
  
	<style>
			.mySlides {display:none}
			.demo {cursor:pointer}
			
			.space { 
			word-spacing: 30px;
		}
	</style>
	
	<!--style for pop up setting-->
	<style>
		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		.button2 {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}



		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 40px;
			
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 80%; /* Could be more or less, depending on screen size */
			border-radius:10px;
		}

		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			  /* border-radius:10px;*/
			}
		}

		.container2 {
			padding: 16px;
		}
	</style>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
#adddrs {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#adddrs.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#contacttt {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#contacttt.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#emailpop {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#emailpop.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
#usrnnnam {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#usrnnnam.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
} 
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>
<?php
if(isset($_GET['ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'])) {
$delcon="";
$delcon=$_GET['ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'];

 if($delcon==1){
	
			echo "<BODY onLoad=\"passchange()\">";
			$delcon=0;
  }
 }
 elseif(isset($_GET['ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hggccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'])){
	$delcon="";
$delcon=$_GET['ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hggccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'];

 if($delcon==1){
	
			echo "<BODY onLoad=\"addrschange()\">";
			$delcon=0;
  } 
 } 
 elseif(isset($_GET['ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hgged%it%itfgfghfhgffgfhggffghgdfstycgccytt'])){
	$delcon="";
$delcon=$_GET['ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hgged%it%itfgfghfhgffgfhggffghgdfstycgccytt'];

 if($delcon==1){
	
			echo "<BODY onLoad=\"contctchange()\">";
			$delcon=0;
  } 
 }
 elseif(isset($_GET['fdfd%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhcfgffgfhggffghgdfstycgcghgfb'])){
	$delcon="";
$delcon=$_GET['fdfd%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhcfgffgfhggffghgdfstycgcghgfb'];

 if($delcon==1){
	
			echo "<BODY onLoad=\"emailchange()\">";
			$delcon=0;
  } 
 }
 elseif(isset($_GET['fcvbx%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tftfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhvb%nauk%fghgdfsty%cgbhbhjhd'])){
	$delcon="";
$delcon=$_GET['fcvbx%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tftfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhvb%nauk%fghgdfsty%cgbhbhjhd'];

 if($delcon==1){
	
			echo "<BODY onLoad=\"usrnnnamchange()\">";
			$delcon=0;
  } 
 }
else{
echo"<body onload=\"myFundes()\">";
 }
	
include'admin_nav.php';
require_once('conn.php');
$q="select * from admin where id=44342";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_array($res);
 
?>
	
<br /><br />
	
	<div class="container w3-section">          
	  <table class="table table-bordered">
	   <tbody>
			<tr>
			<?PHP
			if(isset($_POST['usrnsubtn'])){
			$usrnnam=$_POST['usrnname'];
			 $query = " UPDATE admin SET name = '$usrnnam' WHERE id =44342"; 
                         mysqli_query($con,$query);
						 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='setting.php?fcvbx%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tftfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhvb%nauk%fghgdfsty%cgbhbhjhd=1'
				</SCRIPT>");
			
			}
			?>
				<th><p style="text-transform: capitalize;margin-left:10px;margin-top:30px;">User Name :  <?php echo "$data[name]"?></p></th>
				<td>
					<form class="w3-container" name="myForm" method="post" action="setting.php" enctype="multipart/form-data">
						<p>
						<input class="w3-input" type="text" placeholder="Enter user name" name="usrnname" required>
						<span><button type="submit"name="usrnsubtn" class="btn btn-primary w3-right" >Change</button></span>
						</p>
					</form>
				</td>
			</tr>
			
			<tr>
			<?PHP
			if(isset($_POST['emailsubtn'])){
			$emailll=$_POST['emadd'];
			 $query = " UPDATE admin SET email = '$emailll' WHERE id =44342"; 
                         mysqli_query($con,$query);
						 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='setting.php?fdfd%it%itfgfghf%hgffgfhgg%gfghgdfstycgh%tffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfcfhcfgffgfhggffghgdfstycgcghgfb=1'
				</SCRIPT>");
			
			}
			?>
				<th><p  style="margin-left:10px;margin-top:30px;">Email Address : <?php echo "$data[email]"?></p></th>
				<td>
					<form class="w3-container" name="myForm"method="post" action="setting.php" enctype="multipart/form-data">
						<p>
						<input class="w3-input" type="text" placeholder="Enter user name" name="emadd"required>
						<span><button type="submit" name="emailsubtn" class="btn btn-primary w3-right">Change</button></span>
						</p>
					</form>
				</td>
			</tr>		
			
			<tr>
			<?PHP
			if(isset($_POST['contactsubtn'])){
			$contct=$_POST['contactva'];
			 $query = " UPDATE admin SET contact = '$contct' WHERE id =44342"; 
                         mysqli_query($con,$query);
						 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='setting.php?ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hgged%it%itfgfghfhgffgfhggffghgdfstycgccytt=1'
				</SCRIPT>");
			
			}
			?>
				<th><p  style="margin-left:10px;margin-top:30px;">Contact : <?php echo "$data[contact]"?></p></th>
				<td>
					<form class="w3-container" name="myForm"method="post" action="setting.php" enctype="multipart/form-data">
						<p>
						<input class="w3-input" type="text" placeholder="Enter user name" name="contactva"required>
						<span><button type="submit" name="contactsubtn" class="btn btn-primary w3-right">Change</button></span>
						</p>
					</form>
				</td>
			</tr>
			
			<tr>
			
			<?PHP
			if(isset($_POST['addsub'])){
			$addrs=$_POST['hadd'];
			 $query = " UPDATE admin SET address = '$addrs' WHERE id =44342"; 
                         mysqli_query($con,$query);
						 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='setting.php?ad%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfh%gffgf%hgggfgh%gdfs%ty%cgccyttffed%it%itfgfghfffcfdtd%kjhb%hggccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=1'
				</SCRIPT>");
			
			}
			?>
				<th><p  style="text-transform: capitalize;margin-left:10px;margin-top:30px;">Home Address : <?php echo "$data[address]"?></p></th>
				<td>
					<form class="w3-container" name="myForm"method="post" action="setting.php" enctype="multipart/form-data">
						<p>
						<input class="w3-input" type="text" placeholder="Enter user name" name="hadd"required>
						<span><button type="submit" name="addsub" class="btn btn-primary w3-right">Change</button></span>
						</p>
					</form>
				</td>
			</tr>


		  <tr>
			
			   <th>	<p style="margin-left:10px;margin-top:30px;">change your password</p></th>
			   <td>
			   <?php
			   if(isset($_POST['confsubt'])){
			     $cpass=$_POST['cpas'];
				 
				 $query = " UPDATE admin SET password = '$cpass' WHERE id =44342"; 
                         mysqli_query($con,$query);
						 echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='setting.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=1'
				</SCRIPT>");
			   }
			   if(isset($_POST['subt'])){
				
				  $pass=$_POST['opass']; 
				     
				 if($data['password']== $pass){
					
				echo"	<form class=\"w3-container\" name=\"myForm\"method=\"post\" action=\"setting.php#conpass\" enctype=\"multipart/form-data\">
				    <p>
				 <input class=\"w3-input\" id=\"inutt\" type=\"password\" placeholder=\"Enter New Password\" value=\"$pass\">
				 <input class=\"w3-input\" id=\"password\" type=\"password\" placeholder=\"Enter New Password\" required>
				 <input class=\"w3-input\" id=\"confirm_password\" type=\"password\" placeholder=\"Confirm Password\" name=\"cpas\"required>
				 <span><button type=\"submit\"name=\"confsubt\" class=\"btn btn-primary w3-right\" id=\"conpass\">Change</button></span>
				  </form></p>";
				 } else{
					echo"<form class=\"w3-container\" name=\"myForm\"method=\"post\" action=\"setting.php#conpass\" enctype=\"multipart/form-data\">
					<p>
				 <input class=\"w3-input\" id=\"inpt2\" type=\"password\" placeholder=\"Enter Old Password\" name=\"opass\"required>
				 <p style=\"color:red;\">Enter Correct Password</p>
				 <span><button type=\"submit\" name=\"subt\"class=\"btn btn-primary w3-right\" id=\"conpass\">Submit</button></span>
				 </form>";
			 }
				}
				 else{
					echo"<form class=\"w3-container\" name=\"myForm\"method=\"post\" action=\"setting.php#conpass\" enctype=\"multipart/form-data\">
					<p>
				 <input class=\"w3-input\" id=\"inpt2\" type=\"password\" placeholder=\"Enter Old Password\" name=\"opass\"required>
				 <span><button type=\"submit\" name=\"subt\"class=\"btn btn-primary w3-right\" id=\"conpass\">Submit</button></span>
				 </form>";
			 }			  
				 ?>
					</p>
				
			  </td>
		  </tr>
		   <script>
				 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
		        </script>
<script>
				function myFundes() {
					
					document.getElementById("inutt").disabled = true;
				}
				
				function passchange() {
			var x;
			
				 x = document.getElementById("snackbar")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
		function addrschange() {
			var x;
			
				 x = document.getElementById("adddrs")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
		function contctchange() {
			var x;
			
				 x = document.getElementById("contacttt")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
		function emailchange() {
			var x;
			
				 x = document.getElementById("emailpop")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
		function usrnnnamchange() {
			var x;
			
				 x = document.getElementById("usrnnnam")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
		
</script>

		</tbody>
	  </table>
	</div>

	<br />
	<br />

		<footer class="navbar-fixed-bottom text-center">
		  <a href="#myNavbar" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		   <div id="snackbar">Password Changed Successfully!..</div>
		   <div id="adddrs">Address Updated!..</div>
		   <div id="contacttt">Contact Updated!..</div>
		   <div id="emailpop">Email Updated!..</div>
		   <div id="usrnnnam">Username Updated!..</div>
		</footer>

</body>
</html>