<?php
/**
 * @package DTN
 */ 
   
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/modernizr.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ5ZZNL');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ5ZZNL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php 

    global $search_terms; 

?>
<div class="site-container">
	<header>
       

        <?php include( get_template_directory() . '/templates-modules/content-hero.php' ); ?>

        <?php 
            
            
        ?>
        
        <div id="hero-banner">
            <div class="content-width">
                <a href="/">
                    <img  id="dtn-logo" class="float-left" src="<?php echo get_template_directory_uri(); ?>/images/2013_DTN_color_300dpi.png"/>
                </a>    

                
                
        
                <img  id="mobile-ex" class="right none" src="<?php echo get_template_directory_uri(); ?>/images/close-gold.png"/>  
                
                <img  id="mobile-burger" class="right none" src="<?php echo get_template_directory_uri(); ?>/images/burger-gold.jpg"/>
                
                <img  id="search-icon-mobile" class="right none" src="<?php echo get_template_directory_uri(); ?>/images/search-mobile.png"/>

                <nav id="hero-main-nav" class="float-left" >
                    <ul id="main-nav">
                        <li class="industries">
                            <h3>
                                <a href="/industries" class="no-hover">Industries</a>
                            </h3>
                            <?php include( get_template_directory() . '/templates-navigation/main-nav-industries.php' ); ?>
                        </li>
                        <li class="products">
                            <h3>
                                <a href="/products" class="no-hover">Products</a>
                            </h3>

                            <?php  include( get_template_directory() . '/templates-navigation/main-nav-products.php' ); ?>
                        </li>
                    </ul>
                </nav>

                <nav id="hero-resource-nav" class="float-right" >
                    
                    <?php if( have_rows('secondary_menu_list','option') ): ?>
                    <ul>
   

                        <?php while( have_rows('secondary_menu_list','option') ): the_row(); ?>


                        <li><a href="<?php echo get_sub_field('link'); ?>" class='no-hover' style="color:#0093D0;"><?php echo get_sub_field('link_title'); ?></a></li>
                        

                    <?php endwhile; ?>

                        <li>   
                            <a class='no-hover'><img  id="search-icon" src="<?php echo get_template_directory_uri(); ?>/images/search.png"/></a>
                        </li>
                    </ul>
  

                    <?php endif; ?>
                        
                </nav>
            </div>
        </div>
        
    </header>

    <?php include( get_template_directory() . '/templates-navigation/mobile-menu.php' ); ?>
    <?php include( get_template_directory() . '/templates-modules/search-drawer.php' ); ?>

