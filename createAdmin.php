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
    					
    				<div class="col-md-12 form-container"  style="background-image:url(images/water-bg.png)">
                    <h2 class="search-bus">Create New Administrator</h2>
               	 	</div>
<form class="headerForm row-centered" method="post" action="">
	      <?php 
	 if (isset($_POST['createadmin'])) {
	$fullname = $_POST['fullname'];
$email = $_POST['emaiil'];
$phone = $_POST['phone'];
$passwordd = $_POST['paasword'];
$state = $_POST['state'];
include("connection.inc");
$qwery = "INSERT INTO `users` VALUES('$email', '$passwordd', 'Administrator', '$fullname', '$state', '$phone')";
$resolt = mysql_query($qwery);
	?>
    <p>Your administrator account has been created for <?php echo $_POST['fullname'] ?>
    <?php
	 }
	 else {
	 ?>
<label for="textfield"></label>
                            <input type="text" class="form-control mid-width input-lg text-box" placeholder="Enter full name" name="fullname" id="textfield"">
<label for="textfield2"></label>
                            <input type="text" class="form-control mid-width input-lg text-box" placeholder="Enter email" name="emaiil" id="textfield2">
                          <label for="textfield3"></label>
                            <input type="text" class="form-control mid-width input-lg text-box" placeholder="Enter phone number" name="phone" id="textfield3">
                            <label for="textfield4"></label>
                            <input type="text" class="form-control mid-width input-lg text-box" placeholder="Enter preferred password" name="paasword" id="textfield4">
                            State of Origin <select autocomplete="off" name="state" id="source"form-control mid-width input-lg text-box" placeholder="Enter state" tabindex="1" value="Goa" onfocus="if(this.value=='Enter a city or local area')this.value='';" onblur="if(this.value=='')this.value='Enter a city or local area';" type="text">
					<option value="Abia">Abia</option>
					<option value="Adamawa">Adamawa</option>
					<option value="AkwaIbom">Akwa Ibom </option>
					<option value="Anambra">Anambra </option>
					<option value="Bauchi">Bauchi </option>
					<option value="Bayelsa">Bayelsa </option>
					<option value="Benue">Benue </option>
					<option value="Borno">Borno </option>
					<option value="CrossRiver">Cross River</option>
					<option value="Delta">Delta </option>
					<option value="Ebonyi">Ebonyi </option>
					<option value="Edo">Edo</option>
					<option value="Ekiti">Ekiti  </option>
					<option value="Enugu">Enugu </option>
					<option value="Gombe">Gombe </option>
					<option value="Imo">Imo </option>
					<option value="Jigawa">Jigawa </option>
					<option value="Kaduna">Kaduna </option>
					<option value="Kano">Kano </option>
					<option value="Katsina">Katsina </option>
					<option value="Kebbi">Kebbi </option>
					<option value="Kogi">Kogi </option>
					<option value="Kwara">Kwara </option>
					<option value="Lagos">Lagos </option>
					<option value="Nasarawa">Nassarawa </option>
					<option value="Niger">Niger </option>
					<option value="Ogun">Ogun </option>
					<option value="Ondo">Ondo </option>
					<option value="Osun">Osun </option>
					<option value="Oyo">Oyo </option>
					<option value="Plateau">Plateau </option>
					<option value="Rivers">Rivers </option>
					<option value="Sokoto">Sokoto </option>
					<option value="Taraba">Taraba </option>
					<option value="Yobe">Yobe </option>
					<option value="Zamfara">Zamfara </option>
				</select>    
    <p>
      <button type="submit" name="createadmin" class="btn btn-primary"><span></span>Create Account</button>
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
