<?php
/**
 * The template for Post
 */
get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<?php
            while ( have_posts() ) : the_post();  

                $blog_author = get_field('blog_author_name');
                $blog_image = get_field('blog_featured_image');

?>

        <?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

        <div class="content-width blog-article-content">

            <div class="left-content">

                <h1 class='page-title'><?php echo remove_special_mark_format(get_the_title()); ?></h1>

                <p><?php if($blog_author) { ?>
                        
                            <span class="author"><?php echo $blog_author; ?></span>,
                        <?php } ?>
                        
                        <span class="date"> <?php echo get_the_date(); ?></span></p>
                
<!--
                        <?php //if($blog_image) { ?>
                        
                            <span class="image"><?php //echo '<img src=""/>'; ?></span>
                        <?php //} ?>
-->
                
                <?php the_content(); ?>

            </div>

            <div class="right-content">

            <?php include( get_template_directory() . '/templates-sidebar/blog-sidebar-element.php' ); ?>

            </div>

            <div class="clearfix"></div>

        </div>


        <?php endwhile; // End of the loop. ?>
        

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
