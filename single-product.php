<?php
/**
 * The template for Single product
 */
get_header();

?>




<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">





			<?php
			while ( have_posts() ) : the_post();



				include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' );

				?>

				<?php 

					$form = get_field('form');
					$cta = get_field('cta_text',$form->ID); 
					$external = get_field('is_this_a_external_form',$form->ID);

					$product_hide_form = get_field('product_hide_form');

					if($external) {
						$cta_link = get_field('external_form_link',$form->ID);
						$target = 'target="_blank"';
					} else {
						$cta_link = '#freedemo';
						$target = '';
					}

				?>


				<div class="content-width content-formatting product-content-area">

					<?php if(!$product_hide_form) { ?>

	                    <div class="free-demo-button">
	                        <a href="<?php echo $cta_link; ?>" <?php echo $target; ?> class="button button-large button-orange"><?php echo $cta; ?></a>
	                    </div>

                    <?php } ?>

					<div class="product-content left-content">

						<?php echo get_field('content_section'); ?>

						
						<?php 

							if(get_field('videos')) {

								while ( have_rows('videos') ) : the_row();

								        // display a sub field value
										$video_url = explode('/',get_sub_field('video_url')); 

										$title = get_sub_field('video_title');

										$video_cover_image = get_sub_field('image_overlay');

									?>
									<div class="product-video-module">
										<iframe src="https://player.vimeo.com/video/<?php echo $video_url[3]; ?>?autoplay=0" style="width:100%; height:400px;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen >	</iframe>

										<div class="video-overlay" style="background: url('<?php echo $video_cover_image['url']; ?>'); background-size: cover; background-position: center;">

											<div class="play-button">
												<i class="fa fa-play" aria-hidden="true"></i>
											</div>

											<div class="video-title">
												<?php echo $title; ?>
											</div>
											
										</div>
									</div>


								<?php		

								endwhile;


							}


						?>

					</div>

					<div class="product-sidebar right-content">


					<?php include(locate_template('templates-sidebar/sidebar-base-element.php')); ?>


					</div>

					<div class="clearfix"></div>


				
				</div>


			
				<?php 


					//echo base64_encode (hash_hmac('md5','BAF8490E-EC52-465A-B065-3B0370897FBB','f0kgzndu2jc',true));

						include( get_template_directory() . '/templates-layout/third-panel-section.php' );
					?>
					
				<?php if(!$product_hide_form) { ?>
				<div class="panel" id="freedemo">
					<div class="content-width">

					<?php wp_reset_postdata(); ?>

					<?php 


						include( get_template_directory() . '/templates-panels/get-started-panel.php' );

					?>
					<div class="clearfix"></div>
					</div>
				</div>

				<?php }  else { ?>
					<div class="panel no-panel" id="freedemo" style="padding: 20px 0px;">
					</div>

				<?php 	} ?>

				<?php

				//include( get_template_directory() . '/templates-layout/third-panel-section.php' );


			endwhile; // End of the loop.
			?>
			<?php wp_reset_postdata(); ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<script>

jQuery(document).ready(function() {

	jQuery('a[href=#freedemo]').click(function(event){
		event.preventDefault();

        jQuery('html, body').animate({
                scrollTop: jQuery("#freedemo").offset().top - 100
            }, 2000);
    });

});


</script>

<?php get_footer(); ?>


