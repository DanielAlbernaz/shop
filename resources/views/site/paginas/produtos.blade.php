<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assests/site/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/swiper.css') }}" type="text/css" />

	<!-- shop Demo Specific Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assests/site/css/shop/shop.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/shop/fonts.css') }}" type="text/css" />
	<!-- / -->

    <link rel="stylesheet" href="{{ asset('assests/site/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assests/site/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('assests/site/css/colors.php?color=000000') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Shop Demo | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="dark" style="background-color: #a3a5a7;">
			<div class="container">

				<div class="row justify-content-between align-items-center">

					<div class="col-12 col-lg-auto">
						<p class="mb-0 d-flex justify-content-center justify-content-lg-start py-3 py-lg-0"><strong>Free U.S. Shipping on Order above $99. Easy Returns.</strong></p>
					</div>

					<div class="col-12 col-lg-auto d-none d-lg-flex">

						<!-- Top Links
						============================================= -->
						<!-- .top-links end -->

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+1.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-md">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-4">
							<a href="demo-shop.html" class="standard-logo"><img src="{{ asset('assests/site/images/logo.png') }}" alt="Canvas Logo"></a>
							<a href="demo-shop.html" class="retina-logo"><img src="{{ asset('assests/site/images/llogo@2x.png') }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-account">
								<a href="#modal-register" data-lightbox="inline" ><i class="icon-line2-user me-1 position-relative" style="top: 1px;"></i><span class="d-none d-sm-inline-block font-primary fw-medium">Login</span></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="{{ asset('assests/site/galeria/small/1.jpg') }}" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="{{ asset('assests/site/galeria/small/6.jpg') }}" alt="Light Blue Denim Dress" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div><!-- #top-cart end -->

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows me-lg-auto">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="#"><div>Home</div></a></li>
								<li class="menu-item mega-menu"><a class="menu-link" href="#"><div>Men</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Footwear</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Formal Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Flip Flops</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Slippers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sandals</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Show all <i class="icon-angle-right"></i></div></a></li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Clothing</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>T-Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Collared Tees</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Pants / Trousers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Show all <i class="icon-angle-right"></i></div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Sportswear</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Casual Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports T-Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Collared Tees</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Jackets</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Swimwears</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Show all <i class="icon-angle-right"></i></div></a></li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Innerwears</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Boxers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Vests</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sleepwears</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Show all <i class="icon-angle-right"></i></div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column border-start-0 col-lg-3">
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Innerwears</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Boxers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Vests</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sleepwears</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Show all <i class="icon-angle-right"></i></div></a></li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Sunglasses</div></a>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Watches</div></a>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Bags</div></a>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Headphones</div></a>
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Accessories</div></a>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3 border-start-0">
													<li class="card p-0 bg-transparent border-0">
														<img class="card-img-top" src="{{ asset('assests/site/images/menu-image.jpg') }}" alt="image cap">
														<a href="#" class="btn btn-link text-start fw-medium ps-0 bg-transparent"><u>Editor's Pick</u></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="#"><div>Women</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-6">
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Footwear</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Formal Shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sports shoes</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Flip Flops</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Slippers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Sandals</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Party Shoes</div></a></li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-6">
													<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Clothing</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item"><a class="menu-link" href="#"><div>Casual Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>T-Shirts</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Collared Tees</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Pants / Trousers</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Ethnic Wear</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Jeans</div></a></li>
															<li class="menu-item"><a class="menu-link" href="#"><div>Swimwear</div></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Accessories</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Sales</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


        <!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Shop</h1>
				<span>Products with Filter Functionality</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Filters</a></li>
					<li class="breadcrumb-item active" aria-current="page">Shop Filter</li>
				</ol>
			</div>

		</section><!-- #page-title end -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

                    <div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9 order-lg-last">

							<!-- Shop
							============================================= -->
							<div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

								<div class="product col-md-4 col-sm-6 sf-dress">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
											<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
											<div class="sale-flash badge bg-secondary p-2">Out of Stock</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
											<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-pants">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
											<a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
											<div class="product-price">$39.99</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-shoes">
									<div class="grid-inner">
										<div class="product-image">
											<div class="fslider" data-arrows="false">
												<div class="flexslider">
													<div class="slider-wrap">
														<div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
														<div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
														<div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
													</div>
												</div>
											</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
											<div class="product-price">$49</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-dress">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
											<a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
											<div class="product-price">$19.95</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-sunglasses">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
											<a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
											<div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
											<div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-tshirts">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
											<a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
											<div class="product-price">$9.99</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-watches">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
											<a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
											<div class="product-price">$129.99</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-shoes">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
											<a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
											<div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
											<div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-dress">
									<div class="grid-inner">
										<div class="product-image">
											<div class="fslider" data-arrows="false">
												<div class="flexslider">
													<div class="slider-wrap">
														<div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
														<div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
														<div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
													</div>
												</div>
											</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
											<div class="product-price">$39.49</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-pants">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
											<a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
											<div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
											<div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-sunglasses">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
											<a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
											<div class="product-price">$13.49</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="product col-md-4 col-sm-6 sf-tshirts">
									<div class="grid-inner">
										<div class="product-image">
											<a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
											<a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
													<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
													<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
												</div>
												<div class="bg-overlay-bg bg-transparent"></div>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
											<div class="product-price">$11.49</div>
											<div class="product-rating">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
											</div>
										</div>
									</div>
								</div>

							</div><!-- #shop end -->

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget-filter-links">

									<h4>Select Category</h4>
									<ul class="custom-filter ps-2" data-container="#shop" data-active-class="active-filter">
										<li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
										<li><a href="#" data-filter=".sf-dress">Dress</a></li>
										<li><a href="#" data-filter=".sf-tshirts">Tshirts</a></li>
										<li><a href="#" data-filter=".sf-pants">Pants</a></li>
										<li><a href="#" data-filter=".sf-sunglasses">Sunglasses</a></li>
										<li><a href="#" data-filter=".sf-shoes">Shoes</a></li>
										<li><a href="#" data-filter=".sf-watches">Watches</a></li>
									</ul>

								</div>

								<div class="widget widget-filter-links">

									<h4>Sort By</h4>
									<ul class="shop-sorting ps-2">
										<li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
										<li><a href="#" data-sort-by="name">Name</a></li>
										<li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
										<li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
									</ul>

								</div>

							</div>
						</div><!-- .sidebar end -->
					</div>

                </div>
            </div>
		</section>
                    <!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-transparent border-0">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-3 border-bottom clearfix">

					<div class="row">

						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-3 nott">Features</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Help Center</a></li>
									<li><a href="#">Paid with Moblie</a></li>
									<li><a href="#">Status</a></li>
									<li><a href="#">Changelog</a></li>
									<li><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-3 nott">Support</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Contact</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-3 nott">Trending</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Forums</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-3 nott">Get to Know us</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Corporate</a></li>
									<li><a href="#">Agency</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Personal</a></li>
									<li><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4 col-md-8">
							<div class="widget clearfix">

								<h4 class="ls0 mb-3 nott">Subscribe Now</h4>
								<div class="widget subscribe-widget mt-2 clearfix">
									<p class="mb-4"><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
									<div class="widget-subscribe-form-result"></div>
									<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mt-1 mb-0 d-flex">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control sm-form-control required email" placeholder="Enter your Email Address">

										<button class="button nott fw-normal ms-1 my-0" type="submit">Subscribe Now</button>
									</form>
								</div>

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent">

				<div class="container clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->


    <script src="{{ asset('assests/site/js/jquery.js') }}"></script>
    <script src="{{ asset('assests/site/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('assests/site/js/functions.js') }}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>
		jQuery(document).ready( function($){
			$(window).on( 'pluginIsotopeReady', function(){
				$('#shop').isotope({
					transitionDuration: '0.65s',
					getSortData: {
						name: '.product-title',
						price_lh: function( itemElem ) {
							if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
								var price = $(itemElem).find('.product-price ins').text();
							} else {
								var price = $(itemElem).find('.product-price').text();
							}

							priceNum = price.split("$");

							return parseFloat( priceNum[1] );
						},
						price_hl: function( itemElem ) {
							if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
								var price = $(itemElem).find('.product-price ins').text();
							} else {
								var price = $(itemElem).find('.product-price').text();
							}

							priceNum = price.split("$");

							return parseFloat( priceNum[1] );
						}
					},
					sortAscending: {
						name: true,
						price_lh: true,
						price_hl: false
					}
				});

				$('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
					var element = $(this),
						elementFilter = element.children('a').attr('data-filter'),
						elementFilterContainer = element.parents('.custom-filter').attr('data-container');

					elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

					element.append('<span>'+ elementFilterCount +'</span>');

				});

				$('.shop-sorting li').click( function() {
					$('.shop-sorting').find('li').removeClass( 'active-filter' );
					$(this).addClass( 'active-filter' );
					var sortByValue = $(this).find('a').attr('data-sort-by');
					$('#shop').isotope({ sortBy: sortByValue });
					return false;
				});
			});
		});
	</script>

</body>
</html>
