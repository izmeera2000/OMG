<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center">

		<!-- <h1 class="logo me-auto"><a href="index.html">Omg Computer</a></h1> -->
		<!-- Uncomment below if you prefer to use an image logo -->
		<a href="<?php echo $basePath2; ?>" class="logo me-auto"><img src="<?php echo $rootPath; ?>assets/img/logo5.png"
				alt="" class="img-fluid"></a>

		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link scrollto <?php echo setActive("$basePath2"); ?>"
						href="<?php echo $basePath2; ?>">Home</a></li>
				<li><a class="nav-link scrollto <?php echo setActive("$basePath2/about"); ?>"
						href="<?php echo $basePath2; ?>/about">About</a></li>
				<li><a class="nav-link scrollto <?php echo setActive("$basePath2/shop"); ?>"
						href="<?php echo $basePath2; ?>/shop">Shop</a></li>
				<li><a class="nav-link scrollto <?php echo setActive("$basePath2/services"); ?>"
						href="<?php echo $basePath2; ?>/services">Services</a></li>
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
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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


		<div class="dropdown">
			<button class="btn appointment-btn   " type="button" id="dropdownMenuButton1"
				data-bs-toggle="dropdown" aria-expanded="false">
				<i class="bi bi-person-fill"></i>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">My Account</a></li>
				<li><a class="dropdown-item" href="#">MY Orders</a></li>
				<li><a class="dropdown-item" href="#">Logout</a></li>
			</ul>
		</div>


		<button type="button" class="btn appointment-btn position-relative ">
			<i class="bi bi-cart"></i>
			<span class="position-absolute   start-100 translate-middle p-2  badge border border-light rounded-circle">
				<span class="visually-hidden">New alerts</span>
			</span>
		</button>

		
	</div>
</header><!-- End Header -->