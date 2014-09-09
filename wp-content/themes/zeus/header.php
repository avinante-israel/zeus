<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zeus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.min.js"></script>
  <script src="https://github.com/scottjehl/Respond/blob/master/src/respond.js"></script>
<![endif]-->

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'zeus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . "/inc/images/logo.png" ?>" /></a>
				</div>
				<div class="col-sm-6">
					<ul>
						<li>Call us at: <strong>+123-456-7890</strong></li>
						<li>Email us: <span>support@zues.com</span></li>
					</ul>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container-fluid">
	
		<nav id="side-menu" class="row container-fluid col-lg-4">
			<div class="sidebar-nav">
				<div class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="visible-xs navbar-brand">Menu</span>
					</div>
					<div id="menu" class="navbar-collapse collapse sidebar-navbar-collapse">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => FALSE, 'menu_class' => 'nav navbar-nav' ) ); ?>
					</div>
				</div>
			</div>
		</nav>
