<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>The Project | Home</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php bloginfo('stylesheet_directory');?>/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php bloginfo('stylesheet_directory');?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="<?php bloginfo('stylesheet_directory');?>/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php bloginfo('stylesheet_directory');?>/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory');?>/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory');?>/css/animations.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory');?>/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory');?>/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="<?php bloginfo('stylesheet_directory');?>/plugins/hover/hover-min.css" rel="stylesheet">

		<!-- The Project's core CSS file -->
		<link href="<?php bloginfo('stylesheet_directory');?>/css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<link href="<?php bloginfo('stylesheet_directory');?>/css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="<?php bloginfo('stylesheet_directory');?>/css/skins/dark_red.css" rel="stylesheet">


		<!-- Custom css -->
		<link href="<?php bloginfo('stylesheet_directory');?>/css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-container start -->
			<div class="header-container">


				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->


				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ -->
				<header class="header dark fixed clearfix">

					<div class="container">
						<div class="row">
							<div class="col-md-3 ">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- header dropdown buttons -->
									<div class="header-dropdown-buttons visible-xs">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form role="search" class="search-box margin-clear">
														<div class="form-group has-feedback">
															<input type="text" class="form-control" placeholder="Search">
															<i class="icon-search form-control-feedback"></i>
														</div>
													</form>
												</li>
											</ul>
										</div>
									</div>
									<!-- header dropdown buttons end-->

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="/index.php"><img id="logo_img" src="images/logo_light_blue.png" alt="The Project"></a>
									</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
										Your dream design
									</div>

								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">

								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">
											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>

											</div>

												<?php
												 	wp_nav_menu( array (
														'theme_location'	=> 'primary',
														'container'				=> 'nav',
														'container_class'	=> 'navbar-collapse collapse',
														'menu_class'			=> 'nav navbar-nav navbar-right'
													));
												?>
												<!-- main-menu end -->

												<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs ">
													<div class="btn-group dropdown">
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
															<li>
																<form role="search" class="search-box margin-clear">
																	<div class="form-group has-feedback">
																		<input type="text" class="form-control" placeholder="Search">
																		<i class="icon-search form-control-feedback"></i>
																	</div>
																</form>
															</li>
														</ul>
													</div>
												</div>
												<!-- header dropdown buttons end-->

											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-right end -->

							</div>
						</div>
					</div>

				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
