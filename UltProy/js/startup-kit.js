jQuery.noConflict(); 

/**
 * JavaScript code for all ui-kit components.
 * Use namespaces.
 */

window.isRetina = (function() {
    var root = ( typeof exports == 'undefined' ? window : exports);
    var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5),(min--moz-device-pixel-ratio: 1.5),(-o-min-device-pixel-ratio: 3/2),(min-resolution: 1.5dppx)";
    if (root.devicePixelRatio > 1)
        return true;
    if (root.matchMedia && root.matchMedia(mediaQuery).matches)
        return true;
    return false;
})();
//nextOrFirst? prevOrLast?
jQuery.fn.nextOrFirst = function(selector) { var next = this.next(selector); return (next.length) ? next : this.prevAll(selector).last(); }
jQuery.fn.prevOrLast = function(selector){ var prev = this.prev(selector); return (prev.length) ? prev : this.nextAll(selector).last(); }

//preload images
JQuery.fn.preload=function(){this.each(function(){JQuery("<img/>")[0].src=this})}

window.startupKit = window.startupKit || {};

startupKit.hideCollapseMenu = function() {
    JQuery('body > .navbar-collapse').css({
        'z-index': 1
    });
    JQuery('html').removeClass('nav-visible');
    setTimeout(function() {
        JQuery('body > .navbar-collapse').addClass('collapse');
        JQuery('body > .colapsed-menu').removeClass('show-menu');
    }, 400)
}

JQuery(function () {
    JQuery('.page-wrapper, .navbar-fixed-top, .navbar-collapse a, .navbar-collapse button, .navbar-collapse input[type=submit]').on('click', function(e) {
        if(JQuery('html').hasClass('nav-visible')) {
            setTimeout(function(){
                startupKit.hideCollapseMenu();
            }, 200)
        }
    });
    JQuery(window).resize(function() {
        if(JQuery(window).width() > 965) {
            startupKit.hideCollapseMenu();
        }
    });

    var menuCollapse = JQuery('#header-dockbar > .colapsed-menu').clone(true);
    JQuery('body').append(menuCollapse);

    JQuery('#open-close-menu').on('click', function () {
        if(JQuery('html').hasClass('nav-visible')) {
            startupKit.hideCollapseMenu();
        } else {
            JQuery('body > .colapsed-menu').addClass('show-menu');
            if(JQuery('#header-dockbar').length) {
                 JQuery('body > .colapsed-menu').css({
                    top: JQuery('#header-dockbar').height()
                });
            }
            setTimeout(function() {
                JQuery('html').addClass('nav-visible');
            }, 1)
        }
    });
    if(JQuery('.social-btn-facebook').length){
        JQuery('.social-btn-facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableCounter: false,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
            }
        });
    }

    if(JQuery('.social-btn-twitter').length){
        JQuery('.social-btn-twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'Designmodo',
                    url: false
                }
            },
            click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
            }
        });
    }
});

/**
 *  Headers 
 * */
startupKit.uiKitHeader = startupKit.uiKitHeader || {};

startupKit.uiKitHeader._inFixedMode = function(headerClass) {
    var navCollapse = JQuery(headerClass + ' .navbar-collapse').first().clone(true);
    navCollapse.attr('id', headerClass.substr(1));
    JQuery('body').append(navCollapse);

    var fixedNavbar = JQuery('.navbar-fixed-top');
        fixedNavbarHeader = fixedNavbar.closest('header');
        fixedNavbarHeaderClone = fixedNavbarHeader.clone(true);

    if(fixedNavbarHeader.hasClass('fake-header')) {
        var fakeHeader = JQuery('<div class="fake-wrapper-header" style="width: 100%; height: ' + fixedNavbarHeader.outerHeight() + 'px;" />');
    }
    JQuery('body').prepend(fakeHeader);
    JQuery('body').prepend(fixedNavbarHeaderClone);
    fixedNavbarHeader.detach();

    JQuery(headerClass + ' .navbar-toggle').on('click', function() {
        var JQuerythis = JQuery(this);
        if(JQuery('html').hasClass('nav-visible')) {
            startupKit.hideCollapseMenu();
        } else {
            JQuery('.navbar-collapse#' + headerClass.substr(1)).removeClass('collapse');
            if(JQuery('#header-dockbar').length) {
                JQuery('.navbar-collapse#' + headerClass.substr(1)).css({
                    top: JQuery('#header-dockbar').height()
                });
            }
            setTimeout(function() {
                JQuery('html').addClass('nav-visible');
            }, 1)
            setTimeout(function() {
                JQuery('body > .navbar-collapse').css({
                    'z-index': 101
                });
            }, 400)
        }
    });

    if (JQuery(headerClass + ' .navbar').hasClass('navbar-fixed-top')) {
        var s1 = JQuery(headerClass + '-sub'),
            s1StopScroll = s1.outerHeight() - 70,
            antiflickerStopScroll = 70;

        if(JQuery(headerClass).outerHeight()>0){
            var antiflickerColor = JQuery(headerClass).css('background-color');
        }else if(JQuery(headerClass+'-sub').length > 0){
            var antiflickerColor = JQuery(headerClass+'-sub').css('background-color');
        }else{
            var antiflickerColor='#fff';
        }

        var antiflicker = JQuery('<div class="' + headerClass.slice(1) + '-startup-antiflicker header-antiflicker" style="opacity: 0.0001; position: fixed; z-index: 2; left: 0; top: 0; width: 100%; height: 70px; background-color: '+antiflickerColor+';" />');
        JQuery('body').append(antiflicker);
        var s1FadedEls = JQuery('.background, .caption, .controls > *', s1),
            header = JQuery(headerClass);

        s1FadedEls.each(function() {
            JQuery(this).data('origOpacity', JQuery(this).css('opacity'));
        });

        var headerAniStartPos = s1.outerHeight() - 120, headerAniStopPos = s1StopScroll;

        JQuery(window).scroll(function() {
            var opacity = (s1StopScroll - JQuery(window).scrollTop()) / s1StopScroll;
            opacity = Math.max(0, opacity);

            if (JQuery(window).scrollTop() > s1StopScroll - antiflickerStopScroll) {
                var opacityAntiflicker = (s1StopScroll - JQuery(window).scrollTop()) / antiflickerStopScroll;
                opacityAntiflicker = Math.max(0, opacityAntiflicker);
            } else {
                opacityAntiflicker = 1
            }
            // 0..1

            s1FadedEls.each(function() {
                JQuery(this).css('opacity', JQuery(this).data('origOpacity') * opacity);
            });

            antiflicker.css({
                'background-color': JQuery('.pt-page-current', s1).css('background-color'),
                'opacity': 1.0001 - opacityAntiflicker
            });
            
            var headerZoom = -(headerAniStartPos - JQuery(window).scrollTop()) / (headerAniStopPos - headerAniStartPos);
            headerZoom = 1 - Math.min(1, Math.max(0, headerZoom));
            
            JQuery(window).resize(function(){
               _navbarResize();
            });
            var _navbarResize = function(){
                if(JQuery(window).width()<767){
                    JQuery('.navbar', header).css({
                        'top' : -6 + ((20 + 6) * headerZoom)
                    });
                } else if(JQuery(window).width()<480){
                    JQuery('.navbar', header).css({
                        'top' : -6 + ((20 + 6) * headerZoom)
                    });
                } else{
                    JQuery('.navbar', header).css({
                        'top' : -6 + ((45 + 6) * headerZoom)
                    });
                }
            };
            
            _navbarResize();
            
            JQuery('.navbar .brand', header).css({
                'font-size' : 18 + ((25 - 18) * headerZoom),
                'padding-top' : 30 + ((23 - 30) * headerZoom)
            });
            JQuery('.navbar .brand img', header).css({
                'width' : 'auto',
                'height' : 25 + ((50 - 25) * headerZoom),
                'margin-top' : -1 + ((-10 + 1) * headerZoom)
            });
            JQuery('.navbar .btn-navbar', header).css({
                'margin-top' : 30 + ((28 - 30) * headerZoom)
            });

            if (JQuery(window).width() > 979) {
                JQuery(headerClass + '.navbar .nav > li > a', header).css({
                    'font-size' : 12 + ((14 - 12) * headerZoom)
                });
            } else {
                JQuery(headerClass + '.navbar .nav > li > a', header).css({
                    'font-size' : ''
                });
            }

        });
    };
};

