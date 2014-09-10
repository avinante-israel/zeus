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
 Template Name: Services
 */
 
get_header(); ?>

		<div id="primary" class="content-area container-fluid col-lg-9 pull-right">
			<main id="main" class="site-main" role="main">
				<?php the_title(); ?>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
									'post_type'			=> 'post',
									'posts_per_page'	=> 6,
									'paged'					=> $paged,
									'cat'						=> 8,
									'order'					=> 'ASC'
								);
					query_posts($args);
				?>
				<div class="row">
					<?php while( have_posts() ) : the_post();?>
						
							<div class="col-sm-4"><?php the_post_thumbnail(); ?></div>
						
					<?php endwhile; ?>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- .container-fluid -->

<?php get_footer(); ?>
