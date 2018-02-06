(function( $ ) {

	var $dateFld = jQuery('#datePicker1');
	var $timeFld = jQuery('#reservation_time');
	var $dateHint = jQuery('#date-selector').find('.hint');
	var $priceHint = jQuery('#quantity-selector').find('.hint');
	var $womenFld = jQuery('#qty-women-selector input');
	var $menFld = jQuery('#qty-men-selector input');
	var $ticketFld = jQuery('#date-selector #ticket-id');
	var $eventFld = jQuery('#date-selector #event-id');
	var $typeFld = jQuery('input[name=seat_type]');
	var $zoneFld = jQuery('input[name=zone]');
	var sumDate = jQuery('#date-val');
	var sumHour = jQuery('#hour-val');
	var sumQty = jQuery('#qty-val');
	var sumZone = jQuery('#zone-val');
	var sumType = jQuery('#type-val');
	var sumTotal = jQuery('#cost-val');
	var $ajaxLoader = jQuery('#ajax-loader');
	

	$('.buy-ticket a.buy-link').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		url = url + '&quantity=' + $(this).parent().siblings('.qty-selector').find('input[name=quantity]').val();
		window.location.href = url;
	});


	$('.btn-switch').click(function() {
		//$(this).toggleClass('on')
		$(this).siblings('input[type=radio]').attr('checked', 'checked');
	});

	$('.btn-switch-type').click(function() {
		$('#zone-selector input[type=radio]').attr('checked', false);
	});

	$('.btn-switch-zone').click(function() {
		var seatType = ($('input[name=seat_type]:checked').val());
		$(this).siblings('input[data-type="'+seatType+'"]').attr('checked', 'checked');
		$(this).siblings('input[name=attribute_pa_strefa]').attr('checked', 'checked');
	});

	var updateCost = function() {
		var quantity = parseInt($womenFld.val()) + parseInt($menFld.val());
		var total = quantity * window.ticketPrice;
		
		if (total) {
			$priceHint.find('.price').text( total + 'zł');
			$priceHint.find('.tickets').text( quantity + ' x ' + window.ticketPrice + 'zł');
			$priceHint.addClass('on');
		} else {
			$priceHint.removeClass('on');
		}
		updateSummary();
	}
	
	$('#quantity-selector .qty-selector').click(function() {
		updateCost();	
	});

	$('#quantity-selector input').change(function() {
		updateCost();
	});

	$('.qty-selector input').change(function() {
		$(this).val(parseInt($(this).val()));
	});

	var updateSummary = function() {

		var $typeFld = jQuery('input[name=seat_type]:checked');
		var $zoneFld = jQuery('input[name=attribute_pa_strefa]:checked');

		sumDate.text($dateFld.val());
		sumHour.text($timeFld.val());
		
		var qty = parseInt($womenFld.val()) + parseInt($menFld.val());
		if (qty) sumQty.text(qty);
		else sumQty.empty();
		
		if($typeFld.val() == 'table')
			sumType.text('Stolik');
		else
			sumType.text('Loża');

		sumZone.text($zoneFld.val());
		
		var total = 0;
		var ticketPrice = $priceHint.find('.price').text();
		var lodgePrice = $('#lodge-btn .price').text();
		
		if (ticketPrice)
			total = parseInt(ticketPrice);
		if (lodgePrice && $typeFld.val() == 'lodge')
			total = total + parseInt(lodgePrice);
		
		sumTotal.text(total + 'zł');
	}

	Number.prototype.pad = function(size) {
	    var s = String(this);
	    while (s.length < (size || 2)) {s = "0" + s;}
	    return s;
	}
	
	var date = new Date('Y.m.D');

	jQuery('#reservation_time').datetimepicker({
		minTime: '16:00',
		maxTime: '24:00',
		theme:'dark',
		timepicker: true,
		datepicker: false,
		format:'G:i',
		step:30,
		lang: 'pl',
		scrollMonth:false,
	});

	//var initDate = date.getYear() + '/' + (date.getMonth()).pad() + '/' + date.getDate();

	
	
	var addToQuote = function() {
		
		//$ajaxLoader.addClass('on');

		// 1. Submit the quote
		var data = new FormData( $('form#reservation')[0] );
        data.append('is_quote', 1);

		$.ajax({
            url: 'http://' + window.location.hostname +'/wp-admin/admin-ajax.php?action=yumi_add_to_quote',
            type: 'POST',
            // Form data
            data: data,
            async: true,
            success: function(response){
            	console.log('Submitting your quote.');
               	submitQuote();
            },
            //Options to tell jQuery not to process data or worry about content-type.
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json'
        });
	}

	var submitQuote = function() {

		var data = new FormData( $('form#checkout')[0] );
        //data.append('is_quote', 1);

		$.ajax({
	        url: 'http://' + window.location.hostname + '/quote-list/',
	        type: 'POST',
	        // Form data
	        data: data,
	        async: true,
	        //Options to tell jQuery not to process data or worry about content-type.
	        cache: false,
            contentType: false,
            processData: false,
            //dataType: 'json',
            success: function(response) {
            	window.location.href= 'http://' + window.location.hostname + '/dziekujemy/';
            	$ajaxLoader.removeClass('on');
            }
	    });
	}

	var loadEventData = function(ct,$i=null){
		
		$ajaxLoader.addClass('on');
		
		var date = ct.getFullYear() + '-' + (ct.getMonth()+1).pad() + '-' + ct.getDate();
		var eventUrl = 'http://' + window.location.hostname + '/wp-json/tribe/events/v1/events/?start_date='+date+'&end_date='+date;
		var cost = 0;

		if ($i != null)
			$i.siblings('input[name=reservation_date]').val(date);
		
		
		
		$dateHint.removeClass('on');
		$priceHint.removeClass('on');
		$ticketFld.val('');
		$eventFld.val('');

		window.ticketPrice = 0;
		$.getJSON( eventUrl, function( data ) {
			var event = data.events[0];
			
			$eventFld.val(event.id);
			$ticketFld.val(event.ticket_id);
			
			$timeFld.val(event.start_date.substring(11, 16));			

			$dateHint.text(event.title);
			$dateHint.addClass('on');
			window.ticketPrice = event.ticket_price;
			var cost = ( parseInt($womenFld.val()) + parseInt($menFld.val()) ) * event.ticket_price;

			if ( event.ticket_price && cost ) {
				//$priceHint.addClass('on');
				//$priceHint.children('.price').text( cost + 'zł');
				updateCost();
			}

			updateSummary();
			$ajaxLoader.removeClass('on');
		}).error( function() { $ajaxLoader.removeClass('on') } );
	}
	
	var ct = new Date($('#reservation_date').val());
	loadEventData(ct);
	
	jQuery('#datePicker1').datetimepicker({
	 	lang: 'de',
	 	format:'l, d F Y',
	 	//value: '2018/02/14',
		minDate: date.getYear() + '/' + (date.getMonth()).pad() + '/' + date.getDate(),
		//opened: true,
		theme:'dark',
		dayOfWeekStart:1,
		timepicker: false,
		scrollMonth: false,
		scrollInput: false,
		onSelectDate: loadEventData,
		/*
		i18n:{
			pl:{
				months:[
					'styczeń','luty','marzec','kwiecień',
					'maj','czerwiec','lipiec','sierpień',
					'wrzesień','październik','listopad','grudzień',
				],
				dayOfWeek:[
					"nie", "pon", "wto", "śro",
					"czw", "pią", "sob",
				]
			}
		},
		*/
	});
	$.datetimepicker.setLocale('pl');


	var scrollToError = function(form, validator) {

        if (!validator.numberOfInvalids())
            return;

        $('html, body').animate({
            scrollTop: $(validator.errorList[0].element).offset().top - 100
        }, 500);
    }


	$('form#reservation > .field-row').each(function() {
		$(this).equalBoxes();
	});

	args = {
		invalidHandler: scrollToError,
		focusInvalid: false,
		debug: false,
		lang: 'pl',
	}
	$('form#checkout').validate(args);
	
	$.extend(args ,{
		rules: {
			'attribute_pa_strefa' : { required : true }
		},
	});
	$('form#reservation').validate(args);

	
	
	
	$('form#checkout a.submit').click(function(e) {
		e.preventDefault();
		
		console.log('Validating form...');
		
		if ( $('form#reservation').valid() ) {
			if ( $('form#checkout').valid() ) {
				$ajaxLoader.addClass('on');
				//setTimeout(function(){ addToQuote(); }, 100);
				addToQuote();
			}
		}
	});

})( jQuery );