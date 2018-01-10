<?php
/**
 * The template for News Article
 */
get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<?php
            while ( have_posts() ) : the_post();  

                $news_author = get_field('news_author_name');

?>

        <?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

        <div class="content-width news-article-content">

            <div class="left-content">

                <h1 class='page-title'><?php echo remove_special_mark_format(get_the_title()); ?></h1>

                <p><?php if($news_author) { ?>
                        
                            <span class="author"><?php echo $news_author; ?></span>,
                        <?php } ?>
                        
                        <span class="date"> <?php echo get_the_date(); ?></span></p>

                <?php the_content(); ?>

            </div>

            <div class="right-content">

            <?php include( get_template_directory() . '/templates-sidebar/news-sidebar-element.php' ); ?>

            </div>

            <div class="clearfix"></div>

        </div>


        <?php endwhile; // End of the loop. ?>
        

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