/* Header 1*/
startupKit.uiKitHeader.header1 = function() {
    var pt = PageTransitions();
    pt.init('#pt-main');
    JQuery('#pt-main .control-prev').on('click', function() {
        pt.gotoPage(5, 'prev');
        return false;
    });
    JQuery('#pt-main .control-next').on('click', function() {
        pt.gotoPage(6, 'next');
        return false;
    });

    startupKit.uiKitHeader._inFixedMode('.header-1');

};

/* Header 2*/
startupKit.uiKitHeader.header2 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-2');
};

/* Header 3*/
startupKit.uiKitHeader.header3 = function() {
    if (JQuery('.header-3 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-3').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-3');
};

/* Header 4*/
startupKit.uiKitHeader.header4 = function() {};

/* Header 5*/
startupKit.uiKitHeader.header5 = function() {

    startupKit.uiKitHeader._inFixedMode('.header-5');
    // PageTransitions
    JQuery(window).resize(function() {
        var maxH = 0;
        JQuery('.header-5-sub .pt-page').css('height', 'auto').each(function() {
            var h = JQuery(this).outerHeight();
            if (h > maxH)
                maxH = h;
        }).css('height', maxH + 'px');
        JQuery('.header-5-sub .page-transitions').css('height', maxH + 'px');
    });
    var pt1 = PageTransitions();
    pt1.init('#h-5-pt-1');

    JQuery('#h-5-pt-1 .pt-control-prev').on('click', function() {
        pt1.gotoPage(5, 'prev');
        return false;
    });

    JQuery('#h-5-pt-1 .pt-control-next').on('click', function() {
        pt1.gotoPage(6, 'next');
        return false;
    });

    var navbar = JQuery('.header-5 .navbar');
    JQuery('.search', navbar).click(function() {
        if (!navbar.hasClass('search-mode')) {
            navbar.addClass('search-mode');
            setTimeout(function() {
                JQuery('header .navbar .navbar-search input[type="text"]').focus();
            }, 1000);
        } else {

        }
        return false;
    });

    JQuery('.close-search', navbar).click(function() {
        navbar.removeClass('search-mode');
        return false;
    });
};

/* Header 6*/
startupKit.uiKitHeader.header6 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-6');
};

/* Header 7*/
startupKit.uiKitHeader.header7 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-7');
    JQuery(window).resize(function() {
        var maxH = 0;
        JQuery('.header-7-sub section').css('height', JQuery(this).height() + 'px').each(function() {
            var h = JQuery(this).outerHeight();
            if (h > maxH)
                maxH = h;
        }).css('height', maxH + 'px');
        JQuery('.header-7-sub .page-transitions').css('height', maxH + 'px');
        var ctrlsHeight = JQuery('.header-7-sub .pt-controls').height();
        JQuery('.header-7-sub .pt-controls').css('margin-top', (-1) * (maxH) / 2 - ctrlsHeight + 'px');
        JQuery('.header-7-sub .pt-controls').css('padding-bottom', (maxH) / 2 - ctrlsHeight + 'px');
    });


    // PageTransitions
    var pt = PageTransitions();
    pt.init('#h-7-pt-main');

    JQuery('.header-7-sub .pt-controls .pt-indicators > *').on('click', function() {

        if (JQuery(this).hasClass('active'))
            return false;

        var curPage = JQuery(this).parent().children('.active').index();
        var nextPage = JQuery(this).index();
        JQuery('.header-7-sub').css('background-color',JQuery('#h-7-pt-main').children('.pt-page').eq(nextPage).find('section').css('background-color'));
        var ani = 5;
        if (curPage < nextPage) {
            ani = 6;
        }

        pt.gotoPage(ani, nextPage);
        JQuery(this).addClass('active').parent().children().not(this).removeClass('active');
        return false;


    });

};

