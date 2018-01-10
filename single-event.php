<?php
/**
 * The template for Single product
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

				$start = strtotime(get_field('start_date'));
                $end = strtotime(get_field('end_date'));
                $description = get_field('event_details');
                $location = get_field('location_long');

                $date = date($start);
                $start_month = date("M",$start);
                $start_day = date("d",$start);
                $full_start = date("F j", $start);
                $full_end = date("j, Y", $end);


			?>

			<div class="left-content">

		        <h1 class='page-title'><?php echo the_title() ?></h1>

		        <?php the_content(); ?>

		    </div>

			<div class="right-content">
				<div id="filter-sidebar-element" class="sidebar panel right">
				    <div class="content-width">
				        <div class="white-container">
				            <h3>Event Details</h3>
				            	<p><?php echo $description; ?></p>
				            	<br /><br />
				            <h3>Location</h3>
				            	<p><?php echo $location; ?></p>
				        </div>
				    </div>
				</div>
			</div>

        

        <?php

			endwhile; // End of the loop.
			?>

			<div class="clearfix">
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
