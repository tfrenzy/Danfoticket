<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="Script Eden ( http://scripteden.net/ ) Template Builder v2.0.0">  
        <!--pageMeta-->

        <!-- Loading Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        

        <!-- Loading Flat UI -->
        <link href="css/flat-ui.css" rel="stylesheet">

        <link href="css/style.complete.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <!--headerIncludes-->
     
    
    </head>
<body>
    
    <div id="page" class="page">
        
    <header class="item header margin-top-0 header10" id="header10">
    
    		<div class="wrapper">
            
    	
    			<nav role="navigation" class="navbar fixed-nav navbar-white navbar-embossed navbar-lg navbar-fixed-top">
    					
    				<div class="container">
    				
    					<div class="navbar-header">
    					<p class="header-text"> Hello there, <a class="sign-up" href="login.php">Log in/Signup</a> to transit easy</p>
   						</div>	
                        <div id="navbar-collapse-02" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
    							<li class="active propClone"><a href="index.html">Home</a></li>
    							<li class="propClone"><a href="#">Customer Care +2348177568906</a></li>
    						</ul></div>	
     				</div><!-- /.container -->
    					
    			</nav>
    			
    			<div class="container padding-top-100">
    			
    				<div class="row row-centered">
    					
    					<div class="col-md-12 form-container" style="background:url(images/water-bg.png)">
<a href="#" class="branded-logo"> <img src="images/brand/logo.png" alt="logo.Danfo-Tickets" width="200px" height="86px"></a>	
<?php
if (isset($_POST['search'])) {
$location1 = $_POST['location-1'];
$location2 = $_POST['location-2'];
$traveldate = $_POST['datepicker'];
$returndate = $_POST['datepicker1'];
$traveldat = explode("/", $traveldate);
$returndat = explode("/", $returndate);
$currdate = mktime(0, 0, 0, date("d"), date("n"), date("Y"));
$travelday = mktime(0, 0, 0, (int)$traveldat[1], (int)$traveldat[0], (int)$traveldat[2]);
$returnday = mktime(0, 0, 0, (int)$returndat[1], (int)$returndat[0], (int)$returndat[2]);
if (($location1 != "")&&($location2 != "")) {
if (($traveldate != null)&&($travelday > $currdate)&&($returnday > $travelday)) {
if (true) {
include("connection.inc");
$query = "SELECT * FROM `routes` WHERE `Source` LIKE '$location1' AND `Destination` LIKE '$location2'";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
?>
<h2 class="search-bus">Available bus tickets</h2>
                    <table align="center">
<tr><td><strong>Bus Service</strong></td><td><strong>Cost</strong></td></tr>
                     <?php
					for ($i = 0; $i < mysql_num_rows($result); $i++) {
$service = mysql_result($result, $i, "BusService");
$price = mysql_result($result, $i, "Price");
?>
<tr><td bgcolor="#D6D6D6"><?php echo $service; ?></td><td bgcolor="#CC99FF"><?php echo $price; ?></td><td bgcolor="#FFCCFF"><a href="purchase.php?source=<?php echo str_replace(" ", "_", $location1)?>&destination=<?php echo str_replace(" ", "_", $location2)?>&traveldate=<?php echo $traveldate?>&returndate=<?php echo $returndate?>&serv=<?php echo $i?>">Buy from this</a></td></tr>
<?php
}
?>
</table>	
					</div>
	                
                   <?php
						}
						else {
						?>
<form class="headerForm row-centered" method="post" action="charter.php?source=<?php echo str_replace(" ", "_", $location1)?>&destination=<?php echo str_replace(" ", "_", $location2)?>&destination=<?php echo str_replace(" ", "_", $location2)?>&traveldate=<?php echo $traveldate?>&returndate=<?php echo $returndate?>">
<p align="center"><h3>Sorry!! We have no available services along the route you've chosen. Would you like a private service?</h3></p>
<button type="submit" name="Yes" class="btn btn-primary"><span></span>Yes</button>
</form>
<?php	
}
}
}
else {
if ($traveldate != null) {
?>
<p align="center"><h3>You have problems with your dates, making them unusable by our servers. Please choose suitable dates.</h3></p>
<?php
}
else {
?>
<p align="center"><h3>You have to choose at least a travel date.</h3></p>
<?php	
}
}
}
else {
?>
<p align="center"><h3>Please enter travel take off and destinations!!</h3></p>
<?php
}
}
?>				
    				
                    	</div><!-- .col-md-12 -->
    				
    					
    				
    				</div><!-- /.row -->
    			
    			</div><!-- /.container -->
    	
    		</div><!-- /.wrapper -->
    	
    	</header><!-- /.item -->
        <div class="container" id="slideshow1">
    
    	   <div class="col-md-12">
				
		  <h1>Our Partners</h1>
    
          <div class="slider4">
          <div class="slide"><img src="images/partner-logos/axa-mansard.png"></div>
          <div class="slide"><img src="images/partner-logos/Mansard_insurance_logo.png"></div>
          
          </div>
          </div><!-- /.col -->
    	
    	</div><!-- /.container --><div class="footerWrapper" id="footer2">
    
    	<div class="item footer bottom-menu">
    	    	
    		<div class="container">
   				<div class="row">
 					<div class="col-md-2 navbar-brand">
   						<a class="" href="#fakelink"><img src="images/danfo-logo.png" class="small"></a>
    				</div>
    		
   					<div class="col-md-8">
    					<ul class="bottom-links">
   							<li><a href="#fakelink">About Us</a></li>
    		              	<li class="active"><a href="#fakelink">Jobs</a></li>
    		              	<li><a href="#fakelink">Privacy</a></li>
    		              	<li><a href="#fakelink">Terms</a></li>
    		              	<li><a href="#fakelink">Follow Us</a></li>
    		              	<li><a href="#fakelink">Support</a></li>
    		            </ul>
    				</div>
    		
    				<div class="col-md-2">
    					<ul class="bottom-icons">
    		              	<li><a class="fa fa-pinterest" href="#fakelink"></a></li>
    		              	<li><a class="fa fa-facebook" href="#fakelink"></a></li>
    		              	<li><a class="fa fa-twitter" href="#fakelink"></a></li>
    		            </ul>
    				</div>
   				</div>
   			</div>
    		    	
    	</div><!-- /.item -->
    	
    	</div><!-- /.footerWrapper --></div><!-- /#page -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/application.js"></script>
	<script src="js/over.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="assets/owl-carousel/owl.carousel.js"></script> 
    <script>
    $(document).ready(function(){
    $('.slider4').bxSlider({
    slideWidth: 300,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10
      });
    });
    </script>

    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
   <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>


</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>