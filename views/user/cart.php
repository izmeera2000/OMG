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
					<h2>Cart</h2>
					<ol>
						<li><a href="<?php echo $site_url ?>">Home</a></li>
						<li><a href="<?php echo $site_url ?>user">Account</a></li>
						<li>Cart</li>
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
					<?php include(getcwd() . '/views/' . 'user/asideuser.php') ?>


					<!-- /ASIDE -->

					<!-- STORE -->
					<div class="col-lg-9 col-12">
						<section id="why-us" class="why-us">
							<div class="container" id="insidecart">
								<?php
								$user_id = $_SESSION['user_details']['id'];
								$query = "SELECT * FROM user_cart WHERE  user_id='$user_id'";
								$results = mysqli_query($db, $query);
								if (mysqli_num_rows($results) > 0) {

									?>
									<div class="table-responsive">
										<table class="table cart w-auto" id="carttable">
											<thead>
												<tr>
													<th scope="col" id="testput"></th>
													<th scope="col">Product Options</th>
													<th scope="col">Price</th>
													<th scope="col"></th>

												</tr>
											</thead>
											<tbody>

												<?php

												while ($user_cart = mysqli_fetch_assoc($results)) {
													?>
													<tr>
														<th scope="row" class="text-nowrap w-auto"><?php

														$product_id = $user_cart['product_id'];
														$query2 = "SELECT product.*,image.image_url FROM `product` INNER JOIN( SELECT * FROM product_image WHERE image_order = '1' ) AS image ON product.id = image.product_id WHERE product.id='$product_id';";

														$results2 = mysqli_query($db, $query2);
														if (mysqli_num_rows($results2) > 0) {

															while ($product = mysqli_fetch_assoc($results2)) {
																?>
																	<div class="image-box"><img class="w-100"
																			src="<?php echo $site_url ?>assets/img/product/<?php echo $product['id'] ?>/<?php echo $product['image_url'] ?>">
																	</div>
																</th>
																<td class="align-middle">
																	<h5><?php echo $product['name'] ?></h5>

																	<?php

																	$array_select = substr($user_cart['product_option_selected_id'], 1, strlen($user_cart['product_option_selected_id']) - 2);


																	$query3 = "SELECT * FROM `product_option` WHERE id IN (" . $array_select . ")";
																	$results3 = mysqli_query($db, $query3);
																	if (mysqli_num_rows($results3) > 0) {
																		while ($product3 = mysqli_fetch_assoc($results3)) {
																			?>

																			<p><?php echo $product3['value'] ?></p>
																			<?php

																		}
																	}

															}
														}

														?>
														</td>
														<td class="align-middle">
															<h5 class="mx-2">
																RM<?php echo number_format($user_cart['totalprice'], 2) ?></h5>
														</td>

														<td class="align-middle"><button type="button" class="btn btn-primary"
																onclick="deletecart(<?php echo $user_cart['id'] ?>)"
																data-id="<?php echo $user_cart['id'] ?>">
																<i class="bi bi-trash"></i>
															</button></td>
													</tr>
													<?php
												}

												?>
											</tbody>
										</table>
										<?php
								} else {
									?>

<div class="table-responsive">
        <table class="table cart w-auto" id="carttable">
          <thead>
            <tr>
              <th scope="col" id="testput"></th>
              <th scope="col">Product Options</th>
              <th scope="col">Price</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="col" id="testput"></th>
              <th scope="col">Product Options</th>
              <th scope="col">Price</th>
              <th scope="col"></th>

            </tr>
          </tbody>

        </table>
      </div>
										<?php
								}
								?>
								</div>

							</div>
						</section>
					</div>


					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
		</section>
		<?php include(getcwd() . '/views/' . 'modals.php') ?>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include(getcwd() . '/views/' . 'footer.php') ?>

	<!-- End Footer -->

	<?php include(getcwd() . '/views/' . 'preloader.php') ?>

	<?php include(getcwd() . '/views/' . 'backtotoparrow.php') ?>

	<?php include(getcwd() . '/views/' . 'script.php') ?>




</body>

</html>