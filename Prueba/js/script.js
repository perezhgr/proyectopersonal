/*-----------------------------------------------------------------------------------

 	Script - All Custom frontend jQuery scripts & functions
 
-----------------------------------------------------------------------------------*/

jQuery(window).load(function($) {	
	
	
	/*---------------------------------------------- 
			H I D E   P A G E   L O A D E R
	------------------------------------------------*/
	/*jQuery("#page-loader .page-loader-inner").delay(1000).fadeOut(500, function(){
		jQuery("#page-loader").delay(1000).fadeOut(500);
	});*/
    jQuery('#home .home-slider ul').removeClass('hidden');
    jQuery('#sections').removeClass('hidden');

    jQuery('#main-nav ul li').removeClass('current-menu-item');
    jQuery(jQuery('#main-nav ul li')[0]).addClass('current-menu-item');
	//flexInit('#testimonials');

    /*jQuery(function($){
        jQuery(".tweet").tweet({
            /*join_text: "auto",
            avatar_size: 32,
            count: 3,
            loading_text: "loading tweets...",*/
    /*        modpath: './twitter/',
            count: 5,
            loading_text: 'loading twitter feed flame...',
            twitter_api_proxy_url: "/twitterproxy.ashx",
            username: "beerealit"
        });
    });*/
	
	if( jQuery().isotope ) {
		
		/*---------------------------------------------- 
					  C A L L   I S O T O P E   
		------------------------------------------------*/	
		jQuery('.masonry').each(function(){
			var $container = jQuery(this);
			
			$container.imagesLoaded( function(){
				$container.isotope({
					itemSelector : '.masonry-item',
					transformsEnabled: true			// Important for videos
				});	
			});
		});
		
		
		/*---------------------------------------------- 
					 I S O T O P E : Filter
		------------------------------------------------*/
		jQuery('.filter li a').click(function(){
			
			var parentul = jQuery(this).parents('ul.filter').data('related-grid');
			jQuery(this).parents('ul.filter').find('li a').removeClass('active');
			jQuery(this).addClass('active');
			
			var selector = jQuery(this).attr('data-option-value');
			jQuery('#'+parentul).isotope({ filter: selector }, function(){ });
			
			return(false);
		});
		
		
		/*---------------------------------------------- 
					 I S O T O P E : reorganize
		------------------------------------------------*/
		function reorganizeIsotope() {
			jQuery('.masonry.portfolio-entries').each(function(){
				$container = jQuery(this);
				var maxitemwidth = $container.data('maxitemwidth');
				if (!maxitemwidth) { maxitemwidth = 370; }
				var containerwidth = $container.width();
				var containerwidth = (containerwidth / 110) * 100;
				var itemrightmargin = parseInt($container.children('div').css('marginRight'));
				var rows = Math.ceil(containerwidth/maxitemwidth);
				var marginperrow = (rows-1)*itemrightmargin;
				var newitemmargin = marginperrow / rows;
				var itemwidth = Math.floor((containerwidth/rows)-newitemmargin+1);
				$container.css({ 'width': '110%' });
				$container.children('div').css({ 'width': itemwidth+'px' });
				if ($container.children('div').hasClass('isotope-item')) { $container.isotope( 'reLayout' ); }
			});
		}
		reorganizeIsotope();
			
		jQuery(window).resize(function() {
			reorganizeIsotope();
		});
		
		
	} /* END if isotope */
	
	
	
	/*---------------------------------------------- 
			 D R O P   D O W N   N A  V I
	------------------------------------------------*/
	var timer = [];
   	var timerout= [];
	jQuery("nav#main-nav li").each(function(index) {  
        if (jQuery(this).find("ul").length > 0) {  
            var element = jQuery(this);
            //show subnav on hover  
            jQuery(this).mouseenter(function() {
				if(timer[index]) {
                	clearTimeout(timer[index]);
                	timer[index] = null;
                }
                timer[index] = setTimeout(function() {
                	jQuery(element).children('ul').fadeIn(200); 
                }, 150)
            });  
            //hide submenus on exit  
            jQuery(this).mouseleave(function() {  
				if(timer[index]) {
                	clearTimeout(timer[index]);
                	timer[index] = null;
              }
              timer[index] = setTimeout(function() {
                	jQuery(element).children('ul').fadeOut(200); 
              }, 150) 
            });  
        }  
    });
	
	jQuery('nav#main-nav').on("click", "li", function() {
		if (jQuery(window).width() < 1025) {
			if (jQuery(this).find("ul").length > 0) {
				if (jQuery(this).find("ul").css('display') !== 'block') {
					jQuery(this).children("ul").fadeIn(200);
					return false;	
				}
			}
		}
	});
	
	
	/*---------------------------------------------- 
				R E S P ON S I V E   N A V 
	------------------------------------------------*/
	jQuery('<a class="open-responsive-nav right-float" href=""><span></span></a>').appendTo(".header-inner .menu");
	jQuery("body #page-content").prepend('<div id="menu-responsive"><div id="menu-responsive-inner"><a href="" class="close-responsive-nav"><span></span></a><nav id="responsive-nav"><ul></ul></nav></div></div>');
	jQuery("nav#responsive-nav > ul").html(jQuery("nav#main-nav > ul").html());
	
	jQuery('header').on("click", ".open-responsive-nav", function() { 
		var topPos = jQuery('header').height();
		var fullheight = jQuery("#page-content").height()-topPos;
		jQuery("#menu-responsive").css({'height':fullheight+'px','top':topPos+'px'});
		if (jQuery('#menu-responsive').css('right') == 0 || jQuery('#menu-responsive').css('right') == '0px') {
			hideResponsiveNav();
		} else {
			jQuery('#menu-responsive').animate({'right': '0'}, 800, 'easeInOutQuart');
        	//jQuery('html, body').animate({scrollTop: 0}, 1000, 'easeInOutQuart');
		}
		return false;
	});
	
	jQuery('#page-content').on("click", "#menu-responsive", function() { 
		hideResponsiveNav();
	});
	
	function hideResponsiveNav(){
		var right = jQuery('#menu-responsive').width()+10;
		jQuery('#menu-responsive').animate({'right': '-'+right+'px'}, 800, 'easeInOutQuart');
	}
	
	
	
	/*---------------------------------------------- 
				        T A B S 
	------------------------------------------------*/	
	jQuery(".tabs").each(function(i) {
		jQuery(this).find('.tab-content').removeClass('active');
		var rel = jQuery(this).find('.active').attr('href');
		jQuery(this).find('.'+rel).addClass('active');
	});
	
	jQuery(".tab-nav").on("click", "a", function() { 
		
		var parentdiv = jQuery(this).parent('li').parent('ul').parent('div');
		var rel = jQuery(this).attr('href');
		
		jQuery(parentdiv).find(".tab-nav a").removeClass("active");
		jQuery(this).addClass("active");
		
		jQuery(parentdiv).find(".tab-container .tab-content").hide().removeClass('active');
		jQuery(parentdiv).find(".tab-container ."+rel).fadeIn(500).addClass('active');
		
		return(false);
		
	});
	
	
	
	
	/*---------------------------------------------- 
			T O G G L E  &  A C C O R D I O N
	------------------------------------------------*/		
	jQuery(".toggle-item").each(function(i) {
		jQuery(this).find('.toggle-active').siblings('.toggle-inner').slideDown(300);							
	});
	
	jQuery(".toggle-item").on("click", ".toggle-title", function() { 
				
		var parentdiv = jQuery(this).parent('div').parent('div');
		var active = jQuery(this).parent('div').find('.toggle-inner').css('display');
		
		if (jQuery(parentdiv).attr('class') == 'accordion') {
			if (active !== 'none' ) { 
				jQuery(parentdiv).find('.toggle-item .toggle-inner').slideUp(300);
				jQuery(this).toggleClass('toggle-active');
			} else {
				jQuery(parentdiv).find('.toggle-item .toggle-inner').slideUp(300);
				jQuery(parentdiv).find('.toggle-item .toggle-title').removeClass('toggle-active');
				
				jQuery(this).toggleClass('toggle-active');
				jQuery(this).siblings('.toggle-inner').slideDown(300);
			}
		} else {
			jQuery(this).toggleClass('toggle-active');
			jQuery(this).siblings('.toggle-inner').slideToggle(300);
		}
		
		return(false);
	});
	
	
	
	
	/*---------------------------------------------- 
				 B A C K   T O P   T O P
	------------------------------------------------*/
	jQuery('#backtotop').click(function(){
		jQuery('html, body').animate({scrollTop: 0}, 1000, 'easeInOutQuart');
		return false;						   
	});
	
	
	
	/*---------------------------------------------- 
			O V E R L A Y I N F O   C E N T E R
	------------------------------------------------*/
	jQuery('.overlayinfo').each(function(){
		var infoHeight = parseInt(jQuery(this).height() / 2);	
		jQuery(this).css({'marginTop': '-'+infoHeight+'px'});
	});
	
	
	
	/*---------------------------------------------- 
				   F I T   V I D E O S
	------------------------------------------------*/
	if(jQuery().fitVids) { 
		jQuery("body").fitVids();
	}
	
	
			
	/*---------------------------------------------- 
				   	 P A R A L L A X
	------------------------------------------------*/
	if(jQuery().parallax) { 
		jQuery('.parallax-section').parallax();
	}
	
		
	
	/*---------------------------------------------- 
		R E S P O N S I V E   J P L A Y E R
	------------------------------------------------*/
	if(jQuery().jPlayer && jQuery('.jp-interface').length){
		jQuery('.jp-interface').each(function(){ 
			var playerwidth = jQuery(this).width();	
			var newwidth = playerwidth - 175;
			jQuery(this).find('.jp-progress-container').css({ width: newwidth+'px' });
		});
	}
	


	/*----------------------------------------------
				    R E V O L U T I O N   S L I D E R
	------------------------------------------------*/
	if(jQuery().revolution) {
		jQuery('.home-slider').revolution({
			startwidth:1100,
			startheight:500,
			delay:3000, //delay between slides
			onHoverStop:"on",
			navigationType:"none",
			fullWidth:"off",
			fullScreen:"on",
			fullScreenOffsetContainer: "#pseudo-header"
		});
	}



	/*---------------------------------------------- 
				   	 V I D E O   B G
	------------------------------------------------*/
	if(jQuery().bgVideo) { 
		setTimeout(function() {
			jQuery('.videobg-section').bgVideo();
		}, 1000);
	}
	
	
	
	/*---------------------------------------------- 
				  O W L   C A R O U S E L
	------------------------------------------------*/
	if(jQuery().owlCarousel) { 
		jQuery("#portfolio-carousel").owlCarousel({
    		navigation : false,
			items : 4,
			itemsCustom : false,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
		});
	}
	
	
	smoothShow();

    mapinitialize();

   //Page.init();
		
});