/* Header 8*/
startupKit.uiKitHeader.header8 = function() {
    if (JQuery('.header-8 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-8').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-8');
};

/* Header 9*/
startupKit.uiKitHeader.header9 = function() {

    startupKit.uiKitHeader._inFixedMode('.header-9');

    JQuery(window).resize(function() {
        var h = 0;
        JQuery('body > section:not(.header-9-sub)').each(function() {
            h += JQuery(this).outerHeight();
        });
        JQuery('.sidebar-content').css('height', h + 'px');
    });
};

/* Header 10*/
startupKit.uiKitHeader.header10 = function() {
    if (JQuery('.header-10 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-10').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-10');

    JQuery('.header-10-sub .control-btn').on('click', function() {
        JQuery.scrollTo(JQuery(this).closest('section').next(), {
            axis : 'y',
            duration : 500
        });
        return false;
    });
};

/* Header 11*/
startupKit.uiKitHeader.header11 = function() {
    if (JQuery('.header-11 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-11').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-11');

    JQuery(window).resize(function() {
        
        var headerContainer = JQuery('.header-11-sub').not('pre .header-11-sub');
        var player = headerContainer.find('.player');
        if (JQuery(window).width() < 751) {
            headerContainer.find('.signup-form').before(player);
            headerContainer.find('.player-wrapper').hide();
        } else {
            headerContainer.find('.player-wrapper').append(player).show();
        }
    });

};

/* Header 12*/
startupKit.uiKitHeader.header12 = function() {};

/* Header 13*/
startupKit.uiKitHeader.header13 = function() {};

/* Header 14*/
startupKit.uiKitHeader.header14 = function() {};

/* Header 15*/
startupKit.uiKitHeader.header15 = function() {
    if (JQuery('.header-15 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-15').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-15');
};

/* Header 16*/
startupKit.uiKitHeader.header16 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-16');
    var pt = PageTransitions();
    pt.init('#h-16-pt-main');
    JQuery('#h-16-pt-main .pt-control-prev').on('click', function() {
        pt.gotoPage(2, 'prev');
        return false;
    });
    JQuery('#h-16-pt-main .pt-control-next').on('click', function() {
        pt.gotoPage(1, 'next');
        return false;
    });

    JQuery('.header-16-sub .scroll-btn a').on('click', function(e) {
        e.preventDefault();
        JQuery.scrollTo(JQuery(this).closest('section').next(), {
            axis : 'y',
            duration : 500
        });
        return false;
    });
    JQuery(window).resize(function() {
        JQuery('.header-16-sub').css('height', JQuery(this).height() + 'px');
    });
    JQuery(window).resize().scroll();
};

/* Header 17*/
startupKit.uiKitHeader.header17 = function() {
    if (JQuery('.header-17 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-17').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-17');
    
    var pt = PageTransitions();
    pt.init('#h-17-pt-1');

    JQuery('.pt-controls .pt-indicators > *').on('click', function() {
        if (JQuery(this).hasClass('active'))
            return false;

        var curPage = JQuery(this).parent().children('.active').index();
        var nextPage = JQuery(this).index();
        var ani = 44;
        if (curPage < nextPage) {
            ani = 45;
        }

        pt.gotoPage(ani, nextPage);
        JQuery(this).addClass('active').parent().children().not(this).removeClass('active');
        return false;
    });

    JQuery(window).resize(function() {
        JQuery('.header-17-sub .page-transitions').each(function() {
            var maxH = 0;
            JQuery('.pt-page', this).css('height', 'auto').each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            }).css('height', maxH + 'px');
            JQuery(this).css('height', maxH + 'px');
            if(!JQuery(this).hasClass('calculated')){
                JQuery(this).addClass('calculated');
            }
        });
    });

};

/* Header 18*/
startupKit.uiKitHeader.header18 = function() {
    JQuery(window).resize(function() {
        maxH = JQuery(window).height(); 
        JQuery('.header-18 .page-transitions').css('height', maxH + 'px');
    });

    // PageTransitions
    var pt = PageTransitions();
    pt.init('#h-18-pt-main');

    JQuery('.header-18 .pt-control-prev').on('click', function() {
        pt.gotoPage(5, 'prev');
        return false;
    });

    JQuery('.header-18 .pt-control-next').on('click', function() {
        pt.gotoPage(6, 'next');
        return false;
    });

};

/* Header 19*/
startupKit.uiKitHeader.header19 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-19');
};

/* Header 20*/
startupKit.uiKitHeader.header20 = function() {
    if (JQuery('.header-20 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-20').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-20');
};

/* Header 21*/
startupKit.uiKitHeader.header21 = function() {
    startupKit.uiKitHeader._inFixedMode('.header-21');
    maxH = JQuery(window).height();
    if(JQuery('.navbar-fixed-top').length!=0){
        maxH = maxH - JQuery('.navbar-fixed-top').outerHeight();
    }
    if(JQuery('.header-21').length!=0){
        maxH = maxH - JQuery('.header-21').outerHeight();
    }
    if((maxH / 90) < 3){
        JQuery('.header-21-sub .control-btn').css('bottom', 0);
    }
    JQuery('.header-21-sub').height(maxH);

    JQuery('.header-21-sub .control-btn').on('click', function() {
        JQuery.scrollTo(JQuery(this).closest('section').next(), {
            axis : 'y',
            duration : 500
        });
        return false;
    });

};

/* Header 22*/
startupKit.uiKitHeader.header22 = function() {
    if (JQuery('.header-22 .navbar').hasClass('navbar-fixed-top')) {
        JQuery('.header-22').css('position', 'fixed').addClass('fake-header');
    };
    startupKit.uiKitHeader._inFixedMode('.header-22');
};

/* Header 23*/
startupKit.uiKitHeader.header23 = function() {

    startupKit.attachBgVideo();
    startupKit.uiKitHeader._inFixedMode('.header-23');

    JQuery('body').prepend(JQuery('.mask, .popup-video').not('pre .mask, pre .popup-video'));
    JQuery('.header-23 .mask, .header-23 .popup-video').not('pre .mask, pre .popup-video').detach();

    var iframe = JQuery('#pPlayer')[0];
    var player = JQueryf(iframe);
    player.addEvent('ready', function() {});

    function addEvent(element, eventName, callback) {
        if (element.addEventListener) {
            element.addEventListener(eventName, callback, false);
        } else {
            element.attachEvent(eventName, callback, false);
        }
    }

    JQuery('#first .play').on('click', function(evt) {
        evt.preventDefault();
        JQuery('.popup-video').addClass('shown');
        JQuery('.popup-video, .mask').fadeIn('slow', function() {
            player.api('play')
        });
        JQuery('.mask').on('click', function() {
            player.api('pause');
            JQuery('.popup-video, .mask').fadeOut('slow', function() {
                JQuery('.popup-video').removeClass('shown');
            });
        });
    });
};

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

/* Video background  */
startupKit.attachBgVideo = function() {
    var videBgDiv = JQuery('#bgVideo');
    if (!isMobile.any() && videBgDiv) {
        var videobackground = new JQuery.backgroundVideo(videBgDiv, {
            "holder": "#bgVideo",
            "align" : "centerXY",
            "path" : "video/",
            "width": 854,
            "height": 480,
            "filename" : "preview",
            "types" : ["mp4", "ogg", "webm"]
        });
    }
}


/**
 *  Contents 
 * */

startupKit.uiKitContent = startupKit.uiKitContent || {};


/* Content 1*/
startupKit.uiKitContent.content1 = function() {};

/* Content 2*/
startupKit.uiKitContent.content2 = function() {};

/* Content 3*/
startupKit.uiKitContent.content3 = function() {};

/* Content 4*/
startupKit.uiKitContent.content4 = function() {};

/* Content 5*/
startupKit.uiKitContent.content5 = function() {};

/* Content 6*/
startupKit.uiKitContent.content6 = function() {};

/* Content 7*/
startupKit.uiKitContent.content7 = function() {
    
    (function(el) {
        if (el.length != 0) {
            JQuery('img:first-child', el).css('left', '-29.7%');
            JQuery(window).resize(function() {
                if (!el.hasClass('ani-processed')) {
                    el.data('scrollPos', el.offset().top - JQuery(window).height() + el.outerHeight());
                }
            }).scroll(function() {
                if (!el.hasClass('ani-processed')) {
                    if (JQuery(window).scrollTop() >= el.data('scrollPos')) {
                        el.addClass('ani-processed');
                        JQuery('img:first-child', el).animate({
                            left : 0
                        }, 500);
                    }
                }
            });

        }

    })(JQuery('.screen'));

    
    

};

/* Content 8*/
startupKit.uiKitContent.content8 = function() {};

/* Content 9*/
startupKit.uiKitContent.content9 = function() {};

/* Content 10*/
startupKit.uiKitContent.content10 = function() {};

/* Content 11*/
startupKit.uiKitContent.content11 = function() {};

/* Content 12*/
startupKit.uiKitContent.content12 = function() {};

/* Content 13*/
startupKit.uiKitContent.content13 = function() {};

/* Content 14*/
startupKit.uiKitContent.content14 = function() {};

/* Content 15*/
startupKit.uiKitContent.content15 = function() {};

/* Content 16*/
startupKit.uiKitContent.content16 = function() {
    
    JQuery('.content-16 .control-btn').on('click', function() {
        JQuery.scrollTo(JQuery(this).closest('section').next(), {
            axis : 'y',
            duration : 500
        });
        return false;
    });

};

/* Content 17*/
startupKit.uiKitContent.content17 = function() {

    // Carousel auto height
    JQuery(window).resize(function() {
        JQuery('#c-17_myCarousel').each(function() {
            var maxH = 0;
            JQuery('.item', this).each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            });
            JQuery('#c-17_myCarousel .carousel-inner', this).css('height', maxH + 'px');
        });
    });

    // Carousel start
    JQuery('#c-17_myCarousel').carousel({
        interval : 4000
    });

};

