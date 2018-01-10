<?php
/*
*/
get_header(); ?>

<div id="container">
	<div id="content" role="main">

<?php

    $args = array('post_type' => 'partner', 'posts_per_page' => -1);

    $the_query = new WP_Query( $args );
 ?>

	<?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

<div class="partners-page">
	 <div class="content-width">

            <h1 class='page-title'>Partners</h1>

            <div class="partners">
          <?php 
            /* Start the Loop */
            while ( $the_query->have_posts() ) : $the_query->the_post();

                $business_name = get_field('business_name');
                $website = get_field('website');

                $website_short = explode('//', $website);
                $logo = get_field('logo');
            ?>



    

                <div class="partner">

                <figure>
                    <a href="<?php echo $website; ?>"> <div>
                        <img src="<?php echo $logo['url']; ?>"/>
                     </div>
                     </a>
                        <figcaption>
                    <a href="<?php echo $website; ?>"><?php echo $business_name; ?></a></figcaption>
                </figure>


                

                </div>


            <?php 
                endwhile; ?>

                <?php wp_reset_postdata(); ?>

                  <div class="clearfix"></div>
            </div>
          

              </div>

       

	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>