jQuery( window ).scroll(function() {
	
	smoothShow();

});



// SMOOTH SHOW FUNCION FOR ELEMENTS THAT TAKE ACTION WHEN VISIBLE (counter & animations & skills)
function smoothShow() {
	
	
	/*---------------------------------------------- 
				   	 C O U N T E R
	------------------------------------------------*/
	jQuery('.counter-value').each(function() {
		if (jQuery(window).width() > 700) {
			var visible = jQuery(this).visible(false);
			if (jQuery(this).hasClass( "anim" )) {} 
			else if (visible) {
				jQuery(this).addClass("anim");
				var from = parseInt(jQuery(this).attr('data-from'));
				var to = parseInt(jQuery(this).attr('data-to'));
				var speed = parseInt(jQuery(this).attr('data-speed'));
				jQuery(this).count(from, to, speed);
			}
		} else {
			var to = parseInt(jQuery(this).attr('data-to'));
			jQuery(this).html(to);
		}
	});
	
	
	
	/*---------------------------------------------- 
		 	G E N E R A L   A N I M A T I O N S
	------------------------------------------------*/
	jQuery('.sr-animation').each(function() {
		if (jQuery(window).width() > 700) {
			var visible = jQuery(this).visible(true);
			var delay = jQuery(this).attr("data-delay");
			if (!delay) { delay = 0; }
			if (jQuery(this).hasClass( "animated" )) {}
			else if (visible) {
				jQuery(this).delay(delay).queue(function(){jQuery(this).addClass('animated')});
			}
		} else {
			jQuery(this).addClass('animated');
		}
	});
	
	
	/*---------------------------------------------- 
		 	S K I L L   A N I M A T I O N
	------------------------------------------------*/
	jQuery('.skill').each(function() {
		var visible = jQuery(this).visible(true);
		var percent = jQuery(this).find('.skill-bar .skill-active ').attr('data-perc');
		if (jQuery(this).hasClass( "anim" )) {} 
		else if (visible) {
			var randomval = Math.floor(Math.random() * (300 - 50 + 1)) + 50;
			jQuery(this).addClass("anim");
			jQuery(this).find('.skill-bar .skill-active ').animate({'width': percent+'%',}, 2000, 'easeInOutQuart', function(){
				jQuery(this).find('.tooltip').delay(randomval).animate({'top':'-28px','opacity':1}, 500);	
			}).css('overflow', 'visible');
		}
	});
}



