<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skymotors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <!--w3.css-->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <!--font awsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		//font-family: 'Varela', sans-serif;
	}
	
	.a1:hover{
	text-decoration:none;

	}
	
	.a1{
	text-decoration:none;
	font-family: 'Varela', sans-serif;
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
      background-color: #555;//#909497  ;
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
	</style>
	
	<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<script type="text/javascript">
	function validateForm() {
    var name = document.forms["myForm"]["fname"].value; 
	var contact = document.forms["myForm"]["contact"].value;
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }   
	if (contact == "") {
        alert("contact must be filled out");
        return false;
    }
	if (isNaN(contact)) {
        alert("contact must be in number");
        return false;
    }
	
	
}
</script>
</head>
<body>

<nav class="navbar navbar-default" style="background-color:#555;">
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
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li><a href="index.php#services"><span class="glyphicon glyphicon-list-alt"></span> SERVICES</a></li>
        <li><a href="index.php#contact"><span class="glyphicon glyphicon-phone"></span> CONTACT</a></li>
        <li><a href="list_of_cars.php"><i class="fa fa-car"></i> CARS</a></li>
      </ul>
    </div>
  </div>
</nav>


  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="list_of_cars.php">Cars</a></li>
 <?php  
    require_once('conn.php');
if(isset($_GET['ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'])){
	 $lcon=$_GET['ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff'];
	$Query="select * FROM cars where id=$lcon";
	$mq=mysqli_query($con,$Query);
	$row=mysqli_fetch_assoc($mq);
	$Querys="SELECT contact FROM admin where id=44342";
	$mqs=mysqli_query($con,$Querys);
	$rows=mysqli_fetch_assoc($mqs);
 echo"  <li><a href=\"#\">$row[car] $row[model]</a></li>
   
  </ul>";

if(isset($_POST['contsubtn'])){
	$id=$_POST['id'];
	$nam=$_POST['name'];
	$contact=$_POST['contact'];
	$qq="insert into customers values('','$nam','$contact','$id')";
	mysqli_query($con,$qq);
}
  
echo"<div class=\"w3-row\">
	<div class=\"w3-col m12 l8 s12 \">
		<div class=\"w3-content w3-display-container w3-section\" style=\"max-width:890px\">";
		$c=$row['car'];
		$m=$row['model'];
		$y=$row['year'];
		$p=$row['price'];
		$ck="imgs/$c$m$y$p";
		
			 if($row['front'] != $ck){ echo"<img class=\"mySlides\" src=\"$row[front]\" style=\"width:100%\">";}
			 if($row['side_1'] != $ck){ echo"<img class=\"mySlides\" src=\"$row[side_1]\" style=\"width:100%\">";}
			 if($row['side_2'] != $ck){ echo"<img class=\"mySlides\" src=\"$row[side_2]\" style=\"width:100%\">";}
			 if($row['rear'] != $ck){ echo"<img class=\"mySlides\" src=\"$row[rear]\" style=\"width:100%\">";}
			echo"<div class=\"w3-center w3-section w3-large w3-text-white w3-display-bottommiddle\" style=\"width:100%\">
				<div class=\"w3-left w3-padding-left w3-hover-text-khaki w3-xxlarge\" onclick=\"plusDivs(-1)\" >&#10094;</div>
				<div class=\"w3-right w3-padding-right w3-hover-text-khaki w3-xxlarge\" onclick=\"plusDivs(1)\">&#10095;</div>";
				if($row['front'] != $ck){ echo"<span class=\"w3-badge demo w3-border w3-transparent w3-hover-white\" onclick=\"currentDiv(1)\"></span>";}
				 if($row['side_1'] != $ck){ echo"<span class=\"w3-badge demo w3-border w3-transparent w3-hover-white\" onclick=\"currentDiv(2)\"></span>";}
				if($row['side_2'] != $ck){ echo"<span class=\"w3-badge demo w3-border w3-transparent w3-hover-white\" onclick=\"currentDiv(3)\"></span>";}
				if($row['rear'] != $ck){ echo"<span class=\"w3-badge demo w3-border w3-transparent w3-hover-white\" onclick=\"currentDiv(4)\"></span>";}
			echo"</div>
		</div>
	</div>
	<div class=\"w3-col m12 l4 s12 \">
	
		 <div class=\"w3-container\">
			
			  <div class=\"w3-card-4 w3-white w3-section\">
			    	<div class=\"w3-container\">
					  <h2><span style=\"text-transform: capitalize;\">$row[car] </span><span>$row[model]</span></h2>
					  <p><b>year : </b>$row[year] <a href=\"#details\">click for more details</a></p>
					</div>
					<hr />
					  <h4 class=\"w3-padding\" style=\"line-height:24px;\">If interested please contact us on</h4>
					  <h2  class=\"w3-padding\" style=\"line-height:24px;\">$rows[contact]</h2>
					  <h4  class=\"w3-padding\" style=\"line-height:24px;\">You can even give your contact number with your name so that we can contact you</h4>
					
					
					<form class=\"w3-container\" name=\"myForm\"  method=\"post\" action=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$lcon\" enctype=\"multipart/form-data\"onsubmit=\"return validateForm()\">
					  <input class=\"w3-input w3-section\" type=\"text\" name=\"name\" placeholder=\"enter your name\"><br />	  
					  <input class=\"w3-input\" type=\"text\" name=\"contact\" placeholder=\"enter your contact number\"><br />
					  <input class=\"w3-input\" type=\"hidden\" value=\"$row[id]\" name=\"id\" placeholder=\"enter your contact number\">
					  <button class=\"w3-btn-block w3-teal w3-padding-large w3-section\" type=\"submit\"name=\"contsubtn\">Submit</button>
					</form>
			  </div>
		</div>
	</div>
</div>";
 }
?>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
<div id="details" class="w3-row-padding w3-section">
	<div class="w3-col s12 l12">
  <table class="table table-bordered table-striped ">
    <thead>
      <tr class="w3-light-grey">
        <th colspan="2"><h2><?php echo"<span style=\"text-transform: capitalize;\">$row[car] </span><span>$row[model]</span>";?></h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Model</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[model]</span>";?></td>
      </tr>   
	  <tr>
        <td>Type</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[type]</span>";?></td>
      </tr>
      <tr>
        <td>Year</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[year]</span>";?></td>
      </tr>
	  <tr>
        <td>Kilometers</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[km]</span>";?></td>
      </tr>
      <tr>
        <td>Seaters</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[seat]</span>";?></td>
      </tr>
	  <tr>
        <td>Colour</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[colour]</span>";?></td>
      </tr>
	  <tr>
        <td>Price</td>
        <td><?php echo"<span style=\"text-transform: capitalize;\">$row[price]</span>";?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<footer class="container-fluid text-center">
  <a href="#myNavbar" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>
</html>

