<?php
/**
 * The template for Calculator
 */
get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<?php
            while ( have_posts() ) : the_post();  

                $calculator_name = get_field('calculator_name');

                $calculator_code = get_field('calculator_code');

?>

        <?php //include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

        <div class="content-width calculator-content">



                <h1 class='page-title'><?php echo $calculator_name; ?></h1>

                <?php echo $calculator_code; ?>


            <div class="clearfix"></div>

        </div>


        <?php endwhile; // End of the loop. ?>
        

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
