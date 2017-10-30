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
     h2 {
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
  }
	  .navbar li a, .navbar .navbar-brand {
      color:  white   !important;
	  font-weight:bold;
	  
  }
	  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #21618C  !important;
      background-color: #fff !important;
  }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 400px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	
	.thumbnail:hover{
	transition:1s;
	border:1px solid gray;
	}
	
	.thumbnail:hover{
	box-shadow:10px 6px 10px;
	}
	
	.line{
		line-height:12px;
		text-align:left;
		word-spacing:10px;
	}
  </style>
  
  
</head>
<body onLoad="mydis()">

<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#555;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:#555;border:none;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="font-size:16px;">SKY MOTORS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li><a href="index.php#services"><span class="glyphicon glyphicon-list-alt"></span> SERVICES</a></li>
        <li><a href="index.php#contact"><span class="glyphicon glyphicon-phone"></span> CONTACT</a></li>
        <li><a href="#"><i class="fa fa-car"></i> CARS</a></li>
      </ul>
    </div>
  </div>
</nav>
  <br />
  
<div class="container-fluid text-center w3-section">
  <div class="row content">
    <div class="col-sm-4 col-md-3 sidenav" >
	  <form  name="myForm"  method="post" action="list_of_cars.php" enctype="multipart/form-data">
     <div class="form-group">
      <label for="sel1"></label>
      <select name="sortp" class="form-control" id="sel1" required>
        <option value="" disabled selected>[select to sort by price]</option>
        <option value="asc">low-high</option>
        <option value="desc">high-low</option>
      </select>
	  
	  <button type="submit" name="sortbtn" class="btn btn-default"><i class="glyphicon glyphicon-filter"> </i> Click to Sort</button>
    </div>
  </form>
  <script>
  var s='<?php echo $_POST['sortp']; ?>';
   var sel = document.getElementById('sel1');
	sel.onLoad= document.getElementById('sel1').value =s;
  </script>
  
		 <?php
 require_once('conn.php');
  $countquery="SELECT count(car) as con,car from cars GROUP BY car order by con desc LIMIT 5";
  $countq=mysqli_query($con,$countquery);
  
		echo"<div class=\"list-group\">";
		while ($rowww=mysqli_fetch_array($countq)){
			echo"<form name=\"brand\"  method=\"post\" action=\"list_of_cars.php\" enctype=\"multipart/form-data\">
			<input type=\"hidden\" name=\"brandd\" value=\"$rowww[car]\">
			<li class=\"list-group-item \"><button type=\"submit\" name=\"bybrand\"class=\"a1 w3-button w3-block w3-padding-small w3-white\" style=\"width:100%;text-transform: capitalize;\">$rowww[car]<span class=\"w3-right badge\">$rowww[con]</span></button></li>
			</form>";
	}	
	echo"</div>
	</div>";
	

	//
	if(isset($_POST['sortbtn'])){
		$sortp=$_POST['sortp'];
		$order = "SELECT * FROM cars ORDER by price $sortp";
      $result = mysqli_query($con,$order);
	}elseif(isset($_POST['bybrand'])){
		$brnd=$_POST['brandd'];
		$order = "SELECT * FROM cars where car='$brnd'";
      $result = mysqli_query($con,$order);
	}else{
	 //
	 
	  $order = "SELECT * FROM cars";
      $result = mysqli_query($con,$order);
	}
	echo"<div class='col-sm-8 col-md-9'>
<br />";$k=0;
	while($k<3){
echo"<div class='row' >";

			while ($row=mysqli_fetch_array($result)){
                      
                      
			//while ($row=mysqli_fetch_array($r)){
	  
	echo"
        <div class='col-sm-12 col-md-4'>
		    <div class='row'>
			    <div class='col-md-12'>";
				$iddd=$row['id'];  
				echo"  <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$iddd\" class=\"a1\">
					<div class='thumbnail'>
 						<img src=\"$row[front]\" alt='car_image' class='img-responsive'>
						<div class='caption'>
						 <div class='line'><br>
							<p style=\"width:100%;text-transform: capitalize;\"><b>Car       &nbsp;   : </b>$row[car]</p>
							<p style=\"width:100%;text-transform: capitalize;\"><b>Model  &nbsp;: </b>$row[model]</p>
							<p><b>Year  &nbsp : </b>$row[year]</p>
			                <label><b>Price &nbsp: </b>$row[price]</label>
							<br/>
						 </div>
						</div>
					</div>
				  </a> 	
				</div>
			</div>
     	</div>";
            
				}
						  
	  echo"  </div>";
$k++;
}
 
		?>
</div>	
</div>

<div class="w3-container w3-center w3-section" >
  <ul class="w3-pagination w3-border w3-round w3-light-grey">
    <li ><a href="#" class="w3-hover-green" id="mybt">1</a></li>
    <li><a href="#" class="w3-hover-red">2</a></li>
    <li><a href="#" class="w3-hover-blue">3</a></li>    
	<li><a href="#" class="w3-hover-blue">4</a></li>
  </ul>
</div>


	<script>
				function mydis() {
					document.getElementById("mybt").disabled = true;
					//document.getElementById("inpt").disabled = true;
				}
				
				function myFunction2() {
					document.getElementById("mybtn").disabled = false;	
					document.getElementById("inpt").disabled = false;
				}
		</script>

<br />
<br />
<footer class="navbar-fixed-bottom text-center">
  <a href="#myNavbar" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>
</html>

