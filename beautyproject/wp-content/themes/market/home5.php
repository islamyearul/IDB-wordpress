

<body class="common-home res layout-home5 ">

    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	
	
	<!-- TopBar Container  -->
	<div class="topbar hidden-xs">
		<div class="container">
			<div class="row">
				<div class="block-policy-top ">
					<div class="policy policy1 col-sm-4 col-xs-12">
						<div class="policy-inner">
							<i class="ico-policy"></i>
							<h4>30 days return</h4>
							<span>Money back guarantee</span>
						</div>
					</div>
					<div class="policy policy2 col-sm-4 col-xs-12">
						<div class="policy-inner">
						<i class="ico-policy"></i>
						<h4>free shipping on $30</h4>
						<span>on all orders over $99</span>
						</div>
					</div>
					<div class="policy policy3 col-sm-4 col-xs-12">
						<div class="policy-inner">
						<i class="ico-policy"></i>
						<h4>Safe shopping</h4>
						<span>Save up to 50% now  </span>
						</div>
					</div>
					
				</div>
					
			</div>
		</div>
		
	</div>
	<!-- //TopBar Container  -->
	
	<!-- Header Container  -->
	<header id="header" class="layout-boxed variantleft type_5">
	
		<!-- Header Top -->
		<div class="header-top compact-hidden">
			<div class="container">
				<div class="row">
					<div class="header-top-left form-inline col-md-6 col-sm-4 col-xs-12 compact-hidden">
						<div class="form-group languages-block ">
							<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/gb.png" alt="English" title="English">
									<span class="">English</span>
									<span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="index.html"><img class="image_flag" src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
									<li> <a href="index.html"> <img class="image_flag" src="<?php echo get_template_directory_uri();?>/assets/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
								</ul>
							</form>
						</div>

						<div class="form-group currencies-block">
							<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
								<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
									<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu btn-xs">
									<li> <a href="#">(€)&nbsp;Euro</a></li>
									<li> <a href="#">(£)&nbsp;Pounds	</a></li>
									<li> <a href="#">($)&nbsp;US Dollar	</a></li>
								</ul>
							</form>
						</div>
					</div>
					<div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="account" id="my_account"><a href="my-account.html" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> My Account </a></li>
								<li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="Wishlist"><i class="fa fa-heart" ></i> My Wish List</a></li>
								<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li>
								<li class="signin"><a href="login.html" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> Sign In</a></li>
								<li class="shopping_cart">
									
									<!--Cart-->
									<div id="cart" class=" btn-group btn-shopping-cart">
										<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
											<div class="shopcart">
												<span class="handle pull-left"></span>
												<p class="text-shopping-cart cart-total-full">2 </p>
											</div>
										</a>

										<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
											
											<li>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td class="text-center" style="width:70px">
																<a href="product.html"> <img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
															</td>
															<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
															<td class="text-center"> x1 </td>
															<td class="text-center"> $1,202.00 </td>
															<td class="text-right">
																<a href="product.html" class="fa fa-edit"></a>
															</td>
															<td class="text-right">
																<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
															</td>
														</tr>
														<tr>
															<td class="text-center" style="width:70px">
																<a href="product.html"> <img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
															</td>
															<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
															<td class="text-center"> x1 </td>
															<td class="text-center"> $60.00 </td>
															<td class="text-right">
																<a href="product.html" class="fa fa-edit"></a>
															</td>
															<td class="text-right">
																<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
															</td>
														</tr>
													</tbody>
												</table>
											</li>
											<li>
												<div>
													<table class="table table-bordered">
														<tbody>
															<tr>
																<td class="text-left"><strong>Sub-Total</strong>
																</td>
																<td class="text-right">$1,060.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>Eco Tax (-2.00)</strong>
																</td>
																<td class="text-right">$2.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>VAT (20%)</strong>
																</td>
																<td class="text-right">$200.00</td>
															</tr>
															<tr>
																<td class="text-left"><strong>Total</strong>
																</td>
																<td class="text-right">$1,262.00</td>
															</tr>
														</tbody>
													</table>
													<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
												</div>
											</li>
										</ul>
									</div> 
									<!--//cart-->
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Header Top -->

		<!-- Header center -->
		<div class="header-center left">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="navbar-logo col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
						<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/logos/logo_5.png" title="Your Store" alt="Your Store" /></a>
					</div>
					<!-- //end Logo -->

					<!-- Search -->
					<div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
						<form method="GET" action="index.html">
							<div id="search0" class="search input-group">
								<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
								<span class="input-group-btn">
									<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search" />
						</form>
					</div>
					<!-- //end Search -->

					<!-- Secondary menu -->
					
					
				</div>

			</div>
		</div>
		<!-- //Header center -->

		<!-- Header Bottom -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					
					
					<!-- Main menu -->
					<div class="megamenu-hori col-xs-12 ">
						<div class="responsive so-megamenu ">
			<nav class="navbar-default">
				<div class=" container-megamenu  horizontal">
					<div class="navbar-header">
						<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						Navigation		
					</div>
					
					<div class="megamenu-wrapper">
						<span id="remove-megamenu" class="fa fa-times"></span>
						<div class="megamenu-pattern">
							<div class="container">
								<ul class="megamenu " data-transition="slide" data-animationtime="250">
									<li class="home hover">
										<a href="index.html">Home <b class="caret"></b></a>
										<div class="sub-menu" style="width:100%;" >
											<div class="content" >
												<div class="row">
													<div class="col-md-15">
														<a href="index.html" class="image-link"> 
															<span class="thumbnail">
																<img class="img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-1.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - (Default)</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home2.html" class="image-link"> 
															<span class="thumbnail">
																<img class="<?php echo get_template_directory_uri();?>/assets/img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-2.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 2</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home3.html" class="image-link"> 
															<span class="thumbnail">
																<img class="<?php echo get_template_directory_uri();?>/assets/img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-3.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 3</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home4.html" class="image-link"> 
															<span class="thumbnail">
																<img class="<?php echo get_template_directory_uri();?>/assets/img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-4.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 4</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home5.html" class="image-link"> 
															<span class="thumbnail">
																<img class="<?php echo get_template_directory_uri();?>/assets/img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-5.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 5</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home6.html" class="image-link"> 
															<span class="thumbnail">
																<img class="<?php echo get_template_directory_uri();?>/assets/img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-6.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 6</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home7.html" class="image-link"> 
															<span class="thumbnail">
																<img class="img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-7.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 7</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="home8.html" class="image-link"> 
															<span class="thumbnail">
																<img class="img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-8.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout 8</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="html_width_RTL/index.html" class="image-link"> 
															<span class="thumbnail">
																<img class="img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/home-rtl.jpg" alt="">
																<span class="btn btn-default">Read More</span>
															</span> 
															<h3 class="figcaption">Home page - Layout RTL</h3> 
														</a> 
														
													</div>
													<div class="col-md-15">
														<a href="#" class="image-link"> 
															<span class="thumbnail">
																<img class="img-responsive img-border" src="<?php echo get_template_directory_uri();?>/assets/image/demo/feature/comming-soon.png" alt="">
																
															</span> 
															<h3 class="figcaption">Comming soon</h3> 
														</a> 
														
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="with-sub-menu hover">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<strong>Features</strong>
											<img class="label-hot" src="<?php echo get_template_directory_uri();?>/assets/image/theme/icons/hot-icon.png" alt="icon items">
											<b class="caret"></b>
										</a>
										<div class="sub-menu" style="width: 100%; right: auto;">
											<div class="content" >
												<div class="row">
													<div class="col-md-3">
														<div class="column">
															<a href="#" class="title-submenu">Listing pages</a>
															<div>
																<ul class="row-list">
																	<li><a href="category.html">Category Page 1 </a></li>
																	<li><a href="category-v2.html">Category Page 2</a></li>
																	<li><a href="category-v3.html">Category Page 3</a></li>
																</ul>
																
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="column">
															<a href="#" class="title-submenu">Product pages</a>
															<div>
																<ul class="row-list">
																	<li><a href="product.html">Image size - big</a></li>
																	<li><a href="product-v2.html">Image size - medium</a></li>
																	<li><a href="product-v3.html">Image size - small</a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="column">
															<a href="#" class="title-submenu">Shopping pages</a>
															<div>
																<ul class="row-list">
																	<li><a href="cart.html">Shopping Cart Page</a></li>
																	<li><a href="checkout.html">Checkout Page</a></li>
																	<li><a href="compare.html">Compare Page</a></li>
																	<li><a href="wishlist.html">Wishlist Page</a></li>
																
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="column">
															<a href="#" class="title-submenu">My Account pages</a>
															<div>
																<ul class="row-list">
																	<li><a href="login.html">Login Page</a></li>
																	<li><a href="register.html">Register Page</a></li>
																	<li><a href="my-account.html">My Account</a></li>
																	<li><a href="order-history.html">Order History</a></li>
																	<li><a href="order-information.html">Order Information</a></li>
																	<li><a href="return.html">Product Returns</a></li>
																	<li><a href="gift-voucher.html">Gift Voucher</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="with-sub-menu hover">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<strong>Pages</strong>
											<img class="label-hot" src="<?php echo get_template_directory_uri();?>/assets/image/theme/icons/hot-icon.png" alt="icon items">
											<b class="caret"></b>
										</a>
										<div class="sub-menu" style="width: 40%; ">
											<div class="content" >
												<div class="row">
													<div class="col-md-6">
														<ul class="row-list">
															<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
															
															<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
															<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
															<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
														</ul>
													</div>
													<div class="col-md-6">
														<ul class="row-list">
															<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
															<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
															<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
															<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="with-sub-menu hover">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<strong>Categories</strong>
											<span class="label"></span>
											<b class="caret"></b>
										</a>
										<div class="sub-menu" style="width: 100%; display: none;">
											<div class="content">
												<div class="row">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-md-3 img img1">
																<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/img1.jpg" alt="banner1"></a>
															</div>
															<div class="col-md-3 img img2">
																<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/img2.jpg" alt="banner2"></a>
															</div>
															<div class="col-md-3 img img3">
																<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/img3.jpg" alt="banner3"></a>
															</div>
															<div class="col-md-3 img img4">
																<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/img4.jpg" alt="banner4"></a>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<a href="#" class="title-submenu">Automotive</a>
														<div class="row">
															<div class="col-md-12 hover-menu">
																<div class="menu">
																	<ul>
																		<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																		<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																		<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																		<li><a href="#"  class="main-menu">More Car Accessories</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<a href="#" class="title-submenu">Electronics</a>
														<div class="row">
															<div class="col-md-12 hover-menu">
																<div class="menu">
																	<ul>
																		<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																		<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																		<li><a href="#"  class="main-menu">Home Audio</a></li>
																		<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
														<div class="row">
															<div class="col-md-12 hover-menu">
																<div class="menu">
																	<ul>
																		<li><a href="#"  class="main-menu">Earings</a></li>
																		<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																		<li><a href="#"  class="main-menu">Men Watches</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
														<div class="row">
															<div class="col-md-12 hover-menu">
																<div class="menu">
																	<ul>
																		<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																		<li><a href="#"  class="main-menu">Gift for Man</a></li>
																		<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																		<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									
									<li class="with-sub-menu hover">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<strong>Accessories</strong>
											
											<b class="caret"></b>
										</a>
										<div class="sub-menu" style="width: 100%; display: none;">
											<div class="content" style="display: none;">
												<div class="row">
													<div class="col-md-8">
														<div class="row">
															<div class="col-md-6 static-menu">
																<div class="menu">
																	<ul>
																		<li>
																			<a href="#"  class="main-menu">Automotive</a>
																			<ul>
																				<li><a href="#">Car Alarms and Security</a></li>
																				<li><a href="#" >Car Audio &amp; Speakers</a></li>
																				<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																			<ul>
																				<li><a href="#" >Accessories for i Pad</a></li>
																				<li><a href="#" >Apparel</a></li>
																				<li><a href="#" >Accessories for iPhone</a></li>
																			</ul>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="col-md-6 static-menu">
																<div class="menu">
																	<ul>
																		<li>
																			<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																			<ul>
																				<li><a href="#" >Camping &amp; Hiking</a></li>
																				<li><a href="#" >Cameras &amp; Photo</a></li>
																				<li><a href="#" >Cables &amp; Connectors</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#"  class="main-menu">Electronics</a>
																			<ul>
																				<li><a href="#" >Battereries &amp; Chargers</a></li>
																				<li><a href="#" >Bath &amp; Body</a></li>
																				<li><a href="#" >Outdoor &amp; Traveling</a></li>
																			</ul>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<span class="title-submenu">Bestseller</span>
														<div class="col-sm-12 list-product">
															<div class="product-thumb">
																<div class="image pull-left">
																	<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
																</div>
																<div class="caption">
																	<h4><a href="#">Filet Mign</a></h4>
																	<div class="rating-box">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<p class="price">$1,202.00</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 list-product">
															<div class="product-thumb">
																<div class="image pull-left">
																	<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
																</div>
																<div class="caption">
																	<h4><a href="#">Dail Lulpa</a></h4>
																	<div class="rating-box">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<p class="price">$78.00</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 list-product">
															<div class="product-thumb">
																<div class="image pull-left">
																	<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
																</div>
																<div class="caption">
																	<h4><a href="#">Canon EOS 5D</a></h4>
																	
																	<div class="rating-box">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																	</div>
																	<p class="price">
																		<span class="price-new">$60.00</span>
																		<span class="price-old">$145.00</span>
																		
																	</p>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="">
										<p class="close-menu"></p>
										<a href="blog-page.html" class="clearfix">
											<strong>Blog</strong>
											<span class="label"></span>
										</a>
									</li>
									
									
									<li class="pull-right"><a href="#" title="Special Offer!"><strong>Special Offer!</strong></a></li>
									<li class="pull-right"><a href="#" title="Buy This Theme!"><strong>Buy This Theme!</strong></a></li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
											</div>
					<!-- //end Main menu -->
					
				</div>
			</div>

		</div>

	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
	</header>
	<!-- //Header Container  -->
	
	
	
	<!-- Main Container  -->
	<div class="main-container  layout-boxed">
		<div class="container">
		<div class="row">
			<div id="content-top" class="clearfix" >
				<div id="so-slideshow" class="col-lg-9 col-md-9 home-slidershow">
					<div class="module slideshow no-margin">
						<div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
							<div class="yt-content-slide">
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/slider/home5/slider-1.jpg" alt="slider1" class="img-responsive"></a>
							</div>
							<div class="yt-content-slide">
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/slider/home5/slider-2.jpg" alt="slider2" class="img-responsive"></a>
							</div>
							<div class="yt-content-slide">
								<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/slider/home5/slider-3.jpg" alt="slider3" class="img-responsive"></a>
							</div>
						</div>
						<div class="loadeding"></div>
					</div>
					
				</div>

				<div class="col-lg-3 col-md-3">
					<div class="module  hidden-sm hidden-xs">
						<div class="modcontent clearfix">
							<ul class="htmlcontent-home">		
								<li class="marginbottom__3x">
									<div class="banners">
										<div>
											<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner1.jpg" alt="banner1"></a>
										</div>
									</div>
								</li>		
								<li>
									<div class="banners">
										<div>
											<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner2.jpg" alt="banner1"></a>
										</div>
									</div>
								</li>		
								
							</ul>
							
						</div>
					</div>
				</div>
				
				<div class="slider-brand-wrapper col-xs-12">
					<div class="module ">
						<div class="yt-content-slider yt-content-slider--arrow2"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="5" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-1.png" alt="Brand"></a>
							</div>
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-2.png" alt="Brand"></a>
							</div>
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-1.png" alt="Brand"></a>
							</div>
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-1.png" alt="Brand"></a>
							</div>
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-2.png" alt="Brand"></a>
							</div>
							<div class="yt-content-slide">
								<a title="Brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/brand/home5/logo-1.png" alt="Brand"></a>
							</div>
							
						</div>
						<div class="loadeding"></div>
					</div>
					
				</div>		
				
				<div class="banner2-id10 clearfix">
					<div class="module clearfix">
						<ul class="blank">
							<li class="col-md-4 col-sm-4">
								<div class="banners">
									<div>
										<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner3.jpg" alt="Image"></a>
									</div>
								</div>
							</li>
							<li class="col-md-4 col-sm-4 hidden-xs">
								<div class="banners">
									<div>
										<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner4.jpg" alt="Image"></a>
									</div>
								</div>
							</li>
							<li class="col-md-4 col-sm-4 hidden-xs">
								<div class="banners">
									<div>
										<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner5.jpg" alt="Image"></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>		
			</div>
			
			
			<div id="content" class="clearfix">
				<div class="col-xs-12 clearfix">
					<div class="module extraslider-home5 titleLine">
						<h3 class="modtitle">New Arrivals</h3>
						<div id="so_extraslider_1" >
							<!-- Begin extraslider-inner -->
							<div class="so-extraslider products-list grid product-style__5"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
								<!--Begin Items-->
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/4.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
											</div>
											<!--Sale Label-->
											<span class="label label-sale">-15%</span>
											<span class="label label-new">New</span>
											
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Qurem mazem numa dikam</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
																	
												<div class="price">
													<span class="price-new">$50.00</span> 
													<span class="price-old">$62.00</span>	
												</div>
											</div>
											
											  <div class="button-group">
												<button class="addToCart" type="button"  onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
												<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
												<button class="compare" type="button"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
											  </div>
										</div><!-- right block -->
									</div>
								</div>
								
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img ">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/2.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
											</div>
											<!--Sale Label-->
											<span class="label label-new">new</span>
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Suma fuma direm mase</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
																	
												<div class="price">
													<span class="price-new">$150.00</span> 
													 
												</div>
											</div>
											
											  <div class="button-group">
												<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
												<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
												<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
											  </div>
										</div><!-- right block -->
									</div>
								</div>
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img ">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/3.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/8.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
											</div>
											<!--Sale Label-->
											<span class="label label-new">new</span>
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Pumasi dema nones mame</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
																	
												<div class="price">
													<span class="price-new">$120.00</span> 
												</div>
											</div>
											
											  <div class="button-group">
												<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
												<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
												<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text" data-toggle="tooltip" title="Add to Cart" >Add Compare </span></button>
											  </div>
										</div><!-- right block -->
									</div>
								</div>
								
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img ">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/4.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
											</div>
											<!--Sale Label-->
											<span class="label label-sale">-25%</span>
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Taetem hasem razem pokam </a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
																	
												<div class="price">
													<span class="price-new">$120.00</span> 
													<span class="price-old">$162.00</span>		 
												</div>
											</div>
											
											  <div class="button-group">
												<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text" >Add to Cart</span></button>
												<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text" >Add Wish List</span></button>
												<button class="compare" type="button" data-toggle="tooltip"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
											  </div>
										</div><!-- right block -->
									</div>
								</div>
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img ">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
											</div>
											<!--Sale Label-->
											<!--<span class="label label-sale">Sale</span>-->
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Trai Kuma pekaem mame </a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="price">
													<span class="price-new">$110.00</span> 
												</div>
											</div>
											
											<div class="button-group">
												<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text"  >Add to Cart</span></button>
												<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
												<button class="compare" type="button" ><i class="fa fa-exchange"></i>  <span class="button-group__text"  >Add Compare </span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
								<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container second_img ">
												<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/6.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
											</div>
											<!--Sale Label-->
											<span class="label label-new">new</span>
											<!--full quick view block-->
											<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
											<!--end full quick view block-->
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Suma fuma direm mase</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
																	
												<div class="price">
													<span class="price-new">$120.00</span> 
													 
												</div>
											</div>
											
											  <div class="button-group">
												<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
												<button class="wishlist" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
												<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
											  </div>
										</div><!-- right block -->
									</div>
								</div>	
								<!--End Items-->
								
								
							</div>
							<!--End extraslider-inner -->
						</div>
					</div>
					<div class="module ">
						<div class="modcontent clearfix">
							<ul class="eg-vcenter-td-1">
								<li>
									<div class="banners">
										<div>
											<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner6.jpg" alt="Image"></a>
										</div>
									</div>
								</li>
								<li>
									<div class="banners">
										<div>
											<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner7.jpg" alt="Image"></a>
										</div>
									</div>
								</li>
								<li>
									<div class="banners">
										<div>
											<a title="Static Image" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/image/demo/cms/home5/banner8.jpg" alt="Image"></a>
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					
					<div class="module tab-slider titleLine no-margin">
						
						<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
							<div class="loadeding"></div>
							<div class="ltabs-wrap">
								<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-margin="0">
									<!--Begin Tabs-->
									<div class="ltabs-tabs-wrap"> 
									<span class="ltabs-tab-selected">Jewelry &amp; Watches	</span> <span class="ltabs-tab-arrow">▼</span>
										<div class="item-sub-cat">
											<ul class="ltabs-tabs cf">
												<li class="ltabs-tab tab-sel" data-category-id="51" data-active-content=".items-category-51"> <span class="ltabs-tab-label">Lastest Products					</span> </li>
												<li class="ltabs-tab " data-category-id="52" data-active-content=".items-category-52"> <span class="ltabs-tab-label">Most Viewed		</span> </li>
												<li class="ltabs-tab " data-category-id="53" data-active-content=".items-category-53"> <span class="ltabs-tab-label">Most Selling	</span> </li>
											</ul>
										</div>
									</div>
									<!-- End Tabs-->
								</div>
								<div class="ltabs-items-container">
									<!--Begin Items-->
									<div class="ltabs-items ltabs-items-selected items-category-51 products-list grid product-style__5" data-total="10">
										<div class="ltabs-items-inner ltabs-slider ">
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/4.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
														</div>
														<!--Sale Label-->
														<span class="label label-sale">-15%</span>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Qurem mazem numa dikam</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
															<div class="price">
																<span class="price-new">$80.00</span> 
																<span class="price-old">$97.00</span>		 
															</div>					
															
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/7.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
														</div>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Pumasi dema nones mame</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$97.00</span> 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/2.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/7.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
														</div>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Suma fuma direm mase</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$65.00</span> 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>	
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/6.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
														</div>
														<!--Sale Label-->
														<span class="label label-sale">-15%</span>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Taetem hasem razem pokam </a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$50.00</span> 
																<span class="price-old">$62.00</span>		 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/8.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															
														</div>
														<!--New Label-->
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Trai Kuma pekaem mame	</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$59.00</span> 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/2.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
														</div>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Suma fuma direm mase</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$65.00</span> 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/3.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
															<img src="<?php echo get_template_directory_uri();?>/assets/image/demo/shop/product/home5/7.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
														</div>
														<span class="label label-new">New</span>
														<!--full quick view block-->
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
														<!--end full quick view block-->
													</div>
													<div class="right-block">
														<div class="caption">
															<h4><a href="product.html">Pumasi dema nones mame</a></h4>		
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																</div>
															</div>
																				
															<div class="price">
																<span class="price-new">$97.00</span> 
															</div>
														</div>
														
														<div class="button-group">
															<button class="addToCart" type="button" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>
															<button class="wishlist" type="button" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
															<button class="compare" type="button" onclick="compare.add('42');"><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
														</div>
													</div><!-- right block -->
												</div>
											</div>
										</div>
										
									</div>
									<div class="ltabs-items items-category-52 products-list grid product-style__5" data-total="11">
										<div class="ltabs-loading"></div>
										
									</div>
									<div class="ltabs-items  items-category-53 products-list grid product-style__5" data-total="11">
										<div class="ltabs-loading"></div>
									</div>
								</div>
								<!--End Items-->
								
								
							</div>
							
						</div>
					</div>
		
				
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- //Main Container -->
	<!-- Block Spotlight2  -->
	<section class="so-spotlight2">
		<div class="container">
			<div class="row">
					<div class="col-md-6 col-sm-6 list-info-bottom">
						<div class="module clearfix text-center">
							<h3 class="modtitle">THIS WEEK</h3>
							<div class="modcontent">
								<ul class="blank">
									<li>
										Introducing James Jagger for AW16 Men’s<br>
										<a href="#" title="View More">View More</a>
									</li>
									
									<li>
										Autumn Winter 2016<br>
										<a href="#" title="View More">View More</a>
									</li>
									
									<li>
										Introducing James Jagger for AW16 Men’s<br>
										<a href="#" title="View More">View More</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
					
					<div class="col-md-6 col-sm-6 ">
						<div class="module clearfix text-center">
							<h3 class="modtitle">KEEP IN TOUCH</h3>
							<div class="modcontent align-center">
								<div class="col-md-offset-2 col-md-9">
								<p class="des-newsletter marginbottom__3x">Get style updates straight to your inbox. Simply enter your details below to keep up-to-date with the latest news on collections and exclusive events.</p>
								<div class="subscribe-home">
									<form class="form subscribe" novalidate="novalidate" action="http://magento2.magentech.com/themes/sm_market/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
										<div class="input-group">
											<input name="email" type="email" class="form-control" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}">
											<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-primary" name="submit_search">Subscribe</button>
											</span>
										</div>
										
									</form>
								</div>
								</div>
							</div>
						</div>
						
					</div>
				
			</div>
		</div>
	</section>
	