/* Content 18*/
startupKit.uiKitContent.content18 = function() {

    // Carousel auto height
    JQuery(window).resize(function() {
        JQuery('#c-18_myCarousel').each(function() {
            var maxH = 0;
            JQuery('.item', this).each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            });
            JQuery('.carousel-inner', this).css('height', maxH + 'px');
        });
    });

    JQuery('#c-18_myCarousel').bind('slid.bs.carousel', function() {
        JQuery('.carousel-control', this).removeClass('disabled').attr('href', '#c-18_myCarousel');
        if (JQuery('.item.active', this).index() == 0) {
            JQuery('.carousel-control.left', this).addClass('disabled').attr('href', '#');
        } else if (JQuery('.item.active', this).index() == (JQuery('.item', this).length - 1)) {
            JQuery('.carousel-control.right', this).addClass('disabled').attr('href', '#');
        }
    });

};

/* Content 19*/
startupKit.uiKitContent.content19 = function() {};

/* Content 20*/
startupKit.uiKitContent.content20 = function() {};

/* Content 21*/
startupKit.uiKitContent.content21 = function() {

    JQuery(window).resize(function() {
        JQuery('.content-21 .features').each(function() {
            var maxH = 0;
            JQuery('.features-body', this).css('height', 'auto').each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            }).css('height', maxH + 'px');
            JQuery('.features-bodies', this).css('height', maxH + 'px');
            if(!JQuery('.features-bodies', this).hasClass('calculated')){
                JQuery('.features-bodies', this).addClass('calculated');
            }
        });
    });

    JQuery('.content-21 .features .features-header .box').click(function() {
        JQuery(this).addClass('active').parent().children().not(this).removeClass('active');
        JQuery(this).closest('.features').find('.features-body').removeClass('active').eq(JQuery(this).index()).addClass('active');
        return false;
    });

};

