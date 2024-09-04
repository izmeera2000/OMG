
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
					<h2>Address Book</h2>
					<ol>
					<li><a href="<?php echo $site_url ?>">Home</a></li>
					<li><a href="<?php echo $site_url ?>user">Account</a></li>
						<li>Address Book</li>
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
								<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col" id="testput">Address</th>
											<th scope="col">Name</th>
											<th scope="col">State, City & Postcode </th>
											<th scope="col">Phone Number</th>
											<th scope="col"></th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php
										$user_id = $_SESSION['user_details']['id'];
										$query = "SELECT * FROM user_address WHERE  user_id='$user_id'";
										$results = mysqli_query($db, $query);
										if (mysqli_num_rows($results) > 0) {
											// $_SESSION['success'] = "You are now logged in";
											//   $user = mysqli_fetch_assoc($results);
										
											while ($user_address = mysqli_fetch_assoc($results)) {
												?>
												<tr>
													<th scope="row"><?php echo $user_address['address'] ?></th>
													<td><?php echo $user_address['name'] ?></td>
													<td><?php echo $user_address['state'] ?> -
														<?php echo $user_address['city'] ?> -
														<?php echo $user_address['postcode'] ?>
													</td>
													<td><?php echo $user_address['phone'] ?></td>
													<td><?php echo ($user_address['default_address']) ? "Default Address" : " " ?>
													</td>
													<td><button type="button" class="btn btn-primary" id="edit_address"
															data-id="<?php echo $user_address['id'] ?>">
															<i class="bi bi-pencil"></i>
														</button></td>
												</tr>
												<?php
											}

											//   header('location: index.php');
										}
										?>
									</tbody>
								</table>
								</div>
								<button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
									data-bs-target="#addaddress">
									<i class="bi bi-plus"></i> Add Address

								</button>
							</div>
						</section>
					</div>


					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
		</section>
		<?php include (getcwd() . '/views/' .'modals.php') ?>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include (getcwd() . '/views/' .'footer.php') ?>

	<!-- End Footer -->

	<?php include (getcwd() . '/views/' .'preloader.php') ?>

	<?php include (getcwd() . '/views/' .'backtotoparrow.php') ?>

	<?php include (getcwd() . '/views/' .'script.php') ?>




</body>

</html>