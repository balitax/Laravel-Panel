/**
 * jQuery Plugin - Jribbble v@VERSION
 * A jQuery plugin to fetch shot and player data from the Dribbble API,
 * http://dribbble.com/api
 *
 * Copyright (c) 2011 Tyler Gaw
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 * Build Date: @DATE
 *
 */

;(function($, window, document, undefined) {
	'use strict';

    $.jribbble = {};

    var jsonpGET = function (path, args) {
        $.ajax({
            type: 'GET',
            url: 'http://api.dribbble.com' + path,
            data: args[1] || {},
            dataType: 'jsonp',
            success: function (data) {
                if (typeof (data) === 'undefined') {
                    args[0]({error: true});
                }
                else {
                    args[0](data);
                }
            }
        });
    };

    var methods = {
        'getShotById': '/shots/$/',
        'getReboundsOfShot': '/shots/$/rebounds/',
        'getShotsByList': '/shots/$/',
        'getShotsByPlayerId': '/players/$/shots/',
        'getShotsThatPlayerFollows': '/players/$/shots/following/',
        'getPlayerById': '/players/$/',
        'getPlayerFollowers': '/players/$/followers/',
        'getPlayerFollowing': '/players/$/following/',
        'getPlayerDraftees': '/players/$/draftees/',
        'getCommentsOfShot': '/shots/$/comments/',
        'getShotsThatPlayerLikes': '/players/$/shots/likes/'
    };

    var createAPIMethod = function (urlPattern) {
        return function () {
            var // Convert arguments to a real Array
                args = [].slice.call(arguments),

                // We run shift() on args here because we don't need to send
                // the first argument to jsonpGET.
                url = urlPattern.replace('$', args.shift());

            jsonpGET(url, args);
        };
    };

    for (var method in methods) {
        $.jribbble[method] = createAPIMethod(methods[method]);
    }

})(jQuery, window , document);

