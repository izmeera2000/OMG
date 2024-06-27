<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>


<body>

	<!-- ======= Top Bar ======= -->
	<?php include('topbar.php') ?>


	<!-- ======= Header ======= -->
	<?php include('header.php') ?>


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

	<section class="breadcrumbs" >
			<div class="container">


			</div>
		</section>



		<!-- ======= Appointment Section ======= -->
		<section id="appointment" class="appointment section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Register</h2>
					<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
						sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
						ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
				</div>

				<form action="forms/appointment.php" method="post" role="form" class="php-email-form">
					<div class="row">
						<div class="col-md-6 col-12 mt-3 mt-md-0 form-group">
						<label for="name" class="form-label">Username or Email address</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Please Enter Your Username Or Email"
								data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-6 col-12 form-group mt-3 mt-md-0">
						<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Please Enter Your Password"
							aria-describedby="passwordhelp" data-msg="Please enter a valid email">
							<div class="validate"></div>
							<div id="passwordhelp" class="form-text"><a href="help.php">Forgot password?</a></div>

						</div>

					</div>

					<div class="text-center mt-3"><button type="submit">Register</button></div>


					<div  class="text-center mt-5 mt-md-3">Already got an account? <a href="register.php">Login</a> here.</div>

				</form>

			</div>
		</section>
		<!-- End Appointment Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include('footer.php') ?>

	<!-- End Footer -->


	<?php include('preloader.php') ?>
	
	<?php include('backtotoparrow.php') ?>

	<?php include('script.php') ?>


</body>

</html>