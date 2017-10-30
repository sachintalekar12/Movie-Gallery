<?php
           require_once('conn.php');
			$img= "";  
                     //if upload button is pressed
                       if(isset($_POST['submit'])){
					   $car = $_POST['car'];  
                       $model = $_POST['model'];  
                       $year = $_POST['year']; 
					   $price = $_POST['price'];
                     //the path to store the uploaded image
                       $target="../imgs/$car$model$year$price".basename($_FILES['front']['name']);
					   $target1="../imgs/$car$model$year$price".basename($_FILES['side_1']['name']);
					   $target2="../imgs/$car$model$year$price".basename($_FILES['side_2']['name']);
					   $target3="../imgs/$car$model$year$price".basename($_FILES['rear']['name']);
                     //connect to database
                       //$db=mysqli_connect("localhost", "root", "", "skymotors");
                     //get all the submitted data from the form
                       $front="imgs/$car$model$year$price".basename($_FILES['front']['name']);
					   $side_1="imgs/$car$model$year$price".basename($_FILES['side_1']['name']);
					   $side_2="imgs/$car$model$year$price".basename($_FILES['side_2']['name']);
					   $rear="imgs/$car$model$year$price".basename($_FILES['rear']['name']); 
                       $km = $_POST['km'];  
                       $type = $_POST['type'];  
                       $seat = $_POST['seat'];  
                       $colour = $_POST['colour'];  
                        

                     //$sql="INSERT INTO images (image, text) VALUES ('".$_POST["image"]."', '".$_POST["text"]."')";
                       //$sql="INSERT INTO cars (image, text) VALUES ('$image', '$text')";
                      // mysqli_query($con,, $sql);//stores the submitted data into database table:images
                       $sql = " INSERT INTO cars VALUES ('','$front', '$side_1', '$side_2', '$rear', '$car', '$model', '$year', '$km', '$type', '$seat', '$colour', '$price' ) "; 
                      // $result = mysqli_query($con,$query); 
                         mysqli_query($con,$sql);
                        
						// move_uploaded_file($_FILES['front']['name'], $target);
						// move_uploaded_file($_FILES['side_1']['name'], $target1);
						// move_uploaded_file($_FILES['side_2']['name'], $target2);
						// move_uploaded_file($_FILES['rear']['name'], $target3);
						//if(move_uploaded_file($_FILES['front']['name'], $target)){
              //$msg="Image Uploaded Successfuly";
              // }else{
               //$msg="there was a problem uploading image";
                  //}
	if(move_uploaded_file($_FILES['front']['tmp_name'], $target)){
           $msg="Image Uploaded Successfuly";
        }else{ $msg="there was a problem uploading image";}
			
			if(move_uploaded_file($_FILES['side_1']['tmp_name'], $target1)){
           $msg="Image Uploaded Successfuly";
        }else{ $msg="there was a problem uploading image";}
			
			if(move_uploaded_file($_FILES['side_2']['tmp_name'], $target2)){
           $msg="Image Uploaded Successfuly";
        }else{ $msg="there was a problem uploading image";}
			
			if(move_uploaded_file($_FILES['rear']['tmp_name'], $target3)){
           $msg="Image Uploaded Successfuly";
        }else{ $msg="there was a problem uploading image";}
					   }
                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SKY MOTORS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <!--awsome font link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
		.loading {
  font-size: 30px;
}

.loading:after {
  overflow: hidden;
  display: inline-block;
  color:white;
  vertical-align: bottom;
  -webkit-animation: ellipsis steps(4,end) 900ms infinite;      
  animation: ellipsis steps(4,end) 900ms infinite;
  content: "\2026"; /* ascii code for the ellipsis character */
  width: 0px;
}

@keyframes ellipsis {
  to {
    width: 1.25em;    
  }
}

@-webkit-keyframes ellipsis {
  to {
    width: 1.25em;    
  }
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
<style>
.preview {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.5);
  display: none;
}

.preview a {
  display: flex;
  align-items: center;
  position: relative;
}
.preview a::before {
  position: absolute;
  content: 'â¨';
  display: inline-block;
  background: tomato;
  top: -16px;
  right: -16px;
  width:32px;
  height: 32px;
  border-radius: 50%;
  color: white;
  text-align: center;
  font-size: 16px;
  line-height: 32px;
}

.preview img {
  max-width: 730px;
}

.preview:target {
  display: flex;
}

.preview-trigger {
  text-decoration: none;
}



@keyframes effect {
  100% {
    transform: rotateZ(360deg);
  }
}