/* Content 22*/
startupKit.uiKitContent.content22 = function() {

    (function(el) {
        if (isRetina) {
            JQuery('.img img', el).each(function() {
                JQuery(this).attr('src', JQuery(this).attr('src').replace(/.png/i, '@2x.png'));
            });
        }

        JQuery(window).resize(function() {
            if (!el.hasClass('ani-processed')) {
                el.data('scrollPos', el.offset().top - JQuery(window).height() + el.outerHeight() - parseInt(el.css('padding-bottom'), 10));
            }
        }).scroll(function() {
            if (!el.hasClass('ani-processed')) {
                if (JQuery(window).scrollTop() >= el.data('scrollPos')) {
                    el.addClass('ani-processed');
                }
            }
        });
    })(JQuery('.content-22'));

};
/* Content 23*/
startupKit.uiKitContent.content23 = function() {

    JQuery('.content-23 .control-btn').on('click', function() {
        JQuery.scrollTo(JQuery(this).closest('section').next(), {
            axis : 'y',
            duration : 500
        });
        return false;
    });

};
/* Content 24*/
startupKit.uiKitContent.content24 = function() {

    JQuery(window).resize(function() {
        JQuery('.content-24 .features').each(function() {
            var maxH = 0;
            JQuery('.features-body', this).css('height', 'auto').each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            }).css('height', maxH + 'px');
            JQuery('.features-bodies', this).css('height', maxH + 'px');
        });
    });

    JQuery('.content-24 .features .features-header .box').click(function() {
        JQuery(this).addClass('active').parent().children().not(this).removeClass('active');
        JQuery(this).closest('.features').find('.features-body').removeClass('active').eq(JQuery(this).index()).addClass('active');
        return false;
    });

};
/* Content 25*/
startupKit.uiKitContent.content25 = function() {

    if ((!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) || (window.mobile)) {
        JQuery('.svg').remove();
        JQuery('.nosvg').attr('style', 'display:block;');
    }

    (function(el) {
        el.css('opacity', 0);
        JQuerysvg = JQuery('#spaceship', el);
        JQuery('#rocket-raw', JQuerysvg).attr('transform', 'translate(-100,100)');
        JQuery('#rocketmask1', JQuerysvg).attr('transform', 'translate(100,-100)');

        JQuery(window).resize(function() {
            if (!el.hasClass('ani-processed')) {
                el.data('scrollPos', el.offset().top - JQuery(window).height() + el.outerHeight());
            }
            var svg = JQuery('.content-25 .svg');
            var nosvg = JQuery('.content-25 .nosvg');
            JQuery('.content-25 .col-sm-6:nth-child(2)').show();
            JQuery('.content-25 .col-sm-6:nth-child(2)').append(nosvg);
        }).scroll(function() {
            if (!el.hasClass('ani-processed')) {
                if (JQuery(window).scrollTop() >= el.data('scrollPos')) {
                    el.addClass('ani-processed');
                    el.animate({
                        opacity : 1
                    }, 600);
                    JQuery('#rocket-raw, #rocketmask1', JQuerysvg).clearQueue().stop().animate({
                        svgTransform : 'translate(0,0)'
                    }, {
                        duration : 800,
                        easing : "easeInOutQuad"
                    });
                }
            }
        });
    })(JQuery('.content-25 .col-sm-6 + .col-sm-6'));

};
/* Content 26*/
startupKit.uiKitContent.content26 = function() {};

/* Content 27*/
startupKit.uiKitContent.content27 = function() {
    if ((!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) || (window.mobile)) {
        JQuery('.svg').remove();
        JQuery('.nosvg').attr('style', 'display:block;');
    }

    JQuery(window).resize(function() {
        var svg = JQuery('.content-27 .svg');
        var nosvg = JQuery('.content-27 .nosvg');
        JQuery('.content-27 .col-sm-4:first-child').show();
        JQuery('.content-27 .col-sm-4:first-child').append(nosvg);
    });
};
/* Content 28*/
startupKit.uiKitContent.content28 = function() {};
/* Content 29*/
startupKit.uiKitContent.content29 = function() {};
/* Content 30*/
startupKit.uiKitContent.content30 = function() {

    JQuery(window).resize(function() {
        var boxes = JQuery('.content-30 .col-sm-3');
        for (var t = 0; t <= boxes.length; t++) {
            var descTop = JQuery(boxes[t]).find('.description-top');
            if (JQuery(window).width() <= 480) {
                JQuery(boxes[t]).find('.img').after(descTop);

            } else {
                JQuery(boxes[t]).find('.img').before(descTop);
            }
        }
    });

};
/* Content 31*/
startupKit.uiKitContent.content31 = function() {
    (function(el) {
        JQuery(window).scroll(function() {
            if (JQuery(window).width() > 480) {
                JQuery('.row', el).each(function(idx) {
                    if (JQuery(window).scrollTop() >= (JQuery(this).offset().top - JQuery(window).height() + JQuery(window).height() / 2 + 100)) {
                        JQuery(this).addClass('active');
                    } else {
                        JQuery(this).removeClass('active');
                    }
                });
            }
        });
        JQuery(window).resize(function() {
            JQuery('.page-transitions', el).each(function() {
                var maxH = 0;
                JQuery('.pt-page', this).css('height', 'auto').each(function() {
                    var h = JQuery(this).outerHeight();
                    if (h > maxH)
                        maxH = h;
                }).css('height', maxH + 'px');
                JQuery(this).css('height', maxH + 'px');
            });
        });
        JQuery('.page-transitions', el).each(function() {
            var pt = PageTransitions();
            pt.init(this);

            JQuery('.pt-control-prev', this).on('click', function() {
                pt.gotoPage(68, 'prev');
                return false;
            });

            JQuery('.pt-control-next', this).on('click', function() {
                pt.gotoPage(68, 'next');
                return false;
            });
        });
    })(JQuery('.content-31'));
};

/* Content 32*/
startupKit.uiKitContent.content32 = function() {}

/* Content 33*/
startupKit.uiKitContent.content33 = function() {}

