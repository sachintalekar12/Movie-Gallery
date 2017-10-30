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
  
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
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
	
	.a1:hover{
	text-decoration:none;

	}
	
	.a1{
	text-decoration:none;
	font-family: 'Varela', sans-serif;
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
#delcncl {
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

#delcncl.show {
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
</head><?php
if(isset($_GET['delcon'])) {
$delcon="";
$delcon=$_GET['delcon'];

 if($delcon==1){
	
			echo '<BODY onLoad="delcon()">';
			$delcon=0;
  }
 }else{
echo"<body>";
 }
?>

<?php
include'admin_nav.php';
?>
  <br />
  
<div class="container-fluid text-center w3-section">
  <div class="row content">
    <div class="col-sm-4 col-md-3 sidenav" >
	  <form  name="myForm"  method="post" action="customers.php" enctype="multipart/form-data">
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
  $countquery="SELECT count(car) as con,car from cars,customers where cars.id=customers.id GROUP BY car order by con desc LIMIT 5";
  $countq=mysqli_query($con,$countquery);
  
		echo"<div class=\"list-group\">";
		while ($rowww=mysqli_fetch_array($countq)){
			echo"<form name=\"brand\"  method=\"post\" action=\"customers.php\" enctype=\"multipart/form-data\">
			<input type=\"hidden\" name=\"brandd\" value=\"$rowww[car]\">
			<li class=\"list-group-item \"><button type=\"submit\" name=\"bybrand\"class=\"a1 w3-button w3-block w3-padding-small w3-white\" style=\"width:100%;text-transform: capitalize;\">$rowww[car]<span class=\"w3-right badge\">$rowww[con]</span></button></li>
			</form>";
	}	
	echo"</div>
	</div>";
	

	//
	
	$sq="SELECT COUNT(*) as t FROM customers";
	$ss=mysqli_query($con,$sq);
	$d=mysqli_fetch_assoc($ss);
	$c=$d['t'];
	if($c > 0){
			if(isset($_POST['sortbtn'])){
		$sortp=$_POST['sortp'];
		$order = "SELECT * FROM cars,customers where cars.id=customers.id ORDER by price $sortp";
      $result = mysqli_query($con,$order);
	}elseif(isset($_POST['bybrand'])){
		$brnd=$_POST['brandd'];
		$order = "SELECT * FROM cars,customers where cars.id=customers.id and car='$brnd'";
      $result = mysqli_query($con,$order);
	}else{
	  $order = "SELECT * FROM cars,customers where cars.id=customers.id";
      $result = mysqli_query($con,$order);
	}
	 
	  
	echo "<div class='col-sm-8 col-md-9'>
<br />";$k=0;
	while($k<3){
echo"<div class='row' >";

			
			while ($row=mysqli_fetch_assoc($result)){
	  $id=$row['id'];
	echo"<div class='col-sm-12 col-md-4'>
		<div class='row'>
			<div class='col-md-12'>
					<div class='thumbnail'>
					   <div style='line-height:12px;'>
									<p>$row[c_name]  is Interested in this car<p>
									<p>contact : $row[contact]<p>
									</div >
						<img src=\"../$row[front]\" alt='car_image' class='img-responsive'>
						<div class='caption'>
						 <div class='line'>
									 
										<p ><b>Car  &nbsp  : </b>$row[car]</p>
										 <p><b>Model &nbsp: </b>$row[model]</p>
										 <p><b>Type  &nbsp : </b>$row[type]</p>
										 <p><b>Year  &nbsp : </b>$row[year]</p>
										 <p><b>seater &nbsp: </b>$row[seat]</p><p>
										    <b>colour &nbsp: </b>$row[colour]</p>
			                         <label><b>Price &nbsp: </b>$row[price]</label>";
									$iddd=$row['c_id']; 
										echo"<br />
										<div class='w3-btn-group'>
										
										<button class='w3-btn w3-right w3-red ' style='width:38.3%' onClick='delet($iddd)'>Delete</button>
										
									  </div>
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
	}}else{
		echo"<div class=\"w3-center w3-section\"  >
		<h3 class=\"w3-opacity\" style=\"margin-top:20%;font-weight:bold;\">No Customer's yet</h3>
	</div>";
	}
		?>
</div>	
</div>
		<script>
		function delet(iddd) {
			var x;var s=iddd;
			if (confirm("press ok to confirm your Deletion!") == true) {
				window.location.href="cust_del.php?id='"+s+"'";
				//alert("Car deleted successfully!");
			} else {
				var x;
			
				 x = document.getElementById("delcncl")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			}
			//document.getElementById("demo").innerHTML = x;
		}
		function delcon() {
			var x;
			
				 x = document.getElementById("snackbar")
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert("Car deleted successfully!");
			
		}
	</script>
<br />
<br />

<footer class="navbar-fixed-bottom text-center">
  <a href="#myNavbar" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div id="snackbar">Deleted successfully!..</div>
  <div id="delcncl">Cancelled!..</div>
</footer>


</body>
</html>

