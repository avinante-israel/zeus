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

		<div id="primary" class="content-area container-fluid col-lg-9">
			<main id="main" class="site-main" role="main">

				<h1><?php the_title(); ?> Us:</h1>
				
				<?php while( have_posts() ) : the_post(); ?>
				<div id="contact" class="row">
					<div class="form-group col-sm-8">
						<div class="col-sm-8">
							<input class="form-control" type="text" placeholder="Name:" />
							<input class="form-control" type="text" placeholder="Email:" />
							<input class="form-control" type="text" placeholder="Contact:" />
							<input class="form-control" type="text" placeholder="Subject:" />
						</div>
						<div class="col-sm-12">
							<textarea class="form-control" rows="5" placeholder="Message:"></textarea>
						</div>
						<div class="col-sm-12">
							<a href="#" class="btn btn-default">Send</a>
						</div>
					</div>
					<div class="col-sm-4">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- .container-fluid -->

<?php get_footer(); ?>
