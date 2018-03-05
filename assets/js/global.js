/* global twentyseventeenScreenReaderText */
(function( $ ) {

	// Variables and DOM Caching.
	var $body = $( 'body' ),
		$navigationBar = $body.find( '#main-navigation' ),
		$stickyNavigation = $navigationBar.children( '#sticky-navigation' ),
		$navigation = $navigationBar.find( '#top-menu' ),
		
		
		$menuToggle = $navigation.find( '.menu-toggle' ),
		$menuScrollDown = $body.find( '.menu-scroll-down' ),
		$sidebar = $body.find( '#secondary' ),
		$entryContent = $body.find( '.entry-content' ),
		$formatQuote = $body.find( '.format-quote blockquote' ),
		isFrontPage = $body.hasClass( 'twentyseventeen-front-page' ) || $body.hasClass( 'home blog' ),
		navigationFixedClass = 'site-navigation-fixed',
		navigationHeight,
		navigationOuterHeight,
		navPadding,
		navMenuItemHeight,
		idealNavHeight,
		navIsNotTooTall,
		headerOffset,
		menuTop = 0,
		resizeTimer;


	/*
	 * Test if inline SVGs are supported.
	 * @link https://github.com/Modernizr/Modernizr/
	 */
	function supportsInlineSVG() {
		var div = document.createElement( 'div' );
		div.innerHTML = '<svg/>';
		return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
	}

	/**
	 * Test if an iOS device.
	*/
	function checkiOS() {
		return /iPad|iPhone|iPod/.test(navigator.userAgent) && ! window.MSStream;
	}

	/*
	 * Test if background-attachment: fixed is supported.
	 * @link http://stackoverflow.com/questions/14115080/detect-support-for-background-attachment-fixed
	 */
	function supportsFixedBackground() {
		var el = document.createElement('div'),
			isSupported;

		try {
			if ( ! ( 'backgroundAttachment' in el.style ) || checkiOS() ) {
				return false;
			}
			el.style.backgroundAttachment = 'fixed';
			isSupported = ( 'fixed' === el.style.backgroundAttachment );
			return isSupported;
		}
		catch (e) {
			return false;
		}
	}

	$('#top-navigation .phone-toggle').click(function() {
		$('#callus').toggleClass('on');
	});	

	$('#main-navigation #mobile-nav-toggle').click(function() {
		$(this).siblings('#sticky-navigation').toggleClass('on-mobile');
	});

	$('#top-menu > li > a').click(function(e) {
		if($(this).attr('href') == '#')
			e.preventDefault();
		
		$(this).siblings('ul').toggleClass('off');
		if($(this).siblings('ul').hasClass('off'))
			$(this).parent().removeClass('hover');
		else
			$(this).parent().addClass('hover');
	});

	// init navigation bar
	if (window.pageYOffset > 120) $stickyNavigation.addClass('on');
	//$navigationBar.removeClass('hidden');

	$(window).scroll(function() {
		
		if ( $(window).width() > 991 ) {
			var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
			if(scrollTop > 120)
				$stickyNavigation.addClass('on')
			else
				$stickyNavigation.removeClass('on')
		}
	});

	$('.close-btn').click(function() {
		//var el = $('#leftnavigation div[data-for="toggle' + $(this).parent().attr('id') + '"]');
		//console.log(el);
		//$(el).click();
		$(this).parent().toggleClass('on');
	});

	$('.label').click(function() {
		$(this).toggleClass('active');
		$('#'+$(this).data('for')).siblings('input[type=checkbox]').removeClass('checked');
		$('#'+$(this).data('for')).toggleClass('checked');
	});
	
	// 
	$('.add-next-scroll').each(function() {
		
		var nextArrow = $('<div class="next-section"><i class="icon-arrow-down"></i></div>');

		$(this).append(nextArrow);

		nextArrow.click(function() {
			var target = $(this).closest('section').next();
			$('html, body').animate({
			  scrollTop: target.offset().top - 70
			}, 1000);
		});
	});

	$('iframe[src*="youtube.com"]').each(function() {
		$(this).wrap('<div class="video-wrap"></div>');
		$(this).wrap('<div class="video-inner-wrap"></div>');
		var w = $(this).attr('width');
		var h = $(this).attr('height');

		$(this).parent().css({'paddingTop': (100 * h/w) + '%'});
		$(this).parent().addClass('on');
	});

	$('.frame-btn').each(function() {
		if( $(this).children('.frame').length == 0)
			$(this).append('<span class="frame"></span>');
	});

	$('.es_textbox').each(function() {
		$(this).children('input').attr('placeholder', 'Adres e-mail');
	});

	$('.es_button').each(function() {
		$(this).addClass('btn frame-btn');
		$(this).children('input').val('zapisz się');
		$(this).append('<span class="frame"></span>');
	});

	$('.filters input').change(function() {
		$(this).parent().toggleClass('on');

	});

	var downloadLink = function(lnk) {
		
		// call salesforce here and on success let save the file
		if (lnk.data('file-id')) {
			window.location='/wp-admin/admin-ajax.php?action=download_attachment&id=' + lnk.data('file-id');
		} else {
			window.location.href=lnk.attr('href');
		}
	}
	$('a.download:not(.with-form)').click(function(e) {
		e.preventDefault();
		downloadLink($(this));
	});

	$('.glow').each(function() {
		$(this).append('<div class="glow-cover"></div>');
	});

	/*
	$.fn.extend({
		on : function() {
			this.addClass('on');
		},
		off : function() {
			this.removeClass('on');
		},
	});
	*/

	$('.qty-selector .decrease').click(function() {
		var value = $(this).siblings('input').val();
		if (value > 0) $(this).siblings('input').val((parseInt(value) - 1));
	});

	$('.qty-selector .increase').click(function() {
		var value = $(this).siblings('input').val();
		$(this).siblings('input').val((parseInt(value) + 1));
	});

	$(window).load(function() {
		var $backToTopBtn = $('#back-to-top');

		$backToTopBtn.click(function() {
		    $('html').animate({ scrollTop: 0 }, 'slow');
		    return true;
		});

		var $footer = $('#footer');
		$(window).scroll(function() {
			if($(window).scrollTop() > 200) {
				$backToTopBtn.addClass('show');	
			} else {
				$backToTopBtn.removeClass('show');
			}
			//console.log($backToTopBtn.offset());
		});
	});

	$.fn.extend({
		equalBoxes : function(boxSelector) {
			var container = this;
			
			var makeBoxesEqual = function(container, boxSelector) {	
				var h = 0;
				if(boxSelector != undefined) {
					var boxes = container.find(boxSelector);
				}
				else
					var boxes = container.children();
				
				if(boxes.length == 1)
					return;

				boxes.each(function(i) {
					var box = $(this);

					box.height('auto');




					if (h < box.outerHeight())
						h = box.outerHeight();
				});
				boxes.outerHeight(h)
			}

			makeBoxesEqual(container, boxSelector);
			$(window).resize(function() {
				makeBoxesEqual(container, boxSelector);
			});
		},
	})

	$('.buy-link').click(function(e) {
		e.preventDefault();
		var qty = $(this).parent().siblings('.qty-selector').children('input').val();
		var buyTicketsUrl = $(this).data('buy-url') + '&quantity=' + qty + '&clear-cart=1';
		
		console.log(buyTicketsUrl);
		$.get(buyTicketsUrl, function(data) {
		 	window.location = 'http://' + window.location.hostname + '/checkout/';
		});
	});

	$('.make-reservation').click(function(e) {
		e.preventDefault();
		var qty = $(this).parent().prev().find('input').val();
		window.location = 'http://' + window.location.hostname + $(this).attr('href') + '&quantity=' + qty;
	});

	$(window).load(function() {
		if( $('#tribe-events-content').hasClass('tribe-events-list') ) {
			$('.tribe-bar-views-option-list').addClass('on')
		} else {
			$('.tribe-bar-views-option-month').addClass('on')
		}
	});

})( jQuery );