</style>
	
	<script type="text/javascript">
		function editsucc() {
			var x;
			
				 x = document.getElementById("snackbar")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 300000);
				//alert("Car edited successfully!");
			
		}
	</script>
</head>


<body>
<?php
include'admin_nav.php';
?>
	<!-- <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#555;">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:#555;border:none;">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#" style="font-size:16px;">SKY MOTORS</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="admin_login.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>     
				<li><a href="uploaded_cars.php"><span class="glyphicon glyphicon-upload"></span> Uploads</a></li> 	
				<li><a href="customers.php"><span class="glyphicon glyphicon-user"></span> Customers</a></li>     
				<li><a href="setting.html"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
			  </ul>
			</div>
		  </div>
		</nav> -->

		<!--pop contnt form-->




  <br />
  

	<div class="w3-row w3-section" style="border:1px solid red;">

	  <div class="w3-col w3-container m8 l8 s12 " style="border:1px solid blue;">
			<div  class="w3-card-4 w3-section" style="border-radius:10px;">
			  <div class="w3-container" style="border-radius:10px 10px 0px 0px;background-color:#A6ACAF;color:white">
				<h3>UPLOAD CAR</h3>
			  </div>
			  	<!--data uploading form-->
			  <form class="w3-container"  name="myForm"  method="post" action="admin_home_page.php" enctype="multipart/form-data">
				<br />
				      Upload car Images
				      <label for="front" class="btn btn-default btn-file">
					      Front</label><input type="file" style="display: none;" name="front" id="front" accept="image/*"> 
                      
					  <label for="side_1" class="btn btn-default btn-file">
				          Side_1</label><input type="file" name="side_1" style="display: none;" id="side_1" accept="image/*"/>
                 
				      <label for="side_2" class="btn btn-default btn-file">
					      side_2</label><input type="file" style="display: none;" name="side_2" id="side_2" accept="image/*"/>

                      <label for="rear" class="btn btn-default btn-file">
					      rear</label><input type="file" style="display: none;" name="rear" id="rear" accept="image/*"/>
                 <br />
				      <label for="car" class="w3-label w3-text-brown w3-section"><b>Car name</b></label>
						  <input type="text"class="w3-input w3-border w3-light-grey" name="car" id="car" placeholder="Enter car name" required/>
 
                      <label for="model" class="w3-label w3-text-brown w3-section"><b>Model</b></label>
						  <input type="text" name="model" id="model" class="w3-input w3-border w3-light-grey" placeholder="Enter model" required/>

                      <label for="year" class="w3-label w3-text-brown w3-section"><b>Year</b></label>
						  <input type="text" name="year" id="year" class="w3-input w3-border w3-light-grey" placeholder="Enter year"pattern="^\d{4}$" title=" Like @: 2017"required/>
 
                      <label for="km" class="w3-label w3-text-brown w3-section"><b>Kilometers</b></label>
					      <input type="text" name="km" id="km" class="w3-input w3-border w3-light-grey" placeholder="Enter Kilometers" pattern="[0-9]+" title="numbers only"required/>

                      <label for="type" class="w3-label w3-text-brown w3-section"><b>Type</b></label>
				         <select name="type" id="type" class="w3-select" id="chos"required>
						   <option value="" disabled selected>Choose your option</option>
                           <option value="petrol">Petrol</option>
                           <option value="diesel">Diesel</option>
                         </select>
						 
                      <label for="seat" class="w3-label w3-text-brown w3-section"><b>Seaters</b></label>
					      <input type="text" name="seat" id="seat" class="w3-input w3-border w3-light-grey" placeholder="Enter seaters" pattern="[0-9]+" title="numbers only"required/>

                      <label for="colour" class="w3-label w3-text-brown w3-section" ><b>Colour</b></label>
					      <input type="text" name="colour" id="colour" class="w3-input w3-border w3-light-grey" placeholder="Enter Colour" required/>

                      <label for="price" class="w3-label w3-text-brown w3-section" ><b>Price</b></label>
				          <input type="text" name="price" id="price" class="w3-input w3-border w3-light-grey" placeholder="Enter Price" pattern="[0-9]+" title="numbers only" required/>
 
                  <input type="submit" name="submit" id="submit"onclick="editsucc()"value="Submit"  class="w3-btn w3-blue w3-section w3-right"/>
			  </form>
			</div>
		</div>
	<!--col-2-->
		<div class="w3-col m4 l4 s12 w3-light-grey" style="border:1px solid blue;"> 
				<div class="w3-container w3-section">
						<div class="w3-container w3-center" style="border-radius:10px 10px 0px 0px;background-color: #34495E;">
						 <h2 style="color:white;padding:5px;" class="w3-xxlarge"><iframe src="https://freesecure.timeanddate.com/clock/i5pnuqpl/n1038/fn5/fs32/tct/pct/ftb/ts1" frameborder="0" width="192" height="39" allowTransparency="true"></iframe>
