<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Porto - Responsive HTML5 Template 3.1.0</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css" media="screen">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.css" media="screen">
		<link rel="stylesheet" href="/vendor/isotope/jquery.isotope.css" media="screen">
		<link rel="stylesheet" href="/vendor/mediaelement/mediaelementplayer.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">
		<link rel="stylesheet" href="/css/theme-blog.css">
		<link rel="stylesheet" href="/css/theme-shop.css">
		<link rel="stylesheet" href="/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css" media="screen">
		<link rel="stylesheet" href="/vendor/nivo-slider/nivo-slider.css" media="screen">
		<link rel="stylesheet" href="/vendor/nivo-slider/themes/default/default.css" media="screen">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="/css/theme-responsive.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/css/skins/default.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="/css/custom.css">

		<!-- Head Libs -->
		<script src="/vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>
	<body>

		<div class="body">
			<!-- HEADER/NAVIGATION START -->
			<header id="header">
				<div class="container">
					<h1 class="logo">
						<a href="/">
							<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="/img/logo.png">
						</a>
					</h1>
					<!-- SEARCH BAR -->
					<div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="icon icon-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<!-- SOCIAL PAGE LINKS -->
					<ul class="social-icons">
						<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
						<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
					</ul>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="contact-us.html"><i class="icon icon-angle-right"></i>Contact Us</a>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="icon icon-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li>
									<a href="#">
										Home
									</a>

								</li>
								<li>
									<a class="dropdown-toggle" href="#">
										About Us
									</a>
								</li>
								<li class="dropdown mega-menu-item mega-menu-fullwidth">
									<a class="dropdown-toggle" href="#">
										Categories
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">Categories</span>
																<ul class="sub-menu">
																	<li><a href="/beauty">Beauty</a></li>
																	<li><a href="/health">Health</a></li>
																	<li><a href="/home-garden">Home &amp Garden</a></li>
																	<li><a href="/auto">Auto</a></li>
																	<li><a href="/pets">Pets</a></li>
																	<li><a href="/events">Events</a></li>
																	<li><a href="/recreation">Recreation</a></li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>

								<!-- SIGN IN TAB & FORM START -->
								<li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
									<a class="dropdown-toggle" href="page-login.html">
										<i class="icon icon-user"></i> Sign In
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-12">

														<div class="signin-form">

															<span class="mega-menu-sub-title">Sign In</span>

															{{ Form::open(array('action' => 'HomeController@doLogin')) }}
																<div class="row">_
																	<div class="form-group">
																		<div class="col-md-12">
																			<input type="text" value="" class="form-control input-lg" placeholder="e-mail">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<a class="pull-right" id="headerRecover" href="#">(Lost Password?)</a>
																			<input type="password" value="" class="form-control input-lg" placeholder="password">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<span class="remember-box checkbox">
																			<label for="rememberme">
																				<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																			</label>
																		</span>
																	</div>
																	<div class="col-md-6">
																		<input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															{{ Form::close() }}

															<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp">Sign Up!</a></p>

														</div>

														<div class="signup-form">
															<span class="mega-menu-sub-title">Create Account</span>

															<form action="" id="" type="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<input type="text" value="" class="form-control input-lg" placeholder="e-mail">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-6">
																			<input type="password" value="" class="form-control input-lg" placeholder="password">
																		</div>
																		<div class="col-md-6">
																			<input type="password" value="" class="form-control input-lg" placeholder="re-enter password">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="submit" value="Create Account" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn">Log In!</a></p>
														</div>

														<div class="recover-form">
															<span class="mega-menu-sub-title">Reset My Password</span>
															<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

															<form action="" id="" type="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<input type="text" value="" class="form-control input-lg" placeholder="e-mail">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="submit" value="Submit" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel">Log In!</a></p>
														</div>

													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<!-- END SIGN IN TAB & FORM -->
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<!-- END HEADER/NAVIGATION -->

@yield('content')


			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 112 E Pecan St, San Antonio, TX</p></li>
									<li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> (210) 865-3782</p></li>
									<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@prosifter.com">info@prosifter.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="/img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script src="/vendor/jquery.js"></script>
		<script src="/vendor/jquery.appear.js"></script>
		<script src="/vendor/jquery.easing.js"></script>
		<script src="/vendor/jquery.cookie.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/vendor/jquery.validate.js"></script>
		<script src="/vendor/jquery.stellar.js"></script>
		<script src="/vendor/jquery.knob.js"></script>
		<script src="/vendor/jquery.gmap.js"></script>
		<script src="/vendor/twitterjs/twitter.js"></script>
		<script src="/vendor/isotope/jquery.isotope.js"></script>
		<script src="/vendor/owl-carousel/owl.carousel.js"></script>
		<script src="/vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/vendor/mediaelement/mediaelement-and-player.js"></script>

		<!-- Theme Initializer -->
		<script src="/js/theme.plugins.js"></script>
		<script src="/js/theme.js"></script>

		<!-- Current Page JS -->
		<script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="/vendor/nivo-slider/jquery.nivo.slider.js"></script>
		<script src="/js/views/view.home.js"></script>

		<!-- Custom JS -->
		<script src="/js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
		 -->

	</body>
</html>
