<!DOCTYPE html>
<html lang="en">

<?php include('template/head.php') ?>


<body>

	<!-- ======= Top Bar ======= -->
	<?php include('template/topbar.php') ?>


	<!-- ======= Header ======= -->
	<?php include('template/header.php') ?>


	<main id="main">

		<!-- ======= Breadcrumbs Section ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Product</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>Shop</li>
						<li>Product</li>
					</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs Section -->

		<section class="inner-page">
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-12 col-lg-7 mb-md-1">
						<!-- <div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div> -->

						<div id="carouselExample" class="carousel slide">
							<div class="carousel-inner">
								<div class="carousel-item product-preview active">
									<img src="<?php echo $rootPath ?>assets/img/logo3.png" alt="">
								</div>
								<div class="carousel-item product-preview">
									<img src="assets/img/logo3.png" alt="">
								</div>
								<div class="carousel-item product-preview">
									<img src="assets/img/logo3.png" alt="">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
								data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
								data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>

					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<!-- <div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>

							<div class="product-preview">
								<img src="assets/img/logo3.png" alt="">
							</div>
						</div>
					</div> -->
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">product name goes here</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">RM980.00 <del class="product-old-price">RM990.00</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<div class="product-options">
								<label>
									Ram
									<select class="input-select">
										<option value="0">32GB DDR5</option>
									</select>
								</label>
								<label>
									Storage
									<select class="input-select">
										<option value="0">256 GB SSD</option>
									</select>
								</label>
							</div>
							<div class="col">

								<div class="add-to-cart d-flex justify-content-end">
									<!-- <div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div> -->
									<button class="add-to-cart-btn "><i class="fa fa-shopping-cart"></i> add to
										cart</button>
								</div>
							</div>

							<!-- <ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul> -->
							<div class="col">
								<ul class="product-links">
									<li>Category:</li>
									<!-- <li><a href="#">Computer</a></li> -->
									<li><a href="#">Prebuilt</a></li>
								</ul>
							</div>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-envelope"></i></a></li> -->
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="nav nav-tabs justify-content-center">
								<li class="nav-item">
									<a class="nav-link active show" data-bs-toggle="tab" href="#tab1">Details</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link " data-bs-toggle="tab" href="#tab2">Details</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link " data-bs-toggle="tab" href="#tab3">Reviews
										(3)</a>
								</li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active show">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
												veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
												commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
												velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
												occaecat cupidatat non proident, sunt in culpa qui officia deserunt
												mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<!-- <div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
												veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
												commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
												velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
												occaecat cupidatat non proident, sunt in culpa qui officia deserunt
												mollit anim id est laborum.</p>
										</div>
									</div>
								</div> -->
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																sed do eiusmod tempor incididunt ut labore et dolore
																magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																sed do eiusmod tempor incididunt ut labore et dolore
																magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
																sed do eiusmod tempor incididunt ut labore et dolore
																magna aliqua</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5"
																type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4"
																type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3"
																type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2"
																type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1"
																type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>


					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include('template/footer.php') ?>

	<!-- End Footer -->

	<?php include('template/preloader.php') ?>

	<?php include('template/backtotoparrow.php') ?>

	<?php include('template/script.php') ?>




</body>

</html>