// FLEXSLIDER INIT FUNCTION BECAUSE IT ALSO HAS TO BE REINITIALISED AFTER A PORTFOLIO ITEM IS LOADED
function flexInit(el) {

	/*---------------------------------------------- 
				   F L E X S L I D E R
	------------------------------------------------*/
	if(jQuery().flexslider) { 
		jQuery(el+" .flexslider").flexslider({
			animation: "slide",
			slideshowSpeed: 7000,
			animationDuration: 1000,
			slideshow: false,
			directionNav: false,
			controlNav: true,
			smoothHeight: true,
			touch: true,
			video: true,
			randomize: false
		});
	}
}


function mapinitialize() {
    // Google Maps API
    var latlng = new google.maps.LatLng(-37.322320, -59.134232);
    var settings = {
        zoom: 15,
        center: latlng,
        scrollwheel: false,
        navigationControl: false,
        scaleControl: true,
        streetViewControl: false,
        draggable: true,
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    var point = new google.maps.LatLng(-37.322320, -59.134232);


    var image = new google.maps.MarkerImage(
        'files/images/icons/icon_marker.png',
        new google.maps.Size(42,62),
        new google.maps.Point(0,0),
        new google.maps.Point(21, 54)
    );

    var shadow = new google.maps.MarkerImage(
        'files/images/icons/icon_marker_shadow.png',
        new google.maps.Size(76,62),
        new google.maps.Point(0,0),
        new google.maps.Point(21,62)
    );

    var shape = {
        coord: [27,0,29,1,31,2,33,3,34,4,35,5,36,6,37,7,38,8,38,9,39,10,39,11,40,12,40,13,40,14,41,15,41,16,41,17,41,18,41,19,41,20,41,21,41,22,41,23,41,24,41,25,41,26,40,27,40,28,40,29,40,30,39,31,39,32,39,33,38,34,38,35,37,36,37,37,37,38,36,39,36,40,35,41,35,42,34,43,34,44,33,45,33,46,32,47,31,48,31,49,30,50,30,51,29,52,28,53,28,54,27,55,26,56,26,57,25,58,24,59,23,60,22,61,20,61,18,60,17,59,17,58,16,57,15,56,14,55,14,54,13,53,12,52,12,51,11,50,11,49,10,48,9,47,9,46,8,45,8,44,7,43,7,42,6,41,6,40,5,39,5,38,4,37,4,36,4,35,3,34,3,33,2,32,2,31,2,30,2,29,1,28,1,27,1,26,1,25,1,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,1,16,1,15,1,14,1,13,2,12,2,11,3,10,3,9,4,8,5,7,6,6,7,5,8,4,9,3,10,2,12,1,15,0,27,0],
        type: 'poly'
    };

    var marker = new google.maps.Marker({
        draggable: true,
        raiseOnDrag: false,
        icon: image,
        shadow: shadow,
        shape: shape,
        map: map,
        position: point
    });


    var red_road_styles = [
        {
            featureType: "all",
            stylers: [
                { saturation: -100 }
            ]
        },
        {
            featureType: "road.highway",
            stylers: [
                { hue: "#E1704B" },
                { saturation: 100 }
            ]
        }
    ];

    map.setOptions({styles: red_road_styles});
}

var Page = (function() {

    var config = {
            $bookBlock : jQuery( '#bb-bookblock' ),
            $navNext : jQuery( '#bb-nav-next' ),
            $firstBlog : jQuery( '#first-blog' ),
            $secondBlog : jQuery( '#second-blog' ),
            $thirdBlog : jQuery( '#third-blog' ),
            $navPrev : jQuery( '#bb-nav-prev' ),
            $navFirst : jQuery( '.bb-nav-first' ),
            $navLast : jQuery( '#bb-nav-last' )
        },
        init = function() {
            config.$bookBlock.bookblock( {
                speed : 800,
                shadowSides : 0.8,
                shadowFlip : 0.7
            } );
            initEvents();
        },
        initEvents = function() {

            var $slides = config.$bookBlock.children();

            // add navigation events
            config.$navNext.on( 'click touchstart', function() {
                window.location = "#blog";
                config.$bookBlock.bookblock( 'next' );
                return false;
            } );

            config.$firstBlog.on( 'click touchstart', function() {
                window.location = "#blog";
                config.$bookBlock.bookblock( 'jump', 2 );
                return false;
            } );

            config.$secondBlog.on( 'click touchstart', function() {
                window.location = "#blog";
                config.$bookBlock.bookblock( 'jump', 3 );
                return false;
            } );

            config.$thirdBlog.on( 'click touchstart', function() {
                window.location = "#blog";
                config.$bookBlock.bookblock( 'jump', 4 );
                return false;
            } );

            config.$navPrev.on( 'click touchstart', function() {
                config.$bookBlock.bookblock( 'prev' );
                return false;
            } );

            config.$navFirst.on( 'click touchstart', function() {
                window.location = "#blog";
                config.$bookBlock.bookblock( 'first' );
                return false;
            } );

            config.$navLast.on( 'click touchstart', function() {
                config.$bookBlock.bookblock( 'last' );
                return false;
            } );

            // add swipe events
            $slides.on( {
                'swipeleft' : function( event ) {
                    config.$bookBlock.bookblock( 'next' );
                    return false;
                },
                'swiperight' : function( event ) {
                    config.$bookBlock.bookblock( 'prev' );
                    return false;
                }
            } );

            // add keyboard events
            jQuery( document ).keydown( function(e) {
                var keyCode = e.keyCode || e.which,
                    arrow = {
                        left : 37,
                        up : 38,
                        right : 39,
                        down : 40
                    };

                switch (keyCode) {
                    case arrow.left:
                        config.$bookBlock.bookblock( 'prev' );
                        break;
                    case arrow.right:
                        config.$bookBlock.bookblock( 'next' );
                        break;
                }
            } );
        };

    return { init : init };

})();