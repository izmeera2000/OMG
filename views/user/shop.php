 
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
					<div class="col-md-3 d-none d-lg-inline" id="sidebar">
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
							</div>
						</div>

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

						<div class="aside">
							<div class="store-filter">
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
									<a href="product/1/test" class="stretched-link text-decoration-none">
										<div class="product-img">
											<img src="<?php echo $rootPath; ?>assets/img/products/pc1.png" alt="">
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
	<?php include('template/filter.php') ?>

	<?php include('template/script.php') ?>




</body>

</html>