/* === Document Ready Scripts === */

jQuery.noConflict();
(function( $ ) {
  $(function() {
   	
    /* === Functions === */

    function instafeedInit() {
        var feed = new Instafeed({
            get: 'user',
            userId: '478466916',
            accessToken: '478466916.893faef.38875abbab5a45c5b3279a63319f0774',
            links: false,
            limit: 4,
            resolution: 'standard_resolution',
            template: '<img src="{{image}}" class="feed-image" />'
        });
        feed.run();
    }

    function featherlightInit() {
        $('.gallery-item a').featherlight({
            targetAttr: 'href'
        });
    }

    /* Responsive Navigation
    ------------------------------------------------------------------------ */
    function toggleMenu() {
            $('.menu-toggle').click(function(){ 
                    $(this).toggleClass('active');
                    $('.small-menu').slideToggle();
            });
    }

    function responsiveNav() {
            if( $('.large-menu nav.primary').length ) {
                    $('nav.primary').appendTo('.small-menu');
            }        
            $('.menu-toggle').removeClass('visuallyhidden');
            $('.header-container').addClass('responsive-header').removeClass('desktop-header');
    }
     
    function resetResponsiveNav() {
            if( $('.small-menu').hasClass('open') ) {
               
            }
    }
     
    function desktopNav() {
            if( $('.small-menu nav.primary').length ) {
                    $('nav.primary').appendTo('.large-menu');         
            }
            $('.menu-toggle').addClass('visuallyhidden');
            $('.header-container').removeClass('responsive-header').addClass('desktop-header');
    }

    /* Gallery
    ------------------------------------------------------------------------ */
    // function galleryCaption() {
    //     $('.gallery-item').click(function() {

    //         var galleryId = $('figcaption').attr('aria-describedby');

    //         console.log(galleryId);

    //         $(this).find('figcaption').appendTo('.featherlight-content');

    //         $('.featherlight-content .featherlight-close').click(function(){
    //             $(this).find('figcaption').appendTo();
    //             console.log('nested function');
    //         });

    //     });
    // }
       

  	instafeedInit();
    featherlightInit();
    toggleMenu();
    // galleryCaption();

    /* Enquire - Breakpoints
    ------------------------------------------------------------------------ */

    // Tablet
    enquire.register("screen and (max-width:1000px)", {

        match : function() {
            responsiveNav();
        },      
        unmatch : function() {
            desktopNav();
            resetResponsiveNav();
        },                          
        setup : function() {

        },    
        deferSetup : true,
        destroy : function() {}
          
    }); // end enquire.register

    // Exit Tablet
    enquire.register("screen and (min-width:1001px)", {

        match : function() {
        },      
        unmatch : function() {
            
        },    
        setup : function() {
            desktopNav();
        },    
        deferSetup : true,
        destroy : function() {}
          
    }); // end enquire.register


  });
})(jQuery);



