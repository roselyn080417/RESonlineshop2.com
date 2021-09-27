<div>
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner3.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner2.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/banner4.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner1.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner3.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     


		<!-- SECTION -->
		<div class="section mainn mainn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=10"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/L2.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="product.php?p=10" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=80"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/ha.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Household Appliances<br>Collection</h3>
								<a href="product.php?p=80" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=1"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/CP.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Computer Peripherals<br>Collection</h3>
								<a href="product.php?p=1s" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		  
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price</h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="store.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price</h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/CP.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">COmputer Peripherals</p>
										<h3 class="product-name"><a href="#">Keyboard</a></h3>
										<h4 class="product-price">₱180 <del class="product-old-price">₱257</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/L4.jpeg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptop</p>
										<h3 class="product-name"><a href="#">Acer</a></h3>
										<h4 class="product-price">₱24,000 <del class="product-old-price">₱34,285</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/MP.jpeg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mobile Phones</p>
										<h3 class="product-name"><a href="#">Vivo</a></h3>
										<h4 class="product-price">₱10,000 <del class="product-old-price">₱14,285</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/CP1.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Computer Peripherals</p>
										<h3 class="product-name"><a href="#">Mouse</a></h3>
										<h4 class="product-price">₱100 <del class="product-old-price">₱143</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/ha.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Household Appliances</p>
										<h3 class="product-name"><a href="#">Refrigerator</a></h3>
										<h4 class="product-price">24,000 <del class="product-old-price">34,285</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/SK.jpeg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Skin Care</p>
										<h3 class="product-name"><a href="#">Gluta-C</a></h3>
										<h4 class="product-price">₱2,400 <del class="product-old-price">₱3,428</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

                    
                

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/MP1.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mobile Phones</p>
										<h3 class="product-name"><a href="#">Oppo</a></h3>
										<h4 class="product-price">₱12,000 <del class="product-old-price">₱17,143</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/CP6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Computer Peripherals</p>
										<h3 class="product-name"><a href="#">Joystick</a></h3>
										<h4 class="product-price">₱1,700 <del class="product-old-price">₱2,428</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/j5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Jewelry</p>
										<h3 class="product-name"><a href="#">SK956</a></h3>
										<h4 class="product-price">₱10,000 <del class="product-old-price">₱14,285</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/CP5.jpeg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Computer Peripherals</p>
										<h3 class="product-name"><a href="#">Microphone</a></h3>
										<h4 class="product-price">₱1,500 <del class="product-old-price">₱2,123</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/SK5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Skin Care</p>
										<h3 class="product-name"><a href="#">Perfect Skin</a></h3>
										<h4 class="product-price">₱300 <del class="product-old-price">₱428</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/ha3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Household Appliances</p>
										<h3 class="product-name"><a href="#">Rice Cooker</a></h3>
										<h4 class="product-price">₱1,200 <del class="product-old-price">₱1,714</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">
					    
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/fa2.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Fitness Apparel</p>
										<h3 class="product-name"><a href="#">Punching Bag</a></h3>
										<h4 class="product-price">1,400 <del class="product-old-price">₱2,000</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/L5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptop</p>
										<h3 class="product-name"><a href="#">Samsung</a></h3>
										<h4 class="product-price">₱45,000 <del class="product-old-price">₱64,285</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/SK6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Skin Care</p>
										<h3 class="product-name"><a href="#">Brilliant Skin</a></h3>
										<h4 class="product-price">₱300 <del class="product-old-price">₱428</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/L3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptop</p>
										<h3 class="product-name"><a href="#">Lenovo</a></h3>
										<h4 class="product-price">₱30,000 <del class="product-old-price">₱42,857</del></h4>
									</div>
								</div>
								<!-- /product widget -->
								

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/j22.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Jewelry</p>
										<h3 class="product-name"><a href="#">SK963</a></h3>
										<h4 class="product-price">₱6,000 <del class="product-old-price">₱8,572</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/ha2.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Household Appliances</p>
										<h3 class="product-name"><a href="#">Blender</a></h3>
										<h4 class="product-price">₱5,600 <del class="product-old-price">₱8,000</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		