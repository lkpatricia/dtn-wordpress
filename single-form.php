<?php
/**
 * The template for Single Resource
 */
get_header();

?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

		<div class="content-width">
			<?php
			while ( have_posts() ) : the_post(); ?>

			<?php 

             
                $form_code = get_field('form_code');
                $form_tracking_script = get_field('form_tracking_script');
                $form_hidden_tracking_fields = get_field('form_hidden_tracking_fields');


                $form_code = preg_replace("/<style\\b[^>]*>(.*?)<\\/style>/s", "", $form_code);
                $form_code = explode('<input name="elqCampaignId" type="hidden"  />', $form_code);
                
                $form_code = $form_code[0].'<input name="elqCampaignId" type="hidden"  />'.$form_hidden_tracking_fields.$form_code[1];

                $form_success_title = get_field('form_success_title',$form->ID);
				$form_success_message = get_field('form_success_message',$form->ID);
                



			?>

			<div class="left-content">

		        <h1 class='page-title'><?php echo the_title() ?></h1>

		        <?php the_content(); ?>


		        <?php echo $form_code; ?>
            <?php echo $form_tracking_script; ?>





  


		    </div>

			<div class="right-content">
				
			</div>

        

        <?php

			endwhile; // End of the loop.
			?>

			<div class="clearfix">
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
