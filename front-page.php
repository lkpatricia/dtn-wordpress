<?php
/**
 * The template for displaying pages
 */
get_header(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
	$subheadline = get_field('subheadline');
?>

<div id="hero-text-mobile">

		<div class="content-width">
			
			<?php echo $subheadline; ?>

		</div>

</div>

			<?php
			while ( have_posts() ) : the_post();
			
				include( get_template_directory() . '/templates-layout/flexible-layout-area.php' );

				include( get_template_directory() . '/templates-layout/half-panel-section.php' );

			endwhile; // End of the loop.
			?>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
