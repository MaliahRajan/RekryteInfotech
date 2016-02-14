<?php /* Smarty version 3.1.27, created on 2016-02-14 10:47:05
         compiled from "C:\xampp\htdocs\rekryte\RekryteInfotechFinal\application\views\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2685356c04d198a3c34_24560693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f6eac015a62adaa22fd731ef2076650fb05e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rekryte\\RekryteInfotechFinal\\application\\views\\templates\\header.tpl',
      1 => 1455443223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2685356c04d198a3c34_24560693',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c04d198e3c53_51102370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c04d198e3c53_51102370')) {
function content_56c04d198e3c53_51102370 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2685356c04d198a3c34_24560693';
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 4.4.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="plugins/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="plugins/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="plugins/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="plugins/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="plugins/rs-plugin/css/layers.css" media="screen">
		<link rel="stylesheet" href="plugins/rs-plugin/css/navigation.css" media="screen">
		<link rel="stylesheet" href="plugins/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">		

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<?php echo '<script'; ?>
 src="plugins/modernizr/modernizr.min.js"><?php echo '</script'; ?>
>

	</head>
	<body>
	
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" width="280" height="75" data-sticky-width="220" data-sticky-height="50" data-sticky-top="33" src="img/logo-rekryte.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
								<div class="header-search hidden-xs">
<!-- 										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form> -->
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="../../../www.facebook.com/index.htm" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="../../../www.twitter.com/index.htm" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="../../../www.linkedin.com/index.htm" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown active">
														<a class="dropdown-toggle" href="index.html">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a href="index-overview.html">
																	Overview
																</a>
															</li>
															<li>
																<a href="index.html">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a href="index-classic.html">Classic</a>
																<ul class="dropdown-menu">
																	<li><a href="index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a href="index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a href="index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a href="index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a href="index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="index-corporate.html">Corporate <span class="tip">new</span></a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a href="#">Corporate - Versions <span class="tip tip-dark">hot</span></a>
																		<ul class="dropdown-menu">
																			<li><a href="index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1</a></li>
																			<li><a href="index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-version2.jpg">Corporate - Version 2</a></li>
																			<li><a href="index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-version3.jpg">Corporate - Version 3</a></li>
																			<li><a href="index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-version4.jpg">Corporate - Version 4</a></li>
																			<li><a href="index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-version5.jpg">Corporate - Version 5</a></li>
																			<li><a href="index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-version6.jpg">Corporate - Version 6</a></li>
																			<li><a href="index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-version7.jpg">Corporate - Version 7</a></li>
																			<li><a href="index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-version8.jpg">Corporate - Version 8</a></li>
																		</ul>
																	</li>
																	<li><a href="index-corporate-hosting.html" data-thumb-preview="img/previews/preview-corporate-hosting.jpg">Corporate - Hosting</a></li>
																	<li><a href="index-corporate-digital-agency.html" data-thumb-preview="img/previews/preview-corporate-digital-agency.jpg">Corporate - Digital Agency</a></li>
																	<li><a href="index-corporate-law-office.html" data-thumb-preview="img/previews/preview-corporate-law-office.jpg">Corporate - Law Office <span class="tip">new</span></a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">One Page</a>
																<ul class="dropdown-menu">
																	<li><a href="index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-toggle" href="#">
															Shortcodes
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-accordions.html">Accordions</a></li>
																				<li><a href="shortcodes-toggles.html">Toggles</a></li>
																				<li><a href="shortcodes-tabs.html">Tabs</a></li>
																				<li><a href="shortcodes-icons.html">Icons</a></li>
																				<li><a href="shortcodes-icon-boxes.html">Icon Boxes</a></li>
																				<li><a href="shortcodes-carousels.html">Carousels</a></li>
																				<li><a href="shortcodes-modals.html">Modals</a></li>
																				<li><a href="shortcodes-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-buttons.html">Buttons</a></li>
																				<li><a href="shortcodes-labels.html">Labels</a></li>
																				<li><a href="shortcodes-lists.html">Lists</a></li>
																				<li><a href="shortcodes-image-gallery.html">Image Gallery</a></li>
																				<li><a href="shortcodes-image-frames.html">Image Frames</a></li>
																				<li><a href="shortcodes-testimonials.html">Testimonials</a></li>
																				<li><a href="shortcodes-blockquotes.html">Blockquotes</a></li>
																				<li><a href="shortcodes-word-rotator.html">Word Rotator</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-call-to-action.html">Call to Action</a></li>
																				<li><a href="shortcodes-pricing-tables.html">Pricing Tables</a></li>
																				<li><a href="shortcodes-tables.html">Tables</a></li>
																				<li><a href="shortcodes-progressbars.html">Progress Bars</a></li>
																				<li><a href="shortcodes-counters.html">Counters</a></li>
																				<li><a href="shortcodes-sections-parallax.html">Sections &amp; Parallax</a></li>
																				<li><a href="shortcodes-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
																				<li><a href="shortcodes-sticky-elements.html">Sticky Elements</a></li>
																			</ul>
																		</div>
																		<div class="col-md-3">
																			<span class="dropdown-mega-sub-title">Shortcodes 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a href="shortcodes-headings.html">Headings</a></li>
																				<li><a href="shortcodes-dividers.html">Dividers</a></li>
																				<li><a href="shortcodes-animations.html">Animations</a></li>
																				<li><a href="shortcodes-medias.html">Medias</a></li>rn
																				<li><a href="shortcodes-maps.html">Maps</a></li>
																				<li><a href="shortcodes-arrows.html">Arrows</a></li>
																				<li><a href="shortcodes-alerts.html">Alerts</a></li>
																				<li><a href="shortcodes-posts.html">Posts</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Pages
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a href="#">Shop</a>
																<ul class="dropdown-menu">
																	<li><a href="shop-full-width.html">Shop - Full Width</a></li>
																	<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
																	<li><a href="shop-product-full-width.html">Shop - Product Full Width</a></li>
																	<li><a href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
																	<li><a href="shop-cart.html">Shop - Cart</a></li>
																	<li><a href="shop-login.html">Shop - Login</a></li>
																	<li><a href="shop-checkout.html">Shop - Checkout</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Blog</a>
																<ul class="dropdown-menu">
																	<li><a href="blog-full-width.html">Blog Full Width</a></li>
																	<li><a href="blog-large-image.html">Blog Large Image</a></li>
																	<li><a href="blog-medium-image.html">Blog Medium Image</a></li>
																	<li><a href="blog-timeline.html">Blog Timeline</a></li>
																	<li><a href="blog-post.html">Single Post</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Layouts</a>
																<ul class="dropdown-menu">
																	<li><a href="page-full-width.html">Full Width</a></li>
																	<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a href="page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a href="page-404.html">404 Error</a></li>
																	<li><a href="page-coming-soon.html">Coming Soon</a></li>
																	<li><a href="page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a href="sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li><a href="page-custom-header.html">Custom Header</a></li>
															<li><a href="page-team.html">Team</a></li>
															<li><a href="page-services.html">Services</a></li>
															<li><a href="page-careers.html">Careers</a></li>
															<li><a href="page-our-office.html">Our Office</a></li>
															<li><a href="page-faq.html">FAQ</a></li>
															<li><a href="page-login.html">Login / Register</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Portfolio
														</a>
														<ul class="dropdown-menu">
															<li><a href="portfolio-4-columns.html">4 Columns</a></li>
															<li><a href="portfolio-3-columns.html">3 Columns</a></li>
															<li><a href="portfolio-2-columns.html">2 Columns</a></li>
															<li><a href="portfolio-lightbox.html">Portfolio Lightbox</a></li>
															<li><a href="portfolio-timeline.html">Portfolio Timeline</a></li>
															<li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
															<li><a href="portfolio-single-project.html">Single Project</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															About Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About Us</a></li>
															<li><a href="about-us-basic.html">About Us - Basic</a></li>
															<li><a href="about-me.html">About Me</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="#">
															Contact Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="contact-us.html">Contact Us - Basic</a></li>
															<li><a href="contact-us-advanced.php">Contact Us - Advanced</a></li>
														</ul>
													</li>

													<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
														<a class="dropdown-toggle" href="page-login.html">
															<i class="fa fa-user"></i> Sign In
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-md-12">

																			<div class="signin-form">

																				<span class="dropdown-mega-sub-title">Sign In</span>

																				<form action="/" id="frmSignIn" method="post">
																					<div class="row">
																						<div class="form-group">
																							<div class="col-md-12">
																								<label>Username or E-mail Address</label>
																								<input type="text" value="" class="form-control input-lg" tabindex="1">
																							</div>
																						</div>
																					</div>
																					<div class="row">
																						<div class="form-group">
																							<div class="col-md-12">
																								<a class="pull-right mt-none p-none" id="headerRecover" href="#">(Lost Password?)</a>
																								<label>Password</label>
																								<input type="password" value="" class="form-control input-lg" tabindex="2">
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
																							<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp" class="p-none m-none ml-xs">Sign Up</a></p>

																			</div>

																	<div class="signup-form">
																		<span class="dropdown-mega-sub-title">Create Account</span>

																		<form action="/" id="frmSignUp" method="post">
																			<div class="row">
																				<div class="form-group">
																					<div class="col-md-12">
																						<label>E-mail Address</label>
																						<input type="text" value="" class="form-control input-lg">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="form-group">
																					<div class="col-md-6">
																						<label>Password</label>
																						<input type="password" value="" class="form-control input-lg">
																					</div>
																					<div class="col-md-6">
																						<label>Re-enter Password</label>
																						<input type="password" value="" class="form-control input-lg">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="submit" value="Create Account" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
																				</div>
																			</div>
																		</form>

																		<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn" class="p-none m-none ml-xs">Log In</a></p>
																	</div>

																	<div class="recover-form">
																		<span class="dropdown-mega-sub-title">Reset My Password</span>
																		<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

																		<form action="/" id="frmResetPassword" method="post">
																			<div class="row">
																				<div class="form-group">
																					<div class="col-md-12">
																						<label>E-mail Address</label>
																						<input type="text" value="" class="form-control input-lg">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="submit" value="Submit" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
																				</div>
																			</div>
																		</form>

																		<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel" class="p-none m-none ml-xs">Log In</a></p>
																	</div>

																</div>
															</div>
														</div>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
	<?php }
}
?>