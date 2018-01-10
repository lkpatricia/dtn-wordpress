<?php
/*
*/
get_header(); ?>

<div id="container" class="page-events">
    <div id="content" role="main">

<?php

    $args = array('post_type' => 'event',
    'posts_per_page'     => -1,
    'meta_key'          => 'start_date',
    'orderby'           => 'meta_value',
    'order'             => 'ASC');

    $the_query = new WP_Query( $args );
 ?>

    <?php include( get_template_directory() . '/templates-navigation/breadcrumbs-menu.php' ); ?>


     <div class="content-width">

     <div id="filter-sidebar-element" class="sidebar panel right">
        <div class="content-width">
            <div class="white-container">
                <h3>Filter</h3>

                 <?php 
                    $event_cats = get_terms( array(
                        'taxonomy' => 'event_categories',
                        'hide_empty' => false,
                    ) );

                    //var_dump($event_cats);
                ?>
                <select class="whole event-cat">
                    <option value=""  disabled selected>All</option>

                    <?php foreach($event_cats as $cat) { ?>

                        <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>

                    <?php } ?>
                    
                </select>
                <a  class="button button-small button-blue event-apply">Apply Filter</a>
            </div>
        </div>
    </div>

     <div id="events-page">

            <h1 class='page-title'>Events</h1>

            <div class="return-results">
          <?php 
            /* Start the Loop */
            while ( $the_query->have_posts() ) : $the_query->the_post();

                
                $start = strtotime(get_field('start_date'));
                $end = strtotime(get_field('end_date'));
                $description = get_field('description_short');
                $location = get_field('location_short');
                $disable_detail = get_field('disable_detail');

                $date = date($start);
                $start_month = date("M",$start);
                $start_day = date("d",$start);
                $full_start = date("F j", $start);
                $full_end = date("j, Y", $end);
                $short_end = date(", Y", $end);
            ?>



    

                <div class="event">
                
                <div class="events-date-box">
                    <p><?php echo $start_month; ?></p>
                    <p><?php echo $start_day; ?></p>
                </div>
                <p class="name"><?php the_title(); ?></p>

                <?php if($location) { ?>
                    <p class="location"><?php echo $location;?></p>
                <? } ?>

                <p>
                <?php if($description) { ?>
                        <?php echo $description;?>
                <?php } ?>
                
                <span class="news-date">
                    <?php 
                        echo $full_start;

                        if($end != $start) {
                            echo ' - '.$full_end; 
                        } else {
                            echo $short_end; 
                        }

                    ?>

                <?php if(!$disable_detail) { ?>
                            / <a href="<?php echo get_permalink(); ?>">Read More</a>
                <?php } ?>
                    
                </span>
                </p>

                <div class="clearfix"></div>
                

                </div>


            <?php 
                endwhile; ?>

                </div>

                <?php wp_reset_postdata(); ?>

                  <div class="clearfix"></div>
            </div>
          
<div class="clearfix"></div>
              </div>

       
<div class="clearfix"></div>
    </div><!-- #content -->
</div><!-- #container -->
 <script>

jQuery(document).ready(function() {


    

    
    var cat = [];
    posts_loaded = 0;
    

    firstLoad = true;

    // Applies styling classes to elements
    //We need to loop through tags, cats and archives correctly to apply styling so we know which items are selected or not.



    function update_list(name) {

        cat = name;

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

    

    jQuery("body").on("click",".event-apply",function(){

        item = jQuery('.event-cat').val();
        


        update_list(item);

        

        console.log(item);

        getPosts();

        

    });


    function getPosts(){
                    
            console.log(cat); 

        
        jQuery.ajax({
            method: "POST",
            url: "/wp-content/themes/dtn/service/service-events.php",
            dataType:"json",
            data:{ cat:cat }
        }).done(function(data){


            setTimeout(function(){
            

            //we need to make sure items are added to the DOM so that we can apply the animations to them
            jQuery(".return-results").html(data);
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

            //jQuery(".blog-left .right-column").html(jQuery('<div>', {class: 'news-article'}).html(data.right[2]));
            
            
            
            },400);
        });

    }


});


</script>



<?php get_footer(); ?>
