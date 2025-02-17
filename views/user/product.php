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
					<!-- <h2>COMPUTER</h2> -->
					<ol>
						<li><a href="<?php echo $basePath2; ?>/shop">Shop</a></li>
						<li><?php echo $product['name'] ?></li>
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
									<img src="<?php echo $rootPath; ?>assets/img/products/pc1.png" alt="">
								</div>
								<div class="carousel-item product-preview  ">
									<img src="<?php echo $rootPath; ?>assets/img/products/pc1.png" alt="">
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
					<div class="col-12 col-md-5">
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
								<!-- <a class="review-link" href="#">10 Review(s) | Add your review</a> -->
							</div>
							<div>
								<h3 class="product-price">RM<span
										id="product-price"><?php echo number_format($product['base_price'], 2); ?></span>
								</h3>
								<!-- <del class="product-old-price">RM990.00</del> -->
								</h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?php echo $product['description'] ?></p>

							<div class="product-options row">
								<?php
								// Group specs by type
								$groupedSpecs = [];
								foreach ($specs as $spec) {
									$groupedSpecs[$spec['spec_type']][] = $spec;
								}

								// Store base price in a JS variable
								$basePrice = $product['base_price'];
								?>

								<input type="hidden" id="base-price" value="<?php echo $basePrice; ?>">

								<?php foreach ($groupedSpecs as $specType => $options): ?>
									<div class="col">
										<label><?php echo htmlspecialchars($specType); ?></label>
										<select class="input-select spec-selector"
											data-type="<?php echo htmlspecialchars($specType); ?>">
											<?php foreach ($options as $option): ?>
												<option value="<?php echo htmlspecialchars($option['id']); ?>"
													data-extra-price="<?php echo $option['extra_price']; ?>">
													<?php echo htmlspecialchars($option['spec_value']); ?>
													<!-- <?php if ($option['extra_price'] > 0): ?>
														(+ RM<?php echo number_format($option['extra_price'], 2); ?>)
													<?php endif; ?> -->
												</option>
											<?php endforeach; ?>
										</select>
									</div>
								<?php endforeach; ?>


								<!-- <div class="col">
									<label>Storage</label>
									<select class="input-select">
										<option value="0">256 GB SSD</option>
										<option value="1">512 GB SSD</option>
									</select>

								</div>

								<div class="col">
									<label>2nd Storage</label>
									<select class="input-select">
										<option value="0">256 GB SSD</option>
									</select>

								</div> -->


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
									<button class="add-to-cart-btn mx-1" id="addToCartBtn" data-product-id="1"><i
											class="bi bi-cart-fill"></i> add to
										cart</button>
									<button class="add-to-cart-btn mx-1 "><i class="bi bi-bag-fill"></i> buy
										now</button>
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
										<div class="col-md-9">
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
										<!-- <div class="col-md-3">
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
										</div> -->
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

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const basePrice = parseFloat(document.getElementById("base-price").value);
			const priceElement = document.getElementById("product-price");
			const selectors = document.querySelectorAll(".spec-selector");

			function updatePrice() {
				let totalPrice = basePrice;

				selectors.forEach(select => {
					const selectedOption = select.options[select.selectedIndex];
					const extraPrice = parseFloat(selectedOption.getAttribute("data-extra-price")) || 0;
					totalPrice += extraPrice;
				});

				priceElement.textContent = totalPrice.toFixed(2);
			}

			// Add event listeners to all select elements
			selectors.forEach(select => {
				select.addEventListener("change", updatePrice);
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			let addToCartBtn = document.querySelector("#addToCartBtn");

			addToCartBtn.addEventListener("click", function () {
				let productId = this.getAttribute("data-product-id");
				let quantity = 1;
				let selectedSpecs = [];

				document.querySelectorAll(".spec-selector").forEach(select => {
					selectedSpecs.push(select.value);
				});

				let productData = {
					product_id: productId,
					quantity: quantity,
					selected_specs: selectedSpecs
				};

				// 🌟 1️⃣ Save to sessionStorage (Immediate UI)
				let cart = JSON.parse(sessionStorage.getItem("cart")) || [];
				let existingIndex = cart.findIndex(item => item.product_id == productId);

				if (existingIndex !== -1) {
					cart[existingIndex].quantity += quantity; // Update quantity
				} else {
					cart.push(productData);
				}

				sessionStorage.setItem("cart", JSON.stringify(cart));

				// 🌟 2️⃣ Send to PHP for session storage
				fetch('OMG/add_to_cart', {
					method: "POST",
					headers: { "Content-Type": "application/json" },
					body: JSON.stringify({ action: "add_to_cart", cart: cart })
				})
					.then(response => response.json())
					.then(data => {
						alert(data.message);
						// updateCartUI();
					})
					.catch(error => console.error("Error:", error));
			});

			// 🌟 3️⃣ Function to update cart UI dynamically
			// function updateCartUI() {
			// 	let cartCount = document.querySelector("#cart-count");
			// 	let cart = JSON.parse(sessionStorage.getItem("cart")) || [];
			// 	cartCount.textContent = cart.length;
			// }

			// 🌟 4️⃣ Load cart count on page load
			// updateCartUI();
		});

	</script>

</body>

</html>