<?php session_start(); ?>
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
    <?php
	if (($_SESSION['Category'] == "user")) {
	?>
<body>
<?php
$location1 = str_replace("_", " ", $_GET['source']);
$location2 = str_replace("_", " ", $_GET['destination']);
$radio = $_GET['serv'];
include("connection.inc");
$query = "SELECT * FROM `routes` WHERE `Source` LIKE '$location1' AND `Destination` LIKE '$location2'";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
$cost = mysql_result($result, $radio, "Price");
$service = mysql_result($result, $radio, "BusService");
$query_ = "SELECT * FROM `routes` WHERE `Source` LIKE '$location2' AND `Destination` LIKE '$location1' AND `BusService` = '$service'";
$result_ = mysql_query($query_);
if (mysql_num_rows($result_) > 0) {
$cost_ = mysql_result($result_, 0, "Price");
}
}
?>
    
    <div id="page" class="page">
        
    <header class="item header margin-top-0 header10" id="header10">
    
    		<div class="wrapper">
            
    	
    			<nav role="navigation" class="navbar fixed-nav navbar-white navbar-embossed navbar-lg navbar-fixed-top">
    					
    				<div class="container">
    				
    					<div id="navbar-collapse-02" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
    							<li class="active propClone"><a href="welcome_.php">Home</a></li>
                                                                <?php include("navbar-collapse.inc") ?>
    							<li class="propClone"><a href="logout.php">Log out</a></li>
    						</ul>
    					</div><!-- /.navbar-collapse -->
    					
    				</div><!-- /.container -->
    					
    			</nav>
    			
    			<div class="container padding-top-100">
    			
    				<div class="row row-centered">
    					
    					<div class="col-md-12 form-container"  style="background-image:url(images/water-bg.png)">
<a href="#" class="branded-logo"> <img src="images/brand/logo.png" alt="logo.Danfo-Tickets" width="200px" height="86px"></a>
<?php
if (isset($_POST['Selecte'])) {
$location1 = str_replace("_", " ", $_GET['source']);
$location2 = str_replace("_", " ", $_GET['destination']);
$traveldate = $_GET['traveldate'];
$returndate = $_GET['returndate'];
$serv = $_GET['serv'];
include("connection.inc");
$query = "SELECT * FROM `routes` WHERE `Source` LIKE '$location1' AND `Destination` LIKE '$location2'";
$result = mysql_query($query);
$cost = mysql_result($result, $serv, "Price");
$service = mysql_result($result, $serv, "BusService");
$genkey = substr(md5(microtime()), 0, 7);

$query1 = "SELECT * FROM `users` WHERE `FullName` = '$_SESSION[FullName]'";
$result1 = mysql_query($query1);

$fullname = $_SESSION['FullName'];
$emaila = mysql_result($result1, 0, "Email");
$phone = mysql_result($result1, 0, "Phone");
$query = "INSERT INTO `tickets` VALUES('$fullname', '$emaila', '$service', '$location1', '$location2', '$phone', '$genkey', '$cost', 'Yes', NOW(), str_to_date('$traveldate', '%c/%e/%Y'))";
$resutl = mysql_query($query);
if ($returndate != null) {
$query_ = "INSERT INTO `tickets` VALUES('$fullname', '$emaila', '$service', '$location2', '$location1', '$phone', '$genkey', '$cost', 'Yes', NOW(), str_to_date('$returndate', '%c/%e/%Y'))";
$resutl_ = mysql_query($query_);	
}
try {
// Assign a few headers
$headers = "From:tickets@danfoticket.com\r\n";
$headers .= "Reply-To:info@danfoticket.com\r\n";
$headers .= "Content-Type: text/html;\r\n charset=\"iso-8859-1\"\r\n";
// Create the message body.
$body = "<html>
<head>
<title>Jaysoftnigeria Registration</title>
</head>

<body>
<p>Dear ".$fullname.", </p>
<p>This is to confirm that your ticket purchase with danfoticket.com was successful.</p>
<p>Your ticket details are as follows:</p>
<p>Full Name:<strong>".$fullname."</strong></p>
<p>Phone Number:<strong>".$phone."</strong></p>
<p>Ticket Key:<strong>".$genkey."</strong></p>
<p>Travel Date:<strong>".$traveldate."</strong></p>";
if ($returndate != null) $body." <p>Your return ticket date is".$returndate."</p>";
$body = $body." <p>Please keep your ticket details confidential. Please print out this email and present at the terminal.</p>
<p>&nbsp;</p>
<p>The Danfoticket Team.</p>
</body>
</html>
";
mail("tickets@danfoticket.com", "Ticket Details", $body, $headers);
}
catch (Exception $e) {
echo "Registration problems!! Try later";
}
?>
<p><h3>Your ticket purchase was successful. You have been sent an email containing this ticket details. You can view your purchased tickets by clicking on View my Tickets</h3></p>
<?php
}
else {
$traveldate = $_GET['traveldate'];
$returndate = $_GET['returndate'];
if ($traveldate != null) {
?>
<h2 class="search-bus">Pricing</h2>
<form class="headerForm row-centered" method="post" action="purchase_registered.php?source=<?php echo $_GET['source']?>&destination=<?php echo $_GET['destination']?>&traveldate=<?php echo $_GET['traveldate']?>&returndate=<?php echo $_GET['returndate']?>&serv=<?php echo $radio?>">
<?php
if ($returndate == null) {
?>
<p align="center"><h3>The purchase of the ticket will cost <?php echo $cost ?> naira. Click the button below to continue</h3></p>
<?php
}
else {
?>
<p align="center"><h3>The purchase of the tickets will cost <?php echo $cost+$cost_ ?> naira. Click the button below to continue</h3></p>
<?php 
}
?>
</div>
<button type="submit" name="Selecte" class="btn btn-primary"><span></span> Continue to payment</button>
</form>
<?php
}
else {
?>
<p align="center"><h3>You will have to select a travel date to continue.</h3></p>
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


</body>
<?php
}
else {
?>
<body><p>You have no permission to view this page. Click <a href="index.html">here</a> to return.</p></body>
<?php } ?>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>