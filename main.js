


jQuery(document).ready(function () {
    

	    if(jQuery('#video-module').length) {

	    	var iframe = jQuery('#video-module');
	    	var player = new Vimeo.Player(iframe);

	    	jQuery('.play-button').click(function() {

	    		jQuery('.video-overlay').fadeOut();
	    		player.play();

	    	});

	    }

        if(jQuery('.product-video-module').length) {

            

            jQuery('.play-button').click(function() {

                var overlay = jQuery(this).parent();
                var parent = overlay.parent();
                var iframe = parent.find('iframe');

                
                var player = new Vimeo.Player(iframe);

                overlay.fadeOut();
                player.play();

            });

        }


	    if(jQuery('#hero-slider').length) {

	    	jQuery('#hero-slider').slick({
	    		dot: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  autoplay: true,
			  autoplaySpeed: 2300,
			  fade: true,
              speed: 900
			});

	    }

        jQuery('#search-icon').click(function() {


            if(jQuery('.search-drawer').hasClass('drawer-open')) {

            	jQuery('.search-drawer').removeClass('drawer-open');

            } else {

            	jQuery('.search-drawer').addClass('drawer-open');
            }

        });
    


        jQuery('#search-icon-mobile').click(function() {


            if(jQuery('.search-drawer').hasClass('drawer-open')) {

            	jQuery('.search-drawer').removeClass('drawer-open');

            } else {

            	jQuery('.search-drawer').addClass('drawer-open');
            }

        });
    
        jQuery(window).resize(function() {
            
            if (jQuery(window).width() >= 901) {
            	jQuery('#mobile-burger').removeClass( 'block' );
                jQuery('#mobile-ex').removeClass( 'block' );
                jQuery('body').removeClass('menu-open');
                jQuery('#mobile-menu').removeClass( 'block' );
            } else {}
            if ((jQuery(window).width() <= 900) && (jQuery('body').hasClass('menu-open'))){
                jQuery('#mobile-ex').addClass( 'block' );
            } else {
                jQuery('#mobile-burger').addClass( 'block' );
            }
        });    
    
    
        jQuery('#mobile-burger').click(function() {
            
            	jQuery('#mobile-menu').addClass( 'block' );
            	jQuery('#mobile-burger').removeClass( 'block' );
            	jQuery('#mobile-burger').css( 'display','none' );
            	jQuery('#mobile-ex').addClass( 'block' );
                jQuery('body').addClass('menu-open');

        });
        
        jQuery('#mobile-ex').click(function() {
            
            	jQuery('#mobile-menu').removeClass( 'block' );
            	jQuery('#mobile-burger').addClass( 'block' );
            	jQuery('#mobile-ex').removeClass( 'block' );
                jQuery('body').removeClass('menu-open');
                
        });
    
    
        jQuery(window).scroll(function() {
            var jQuerybanner = jQuery('#hero-banner'),
                jQueryimage = jQuery('#dtn-logo'),
                jQuerydrawer = jQuery('.search-drawer'),
                scrollClass = 'banner-up';
 
            function raiseTheBanner() {
                if (!jQuerybanner.hasClass(scrollClass)) {
                    jQuerybanner.addClass(scrollClass);
                    jQueryimage.addClass(scrollClass);
                    jQuerydrawer.addClass(scrollClass);
                }
            }

            function lowerTheBanner() {
                if (jQuerybanner.hasClass(scrollClass)) {
                    jQuerybanner.removeClass(scrollClass);
                    jQueryimage.removeClass(scrollClass);
                    jQuerydrawer.removeClass(scrollClass);
                }
            }

            jQuery(window).scroll(function() {
                if(jQuery(window).scrollTop() < 100) {
                    lowerTheBanner();
//                    console.log('lower it');
                    
                } else {
                    raiseTheBanner();
//                    console.log('raise it');
                }
            });
        });

        // FREE DEMO positioning 

        


        
    


        // Used on the Product Page
        if(jQuery('.accordion-menu')) {

            jQuery('.accordion-menu label').on('click', function() {

                        var parent = jQuery(this).parent();
                        var list = parent.find('ul');

                        if(list.hasClass('activeGroup')) {

                            jQuery(this).removeClass('activeGroup');

                             jQuery('.accordion-menu ul ul').removeClass('activeGroup').slideUp('slow');
                            list.slideUp('slow',function() {
                                list.removeClass('activeGroup');
                            });
                            
                        } else {

                            jQuery(this).addClass('activeGroup');
                             jQuery('.accordion-menu ul ul').removeClass('activeGroup').hide();
                          
                            list.slideDown().addClass('activeGroup');
                        }

            });
        }


        if(jQuery('#mobile-menu')) {

            jQuery('#mobile-menu label').on('click', function() {

                        var parent = jQuery(this).parent();
                        var list = parent.find('ul');

                        if(list.hasClass('activeGroup')) {

                            jQuery(this).removeClass('activeGroup');

                             jQuery('#mobile-menu ul ul').removeClass('activeGroup').slideUp('slow');
                            list.slideUp('slow').removeClass('activeGroup');
                            
                        } else {

                            jQuery(this).addClass('activeGroup');
                             jQuery('#mobile-menu ul ul').removeClass('activeGroup').hide();
                          
                            list.addClass('activeGroup').slideDown('slow');
                        }

            });
        }

}); 


