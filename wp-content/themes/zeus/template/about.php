<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package zeus
 */

 /*
 Template Name: About
 */
 
get_header(); ?>

		<div id="primary" class="content-area container-fluid col-lg-9 pull-right">
			<main id="main" class="site-main" role="main">

				<div id="banner">
					<img src="<?php echo get_template_directory_uri() . "/inc/images/banner-about.jpg" ?>" style="width: 100%;" />
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container-fluid -->
	
	<div style="margin-top: 20px;"></div>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="about" class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="col-sm-9">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
	<div style="margin-top: 20px;"></div>

<?php get_footer(); ?>
