<?php include'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skymotors</title>
   <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="boot_offline/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  
 
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/stylee.css">
   <!--w3.css-->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <!--font awsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
	p,h3,h4,h5,h6,h1{
	font-weight:bold;
	font-family: 'Dosis', sans-serif;
	}

.pcon{
	color:black;
	text-align:center;
	font-size:20px;
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
  </style>
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     /* margin: auto;*/
  }
  </style>
  
  <style>
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #909497  ;
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
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #D0D3D4  ;
  }
  .logo-small {
      color: #21618C  ;
      font-size: 50px;
  }
  .logo {
      color: #21618C  ;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #D0D3D4;
  }
  .carousel-indicators li {
      border-color: #D0D3D4;
  }
  .carousel-indicators li.active {
      background-color: #D0D3D4;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
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
  .navbar li a, .navbar .navbar-brand {
      color:  white   !important;
	  font-weight:bold;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #21618C  !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 10px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
  
   <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/stylee.css">
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
      #save-widget {
        width: 300px;
        box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
        background-color: white;
        padding: 10px;
        font-family: Roboto, Arial;
        font-size: 13px;
        margin: 15px;
      }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:#555;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage" style="font-size:16px;">SKY MOTORS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"><span class="glyphicon glyphicon-book"></span> ABOUT</a></li>
        <li><a href="#services"><span class="glyphicon glyphicon-list-alt"></span> SERVICES</a></li>
        <li><a href="#contact"><span class="glyphicon glyphicon-phone"></span> CONTACT</a></li>
        <li><a href="list_of_cars.html"><i class="fa fa-car"></i> CARS</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  
 
<?php
$qqt="SELECT * FROM cars WHERE price=(SELECT max(price) FROM cars)limit 1";
$rwq=mysqli_query($con,$qqt);
$rw=mysqli_fetch_assoc($rwq);
$ik=$rw['id'];
if($ik !=null){
$qt="SELECT * FROM cars WHERE price=(SELECT max(price) FROM cars WHERE id != $ik) LIMIT 1";
$res1=mysqli_query($con,$qt);
$fres1=mysqli_fetch_assoc($res1);
$ikk=$fres1['id'];

if($ikk !=null){
$qtt="select * from (select * from cars where id !=$ikk and id !=$ik)as c WHERE price=(SELECT max(price) from (select * from cars where id !=$ikk and id !=$ik)as b) LIMIT 1";
$res2=mysqli_query($con,$qtt);
$fres2=mysqli_fetch_assoc($res2);
$isk=$fres2['id'];

if($isk !=null){
$qta="select * from (select * from cars where id !=$ikk and id !=$ik and id !=$isk)as c WHERE price=(SELECT max(price) from (select * from cars where id !=$ikk and id !=$ik and id !=$isk)as b) LIMIT 1";
$res3=mysqli_query($con,$qta);
$fres3=mysqli_fetch_assoc($res3);
$isk3=$fres3['id'];

if($isk3 !=null){
$qtb="select * from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3)as c WHERE price=(SELECT max(price) from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3)as b) LIMIT 1";
$res4=mysqli_query($con,$qtb);
$fres4=mysqli_fetch_assoc($res4);
$isk4=$fres4['id'];

if($isk4 != null){
$qtc="select * from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3 and id !=$isk4)as c WHERE price=(SELECT max(price) from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3 and id !=$isk4)as b) LIMIT 1";
$res5=mysqli_query($con,$qtc);
$fres5=mysqli_fetch_assoc($res5);
$isk5=$fres5['id'];

if($isk5 != null){
$qte="select * from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3 and id !=$isk4 and id !=$isk5)as c WHERE price=(SELECT max(price) from (select * from cars where id !=$ikk and id !=$ik and id !=$isk and id !=$isk3 and id !=$isk4 and id !=$isk5)as b) LIMIT 1";
$res6=mysqli_query($con,$qte);
$fres6=mysqli_fetch_assoc($res6);
$isk6=$fres6['id'];
}
}
}
}
}
}
 echo" <div class=\"slender\">
		<ul>";
			if($ik != null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$rw[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$ik\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$rw[price]</span>
                    <span class=\"name_product\">$rw[car]</span>    
                    <p>$rw[model]</p>                                            
                    
                      <div class=\"options-product\">
                    <strong><span>Type :$rw[type]</span></strong>
                    
                    <strong><span>Year :$rw[year]</span></strong>
					
                </div>                    
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";
			if($ikk !=null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes1\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres1[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$ikk\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres1[price]</span>
                    <span class=\"name_product\">$fres1[car]</span>    
                    <p>$fres1[model]</p>                                            
                    
                     <div class=\"options-product\">
                    <strong><span>Type :$fres1[type]</span></strong>
                    
                    <strong><span>Year :$fres1[year]</span></strong>
					
                </div>                    
                </div>                         
            </div>
        </div>
           
    </div>	
</div>	
			</li>";
			if($isk != null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes2\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres2[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$isk\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres2[price]</span>
                    <span class=\"name_product\">$fres2[car]</span>    
                    <p>$fres2[model]</p>                                            
                    
                     <div class=\"options-product\">
                    <strong><span>Type :$fres2[type]</span></strong>
                    
                    <strong><span>Year :$fres2[year]</span></strong>
					
                </div>               
                </div>                         
            </div>
        </div>
           
    </div>	
</div>	
			</li>";
			if($isk3 != null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes3\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres3[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$isk3\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres3[price]</span>
                    <span class=\"name_product\">$fres3[car]</span>    
                    <p>$fres3[model]</p>                                            
                    
                   <div class=\"options-product\">
                    <strong><span>Type :$fres3[type]</span></strong>
                    
                    <strong><span>Year :$fres3[year]</span></strong>
					
                </div>                   
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";
			if($isk4 != null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes4\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres4[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$isk4\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres4[price]</span>
                    <span class=\"name_product\">$fres4[car]</span>    
                    <p>$fres4[model]</p>                                            
                    
                    <div class=\"options-product\">
                    <strong><span>Type :$fres4[type]</span></strong>
                    
                    <strong><span>Year :$fres4[year]</span></strong>
					
                </div>                       
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";
			if($isk5 !=null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes5\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres5[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$isk5\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres5[price]</span>
                    <span class=\"name_product\">$fres5[car]</span>    
                    <p>$fres5[model]</p>                                            
                    
                     <div class=\"options-product\">
                    <strong><span>Type :$fres5[type]</span></strong>
                    
                    <strong><span>Year :$fres5[year]</span></strong>
					
                </div>                
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";
			if($isk6 != null){
			echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes6\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"$fres6[front]\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"car_view.php?ed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttffed%it%itfgfghfhgffgfhgggfghgdfstycgccyttff=$isk6\"><div id=\"details_view\">View details</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\">$fres6[price]</span>
                    <span class=\"name_product\">$fres6[car]</span>    
                    <p>$fres6[model]</p>                                            
                    
                     <div class=\"options-product\">
                    <strong><span>Type :$fres6[type]</span></strong>
                    
                    <strong><span>Year :$fres6[year]</span></strong>
					
                </div>                
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";}
			}
		  }
	   }
    }
  }
}else{
	echo"<li>
			<div id=\"make-3D-space\">
    <div id=\"product-cardes6\">
        <div id=\"front-product\">
        	<div class=\"shadedw\"></div>
            <img style=\"height:200px;\"src=\"\" alt=\"\" />
            <div class=\"overlay_image\"></div>
            <a href=\"\"><div id=\"details_view\">No Cars</div></a>
            <div class=\"status\">        	
                <div class=\"status-container\">
                    <span class=\"price_product\"></span>
                    <span class=\"name_product\">Out of Stock</span>    
                    <p>Coming Soon!..</p>                                            
                    
                     <div class=\"options-product\">
                    <strong><span>Visit Again</span></strong>
                    
                    <strong><span>Thank You</span></strong>
					
                </div>                
                </div>                         
            </div>
        </div>
           
    </div>	
</div>
			</li>";
}
			?>
			 
		</ul>
	</div>
	<div class="slenderControl"></div>
	<div class="times">
		<div class="percentags">
			<div class="percentags0"></div>
			<div class="percentags1"></div>
			<div class="percentags2"></div>
			<div class="percentags3"></div>
			<div class="percentags4"></div>
		</div>
  </div>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
    <script src="js/animate.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/slid.js"></script>
</div>

	<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="background-color:#D0D3D4 ;">
  <div class="row">
    <div class="col-sm-12">
     <h2>About Company</h2>
      <h4>Sky Motors is a used car selling company started by Mr.Fakrudin Sab Nadaf 15 years back.</h4>
     </div>
</div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
 <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <ul class="ul">
            <li class="li"><h4 class="h">Insurance(Central Insurance HDFC).</h4></li> 
            <li class="li"><h4 class="h"> Loan's & Finance(Kotak Mahindra, Tata Capital, Shriram Finance).</h4></li>
            </ul>
            </div>   
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <ul class="ul">
            <li class="li"><h4 class="h">Used car exchange.</h4></li> 
            <li class="li"><h4 class="h">Car servicing and Car polishing(Interior, Exterior).</h4></li> 
            </ul>
            </div>    
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <ul class="ul">
            <li class="li"><h4 class="h">Helps in R.T.O  vehicle ownership transfer.</h4></li> 
            </ul>
            </div>
        </div>
  <br><br>
</div>
	
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-12">
	
   	<?php
require_once('conn.php');
	  $order = "SELECT email,address,contact FROM admin where id=44342";
      $result = mysqli_query($con,$order);
	  $row=mysqli_fetch_assoc($result);
 
    echo"  <p class=\"pcon\">Contact us and we'll get back to you within 24 hours.
      <br><span class=\"glyphicon glyphicon-map-marker\"stylw=\"text-transform: capitalize;\"></span> $row[address]
      <span class=\"glyphicon glyphicon-phone\"></span> $row[contact] 
      <span class=\"glyphicon glyphicon-envelope\"></span> $row[email]  </p>
    </div>";?>
    <!--<div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default btn-lg  pull-right" style="background-color:#21618C;color:white;"type="submit">Send</button>
        </div>
      </div>
    </div>-->
  </div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div id="map" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<div id="save-widget">
      <strong><b>Sky Motors</b></strong>
      <p>Shop No.4, Zarina Towers, St. Inez,Near Ganesh Temple, Electricity Colony, Altinho, Panjim, Goa 403001, India.</p>
	  <b>Contact: +91 97653 71851</b>
    </div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
		  scrollwheel:false,
          center: {lat: 15.487503, lng: 73.820948},
          mapTypeControlOptions: {
            mapTypeIds: [
              'roadmap',
              'satellite'
            ],
            position: google.maps.ControlPosition.BOTTOM_LEFT
          }
        });
        var widgetDiv = document.getElementById('save-widget');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);
       
        var saveWidget = new google.maps.SaveWidget(widgetDiv, {
          place: {
            placeId: 'ChIJtTxheZPAvzsRCuxXuMSeCts',
            location: {lat: 15.487503, lng: 73.820948}
          },
          attribution: {
            source:'google, view on google map',
            webUrl: 'https://www.google.com/maps?cid=15783602411816872970'
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position: saveWidget.getPlace().location
        });
      }
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?v=3.27&key=AIzaSyAq550s0-7EZe7r3LlFenAqYpmjXoq55BY&signed_in=true&callback=initMap">
    </script>
<footer class="container-fluid text-center">
	<a href="#myNavbar" title="To Top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	  <h5>Find Us On</h5>

  <div class="w3-xxlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
    <i class="fa fa-instagram w3-hover-text-purple"></i>
    <i class="fa fa-linkedin w3-hover-text-indigo"></i>
  </div>
  <p>Designed & Developed By :<a href="#" target="_blank" class="w3-hover-text-green"> Sachin</a> & <a href="#" target="_blank" class="w3-hover-text-green"> KD</a></p>

</footer>
<div>
<div>




<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
