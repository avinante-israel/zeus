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
 Template Name: Contact
 */
 
get_header(); ?>

		<div id="primary" class="content-area container-fluid col-lg-9 pull-right">
			<main id="main" class="site-main" role="main">

				<h1><?php the_title(); ?> Us:</h1>
				
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Name:" />
					<input class="form-control" type="text" placeholder="Email:" />
					<input class="form-control" type="text" placeholder="Contact:" />
					<input class="form-control" type="text" placeholder="Subject:" />
					<textarea class="form-control" row="100" placeholder="Message:"></textarea>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- .container-fluid -->

<?php get_footer(); ?>
