<?php
/**
 * The template for Single Resource
 */

$is_gated = get_field('is_this_resource_gated');

$is_video = get_field('is_video');

$resource_link = get_field('resource_link');

if($is_gated || $is_video) {
get_header();

?>

<style>p{margin-bottom: 18px;}</style>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php //include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

		<div class="content-width">
			<?php
			while ( have_posts() ) : the_post(); ?>



			<?php 


			if($is_gated) {

                $resource_name = get_field('resource_name');
                $resource_link = get_field('resource_link');
                $is_gated = get_field('is_this_resource_gated');
                $form_code = get_field('resource_form_code');

                $resource_intro_title = get_field('resource_intro_title');

                $resource_intro = get_field('resource_intro_content');


                $success = $_GET['success'];

				$form = get_field('resource_form');


				$form_title = get_field('form_title', $form->ID);
				$form_caption = get_field('form_caption', $form->ID);

				$form_code = get_field('resource_form_code');
				$form_tracking_script = get_field('resource_tracking_script');
				$form_hidden_tracking_fields = get_field('resource_hidden_fields');


				$custom_form = get_field('is_this_a_custom_form',$form->ID);
				$form_scripts = get_field('form_scripts',$form->ID);
				$form_agreement = get_field('agreement',$form->ID);

				$form_success_title = get_field('form_success_title');
				$form_success_message = get_field('form_success_message');

				if(!$custom_form){
				    $form_code = preg_replace("/<style\\b[^>]*>(.*?)<\\/style>/s", "", $form_code);
				    $form_code = explode('<input name="elqCampaignId" type="hidden"  />', $form_code);

				    $form_code = $form_code[0].'<input name="elqCampaignId" type="hidden"  />'.$form_hidden_tracking_fields.$form_code[1];
				}



			?>

			<div style="margin-bottom: 30px;">

			<h1 class='page-title'><?php echo the_title() ?></h1>

		        


			</div>

			 <?php if(!$success) { ?>

			<div style="float: left;border:solid 1px #ececec;margin-right: 40px;margin-bottom: 40px;">

				<?php
					// get ACF upload
					
					// Output thumbnail

					echo wp_get_attachment_image( $resource_link['id'], 'medium'); 
					?> 
				
				


			</div>

			<div>

			

			 	<h3><?php echo $resource_intro_title; ?></h3>
				<?php echo $resource_intro; ?>

				<?php } ?>
		        

		        <div class="panel eloqua-form">
		        <div class="form-column" style="background-color: white;padding: 30px;width:94%;">
		        <?php if($success) { ?>

		            <h2><?php echo $form_success_title; ?></h2>
		            
		            <p><?php echo $form_success_message; ?></p>

		            <a href="<?php echo $resource_link['url']; ?>" target="_blank""><button  class="button button-large button-blue">Click to Download</button></a>



		           <?php  } else { ?>

            <?php echo $form_code; ?>
            <?php echo $form_tracking_script; ?>


             <div class="clear"></div>


            <button class="button button-orange button-large button-form-submit">Submit</button>


            <?php } ?>


<script>

jQuery(document).ready(function() {



        jQuery('.eloqua-form form input[type=hidden]').each(function() {

        var parent = jQuery(this).parent().parent().parent().parent();

        parent.addClass('hidden-fields');

        });

        jQuery('.eloqua-form form input[type=submit]').each(function() {

            var parent = jQuery(this).parent().parent().parent().parent();

            parent.addClass('submit-field');

        });

         jQuery('.eloqua-form .button-form-submit').click(function() {

            jQuery('.eloqua-form form input[type=submit]').click();

            });



    

    jQuery('.eloqua-form form input[name=successurl]').val('<?php echo get_permalink(); ?>?success=true');




    <?php if($success) { ?>

        jQuery('html, body').animate({
                scrollTop: jQuery("#freedemo").offset().top
            }, 2000);

    <?php } ?>

    



});

</script>
  				</div>


			</div>



		    </div>


		    

			

        

        <?php


    } else if($is_video) {

    	$title = get_field('video_title');

		$video_cover_image = get_field('video_image_overlay');

		$video_url = explode('/',get_field('video_url'));


		?>

		<section class="left-right-content-section wow fadeIn ">

			<div class="content-width">

			

			<iframe src="https://player.vimeo.com/video/<?php echo $video_url[3]; ?>?autoplay=0" style="width:100%; height:400px;" frameborder="0" id="video-module"webkitallowfullscreen mozallowfullscreen allowfullscreen >
				
				
			</iframe>

			

			<div class="video-overlay" style="background: url('<?php echo $video_cover_image['url']; ?>'); background-size: cover; background-position: center;">

				<div class="play-button">
					<i class="fa fa-play" aria-hidden="true"></i>
				</div>

				<div class="video-title">
					<?php echo $title; ?>
				</div>
				
			</div>



			<div class="clearfix"></div>

			</div>
			
		</section>

		<?php

		    }

			endwhile; // End of the loop.
			?>

			<div class="clearfix"><div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php } else {

header('Location: '.$resource_link['url']);

} ?>



