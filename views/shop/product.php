<?php
include(getcwd() . '/admin/server.php');



$product_id = str_replace('shop/product/', '', $request);
$product_id = strtok($product_id, '/');
// echo $first; // home
// echo $product_id;

?>
<!DOCTYPE html>
<html lang="en">

<?php include(getcwd() . '/views/' . 'head.php') ?>


<body>

	<!-- ======= Top Bar ======= -->
	<?php include(getcwd() . '/views/' . 'topbar.php') ?>


	<!-- ======= Header ======= -->
	<?php include(getcwd() . '/views/' . 'header.php') ?>


	<main id="main">

		<!-- ======= Breadcrumbs Section ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Product</h2>
					<ol>
						<li><a href="<?php echo $site_url ?>">Home</a></li>
						<li><a href="<?php echo $site_url ?>shop">Shop</a></li>
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
						<div id="carouselExample" class="carousel slide ">
							<div class="carousel-inner">


								<?php
								$query =
									"SELECT * FROM product_image WHERE product_id='$product_id' ORDER BY image_order ASC";
								$results = mysqli_query($db, $query);
								if (mysqli_num_rows($results) > 0) {


									while ($images = mysqli_fetch_assoc($results)) {

										// var_dump($images)
										?>
										<div
											class="carousel-item product-preview  <?php echo ($images['image_order'] == 1) ? "active" : " " ?>">
										<div class="carousel-container">

											<img class=""
												src="<?php echo $site_url ?>assets/img/product/<?php echo $images['product_id'] ?>/<?php echo $images['image_url'] ?>">
										</div>
										</div>

										<?php

									}
								}
								?>
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
					<?php

					$query =
						"SELECT * FROM product WHERE id='$product_id'";
					$results = mysqli_query($db, $query);
					if (mysqli_num_rows($results) > 0) {


						while ($product = mysqli_fetch_assoc($results)) {

							?>
							<div class="col-md-5">
								<div class="d-none" id="user_id"><?php echo $_SESSION['user_details']['id'] ?></div>
								<div class="d-none" id="product_id"><?php echo $product['id'] ?></div>
								<div class="d-none" id="product-price-ori"><?php echo $product['price'] ?></div>

								<div class="product-details">
									<h2 class="product-name"><?php echo $product['name'] ?></h2>
									<div>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<!-- <a class="review-link" href="#">10 Review(s)</a> -->
									</div>
									<div>
										
										<h3 class="product-price" id="product-price-new" >RM<?php echo number_format((float) $product['price'], 2, '.', '') ?></h3>
										<h3 class="product-price"><del class="product-old-price">RM990.00</del></h3>
										<span
											class="product-available"><?php echo ($product['stock'] > 0) ? "IN STOCK" : "Unavailable" ?></span>
									</div>
									<p><?php echo $product['description'] ?></p>

									<div class="product-options">

										<?php


										$query2 = "SELECT * FROM `product_option`  INNER JOIN product_spec_category ON product_option.category = product_spec_category.id WHERE product_id=$product_id GROUP BY category ";
										$results2 = mysqli_query($db, $query2);
										// echo $query2;
										if (mysqli_num_rows($results2) > 0) {
											// echo $product_id;
											$option = 0;

											while ($product_option = mysqli_fetch_assoc($results2)) {
												$option++;
												?>

												<label class="mt-2">
													<?php echo $product_option['name'] ?>
													<select class="input-select" id="option_id-<?php echo $product_option['id'] ?>"
														onchange="adjust();">

														<?php
														$category_name = $product_option['name'];
														$query3 = "SELECT product_option.*,product_spec_category.name FROM `product_option`  INNER JOIN product_spec_category ON product_option.category = product_spec_category.id WHERE product_id=$product_id  AND name = '$category_name' ";
														$results3 = mysqli_query($db, $query3);

														if (mysqli_num_rows($results3) > 0) {
															while ($product_option_select = mysqli_fetch_assoc($results3)) {

																?>
																<option
																	value="<?php echo $product_option_select['id'] ?>-<?php echo $product_option_select['addprice'] ?>">
																	<?php echo $product_option_select['value'] ?>
																</option>


																<?php
															}
														}
														?>
													</select>
												</label>
												<?php
											}

										}
										?>
										<div class="d-none" id="option"><?php echo $option ?></div>

									</div>
									<div class="col">

										<div class="add-to-cart d-flex justify-content-center">
											<!-- <div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div> -->
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> buy
												now</button>
											<button class="add-to-cart-btn  mx-2 " <?php
											$login = $site_url . 'login';

											echo (isset($_SESSION['user_details']['id'])) ? "onclick='addtoCart()'" : "onclick=window.location.href='$login'" ?>><i class="fa fa-shopping-cart"></i>
												add to
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

						<?php }
					} ?>
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
	<?php include(getcwd() . '/views/' . 'footer.php') ?>

	<!-- End Footer -->

	<?php include(getcwd() . '/views/' . 'preloader.php') ?>

	<?php include(getcwd() . '/views/' . 'backtotoparrow.php') ?>

	<?php include(getcwd() . '/views/' . 'script.php') ?>




</body>

</html>