</h2>
						</div>
				<div class="w3-container w3-white w3-center" style="border-radius:0px 0px 10px 10px;">
						<h2><iframe src="https://freesecure.timeanddate.com/clock/i5pnuqpl/n1038/fn5/fs32/tct/pct/ftb/tt1/tw0/tm1" frameborder="0" width="230" height="39" allowTransparency="true"></iframe>
</h2>
				</div>
				</div>
			

				<div class="w3-container w3-section">
						<div class="w3-container" style="border-radius:10px 10px 0px 0px;background-color:#2874A6;color:white;">
							<h2>Connect to</h2>
						</div>
						<div class="w3-container w3-white w3-center" style="border-radius:0px 0px 10px 10px;">
							<div class="space" style="padding:10px;"><a href="http://www.skype.in"><i class="fa fa-skype" style="font-size:60px;color:#85C1E9;text-decoration:none;"></i> </a> <a href="http://www.gmail.com"><i class="fa fa-envelope-o" style="font-size:60px;color:#EC7063;"></i></a> <a href="http://www.facebook.com"><i class="fa fa-facebook-official" style="font-size:60px;color:blue;"></i></a>
							</div>
						</div>
				</div>

	
				
				<div class="w3-container w3-section">
				<div class="w3-padding" style="background-color:#5DADE2  ;color:white;"><h3>Cars Added</h3></div>
					 <?php
						 $q="select max(id)as id from cars";
						 $r=mysqli_query($con,$q);
						 $s=mysqli_fetch_assoc($r);
						if($s['id'] != null){ 
						echo"<ul class=\"w3-ul w3-card-4\" style=\"background-color:white;\">
						<li class=\"w3-padding-16\">
						  <span onclick=\"this.parentElement.style.display='none'\" 
						  class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">&times;</span>";
                       
						 $t="select * from cars where id= $s[id]";
						 $u=mysqli_query($con,$t);
						 $row=mysqli_fetch_assoc($u);
					echo"	<div class='pspace' style='margin-left:20px;'>
							<h4><b>Images : </b><br>
							<a href=\"#frnt\" class=\"preview-trigger w3-opacity w3-hover-opacity-off\"><img style=\"width:50px;\" src=\"../$row[front]\" alt=\"\"/></a>
							| <a href=\"#sid_1\" class=\"preview-trigger w3-opacity w3-hover-opacity-off\"><img style=\"width:50px;\" src=\"../$row[side_1]\" alt=\"\"/></a>
							| <a href=\"#sid_2\" class=\"preview-trigger w3-opacity w3-hover-opacity-off\"><img style=\"width:50px;\" src=\"../$row[side_2]\" alt=\"\"/></a>
							|<a href=\"#rer\" class=\"preview-trigger w3-opacity w3-hover-opacity-off\"><img style=\"width:50px;\" src=\"../$row[rear]\" alt=\"\"/></a>
							<h4><b>Car name: </b>$row[car]</h4>
							<h4><b>Model : </b>$row[model]</h4>
							<h4><b>Year : </b>$row[year]</h4>		
							<h4><b>Type : </b>$row[type]</h4>	
							<h4><b>Kilometers : </b>$row[km]</h4>
							<h4><b>Seater : </b>$row[seat]</h4><h4>
							<b>colour : </b>$row[colour]</h4>
							<h4><b>Price : </b>$row[price].</h4>
						</div>
						
<div id=\"frnt\" class=\"preview\"><a href=\"#\"><img src=\"../$row[front]\" alt=\"\"/></a></div>	
<div id=\"sid_1\" class=\"preview\"><a href=\"#\"><img src=\"../$row[side_1]\" alt=\"\"/></a></div>	
<div id=\"sid_2\" class=\"preview\"><a href=\"#\"><img src=\"../$row[side_2]\" alt=\"\"/></a></div>	
<div id=\"rer\" class=\"preview\"><a href=\"#\"><img src=\"../$row[rear]\" alt=\"\"/></a></div>					";
			}		?> 
						</li> 
					</ul>
				</div>
	
		</div>
  
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

		<br /><br />
<br />
		
		<footer class="navbar-fixed-bottom text-center">
		  <a href="#myNavbar" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		    <div id="snackbar"class="loading">Uploading!</div>

		</footer>

</body>
</html>