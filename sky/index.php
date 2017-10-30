<?php include'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KD Designers</title>
  <meta charset="utf-8">
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

  
<div class="text-center">
  <div class="row content">
   <!-- <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>-->
    <div class="col-sm-12 col-lg-12 col-md-12 text-left">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="liberty-walk-ferrari-458-flares.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="LBW-458-Challenge-01-680x453.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="Larry_Chen_Speedhunters_Liberty_walk_Ferrari_458-1-1200x800.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="ff59b45d6bb2a5a2bafe11e6819c5c05.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </div>
   <!-- <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>-->
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="background-color:#D0D3D4 ;">
  <div class="row">
    <div class="col-sm-12">
      <h2>About Company</h2>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
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

