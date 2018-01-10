<?php
/**
 * The template for displaying pages
 */
get_header(); 


$result_count = 0;

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 

			$search_query = get_search_query(); 

		?>
		<div class="content-width search-results-page">
			
			<div class="search-header">
			<h1>Search</h1>

			<?php if($search_query){ ?>

			<h3><span><?php echo $search_query; ?></span></h3>

			<?php } ?>

			</div>

			<div class="search-results">
				<?php
				while ( have_posts() ) : the_post();

					if($post->post_type != 'testimonial') {
				?>

					<div class="search-result">
						<h3><?php the_title();?> </h3>
						<div>
							<?php 

							$excerpt = get_the_excerpt();
							if($excerpt) {
								
								echo $excerpt;

							} else {

								echo get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);

							};

							?>
						</div>
								<a href="<?php the_permalink(); ?>" class="button button-blue ">Read More</a>
					</div>


	            
				<?php 

						$result_count++;

					}

				endwhile; // End of the loop.
				?>

				<?php 

				if($result_count == 0) { ?>

				<div class="search-result">
						<h3>No results found.</h3>
				</div>

				<?php } ?>


				 
			</div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
