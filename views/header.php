<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center">

		<!-- <h1 class="logo me-auto"><a href="index.html">Omg Computer</a></h1> -->
		<!-- Uncomment below if you prefer to use an image logo -->
		<a href="" class="logo me-auto"><img src="<?php echo $site_url ?>assets/img/logo3.png" alt="" class="img-fluid"></a>

		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link " href="<?php echo $site_url ?>">Home</a></li>
				<li><a class="nav-link " href="<?php echo $site_url ?>about">About</a></li>
				<li><a class="nav-link " href="<?php echo $site_url ?>shop#shop">Shop</a></li>
				<li><a class="nav-link " href="<?php echo $site_url ?>services">Services</a></li>
				<li class="d-flex d-md-none align-items-center mt-3">
					<div class="d-flex social-links align-items-center">
						<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
						<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
					</div>
				</li>
				<!-- <li><a class="nav-link scrollto" href="#doctors">Team</a></li> -->
				<!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">Drop Down 1</a></li>
							<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
										class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Deep Drop Down 1</a></li>
									<li><a href="#">Deep Drop Down 2</a></li>
									<li><a href="#">Deep Drop Down 3</a></li>
									<li><a href="#">Deep Drop Down 4</a></li>
									<li><a href="#">Deep Drop Down 5</a></li>
								</ul>
							</li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li> -->
				<li><a class="nav-link  d-none d-md-flex" href="<?php echo $site_url ?>contact">Contact</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		<!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">1</a> -->
		<!-- <button type="button" class="btn position-relative appointment-btn scrollto">
				<i class="bi bi-cart"></i>
				<div class="d-none d-xl-block">
					My Cart
				</div>
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					99+
					<span class="visually-hidden">unread messages</span>
				</span>
			</button> -->
		<!-- <button href="#appointment" class="btn appointment-btn scrollto me-md-3"><i class="bi bi-person"></i><br>
				<div class="d-none d-xl-block">
					My Account
				</div>
			</button> -->
		<!-- <a href="login.php" class="btn appointment-btn  me-md-3"><i class="bi bi-person"></i><br>
			<div class="d-none d-xl-block">
				Login
			</div>
		</a> -->
		<?php if (isset($_SESSION['user_details'])): ?>
			<!-- <button  class="btn appointment-btn  me-md-3"><i class="bi bi-person-fill"></i><br>

			</button> -->
			<div class="log-dropdown">
				<a class="btn appointment-btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false">
					<i class="bi bi-person-fill"></i>
				</a>

				<ul class="log-dropdown dropdown-menu">
					<li><a class="dropdown-item  name " href="<?php echo $site_url ?>user"><?php echo $_SESSION['user_details']['username']?></a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item " href="<?php echo $site_url ?>user/profile"><i class="bi bi-person-circle"></i> Profile</a></li>
					<li><a class="dropdown-item " href="<?php echo $site_url ?>user/addressbook"><i class="bi bi-geo-alt"></i> Address</a></li>

					<li><a class="dropdown-item" href="<?php echo $site_url ?>user/cart"><i class="bi bi-bag-fill"></i> Cart</a></li>
					<li><a class="dropdown-item" href="<?php echo $site_url ?>user/myorders"><i class="bi bi-truck"></i> My Orders</a></li>
					<li><a class="dropdown-item" href="<?php echo $site_url ?>user/cancelandreturn"><i class="bi bi-send-x"></i> Cancellations & Returns</a></li>
					<li><a class="dropdown-item" href="<?php echo $site_url ?>logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
					
				</ul>
			</div>
		<?php endif ?>

		<?php if (!isset($_SESSION['user_details'])): ?>
			<a href="<?php echo $site_url ?>login" class="btn appointment-btn  me-md-3"><i class="bi bi-person"></i><br>
				<div class="d-none d-xl-block">
					Login
				</div>
			</a>
		<?php endif ?>
	</div>
</header><!-- End Header -->