// custom code
(function(){

		
		// Code (After Page Loads)
		jQuery(document).ready(function(){

			"use strict";
			/* Availabe Easing Methods 
			1. linear
			2. swing
			3. easeInQuad
			4. easeOutQuad
			5. easeInOutQuad
			6. easeInCubic
			7. easeOutCubic
			8. easeInOutCubic
			9. easeInQuart
			10. easeOutQuart
			11. easeInOutQuart
			12. easeInQuint
			13. easeOutQuint
			14. easeInOutQuint
			15. easeInExpo
			16. easeOutExpo
			17. easeInOutExpo
			18. easeInSine
			19. easeOutSine
			20. easeInOutSine
			21. easeInCirc
			22. easeOutCirc
			23. easeInOutCirc
			24. easeInElastic
			25. easeOutElastic
			26. easeInOutElastic
			27. easeInBack
			28. easeOutBack
			29. easeInOutBack
			30. easeInBounce
			31. easeOutBounce
			32. easeInOutBounce
			*/

			// Settings Object
			if(typeof journal !== 'undefined' )
			{	
					var themeSettings = {
							speed: journal.speed , 
							animation: journal.animation
					}
			}else{
					var themeSettings = {
							speed: 700 , 
							animation: 'swing'
					}	
			}




			// detect ie10
			if(jQuery.browser.msie && jQuery.browser.version == 10) {
					jQuery('html').addClass('ie10');
			}
			if(jQuery.browser.msie && jQuery.browser.version == 9) {
					jQuery('html').addClass('ie9');
			}

			 // change title for sidebar button
		  	if(jQuery(window).width() < 980)
		  	{
		  			jQuery('.logo-wrapper .site-meta .reader').attr('data-title' , 'Sidebar');
		  	}
		 	


			// Tooltip for sidebar buttons
			jQuery('#sidebar .logo-wrapper .site-meta a').each(function()
		    {
		       var a = jQuery(this) , title = a.attr('data-title');
		       


		       // append the tooltip
		       a.append('<span class="title" style="display: none;">'+title+'</span>');

		       // show on hover
		       a.hover(function()
		       {
		          jQuery(this).find('span.title').stop().fadeIn(themeSettings.speed, themeSettings.animation);
		       },function()
		       {  
		          jQuery(this).find('span.title').stop().fadeOut(themeSettings.speed , themeSettings.animation);
		       })

		    });




			// toggle search form
			jQuery('.site-meta a.search').on('click' , function(){

					jQuery(this).parent().find('form').fadeToggle(themeSettings.speed).toggleClass('opened');
					jQuery(this).toggleClass('opened');
					return false;

			});



			// posts flexslider
			jQuery('.post-image.gallery.flexslider').flexslider({
			     animation: "fade",
			     touch : true ,
			     easing : themeSettings.animation ,
			     animationSpeed : 1000,
			     keyboard : true,
			     nextText : '' ,
			     prevText : '',
			     slideshow: true,                
			     slideshowSpeed: 5000,
			     controlNav: false,
			     directionNav: true
			});



			/* video and audio [mediaelements] */
			jQuery('audio').mediaelementplayer({

				loop: false,
				enableAutosize: false,
				features: ['playpause','progress', 'current' ] ,
				audioHeight: 40,
				alwaysShowHours: false

				});
			jQuery('video').mediaelementplayer({

				loop: false,
				enableAutosize: false,
				features: ['playpause','progress', 'current' , 'fullscreen' ] ,
				alwaysShowHours: false

				});



			 /* Quick Accoridon */
		    jQuery('.accordion').each(function() {

		    var acc = jQuery(this);
		    acc.addClass('opened').find('.item:first .head').addClass('head-active');
		    // show first item content
		    if(acc.hasClass('opened')) {
		     jQuery(this).find('.item:first').find('.item-content').slideDown();
		    }
		    
		    // when click
		    jQuery(this).find('.head').click(function() {
		        if(!jQuery(this).hasClass('head-active')){
		      jQuery(acc).find('.head').removeClass('head-active').parent().find('.item-content').slideUp(themeSettings.speed , themeSettings.animation);
		      jQuery(this).parent().find('.item-content').slideDown(themeSettings.speed , themeSettings.animation);
		      jQuery(this).addClass('head-active');
		        }
		        return false; 
		    });
		  }); // End Accrodion



		   /* Reader Mode */
		   jQuery('#readermode').on('click' , function(){

		   		jQuery('#reader-mode .bg').css('height' , jQuery('#reader-mode .content-wrapper').height() + 50 + 'px');

		   		if(jQuery(window).width() > 980)
		   		{
		   				var wrap = jQuery('#reader-mode') , button = jQuery(this);
		   				jQuery('#reader-mode').css('overflow-y' , 'scroll');
		   				jQuery('#reader-mode  > .bg').stop().animate({
		   						top: '0px'
		   				} , {duration: themeSettings.speed / 2})
				   		wrap.stop().animate({
				   				top: '0%'
				   		} , {duration: themeSettings.speed / 2 , easing: themeSettings.animation});

				   		jQuery('#reader-mode .content-wrapper').stop().animate({
				   				top: '0px'
				   		} , {duration: themeSettings.speed  , easing: themeSettings.animation});

				   		jQuery('body > section:not(#reader-mode)').each(function(){
				   				if(!jQuery(this).hasClass('background-slider') && jQuery(this).attr('id') != 'reader-mode')
				   				{
				   						jQuery(this).css('height' , jQuery('#reader-mode .content-wrapper').height() + 20 + 'px').css('overflow' , 'hidden');
				   						jQuery('section.main-content').css('height' , jQuery(window).height()).css('overflow-y' , 'scroll');

				   				}
				   		});
		   		}


		   }); 


		   // sidebar
		    jQuery('.toggleSidebar').on('click' , function(){

		   		if(jQuery(window).width() < 980)
		   		{
		   				jQuery('#sidebar .widgets-wrapper , #sidebar nav.second-menu , #sidebar .copyrights').fadeToggle(themeSettings.speed);
		   		}
		   }); 


		    // sidebar resize window
		    jQuery(window).resize(function(){
		    	if(jQuery(window).width() > 980)
		    	{
		    			jQuery('#sidebar .widgets-wrapper , #sidebar nav.second-menu , #sidebar .copyrights').fadeIn(0);
		    	}
		    	else{
		    			jQuery('#posts-pa .next-post a , #posts-pa .prev-post a').text('');
		    	}
		    });


		    // clean content from next and prev posts
		    if(jQuery(window).width() < 980)
		    {
		    	jQuery('#posts-pa .next-post a , #posts-pa .prev-post a').text('');		
		    }

		    // close reader mode
		   jQuery('#reader-mode .controls a.close').on('click' , function(){
		   		jQuery('#reader-mode').css('overflow-y' , 'hidden');
		   		jQuery('#reader-mode .content-wrapper').stop().animate({
				   				top: '-150%'
				   		} , {duration: themeSettings.speed * 2 , easing: themeSettings.animation});;
		   		jQuery('#reader-mode').stop().animate({
		   				top: '-100%'
		   		} , {duration: themeSettings.speed * 2, easing: themeSettings.animation});


		   		jQuery('body > section:not(#reader-mode)').css('height' , 'auto').css('overflow' , 'auto');

		   		jQuery('#reader-mode  > .bg').stop().animate({
		   						top: '-100%'
		   				} , {duration: themeSettings.speed})
		   });

		   // font enlarge 
		    jQuery('#reader-mode .controls .font p').on('click' , function()
	    	{	


	    			var c = jQuery(this), 
	    			text = jQuery('#reader-mode .page .post-content > .post-inner-content p');
	    			var size  = text.css('font-size').replace('px' , '');
	    			if(c.hasClass('large')){
	    				if(size == 18)
	    				{
	    					text.css('font-size' , '24px').css('line-height' , '30px');
	    				}
	    				if(size == 14){
	    						text.css('font-size' , '18px').css('line-height' , '24px');
	    				}
	    			}else if(c.hasClass('small')) {
	    				if(size == 24) {
	    					text.css('font-size' , '18px').css('line-height' , '24px');
	    				}
	    				if(size == 18)
	    				{
	    					text.css('font-size' , '14px').css('line-height' , '20px');
	    				}
	    			}

	    			// resize the window
	    			jQuery('#reader-mode .bg').css('height' , jQuery('#reader-mode .content-wrapper').height() + 50 + 'px');
	    	});


		   /* fancybox */
		   jQuery(window).load(function(){
				   	if(jQuery.fn.fancybox)
				   {
				   		jQuery('.gallery-item a').fancybox();
				   }
		   });


		   /* sidebar navigation */
		   jQuery('#sidebar nav.second-menu ul li').hover(function()
		   	{
		   			jQuery(this).find('> ul').stop().slideDown(themeSettings.speed / 2);
		   	} , function()
		   	{
		   			jQuery(this).find('> ul').stop().slideUp(themeSettings.speed / 2);
		   	});


		   /* flickr widget */
		   jQuery('.widget-content .flickr-wrapper ul.slides').html('').jflickrfeed({
			limit: 12,
			qstrings: {
			  id: '52617155@N08'
			},
			itemTemplate: 
			'<li><a href="#"><img src="{{image_m}}" alt="{{title}}" /></a></li>'
				});
		   jQuery(window).load(function(){
			   	jQuery('.flickr-wrapper').flexslider({
				     animation: "fade",
				     touch : true ,
				     easing : themeSettings.animation ,
				     animationSpeed : 1000,
				     keyboard : true,
				     nextText : '' ,
				     prevText : '',
				     slideshow: true,                
				     slideshowSpeed: 5000,
				     controlNav: false,
				     directionNav: true
				});
				jQuery('.background-slider .flexslider').flexslider({ animation: "fade",
				     touch : false ,
				     pauseOnHover: false,
				     easing : themeSettings.animation ,
				     animationSpeed : 1000,
				     keyboard : false,
				     nextText : '' ,
				     prevText : '',
				     slideshow: true,                
				     slideshowSpeed: 5000,
				     controlNav: false,
				     directionNav: false});
			   });




		   /* dribbble */
		   jQuery.jribbble.getShotsByPlayerId('envato', function(playerShots){
		   			 var content = [];

				    jQuery.each(playerShots.shots, function (i, shot) {
				        content.push('<a href="' + shot.url + '" class="shot"><span class="zoom"></span><span class="glow"></span><img src="' + shot.image_teaser_url + '" ');
				        content.push('alt="' + shot.title + '"></a>');
				    });

				    jQuery('.widget-content .dribbble-wrapper').html(content.join(''));


		   }, { per_page: 4 , page: 1 });


		   /* top menu */
		   jQuery('section.top-menu > a.open-menu').on('click' , function(){

		   		jQuery(this).next('nav').toggleClass('opened');
		   		return false;

		   });




		  



		}); // end code
}
)(jQuery);