/* Content 34*/
startupKit.uiKitContent.content34 = function() {
    JQuery(window).resize(function() {
        var maxH = 0;
        JQuery('.content-34 section').each(function() {
            var h = JQuery(this).outerHeight();
            if (h > maxH)
                maxH = h;
        });
        JQuery('.content-34 .page-transitions').css('height', maxH + 'px');
        var ctrlsHeight = JQuery('.content-34 .pt-controls').height();
        JQuery('.content-34 .pt-controls').css('margin-top', (-1) * ctrlsHeight / 2 + 'px');
    });
    // PageTransitions
    var pt = PageTransitions();
    pt.init('#content-34-pt-main');
    JQuery('.content-34 .pt-controls .pt-indicators > *').on('click', function() {
        if (JQuery(this).hasClass('active'))
            return false;
        var curPage = JQuery(this).parent().children('.active').index();
        var nextPage = JQuery(this).index();
        var ani = 5;
        if (curPage < nextPage) {
            ani = 6;
        }
        pt.gotoPage(ani, nextPage);
        JQuery(this).addClass('active').parent().children().not(this).removeClass('active');        
        return false;
    });
}

/* Content 35*/
startupKit.uiKitContent.content35 = function() {
    if(JQuery(".content-35-slider").length) {
        JQuery('.content-35-slider').bxSlider({
            'controls': false,
            'pagerCustom': '.content-35-customPager',
            'adaptiveHeight': true,
            'infiniteLoop': false
        });
    }
    var pager = JQuery('.content-35-customPager');
    pager.find(JQuery('.menuicon')).on('mouseenter', function(){
        JQuery(this).parent().addClass('showmenu');
    })
    pager.on('mouseleave', function(){
        JQuery(this).removeClass('showmenu');
    })
    pager.find(JQuery('.menuicon')).on('click', function(){
        var menu = JQuery(this).parent();
        if(menu.hasClass('showmenu')) {
            menu.removeClass('showmenu');
        } else {
            menu.addClass('showmenu');
        }
    })
}

/* Content 36*/
startupKit.uiKitContent.content36 = function() {}
/* Content 37*/
startupKit.uiKitContent.content37 = function() {}
/* Content 38*/
startupKit.uiKitContent.content38 = function() {
    //samples grid
    var samplesGrid = JQuery('.samples-grid');
    setTimeout(function () {
        samplesGrid.masonry({itemSelector: '.sample-box'});
    }, 3000);

    //show images on scroll
    if (!isMobile.any()) {
        JQuery(document).scroll(function () {
            var samples = JQuery('.samples-holder');
            var samplesCont = samples.offset();
            var scrollTop = JQuery(document).scrollTop();
            if (scrollTop >= samplesCont.top - JQuery(window).height() + 200) {
                samplesGrid.masonry({itemSelector: '.sample-box'})
            }

            //samples
            if (JQuery(document).scrollTop() >= samplesCont.top - JQuery(window).height() / 2) {
                if (!JQuery('.samples-holder').hasClass('shown')) {
                    if (!isMobile.any()) {
                        addSamplesInt = setInterval(function () {
                            var elements = JQuery('.sample-box:not(.visible)');
                            var random = Math.round(Math.random() * elements.size());
                            var el = elements.eq(random);
                            el.addClass('visible');
                            if (elements.size() == 0) {
                                clearInterval(addSamplesInt);
                            }
                        }, 50);
                    }
                    JQuery('.samples-holder').addClass('shown');
                }
            }
        });
    }
    else{
        JQuery('.samples-holder').addClass('shown');
        JQuery('.sample-box').addClass('visible');
    }
    //can I see the real pixels?
    JQuery('.samples-holder img').click(function () {
        var imgsrc = JQuery(this).attr('src');
        var file = imgsrc.split('/');
        var filename = file[file.length - 1];
        var structure = JQuery(this).data('structure');
        var path = imgsrc.split('/' + filename);
        path = path[0];
        showLargeImage(filename, path + '-large/', JQuery(this), 'next', structure);
    });

    if (window.location.hash.indexOf(".samples-holder") != -1) {
        var id = window.location.hash;
        JQuery(id).click();
    }

    JQuery(document).keydown(function (e) {
        if (e.keyCode == 37) {
            JQuery('.largeScreenshots .prev').click();
            return false;
        }
        if (e.keyCode == 39) {
            JQuery('.largeScreenshots .next').click();
            return false;
        }
        if (e.keyCode == 38) {
            JQuery('.largeScreenshots').clearQueue().animate({ scrollTop: JQuery('.largeScreenshots').scrollTop() - 500 + "px"}, 250);
            return false;
        }
        if (e.keyCode == 40) {
            JQuery('.largeScreenshots').clearQueue().animate({ scrollTop: JQuery('.largeScreenshots').scrollTop() + 500 + "px"}, 250);
            return false;
        }
        if (e.keyCode == 27) {
            JQuery('.close').click();
            return false;
        }
    });

    function showLargeImage(file, prefix, obj, direction, structure) {

        //dark screen, add elements
        if (!JQuery('body').hasClass('largescreenshotsopened')) {
            JQuery('body').addClass('noscroll').addClass('largescreenshotsopened').append('<div class="largeScreenshots"><div class="picHolder"><h1></h1><span></span><div class="imgHolder"><img/></div></div><div class="prev"></div><div class="next"></div><div class="close"></div></div>');
            JQuery('.largeScreenshots .close, .largeScreenshots span').click(function (e) {
                JQuery('body').removeClass('noscroll').removeClass('largescreenshotsopened');
                JQuery('.largeScreenshots').remove();
                window.location.hash = "/";
            });
        }

        //show me the image
        JQuery('.largeScreenshots .imgHolder img').attr('src', prefix + file);
        JQuery('.largeScreenshots .imgHolder img').ready(function (e) {
            JQuery('.largeScreenshots').scrollTop(0);
            JQuery('.largeScreenshots .imgHolder img');
            JQuery('.largeScreenshots h1').text(obj.attr('alt'));

            window.location.hash=obj.attr('id');

            var speed = '0.75s cubic-bezier(.27,1.64,.32,.95)';
            JQuery('.picHolder, .picHolder h1').css('-webkit-animation', direction + " " + speed).css('-moz-animation', direction + " " + speed).css('-ms-animation', direction + " " + speed).css("-o-animation", direction + " " + speed).css("animation", direction + " " + speed);
            setTimeout(function () {
                JQuery('.picHolder, .picHolder h1').removeAttr('style');
            }, 750);
        });

        //set nice position for arrows

        function setNicePosition(){
            var p = JQuery(".largeScreenshots .picHolder");
            var position = p.position();
            var size = JQuery('.largeScreenshots img').outerHeight();
            var scrolltop = JQuery(".largeScreenshots").scrollTop()
            if (position.top+192> 0) {
                JQuery('.largeScreenshots .prev, .largeScreenshots .next').css('top', position.top+192).css('height', JQuery(window).height() - position.top  - 192);
            } else if (scrolltop + JQuery(window).height() > size+192+36) {
                var posFromBottom = (scrolltop + JQuery(window).height()) - (size+192+36);
                JQuery('.largeScreenshots .prev, .largeScreenshots .next').css('top', 0).css('height', JQuery(window).height()-posFromBottom);
            } else {
                JQuery('.largeScreenshots .prev, .largeScreenshots .next').css('top', 0).css('height', JQuery(window).height());
            }
        }
        setNicePosition()

        JQuery('.largeScreenshots').scroll(function () {
            setNicePosition();
        });

        //preload pics
        var newObj = obj.parent().nextOrFirst('.samples-holder .sample-box').find('img');
        var imgsrc = newObj.attr('src');
        var file = imgsrc.split('/');
        var filename = file[file.length - 1];
        var path = imgsrc.split('/' + filename);
        path = path[0];
        JQuery([path + '-large/' + filename]).preload();

        var newObj = obj.parent().prevOrLast('.samples-holder .sample-box').find('img');
        var imgsrc = newObj.attr('src');
        var file = imgsrc.split('/');
        var filename = file[file.length - 1];
        var path = imgsrc.split('/' + filename);
        path = path[0];
        JQuery([path + '-large/' + filename]).preload();

        //get next picure and show next
        JQuery('.largeScreenshots .prev,.largeScreenshots .next, .largeScreenshots .imgHolder img').unbind();
        setTimeout(function () {
            JQuery('.largeScreenshots .prev').click(function () {
                var newObj = obj.parent().prevOrLast('.samples-holder .sample-box').find('img');
                var structure = obj.data('structure');
                var imgsrc = newObj.attr('src');
                var file = imgsrc.split('/');
                var filename = file[file.length - 1];
                var path = imgsrc.split('/' + filename);
                path = path[0];

                showLargeImage(filename, path + '-large/', newObj, "prev",structure);
            });

            JQuery('.largeScreenshots .next, .largeScreenshots .imgHolder img').click(function () {

                var newObj = obj.parent().nextOrFirst('.samples-holder .sample-box').find('img');
                var structure = newObj.data('structure');
                var imgsrc = newObj.attr('src');
                var file = imgsrc.split('/');
                var filename = file[file.length - 1];
                var path = imgsrc.split('/' + filename);
                path = path[0];

                showLargeImage(filename, path + '-large/', newObj, "next",structure);
            });
        },750);

        //add swipe gesture for mobile
         if (isMobile.any()){
             JQuery('.largeScreenshots .imgHolder img').touchwipe({
                  wipeLeft: function() { JQuery('.largeScreenshots .next').click(); },
                 wipeRight: function(){ JQuery('.largeScreenshots .prev').click(); },
                 min_move_x: 20,
                  min_move_y: 20,
                 preventDefaultEvents: false
             });
         }
    }
};


