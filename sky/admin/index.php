<?php
session_start(); 
require_once('conn.php');?>
<!DOCTYPE html>
<html>
<title>SKY MOTORS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

<style>
//body,h1 {font-family: "", sans-serif}
//body, html {height: 100%}
body {
    background-color: #34495E;
    //min-height: 100%;
    //background-position: center;
   // background-size: cover;
}

.w3-btn{
	border-radius:10px;
	padding-left:80px;
	padding-right:80px;
	padding-top:20px;
	padding-bottom:20px;
	background-color:orange;
	transition:1s;
}

.w3-btn:hover{
	border-radius:10px;
	padding-left:80px;
	padding-right:80px;
	padding-top:20px;
	padding-bottom:20px;
	background-color:#28B463;
	//box-shadow:0px 0px 20px black;;
}

p,h3,h4,h5,h6,h1{
font-weight:bold;
font-family: 'Orbitron', sans-serif;
}
.c{color:red;}
</style>
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
.button1 {
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


.container {
    padding: 16px;
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
    padding-top: 6px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 85%; /* Could be more or less, depending on screen size */
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

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 50%;
    border-radius: 10px;
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
    }
}
.a{
	color:black;
}
</style>

<body>

<div class="bgimg  w3-animate-opacity w3-text-white">

	
  <h4 class="w3-center w3-section w3-xxlarge">SKY MOTORS</h4>
  <hr />
 <!-- <div class="w3-display-middle">
  
	<div  class="box w3-animate-top"  style="border-radius:10px;"><h6>Login</h6></div>
  </div>-->
  <br />  <br /><br />
  
  <h1 class="w3-center w3-xlarge">We'v got work to do.</h1>
  <br />
	<div class="w3-center w3-section">
		<button class="w3-btn w3-large"  onclick="document.getElementById('id01').style.display='block'" >Let's Log in</button>
		
	</div>
	<?php
if(isset($_POST['submit'])){
      $uname=$_POST['uname'];
	  $pswd=$_POST['psw'];
	  $order = "SELECT email FROM admin where id=44342";
      $result = mysqli_query($con,$order);
	  $row=mysqli_fetch_assoc($result);
	  
	  if($uname==$row['email']){
		  
		  $querys = "SELECT password,name FROM admin where id=44342 and email='$uname'";
          $res = mysqli_query($con,$querys);
	      $rowe=mysqli_fetch_assoc($res);
          		  
		 if($pswd == $rowe['password']){
		    $_SESSION['user'] = $rowe['name'];
		   session_write_close();
			  echo'<div class="w3-center"><img style=\"height:5%;width:5%\"src=\"ring.svg\" /><br>loading ...</div>';
			echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='admin_home_page.php'
				</SCRIPT>");
		 }else{
		     echo'<div class="c w3-center">INVALID EMAIL OR PASSWORD<br>TRY AGAIN</div>'; 
		 }
	  }else{
		  echo'<div class="c w3-center">INVALID EMAIL OR PASSWORD<br>TRY AGAIN</div>';
		  }
}

	echo"<div id=\"id01\" class=\"modal\">";
  if(!isset($_SESSION['user'])) 
{
  echo"<form class=\"modal-content animate\"  method=\"post\" action=\"index.php\" enctype=\"multipart/form-data\">
		<div class=\"imgcontainer\">
		  <!--<span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>-->
		  <!--<img src=\"38094425-cars-wallpaper-hd.jpg\" alt=\"Avatar\" class=\"avatar\">-->
		</div>

		<div class=\"container\">
		<h3 style=\"color:black;\" class=\"w3-center\">Log in</h3>
		<hr />
		  <label><b>Username</b></label>
		  <input type=\"text\" placeholder=\"Enter Email_id\" name=\"uname\" required>

		  <label><b>Password</b></label>
		  <input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" required>
			
		   <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Log in\" class=\"button1\">
		  <input type=\"checkbox\" checked=\"checked\">  <label class=\"a\"><b>Remember me</b></label>
		</div>

		<div class=\"container\" style=\"background-color:#5D6D7E  ; border-radius:0px 0px 10px 10px;\" >
		  <button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\" >Cancel</button>
		  <span class=\"psw\">Forgot <a href=\"#\">password?</a></span>
		</div>
  </form>";
}else{
echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='admin_home_page.php'
				</SCRIPT>");
}
  ?>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	
  <div class="w3-display-bottomright w3-padding-small">
    <h6>Design & Developed by : Sachin & KD.</h6>	  
  </div>
</div>

</body>
</html>