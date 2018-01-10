<?php
/**
 * @package DTN
 */

?>

<footer class="site-footer" >
<div class="content-width">
    <div id="footer-left" class="float-left">
        <a href="/"><img  class="dtn-logo" src="<?php echo get_template_directory_uri(); ?>/images/2013_DTN_color_300dpi.png"/></a>
       <?php 

       /* <div id="footer-icons">
            <a href="#">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
        </div>

        */ ?>
        <div id="footer-policy">
        <br />
            <a href="<?php echo get_field('terms_of_service','options'); ?> ">Terms of Use and Privacy Policy</a>
            <br /><br />
            Copyright © 2017 DTN 
        </div>
    </div>
    <div id="footer-right" class="float-right" >
        <nav id="footer-main-nav" class="float-left">
            <ul>
                <li><h3><a href="/industries/">Industries</a></h3></li>
                <li><h3><a href="/products/">Products</a></h3></li>
            </ul>
        </nav>
        <div id="footer-resource-nav" class="float-right">
            <nav class="float-left">
                <ul>
                    <?php while( have_rows('left_link_column','option') ): the_row(); ?>
                    <?php $page = get_sub_field('link'); ?>

                    <li><a href="<?php echo get_permalink($page->ID); ?>"><?php the_sub_field('link_text'); ?></a></li>
                    

                <?php endwhile; ?>
                </ul>
            </nav>
            <nav class="float-right">
                <ul>

               

                <?php while( have_rows('right_link_column','option') ): the_row(); ?>
                    <?php $page = get_sub_field('link'); ?>



                    <li><a href="<?php echo get_permalink($page->ID); ?>"><?php the_sub_field('link_text'); ?></a></li>
                    

                <?php endwhile; ?>
                </ul>
            </nav>
        </div>
    </div>    
</div>
</footer>
</div> <!--  site-inner -->
</div><!-- site-container -->



<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/wow.min.js"> </script>


<script>

var WOW = new WOW({
    offset: 100
});

WOW.init();

</script>




<?php /*<script>
    //fade in divs on scroll settings
    var config = {
      viewFactor : 0.15,
      duration   : 800,
      distance   : "1vh",
      scale      : 1,
    }
    window.sr = new ScrollReveal(config)
    setTimeout(function(){
        //jQuery('.content-area').removeClass('slideIn');

        setTimeout(function(){
          //$('.intro .headline-2').removeClass('slideIn');
          //sr.reveal('.intro .toReveal', 350);
        }, 200);
        
        jQuery('.left-right-content-section.toReveal').each( function() {

            j
            sr.reveal(this, {
    afterReveal: function(el) {
      $('.hidden-on-load').addClass('show');
    }550);
        });
        
        //sr.reveal('.image-area', 350);
        //sr.reveal('.case-study-content .toReveal', 0);
        //sr.reveal('.timeline .toReveal', 800);
        //sr.reveal('.icon-blocks .toReveal', 350);
        //sr.reveal('.form-intro.toReveal', 0);
        //sr.reveal('form .toReveal', 100);
    },500);

    jQuery(document).ready(function(){
        if (jQuery('.content-area').is(':visible')){
            //$('#menu-features').addClass("active");
            alert('Hello, World!!');
        }                               
    });

    
    //show mobile after 3 seconds
    setTimeout(function(){
        var modalHeight = $(".modal.section-form").outerHeight();
        $(".modal.section-form").css({'bottom':(-1)*modalHeight+"px",'opacity':0});
        $(".modal.section-form").show().animate({'bottom':'0px','opacity':1},1000);
    }, 5000)
    
    //ability to close the modal
    $(".modalClose").on("click", function(){
        var modalHeight = $(".modal.section-form").outerHeight();
        $(".modal.section-form").show().animate({'bottom':(-1)*modalHeight+"px",'opacity':0},1000);
    });
    
    $( document ).ready(function() {
        $('.section-form input').addClass('toReveal');
        
        $(".first_name input").attr("placeholder", "FIRST NAME*");
        $(".last_name input").attr("placeholder", "LAST NAME*");
        $(".email input").attr("placeholder", "EMAIL*");
        $(".company input").attr("placeholder", "COMPANY*");
        
        $("#request").click(function() {
            $('html, body').animate({
                scrollTop: $("#form").offset().top
            }, 2000);
        });
    });
    

</script> */ ?>
</body>
</html>
