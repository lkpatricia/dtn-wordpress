<?php
/**
 * The template for Blog Home Page
 * Template name: Blog Overview 
 */
get_header();

?>

<div id="container">
	<div id="content" role="main">

	 <div id="blog-overview">

	<?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>

	 <div class="content-width">

            <h1 class='page-title'>Blog</h1>

            <div id="blog-desktop" class="right-content">

                <?php include( get_template_directory() . '/templates-sidebar/blog-sidebar-element.php' ); ?>

            </div>

            <div class="left-content">

                <div class="return-results">

                	<?php include( get_template_directory() . '/templates-layout/vertical-blog-column-section.php' ); ?>
                </div>

                <div class="no-results">
                    <p>No results found.</p>
                </div>

            </div>

            
            <div id="blog-mobile">

                <?php include( get_template_directory() . '/templates-sidebar/blog-sidebar-element.php' ); ?>

            </div>

            <div class="clearfix"></div>

              </div>

        <?php //include( get_template_directory() . '/templates-layout/full-panel-section.php' ); ?>

              </div>
	</div><!-- #content -->
</div><!-- #container -->


    <script>

jQuery(document).ready(function() {

    var cat = [];
    var tag = [];

    posts_loaded = 0;
    

    firstLoad = true;

    // Applies styling classes to elements
    //We need to loop through tags, cats and archives correctly to apply styling so we know which items are selected or not.

    function update_cat_list(name) {

        cat = name;

    }

    function update_tag_list(name) {

        tag = name;

    }

    /* 

    Steps to happen on click of sidebar item 

        1 - Click the item
        2 - Check what the item is
        3 - See if the item was already selected or not
        4 - Add item to selected array 
        5 - Style item
        6 - Do query 
        7 - Display results

    */

    

    jQuery("body").on("click","#blog-sidebar-element .category-list li a",function(){

        item = jQuery(this).parent().parent();
        item_slug = jQuery(this).data('cat');
        jQuery('#blog-sidebar-element .category-list li a').removeClass('active');


        update_cat_list(item_slug);

        jQuery(this).addClass('active');

        console.log(item_slug);

        getPosts();

        

    });


    jQuery("body").on("click","#blog-sidebar-element .tags h6",function(){

        item = jQuery(this);
        item_slug = jQuery(this).data('tag');
        jQuery('#blog-sidebar-element .tags h6').removeClass('active');


        update_tag_list(item_slug);

        jQuery(this).addClass('active');

        console.log(item_slug);

        getPosts();

        

    });


    function getPosts(){
                    
            console.log(cat); 

        
        jQuery.ajax({
            method: "POST",
            url: "/wp-content/themes/dtn/service/service-blog.php",
            dataType:"json",
            data:{ cat:cat, tag:tag }
        }).done(function(data){


            setTimeout(function(){
            

            //we need to make sure items are added to the DOM so that we can apply the animations to them
            jQuery("#vertical-blog-column-section").html(data);
            console.log(data);


            jQuery('html, body').animate({
                scrollTop: 0
            }, 2000);

            /*jQuery(".blog-left .right-column .yam-articles").html(data.right);
            console.log(data.right);

            jQuery(".blog-left .featured-post .grid").html(data.featured);
            console.log(data.featured);
            */ 

            

            //loop through both the left and right data columns to get all elements
            //var new1 = jQuery('<div></div>');
            //new1.addClass('yam-article');
            //new1.html(data.left[1]);
            //jQuery(".blog-left .left-column .yam-articles").append(new1);

            //jQuery(".blog-left .right-column").html(jQuery('<div>', {class: 'blog-article'}).html(data.right[2]));
            
            
            
            },400);
        });

    }


});


</script>

<?php get_footer(); ?>