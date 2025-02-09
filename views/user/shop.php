<?php
include('includes/functions.php')

	?>
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
					<h2>Shop</h2>
					<ol>
						<!-- <li><a href="index.html">Home</a></li> -->
						<!-- <li>Shop</li> -->
					</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs Section -->

		<section class="inner-page">
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div class="col-md-3 d-none d-lg-inline">
						<!-- aside Widget -->
						<div class="left-bar">
							<h3 class="left-bar title">Categories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Gaming PC
										<small>(1)</small>
									</label>
								</div>
								<!-- 
								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Cameras
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Accessories
										<small>(578)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div> -->
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="left-bar">
							<h3 class="left-bar title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<!-- <div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div> -->
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<!-- <div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="./img/product02.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="./img/product03.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
						</div> -->
						<!-- /aside Widget -->
						<div class="aside">

							<div class="store-filter  ">
								<div class="row store-sort">
									<label class="col">
									<div>Sort By:</div>
										<select class="input-select">
											<option value="0">Popular</option>
											<option value="1">Recent</option>
										</select>
									</label>

									<label class="col">
										<div>Show:</div>
										<select class="input-select">
											<option value="0">20</option>
											<option value="1">50</option>
										</select>
									</label>
								</div>
								<!-- <ul class="col store-grid float-end"> -->
								<!-- <li class=""><a href="#"><i class="bi bi-filter"></i></a></li> -->
								<!-- <li><button type="button" class="btn btn-primary"><i class="bi bi-filter"></i></button></li> -->
								<!-- </ul> -->
							</div>
						</div>
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-lg-9 col-12">
						<!-- store top filter -->

						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<div class="col-6 col-lg-4">
								<div class="product position-relative">
									<a href="shop/test" class="stretched-link text-decoration-none">
										<div class="product-img">
											<img src="assets/img/logo3.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name">Product name goes here</h3>
											<h4 class="product-price">RM980.00 <del
													class="product-old-price">RM990.00</del></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
									</a>
								</div>

							</div>
							<!-- /product -->




							<!-- <div class="clearfix visible-sm visible-xs"></div> -->



						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter ">
							<span class="store-qty">Showing 20 of 100 products</span>
							<ul class="store-pagination float-md-end d-flex justify-content-center px-0">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include('template/footer.php') ?>

	<!-- End Footer -->

	<?php include('template/preloader.php') ?>

	<!-- <?php include('template/backtotoparrow.php') ?> -->

	<?php include('template/script.php') ?>




</body>

</html>