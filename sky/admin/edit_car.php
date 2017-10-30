<?php
require_once('conn.php');
              $img= "";  
                     //if upload button is pressed
 if(isset($_POST['submit'])){
						  
                     //the path to store the uploaded image
                       $target="../imgs/".basename($_FILES['front']['name']);
					   $target1="../imgs/".basename($_FILES['side_1']['name']);
					   $target2="../imgs/".basename($_FILES['side_2']['name']);
					   $target3="../imgs/".basename($_FILES['rear']['name']);
                     //connect to database
                       //$con=mysqli_connect("localhost", "root", "", "skymotors");
                     //get all the submitted data from the form
                       $front="imgs/".basename($_FILES['front']['name']);
					   $side_1="imgs/".basename($_FILES['side_1']['name']);
					   $side_2="imgs/".basename($_FILES['side_2']['name']);
					   $rear="imgs/".basename($_FILES['rear']['name']);
					   $car = $_POST['car'];  
                       $model = $_POST['model'];  
                       $year = $_POST['year'];  
                       $km = $_POST['km'];  
                       $type = $_POST['type'];  
                       $seat = $_POST['seat'];  
                       $colour = $_POST['colour'];  
                       $price = $_POST['price'];  
                       $id=$_POST['idd'];
if($_FILES['front']['size'] != 0 || $_FILES['side_1']['size'] != 0 || $_FILES['side_2']['size'] != 0 || $_FILES['rear']['size'] != 0){		   
                if ($_FILES['front']['size'] != 0){
					    $query = " UPDATE cars SET  front = '$front', car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price' WHERE id ='$id' "; 
                         mysqli_query($con, $query);

	                    if(move_uploaded_file($_FILES['front']['tmp_name'], $target)){
                          $msg="Image Uploaded Successfuly";
				         }else{ $msg="there was a problem uploading image";}
				}
			    if ($_FILES['side_1']['size'] != 0){
				        $query = " UPDATE cars SET  side_1 = '$side_1', car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price' WHERE id ='$id' "; 
                         mysqli_query($con, $query);
						 
			            if(move_uploaded_file($_FILES['side_1']['tmp_name'], $target1)){
                          $msg="Image Uploaded Successfuly";
                         }else{ $msg="there was a problem uploading image";}
			    }
				if ($_FILES['side_2']['size'] != 0){
				$query = " UPDATE cars SET  side_2 = '$side_2', car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price' WHERE id ='$id' "; 
                         mysqli_query($con, $query);
						 
			            if(move_uploaded_file($_FILES['side_2']['tmp_name'], $target2)){
                          $msg="Image Uploaded Successfuly";
                         }else{ $msg="there was a problem uploading image";}
			    }
				if ($_FILES['rear']['size'] != 0){
				$query = " UPDATE cars SET  rear = '$rear',car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price'  WHERE id ='$id' "; 
                         mysqli_query($con, $query); 
						 
			            if(move_uploaded_file($_FILES['rear']['tmp_name'], $target3)){
                          $msg="Image Uploaded Successfuly";
                         }else{ $msg="there was a problem uploading image";}
		        }
				/* if( $_POST['car'] = true){
				$query = " UPDATE cars SET car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price' WHERE id ='$id' "; 
                         mysqli_query($con, $query);
                 } */
		       echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='uploaded_cars.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=5000'
				</SCRIPT>");
			}
			 else{
						
                     
				$query = " UPDATE cars SET car = '$car',  model = '$model',  year = '$year',  km = '$km',  type = '$type',  seat = '$seat',  colour = '$colour',  price = '$price' WHERE id ='$id' "; 
                         mysqli_query($con, $query);
							   
			echo("<SCRIPT LANGUAGE='JavaScript'>
				window.location.href='uploaded_cars.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=5000'
				</SCRIPT>"); 
						   }
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

	
	<script type="text/javascript">
		function validateForm() {
					var front = document.forms["myForm"]["front"].value;	
					var side = document.forms["myForm"]["side"].value; 
					var rear = document.forms["myForm"]["rear"].value; 
					var cname = document.forms["myForm"]["cname"].value; 
					var model = document.forms["myForm"]["model"].value;
					var year = document.forms["myForm"]["year"].value;					
					var kilo = document.forms["myForm"]["kilo"].value;
					var type = document.getElementById('chos')	
					var seat = document.forms["myForm"]["seat"].value;	
					var colour = document.forms["myForm"]["colour"].value; 
					var price = document.forms["myForm"]["price"].value; 
					
					
					
						if (front == "") {
							alert("upload front image");
							return false;
						}  
						if (side == "") {
							alert("upload side images");
							return false;
						} 
						if (rear == "") {
							alert("upload rear images");
							return false;
						}  
						if (cname == "") {
							alert("Enter car name");
							return false;
						}   
						if (model == "") {
							alert("Enter model");
							return false;
						}
						if (year == "") {
							alert("Enter year");
							return false;
						}
						if (isNaN(year)) {
							alert("Enter correct value for year");
							return false;
						}
						if (kilo == "") {
							alert("Enter Kilometers");
							return false;
						}
						if (isNaN(kilo)) {
							alert("Enter correct value for kilometers");
							return false;
						}
				
							if (!type.value) {
							alert("Select type");
							return false;
						}
						
						if (seat == "") {
							alert("Enter seater's");
							return false;
						}
						if (isNaN(seat)) {
							alert("Enter correct value for seaters");
							return false;
						}
						
						if (colour=="") {
							alert("Enter colour");
							return false;
						}
						
						if (price=="") {
							alert("Enter price");
							return false;
						}
						
						if (isNaN(price)) {
							alert("Enter number in price field");
							return false;
						}
				
			
		}
	</script>
</head>


<body onload="mfun()">
<?php
include'admin_nav.php';
//include'conn.php';
if(isset($_GET['id'])) {
$d=$_GET["id"];
$q="select * from cars where id=$d";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_array($res);
}
?>
  <br />
  

	<div class="w3-padding w3-display-topmiddle w3-row w3-section" style="border:1px solid red;">

	  <br><br>
			<div  class="w3-card-4 w3-section" style="border-radius:10px;">
			  <div class="w3-container" style="border-radius:10px 10px 0px 0px;background-color:#A6ACAF;color:white">
				<h3>UPLOAD CAR<?php $d ?></h3>
			  </div>
			  	<!--data uploading form-->
			  <form class="w3-container"  name="myForm" onsubmit="return validateForm()" method="post" action="edit_car.php" enctype="multipart/form-data">
				<br />
				<input type="hidden"value="<?php echo "$data[id]"?>" name="idd">
				      Upload car Images
				      <label for="front" class="btn btn-default btn-file">
					      Front</label><input type="file"  style="display: none;" name="front" id="front" accept="image/*"> 
                      
					  <label for="side_1" class="btn btn-default btn-file">
				          Side_1</label><input type="file" value="<?php echo "$data[side_1]"?>"name="side_1" style="display: none;" id="side_1" accept="image/*"/>
                 
				      <label for="side_2" class="btn btn-default btn-file">
					      side_2</label><input type="file"value="<?php echo "$data[side_2]"?>" style="display: none;" name="side_2" id="side_2" accept="image/*"/>

                      <label for="rear" class="btn btn-default btn-file">
					      rear</label><input type="file"value="<?php echo "$data[rear]"?>" style="display: none;" name="rear" id="rear" accept="image/*"/>
                 <br />
				      <label for="car" class="w3-label w3-text-brown w3-section"><b>Car name</b></label>
						  <input type="text"value="<?php echo "$data[car]"?>"class="w3-input w3-border w3-light-grey" name="car" id="car" placeholder="Enter car name" required/>
 
                      <label for="model" class="w3-label w3-text-brown w3-section"><b>Model</b></label>
						  <input type="text"value="<?php echo "$data[model]"?>" name="model" id="model" class="w3-input w3-border w3-light-grey" placeholder="Enter model" required/>

                      <label for="year" class="w3-label w3-text-brown w3-section"><b>Year</b></label>
						  <input type="text" value="<?php echo "$data[year]"?>"name="year" id="year" class="w3-input w3-border w3-light-grey" placeholder="Enter year"pattern="^\d{4}$" title=" Like @: 2017"required/>
 
                      <label for="km" class="w3-label w3-text-brown w3-section"><b>Kilometers</b></label>
					      <input type="text" value="<?php echo "$data[km]"?>" name="km" id="km" class="w3-input w3-border w3-light-grey" placeholder="Enter Kilometers" pattern="[0-9]+" title="numbers only"required/>

                      <label for="type" class="w3-label w3-text-brown w3-section"><b>Type</b></label>
				         <select name="type"  id="type" class="w3-select" id="chos"required>
						   <option value="" disabled selected>Choose your option</option>
                           <option value="petrol">Petrol</option>
                           <option value="diesel">Diesel</option>
                         </select>
						 
                      <label for="seat" class="w3-label w3-text-brown w3-section"><b>Seaters</b></label>
					      <input type="text"value="<?php echo "$data[seat]"?>" name="seat" id="seat" class="w3-input w3-border w3-light-grey" placeholder="Enter seaters" pattern="[0-9]+" title="numbers only"required/>

                      <label for="colour" class="w3-label w3-text-brown w3-section" ><b>Colour</b></label>
					      <input type="text"value="<?php echo "$data[colour]"?>" name="colour" id="colour" class="w3-input w3-border w3-light-grey" placeholder="Enter Colour" required/>

                      <label for="price" class="w3-label w3-text-brown w3-section" ><b>Price</b></label>
				          <input type="text" value="<?php echo "$data[price]"?>"name="price" id="price" class="w3-input w3-border w3-light-grey" placeholder="Enter Price" pattern="[0-9]+" title="numbers only" required/>
 
                  <input type="submit" name="submit" id="submit" value="Submit"  class="w3-btn w3-blue w3-section w3-right"/>
			  </form>
			</div>
		<br><br>
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
<script>
function mfun() {
	var s='<?php echo $data['type']; ?>';
	 
    document.getElementById("type").value =s;
	 
}
</script>
		<br /><br />
<br />
		
		<footer class="navbar-fixed-bottom text-center">
		  <a href="#myNavbar" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		</footer>

</body>
</html>