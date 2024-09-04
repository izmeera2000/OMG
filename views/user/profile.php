
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
					<h2>Profile</h2>
					<ol>
						<li><a href="<?php echo $site_url ?>">Home</a></li>
						<li><a href="<?php echo $site_url ?>user">Account</a></li>
						<li>Profile</li>
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

								<form action="profile.php" method="post" role="form">
									<div class="icon-boxes d-flex flex-column justify-content-center">
										<div class="row">
											<div class="col-xl-4 d-flex align-items-stretch">
												<div class="icon-box mt-4 mt-xl-0">
													<i class="bx bx-receipt"></i>
													<h4>Name</h4>
													<!-- <h5> -->
													<input type="text" name="fullname" class="form-control" value="<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['fullname']; ?>">


													<!-- </h5> -->
												</div>
											</div>
											<div class="col-xl-4 d-flex align-items-stretch">
												<div class="icon-box mt-4 mt-xl-0">
													<i class="bx bx-cube-alt"></i>
													<h4>Email</h4>
													<!-- <h5>
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['email']; ?>
												</h5> -->
													<input name="email" type="email" class="form-control" value="<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['email']; ?>">
												</div>
											</div>
											<div class="col-xl-4 d-flex align-items-stretch">
												<div class="icon-box mt-4 mt-xl-0">
													<i class="bx bx-images"></i>
													<h4>Phone Number</h4>
													<!-- <h5>
													<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['phone_number']; ?>
												</h5> -->
													<input type="text" name="phone" class="form-control" value="<?php if (isset($_SESSION['user_details']))
														echo $_SESSION['user_details']['phone_number']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12 d-flex align-items-stretch">
												<div class="icon-box mt-4 mt-xl-0">

													<button type="submit" name="edit_profile"
														class="btn  align-items-center text-center align-middle"><i
															class="bi bi-gear-fill align-middle"></i> Save Changes</button>

												</div>
											</div>


										</div>
									</div><!-- End .content-->
								</form>
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