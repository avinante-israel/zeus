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
	
	<div id="categories" class="container-fluid">
		<?php
			$args = array(
							'orderby'		=> 'ID',
							'order'			=> 'ASC',
							'style'			=> 'list',
							'title_li'			=> __(' '),
							'echo'			=> 1,
							'hide_empty'	=> 0,
							'exclude'		=> 1,
							'items_wrap'	=> '<ul class="list-inline"></ul>'
						);
		?>
		<div class="row">
			<div id="capabilities" class="col-sm-3" style="width: 240px">
				<h4 style="color: #ffffff;">Capabilities</h4>
			</div>
			<div id="category-link" class="col-sm-9">
				<?php wp_list_categories($args); ?>
			</div>
		</div>
		<h1>HELLO</h1>
	</div>

<?php get_footer(); ?>
