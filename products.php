<!DOCTYPE html>
<html>
<head>
<title>Shri Visakha Industries | Portfolio</title>
<?php 

include('admin/config.php');

include('comman.php');


 $error = '';
   $count = 0;    
      
      $sql = "SELECT * FROM product";
      $result = mysqli_query($con,$sql);
	  $products = array();
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 { 
		$products[] = $row;
	 }
      
      $count = mysqli_num_rows($result);

 ?>

</head>

<body>
<div class="page-wrapper">
 	
    <?php include('header.php'); ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
        <div class="auto-container">
            <h1>Products</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">products</li>
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
<section class="masonary-section style-two">
    	<div class="auto-container">

            <div class="sec-title-four">
                <h2>Our Products</h2>
            </div>
                    
           	<!--Sortable Masonry-->
            <div class="sortable-masonry">
            
 <!--Filter-
				
                <div class="filters clearfix">
                
                	<ul class="filter-tabs filter-btns pull-right clearfix">
                        <li class="active filter" data-role="button" data-filter=".all"><span class="txt">All Works</span></li>          
                        <li class="filter" data-role="button" data-filter=".agriculture"><span class="txt">Agriculture Process</span></li>
                        <li class="filter" data-role="button" data-filter=".chemical"><span class="txt">Chemical Research</span></li>
                        <li class="filter" data-role="button" data-filter=".engineering"><span class="txt">Metal Engineering</span></li>
                    </ul>
                </div> -->
				</div>
                <div class="items-container row clearfix">
                
				
				
				<?php	


               if($count>0) {				
						$i = 0;
						foreach($products as $product){
						$i++;
						//echo var_dump($design);
						?>
				
				
                    <!--Default Portfolio Item-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all chemical">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/product/<?php echo $product['image']; ?>" alt="" width="380" height="340"></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
										<h3><?php echo $product['name']; ?></h3>
                                       <P><?php echo $product['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
					<?php
					
						}
							
					  }else {
						 echo "<span>No product found </span>";
					  }
			?>
                    
                    
                </div>
                
            </div>
            <!--End Sortable Masonry-->
           	
           
            
        </div>    
        
        
    </section>
   <?php include('footer.php'); ?>
    
  
    
</div>
<!--End pagewrapper-->

<?php include('comman-js.php'); ?>
</body>
</html> 
   

