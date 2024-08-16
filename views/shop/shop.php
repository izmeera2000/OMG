<?php
include(getcwd() . '/admin/server.php');
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
					<h2>Shop</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>Shop</li>
					</ol>
				</div>

			</div>
		</section>
		<!-- End Breadcrumbs Section -->

		<section class="inner-page">
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<?php include(getcwd() . '/views/' . 'shop/leftbar.php') ?>

					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-lg-9 col-12">
						<!-- store top filter -->

						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
							$query =
								"SELECT product.*, category.name AS category_name, image.image_url, review.newaveragerating FROM `product` 
								INNER JOIN product_category AS category ON product.product_category_id = category.id 
								INNER JOIN( SELECT * FROM product_image WHERE image_order = 1 ) AS image ON product.id = image.product_id 
								INNER JOIN ( SELECT *,AVG(rating) AS newaveragerating FROM product_review GROUP BY product_id ) AS review ON product.id = review.product_id;";
							$results = mysqli_query($db, $query);
							if (mysqli_num_rows($results) > 0) {


								while ($products = mysqli_fetch_assoc($results)) {


									?>

									<div class="col-6 col-lg-4">
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product/<?php echo $products['name'] ?>/<?php echo $products['image_url'] ?>"
													alt="">
												<div class="product-label">
													<?php

													if (isset($products['discount'])) {
														// echo $products['discount'];
														?>
														<span class="sale">-30%</span>
														<?php

													}
													?>
													<!--<span class="new">NEW</span> -->
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $products['category_name'] ?></p>
												<h3 class="product-name"><a
														href="product/<?php echo $products['id'] ?>"><?php echo $products['name'] ?></a>
												</h3>
												<h4 class="product-price">RM<?php echo $products['price'] ?> <del
														class="product-old-price">RM990.00</del>
												</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
									</div>
									<?php
								}

								//   header('location: index.php');
							}
							?>

							<!-- /product -->




							<!-- <div class="clearfix visible-sm visible-xs"></div> -->



						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter ">
							<span class="store-qty">Showing 20 of 100 products</span>
							<ul class="store-pagination float-md-end d-flex justify-content-center px-0">
								<li class="active">1</li>
								<!-- <li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
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
	<?php include(getcwd() . '/views/' . 'footer.php') ?>

	<!-- End Footer -->

	<?php include(getcwd() . '/views/' . 'preloader.php') ?>

	<?php include(getcwd() . '/views/' . 'backtotoparrow.php') ?>

	<?php include(getcwd() . '/views/' . 'script.php') ?>




</body>

</html>