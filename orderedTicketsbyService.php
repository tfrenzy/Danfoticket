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
	if (($_SESSION['Category'] == "Administrator")) {
	?>
<body>

    
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

<?php
include("connection.inc");
if (isset($_POST['tickets'])) {
$service = $_POST['service'];
$service = str_replace("_", " ", $service);
$query = "SELECT * FROM `tickets` WHERE `Service` = '$service' ORDER BY `Time`";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
?>
<h2 class="search-bus">Transport Services</h2>
<table align="center">
<tr><td><strong>FullName</strong></td><td><strong>Service</strong></td><td><strong>Take Off</strong></td><td><strong>Destination</strong></td><td><strong>Travel Date</strong></td><tr>
<?php
for ($i = 0; $i < mysql_num_rows($result); $i++) {
$service = mysql_result($result, $i, "FullName");
$genkey = mysql_result($result, $i, "Service");
$source = mysql_result($result, $i, "Source");
$destination = mysql_result($result, $i, "Destination");
$traveldate = mysql_result($result, $i, "TravelDate");
?>
<tr><td bgcolor="#D6D6D6"><?php echo $service; ?></td><td bgcolor="#00FFFF"><?php echo $genkey; ?></td><td bgcolor="#D6D6D6"><?php echo $source; ?></td><td bgcolor="#FF9933"><?php echo $destination; ?></td></td><td bgcolor="#00FFFF"><?php echo $traveldate; ?></td></tr>
<?php
}
?>
</table>	
<?php
}
else {
echo "<h3>No data associated with this service yet</h3>";	
}
	}
	else {
?>
<form class="headerForm row-centered" method="post" action="">
<h3>Select Bus Service</h3>
<select name="service">
<?php
$qwery = "SELECT * FROM `routes`";
$rslt = mysql_query($qwery);
for ($i = 0; $i < mysql_numrows($rslt); $i++) {
$servic = mysql_result($rslt, $i, "BusService");
$servic = str_replace(" ", "_", $servic);
$serv[$i] = $servic;
}
//Get rid of elements
for ($k = 0; $k < count($serv); $k++) {
$count = 0;
for ($j = 0; $j < count($serv); $j++) {
if (($serv[$k] == $serv[$j])&&($count >= 1)) {
$serv[$j] = "";$count++;
}
else if (($serv[$k] == $serv[$j])&&($count == 0)) {
$count++;
}
}

}
for ($l = 0; $l < count($serv); $l++) {
if ($serv[$l] != "") {
?>
<option value=<?php echo $serv[$l] ?> ><?php echo $serv[$l] ?></option>
<?php }} ?>
</select>
<button type="submit" name="tickets" class="btn btn-primary"><span></span>Proceed</button>
</form>   

<?php } ?>
                    </div><!-- .col-md-12 -->
    				
    					
    				
    				</div><!-- /.row -->
    			
    			</div><!-- /.container -->
    	
    		</div><!-- /.wrapper -->
    	
    	</header><!-- /.item -->
    	<div class="container" id="slideshow1"></div><!-- /.container --><div class="footerWrapper" id="footer2">
    
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