/**
 * Blogs 
 */

startupKit.uiKitBlog = startupKit.uiKitBlog || {};

/* Blog 1*/
startupKit.uiKitBlog.blog1 = function() {

    JQuery(window).resize(function() {
        JQuery('.page-transitions').each(function() {
            var maxH = 0;
            JQuery('.pt-page', this).css('height', 'auto').each(function() {
                var h = JQuery(this).outerHeight();
                if (h > maxH)
                    maxH = h;
            }).css('height', maxH + 'px');
            JQuery(this).css('height', maxH + 'px');
        });
    });

    var pt1 = PageTransitions();
    pt1.init(JQuery('#b1-pt-1'));

    JQuery('#b1-pt-1 .pt-control-prev').on('click', function() {
        pt1.gotoPage(28, 'prev');
        return false;
    });

    JQuery('#b1-pt-1 .pt-control-next').on('click', function() {
        pt1.gotoPage(29, 'next');
        return false;
    });

};

/* Blog 2*/
startupKit.uiKitBlog.blog2 = function() {};
/* Blog 3*/
startupKit.uiKitBlog.blog3 = function() {};
/* Blog 4*/
startupKit.uiKitBlog.blog4 = function() {};
/* Blog 5*/
startupKit.uiKitBlog.blog5 = function() {

    var pt2 = PageTransitions();
    pt2.init(JQuery('#b5-pt-2'));

    JQuery('#b5-pt-2 .pt-control-prev').on('click', function() {
        pt2.gotoPage(28, 'prev');
        return false;
    });

    JQuery('#b5-pt-2 .pt-control-next').on('click', function() {
        pt2.gotoPage(29, 'next');
        return false;
    });

};

/**
 * Crews 
 */

startupKit.uiKitCrew = startupKit.uiKitCrew ||
function() {
    JQuery('.member .photo img').each(function() {
        JQuery(this).hide().parent().css('background-image', 'url("' + this.src + '")');
    });
};


/**
 * Projects 
 */
startupKit.uiKitProjects = startupKit.uiKitProjects || {};

/* project-1 */
startupKit.uiKitProjects.project1 = function() {};

/* project-2 */
startupKit.uiKitProjects.project2 = function() {};

/* project-3 */
startupKit.uiKitProjects.project3 = function() {};

/* project-4 */
startupKit.uiKitProjects.project4 = function() {
    JQuery('.overlay').on('hover', function() {
        JQuery(this).closest('.project').find('.name').toggleClass('hover');
    });
};



/**
 * Footers 
 */
startupKit.uiKitFooter = startupKit.uiKitFooter || {};

