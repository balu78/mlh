<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
	
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
       
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
       
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
		
        <div id="content" >
			<div>
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" ></li>
						<li data-target="#myCarousel" data-slide-to="2" ></li>
						
					</ol>
					<div style="padding-top:18px;padding-bottom:18px;">
					<center>
                     <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
					</center>
					</div>
					<!-- Wrapper for slides -->
				<div class="carousel-inner">
	
					<div class="item active">
					<img src="img/intro-bg_1_.jpg" alt="" style="width:100%;">
					<div class="carousel-caption"></div>
					</div>

					<div class="item">
						<img src="img/sale.jpg" alt="" style="width:100%;">
						<div class="carousel-caption"></div>
					</div>
    
					<div class="item">
						<img src="img/Banner.png" alt="" style="width:100%;">
						<div class="carousel-caption"></div>
					</div>
  
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				
			</div>
			
		</div>
            <!--Main banner image-->
				
               <!-- <div class="container">	
						
                    <center>
                        <div id="banner_content">
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
			    </div>-->
         </div>
					
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
           
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
       
   
    </body> 
</html>