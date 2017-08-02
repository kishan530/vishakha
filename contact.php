<!DOCTYPE html>
<html>
<head>
<title>Shri Visakha Industries | Contact Us</title>
<?php include('comman.php'); ?>
</head>

<body>
<div class="page-wrapper">
 	
    <?php include('header.php'); ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
        <div class="auto-container">
            <h1>Contact</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
					<!--
                        <ul class="social-nav clearfix">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-flickr"></span></a></li>
                        </ul>
						-->
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>
    
    <!--contact-info-->
    <section class="contact-info-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-home-1"></span>
                        </div>
                        
                    	<h3>Visit Us</h3>
						
                                    	<div class="text"> <strong>Unit - I :</strong>  324, Puliyakulam Road , Coimbatore  – 641 045 </div>
										
										<div class="text"> <strong>Unit - II :</strong> 17/2,17/3 &17/5, Om Sakthi Industrial Estate, Sedarapet  – 605 111</div>
 
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-mail-3"></span>
                        </div>
                        
                    	<h3>Mail Us</h3>
                    	<div class="text">visakaindustries@gmail.com <br> Shrivisakha2@gmail.com </div>
                    </div>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                    	<!--icon-box-->
                    	<div class="icon-box">
                        	<span class="flaticon-technology"></span>
                        </div>
                        
                    	<h3>Call Us</h3>
                    	<div class="text">+ 91-98438 07744 <br> + 91-98438 07733</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--contact-section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<div class="sec-title-eight padd-bott-10">
                <h2>Keep in Touch with us</h2>
            </div>
            	
            <!-- Contact Form -->
            <div class="default-form contact-form">
                
                <form method="post" action="sendemail.php" id="contact-form">
					<div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="username" value="" placeholder="Name *">
                        </div>
    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *">
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject *">
							
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" value="" placeholder="Message *"></textarea>
							
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12"><button type="submit" class="theme-btn btn-style-three">Send Message</button></div>
					</div>
                </form>
 
            </div>
            <!--End Contact Form -->
                
        </div>
    </section>
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-outer">

            <!--Map Canvas-->
              <div class="map-canvas"
                data-zoom="10"
                data-lat="11.007316"
                data-lng="76.9889475"
                data-type="roadmap"
                data-hue="#fc721e"
                data-title="Shri Visakha industries"
                data-content="324, Puliyakulam Road , Coimbatore  – 641 045<br><a href='mailto:visakaindustries@gmail.com'>visakaindustries@gmail.com</a>"
                style="height:480px;">
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>
    
  
    
</div>
<!--End pagewrapper-->


<?php include('comman-js.php'); ?>


<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBldDn-EPh0UB-OzvStMojWKzU0RLNjFYE"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>

