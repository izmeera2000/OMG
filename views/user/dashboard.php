
<?php 
include (getcwd()  .'/admin/server.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<?php include (getcwd() . '/views/' .'head.php') ?>


<body>

	<!-- ======= Top Bar ======= -->
	<?php include (getcwd() . '/views/' .'topbar.php') ?>


	<!-- ======= Header ======= -->
	<?php include (getcwd() . '/views/' .'header.php') ?>


	<main id="main">

		<!-- ======= Breadcrumbs Section ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Dashboard</h2>
					<ol>
						<li><a href="index.php">Home</a></li>
						<li><a href=" ">Account</a></li>
						<li>Dashboard</li>
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
					<?php include (getcwd() . '/views/' .'user/asideuser.php') ?>

					<!-- /ASIDE -->

					<!-- STORE -->
					<div class="col-lg-9 col-12">
						<section id="why-us" class="why-us">
							<div class="container">


								<div class="icon-boxes d-flex flex-column justify-content-center">
									<div class="row">
										<div class="col-xl-4 d-flex align-items-stretch">
											<div class="icon-box mt-4 mt-xl-0">
												<i class="bx bx-receipt"></i>
												<h4>Name</h4>
												<h5>
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['fullname']; ?>
												</h5>
											</div>
										</div>
										<div class="col-xl-4 d-flex align-items-stretch">
											<div class="icon-box mt-4 mt-xl-0">
												<i class="bx bx-cube-alt"></i>
												<h4>Email</h4>
												<h5>
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['email']; ?>
												</h5>

											</div>
										</div>
										<div class="col-xl-4 d-flex align-items-stretch">
											<div class="icon-box mt-4 mt-xl-0">
												<i class="bx bx-images"></i>
												<h4>Phone Number</h4>
												<h5>
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['phone_number']; ?>
												</h5>

											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 d-flex align-items-stretch">
											<div class="icon-box mt-4 mt-xl-0">
												<i class="bi bi-cart-check-fill"></i>
												<h4>Recent Orders</h4>
												<!-- <h5> 
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['username']; ?>
												</h5> -->
												<!-- <section id="recent-order" class="recent-order">
													<div class="container">

														<div class="recent-order-slider swiper" data-aos="fade-up"
															data-aos-delay="100">
															<div class="swiper-wrapper">

																<div class="swiper-slide">
																	<div class="order-wrap  ">
																		<div class="order-item">
																			<h3>15/05/2024</h3>
																			<h4>429005913846673</h4>
																			<h5>RM 18.99</h5>
																			<div class="body"> <img
																					src="assets/img/testimonials/testimonials-2.jpg"
																					class="order-img" alt=""><p>PC COMPUTER</p>
																			</div>


																		</div>
																	</div>
																</div>
						
															</div>
															<div class="swiper-pagination"></div>
														</div>

													</div>
												</section> -->
												No Orders Yet
											</div>
										</div>


									</div>
								</div><!-- End .content-->

							</div>
						</section>
					</div>


					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include (getcwd() . '/views/' .'footer.php') ?>

	<!-- End Footer -->

	<?php include (getcwd() . '/views/' .'preloader.php') ?>

	<?php include (getcwd() . '/views/' .'backtotoparrow.php') ?>

	<?php include (getcwd() . '/views/' .'script.php') ?>




</body>

</html>