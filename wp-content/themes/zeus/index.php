<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package zeus
 */

get_header(); ?>

		<div id="primary" class="content-area container-fluid col-lg-9 pull-right">
			<main id="main" class="site-main" role="main">
				<div id="banner-carousel" class="carousel slide row" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo get_template_directory_uri() . "/inc/images/banner.jpg" ?>" style="width: 100%;"/>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri() . "/inc/images/banner.jpg" ?>" style="width: 100%;"/>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container-fluid -->
	
	<div class="container-fluid">
		<div id="capabilities" class="row">
			<div class="col-sm-3 for-capabilities">
				<h4>Capabilities</h4>
			</div>
			<div class="col-sm-9">
				<?php wp_nav_menu( array( 'theme_location' => 'capabilities-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
			</div>
		</div>
		
		<div id="category-content" class="row">
		<div style="margin-top: 30px;"></div>
			<div class="col-sm-4 col-sm-push-4">
				<div class="col-xs-4" style="padding: 0px;">
					<img src="<?php echo get_template_directory_uri() . "/inc/images/printing.png" ?>" />
				</div>
				<div class="col-xs-8" style="background-color: #62c88d;">
					<p>Lorem ipsum dolor Consectetuer Adipiscing elit Diam nonummy Nibh euismod Tincidunt ut laoreet</p>
				</div>
			</div>
			<div class="col-sm-4 col-sm-push-4">
				<div class="col-xs-4">
					<img src="<?php echo get_template_directory_uri() . "/inc/images/non-printing.png" ?>" />
				</div>
				<div class="col-xs-8" style="background-color: #b1b2b4;">
					<p>Lorem ipsum dolor Consectetuer Adipiscing elit Diam nonummy Nibh euismod Tincidunt ut laoreet</p>
				</div>
			</div>
		</div>
		<div style="margin-top: 30px;"></div>
	</div>

<?php get_footer(); ?>
