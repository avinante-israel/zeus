<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package zeus
 */
?>

	</div><!-- #content -->
	<div style="margin-bottom: 50px;"></div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="col-sm-6">
				<p>&copy; All rights reserved. Zeus Label and Silkscreen Company</p>
			</div>
			<div class="col-sm-6">
				<div class="pull-right">
					<ul class="list-inline">
						<li><span><a href="#"><img src="<?php echo get_template_directory_uri() . '/inc/images/social/footer-facebook.png' ?>" /></a></span></li>
						<li><span><a href="#"><img src="<?php echo get_template_directory_uri() . '/inc/images/social/footer-twitter.png' ?>" /></a></span></li>
						<li><span><a href="#"><img src="<?php echo get_template_directory_uri() . '/inc/images/social/footer-googleplus.png' ?>" /></a></span></li>
						<li><span><a href="#"><img src="<?php echo get_template_directory_uri() . '/inc/images/social/footer-instagram.png' ?>" /></a></span></li>
						<li><span><a href="#"><img src="<?php echo get_template_directory_uri() . '/inc/images/social/footer-pinterest.png' ?>" /></a></span></li>
					</ul>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
	//add class to ul
	$(document).ready(function(){
		$("#categories ul").addClass("list-inline");
	});
	
	//add class to first li
	$(document).ready(function(){
		$("#capabilities ul li:first-child").addClass("first");
	});
	
	//effect on hover
	$( document ).ready(function() {
		$("[rel='tooltip']").tooltip();    
	 
		$('.thumbnail').hover(
			function(){
				$(this).find('.title').slideDown(250); //.fadeIn(250)
			},
			function(){
				$(this).find('.title').slideUp(250); //.fadeOut(205)
			}
		); 
	});
</script>

</body>
</html>
