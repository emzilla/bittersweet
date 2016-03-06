



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

  	instafeedInit();
    featherlightInit();

    $(window).setBreakpoints({
    // use only largest available vs use all available
        distinct: true, 
    // array of widths in pixels where breakpoints
    // should be triggered
        breakpoints: [
            320,
            480,
            768,
            1024
        ] 
    });     

    $(window).bind('enterBreakpoint320',function() {
        
    });

    $(window).bind('exitBreakpoint320',function() {
        
    });

    $(window).bind('enterBreakpoint768',function() {
        
    });

    $(window).bind('exitBreakpoint768',function() {

    });


    $(window).bind('enterBreakpoint1024',function() {
        
    });

    $(window).bind('exitBreakpoint1024',function() {
        
    });



  });
})(jQuery);



