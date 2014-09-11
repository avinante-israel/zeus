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
 Template Name: Item
 */
 
get_header(); ?>

		<div id="primary" class="content-area container-fluid col-lg-9 pull-right">
			<main id="main" class="site-main" role="main">
				<h1 id="items"><?php the_title(); ?>:</h1>
				<?php
					$item = get_the_ID();
					$cat = 0;
					if($item == 8){
						$cat = 8;
					}
					else if($item == 10){
						$cat = 9;
					}
					else{
						$cat = 0;
					}
				
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
									'post_type'			=> 'post',
									'posts_per_page'	=> 6,
									'paged'					=> $paged,
									'cat'						=> $cat,
									'order'					=> 'ASC'
								);
					query_posts($args);
				?>
				<div id="items" class="row">
					<?php while( have_posts() ) : the_post();?>
					
						<?php $count++; ?>
						<?php if($count%3 == 1) : ?>
							<div class="row">
								<div class="col-sm-4">
									<div class="thumbnail">
										<a href="<?php the_permalink(); ?>">
											<div class="caption">
												<h4><?php the_title(); ?></h4>
											</div>
										</a>
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						<?php elseif($count%3 == 2) : ?>
								<div class="col-sm-4">
									<div class="thumbnail">
										<a href="<?php the_permalink(); ?>">
											<div class="caption">
												<h4><?php the_title(); ?></h4>
											</div>
										</a>
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						<?php elseif($count%3 == 0) : ?>
								<div class="col-sm-4">
									<div class="thumbnail">
										<a href="<?php the_permalink(); ?>">
											<div class="caption">
												<h4><?php the_title(); ?></h4>
											</div>
										</a>
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
					<?php endwhile; ?>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- .container-fluid -->

<?php get_footer(); ?>