/* Footer 1*/
startupKit.uiKitFooter.footer1 = function() {};

/* Footer 2*/
startupKit.uiKitFooter.footer2 = function() {};

/* Footer 3*/
startupKit.uiKitFooter.footer3 = function() {};

/* Footer 4*/
startupKit.uiKitFooter.footer4 = function() {};

/* Footer 5*/
startupKit.uiKitFooter.footer5 = function() {};

/* Footer 6*/
startupKit.uiKitFooter.footer6 = function() {};

/* Footer 7*/
startupKit.uiKitFooter.footer7 = function() {};

/* Footer 8*/
startupKit.uiKitFooter.footer8 = function() {};

/* Footer 9*/
startupKit.uiKitFooter.footer9 = function() {};

/* Footer 10*/
startupKit.uiKitFooter.footer10 = function() {};

/* Footer 11*/
startupKit.uiKitFooter.footer11 = function() {};

/* Footer 12*/
startupKit.uiKitFooter.footer12 = function() {};

/* Footer 13*/
startupKit.uiKitFooter.footer13 = function() {};

/* Footer 14*/
startupKit.uiKitFooter.footer14 = function() {};

/* Footer 15*/
startupKit.uiKitFooter.footer15 = function() {};


/** 
 * Global part of startup-kit
 * */
(function(JQuery) {
    JQuery(function() {
        /* implementing headers */
        for (header in startupKit.uiKitHeader) {
            headerNumber = header.slice(6);
            if (jQuery('.header-' + headerNumber).length != 0) {
                startupKit.uiKitHeader[header]();
            };
        }

        /* implementing contents */
        for (content in startupKit.uiKitContent) {
            contentNumber = content.slice(7);
            if (jQuery('.content-' + contentNumber).length != 0) {
                startupKit.uiKitContent[content]();
            };
        }
        
        /* implementing blogs */
        for (blog in startupKit.uiKitBlog) {
            blogNumber = blog.slice(4);
            if (jQuery('.blog-' + blogNumber).length != 0) {
                startupKit.uiKitBlog[blog]();
            };
        }
        
        /* implementing projects */
        for (project in startupKit.uiKitProjects) {
            projectNumber = project.slice(7);
            if (jQuery('.projects-' + projectNumber).length != 0) {
                startupKit.uiKitProjects[project]();
            };
        }

        /* implementing crew */
        startupKit.uiKitCrew();

        /* implementing footers */
        for (footer in startupKit.uiKitFooter) {
            footerNumber = footer.slice(6);
            if (jQuery('.footer-' + footerNumber).length != 0) {
                startupKit.uiKitFooter[footer]();
            };
        }
    
        /* function on load */
        JQuery(window).load(function() {
            JQuery('html').addClass('loaded');
            JQuery(window).resize();
        });

        /* ie fix images */
        if (/msie/i.test(navigator.userAgent)) {
            JQuery('img').each(function() {
                JQuery(this).css({
                    width : JQuery(this).attr('width') + 'px',
                    height : 'auto'
                });
            });
        }

        // Focus state for append/prepend inputs
        JQuery('.input-prepend, .input-append').on('focus', 'input', function() {
            JQuery(this).closest('.control-group, form').addClass('focus');
        }).on('blur', 'input', function() {
            JQuery(this).closest('.control-group, form').removeClass('focus');
        });

        // replace project img to background-image
        JQuery('.project .photo img').each(function() {
            JQuery(this).hide().parent().css('background-image', 'url("' + this.src + '")');
        });

        // Tiles
        var tiles = JQuery('.tiles');

        // Tiles phone mode
        JQuery(window).resize(function() {
            if (JQuery(this).width() < 768) {
                if (!tiles.hasClass('phone-mode')) {
                    JQuery('td[class*="tile-"]', tiles).each(function() {
                        JQuery('<div />').addClass(this.className).append(JQuery(this).contents()).appendTo(tiles);
                    });

                    tiles.addClass('phone-mode');
                }
            } else {
                if (tiles.hasClass('phone-mode')) {
                    JQuery('> [class*="tile-"]', tiles).each(function(idx) {
                        JQuery('td[class*="tile-"]', tiles).eq(idx).append(JQuery(this).contents());
                        JQuery(this).remove();
                    });

                    tiles.removeClass('phone-mode');
                }
            }
        });

        tiles.on('mouseenter', '[class*="tile-"]', function() {
            JQuery(this).removeClass('faded').closest('.tiles').find('[class*="tile-"]').not(this).addClass('faded');
        }).on('mouseleave', '[class*="tile-"]', function() {
            JQuery(this).closest('.tiles').find('[class*="tile-"]').removeClass('faded');
        });
        
        
    });
    //add some smooth for scroll


})(jQuery);
//swipe
(function(JQuery){JQuery.fn.touchwipe=function(settings){var config={min_move_x:20,min_move_y:20,wipeLeft:function(){},wipeRight:function(){},wipeUp:function(){},wipeDown:function(){},preventDefaultEvents:true};if(settings)JQuery.extend(config,settings);this.each(function(){var startX;var startY;var isMoving=false;function cancelTouch(){this.removeEventListener('touchmove',onTouchMove);startX=null;isMoving=false}function onTouchMove(e){if(config.preventDefaultEvents){e.preventDefault()}if(isMoving){var x=e.touches[0].pageX;var y=e.touches[0].pageY;var dx=startX-x;var dy=startY-y;if(Math.abs(dx)>=config.min_move_x){cancelTouch();if(dx>0){config.wipeLeft();e.preventDefault()}else{config.wipeRight();e.preventDefault()}}else if(Math.abs(dy)>=config.min_move_y){cancelTouch();if(dy>0){config.wipeDown()}else{config.wipeUp()}}}}function onTouchStart(e){if(e.touches.length==1){startX=e.touches[0].pageX;startY=e.touches[0].pageY;isMoving=true;this.addEventListener('touchmove',onTouchMove,false)}}if('ontouchstart'in document.documentElement){this.addEventListener('touchstart',onTouchStart,false)}});return this}})(jQuery);
