
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


	<!-- ======= Hero Section ======= -->
	<!-- <section id="hero" class="d-flex align-items-center"> -->
	<!-- <div class="container">
			<h1>Welcome to <span>OMG</span></h1>
			<h2>We are a team of skilled engineers dedicated to <span>enhancing your computer experience</span></h2>
			<a href="#about" class="btn-get-started scrollto fw-bold">Get Started</a>
		</div> -->
	<!-- </section> -->
	<!-- End Hero -->

	<main id="main">

		<section class="breadcrumbs">
			<div class="container">


			</div>
		</section>



		<!-- ======= Appointment Section ======= -->
		<section  class="appointment section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Register</h2>
					<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
						sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
						ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
				</div>

				<form action="register" method="post"  class="php-email-form">
					<div class="row">
						<div class="col-md-6 col-12 mt-3 mt-md-0 form-group">
							<label for="username" class="form-label">Username</label>
							<input type="text" name="username" class="form-control" id="username"
								placeholder="Please Enter Your Username ">
							<!-- <div class="validate"></div> -->
						</div>

						<div class="col-md-6 col-12 mt-3 mt-md-0 form-group">
							<label for="fullname" class="form-label">Full Name</label>
							<input type="text" name="fullname" class="form-control" id="fullname"
								placeholder="Please Enter Your Full Name ">
							<!-- <div class="validate"></div> -->
						</div>

						<div class="col-md-6 col-12 mt-3 mt-md-0 form-group">
							<label for="email" class="form-label">Email</label>
							<input type="text" name="email" class="form-control" id="email"
								placeholder="Please Enter Your Email">
							<!-- <div class="validate"></div> -->
						</div>

						<div class="col-md-6 col-12 mt-3 mt-md-0 form-group">
							<label for="phone" class="form-label">Phone Number</label>
							<input type="text" name="phone" class="form-control" id="phone"
								placeholder="Please Enter Your Phone Number">
							<!-- <div class="validate"></div> -->
						</div>

						<div class="col-md-6 col-12 form-group mt-3 mt-md-0">
							<label for="password1" class="form-label">Password</label>
							<input type="password" class="form-control" name="password1" id="password1"
								placeholder="Please Enter Your Password" aria-describedby="passwordhelp">
							<!-- <div class="validate"></div> -->
							<!-- <div id="passwordhelp" class="form-text"><a href="help.php">Forgot password?</a></div> -->

						</div>


						<div class="col-md-6 col-12 form-group mt-3 mt-md-0">
							<label for="password2" class="form-label">Confirm Password</label>
							<input type="password" class="form-control" name="password2" id="password2"
								placeholder="Please Enter Your Password" aria-describedby="passwordhelp">
							<!-- <div class="validate"></div> -->
							<!-- <div id="passwordhelp" class="form-text"><a href="help.php">Forgot password?</a></div> -->

						</div>

					</div>

					<div class="text-center mt-5"><button type="submit" name="reg_user" >Register</button></div>


					<div class="text-center mt-5 mt-md-3">Already got an account? <a href="login">Login</a> here.
					</div>

				</form>

			</div>
		</section>
		<!-- End Appointment Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include (getcwd() . '/views/' .'footer.php') ?>

	<!-- End Footer -->


	<?php include (getcwd() . '/views/' .'preloader.php') ?>

	<?php include (getcwd() . '/views/' .'backtotoparrow.php') ?>

	<?php include (getcwd() . '/views/' .'script.php') ?>


</body>

</html>