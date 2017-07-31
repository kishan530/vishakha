 <?php 
 
 $directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$count=count($components);
$current = $components[$count-1];
//echo var_dump ($current);
//exit();
 
 ?>
 
 <!-- Preloader -->
    <div class="preloader"><div class="loader"><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div></div></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!--Top Left-->
            	<div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><span class="fa fa-check-square-o"></span> No.1 Supplier</li>
                        <li><span class="fa  fa-support"></span> Certified ISO/TS 16949:2009</li>
                        <li><span class="fa fa-bell-o"></span> Leading Service Provider</li>
                    </ul>
                </div>
                
                <!--Top Right-->
            	<div class="top-right pull-right">
                	<ul class="links-nav clearfix">
                    	<li><span class="fa fa-star-o"></span> Award Wining Firm</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="index.php"><h2> <img src="images/logo-3.jpg"> Shri Visakha industries</h2></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-location-pin"></span></div>
                            <ul>
                            	<li><strong>Mon - Sat : 09:00 AM - 06:00 PM</strong></li>
                                <li>Sunday : Closed</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-technology"></span></div>
                            <ul>
                            	<li><strong>+ 91-98438 07744  / + 91-98438 07733</strong></li>
                                <li>visakaindustries@gmail.com</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                      <!--  <div class="upper-column info-box">
                        	<!--<div class="link-btn">
                            	<a href="#" class="theme-btn btn-style-one">get a quote</a>
                            </div>
                            
                            <div class="icon-box"><span class="flaticon-inbox"></span></div>
                            <ul>
                            	<li><strong>Downloads</strong></li>
                                <li>PDF Brochures</li>
                            </ul>
                            
                        </div> -->
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header-Lower-->
        <div class="header-lower">
            
        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li  class="<?php if ($current=="index.php") {echo "current"; }?>"><a href="index.php">Home</a></li>
                                <li class="<?php if ($current=='about-us.php') {echo 'current'; } ?>"><a href="about-us.php">About</a></li>
								<li class="<?php if ($current=='products.php') {echo 'current'; } ?>"><a href="products.php">Products</a></li>
                                <li class="<?php if ($current=='services.php') {echo 'current'; } ?>"><a href="services.php">Services</a></li>                                                               
                                <li class="<?php if ($current=='contact.php') {echo 'current'; } ?>"><a href="contact.php">Contact</a></li>
								
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="btn-outer"><a href="contact.php" class="theme-btn quote-btn"><span class="fa fa-mail-reply-all"></span> Get a Quote</a></div>
                </div>
                
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><h2><img src="images/logo-3.jpg"> Shri Visakha industries</h2></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                 <li  class="<?php if ($current=='index.php') {echo 'current'; } ?>"><a href="index.php">Home</a></li>
                                <li class="<?php if ($current=='about-us.php') {echo 'current'; } ?>"><a href="about-us.php">About</a></li>
								<li class="<?php if ($current=='products.php') {echo 'current'; } ?>"><a href="products.php">Products</a></li>
                                <li class="<?php if ($current=='services.php') {echo 'current'; } ?>"><a href="services.php">Services</a></li>                                                               
                                <li class="<?php if ($current=='contact.php') {echo 'current'; } ?>"> <a href="contact.php">Contact</a></li>
								
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->