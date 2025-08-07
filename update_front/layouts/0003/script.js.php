//<?
/*$(document).ready(function() {
	
	//<?if($lingua['active_activity']){?>
	
	if((screen.availWidth > 640 || screen.availHeight > 640) && document.getElementById('diagram'))
	{
		var diagram = {
			init: function(){
				this.diagram();
			},
			random: function(l, u){
				return Math.floor((Math.random()*(u-l+1))+l);
			},
			diagram: function(){
				var r = Raphael('diagram', 600, 600),
					rad = 73,
					defaultText = '<?=utf8_encode($lingua['type_activity'])?>',
					speed = 250;
				
				r.circle(300, 300, 85).attr({ stroke: 'none', fill: '#193340' });
				
				var title = r.text(300, 300, defaultText).attr({
					font: '20px Arial',
					fill: '#fff'
				}).toFront();
				
				r.customAttributes.arc = function(value, color, rad){
					var v = 3.6*value,
						alpha = v == 360 ? 359.99 : v,
						random = diagram.random(91, 240),
						a = (random-alpha) * Math.PI/180,
						b = random * Math.PI/180,
						sx = 300 + rad * Math.cos(b),
						sy = 300 - rad * Math.sin(b),
						x = 300 + rad * Math.cos(a),
						y = 300 - rad * Math.sin(a),
						path = [['M', sx, sy], ['A', rad, rad, 0, +(alpha > 180), 1, x, y]];
					return { path: path, stroke: color }
				}
				
				$('.get').find('.arc').each(function(i){
					var t = $(this), 
						color = t.find('.color').val(),
						value = t.find('.percent').val(),
						text = t.find('.text').text();
					
					rad += 30;	
					var z = r.path().attr({ arc: [value, color, rad], 'stroke-width': 26 });
					z.mouseover(function(){
						this.animate({ 'stroke-width': 50, opacity: .75 }, 1000, 'elastic');
						if(Raphael.type != 'VML') //solves IE problem
							this.toFront();
						title.stop().animate({ opacity: 0 }, speed, '>', function(){
							var lines=[''];
							text
								.split(' ')
								.map(function(word, i){
									if( lines[lines.length - 1].length + word.length <= 12 )
									{
										lines[lines.length - 1] += (i ? ' ' : '') + word;
									}
									else
									{
										lines[lines.length] = word;
									}
								});
							
							this.attr({ text: lines.join('\n') + '\n' + value + '%' }).animate({ opacity: 1 }, speed, '<');
						});
					}).mouseout(function(){
						this.stop().animate({ 'stroke-width': 26, opacity: 1 }, speed*4, 'elastic');
						title.stop().animate({ opacity: 0 }, speed, '>', function(){
							title.attr({ text: defaultText }).animate({ opacity: 1 }, speed, '<');
						});	
					});
				});
			}
		};
		diagram.init();
	}
	
	//<?}?>
	
	var $window = $(window), $header = $('header');
	$window.load(function(){
		$('.loader').fadeOut('slow');
	});
	
	$window.on('scroll', function(){
		if ($window.width() >= 980) {
			if ($window.scrollTop() > 100){
				$header.addClass('scroll');
			} else {
				$header.removeClass('scroll');
			}
		}
	}).scroll();

	$('.portfolio a:not([target]),.news a:not([target]):has(img), .lightbox').lightbox({live:true});


  
  	$(window).resize(function () {
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});        
	}); 
  
  
	$('input#mail-message-btn').click(function(){
        $('#mail-message').fadeOut('slow');
		$('#mask, .window').fadeOut('slow');
    });
    $('input#submit-mail').click(function(){
        var formParams = $('form#contact-form').serialize();
        $.ajax({
            url: '/contact.php',
            type: 'POST',
            traditional: true,
            data: formParams,
            success: function(data){
                var response = jQuery.parseJSON(data);
				$('#mail-failure,#invalid-email,#empty-field,#mail-success,#wrong-captcha,#spam-link,#spam-ip').hide();
                if(response.success){
                    $('#mail-message-header').toggleClass('mail-message-error', false);
                    $('#mail-message-header').toggleClass('mail-message-success', true);
                    $('#mail-message-header h3').text('<?=utf8_encode(strtoupper($text['contact']['box']['header']['success']))?>');
                    $('#mail-success').show();
                }else{
                    $('#mail-message-header').toggleClass('mail-message-error', true);
                    $('#mail-message-header').toggleClass('mail-message-success', false);
                    $('#mail-message-header h3').text('<?=utf8_encode(strtoupper($text['contact']['box']['header']['error']))?>');
                    $('#mail-failure').show();
                    for(i=0; i<response.errors.length; i++){
                        if(response.errors[i].error == 'empty')                            
                            $('#empty-field').show();
                        else if(response.errors[i].error == 'invalid')
                            $('#invalid-email').show();
                        else if(response.errors[i].error == 'wrong_captcha')
                            $('#wrong-captcha').show();
						else if(response.errors[i].error == 'spam')
							$('#spam-'+response.errors[i].type).show().find('span').hide().filter('#spam-'+response.errors[i].type+'-'+response.errors[i].field).show();

                    }
                }  
				if(response.new_captcha)
					$('#captcha_question').html(response.new_captcha+'');
			    popUpMask();
                $('#mail-message').fadeIn('slow');
            }
        });
    });

});

function popUpMask() {
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();
	$('#mask').css({'width':maskWidth,'height':maskHeight});   
	$('#mask').fadeTo("slow",0.7);  
}*///?>

(function(window, undefined){
	window.jQuery(function($){
		
		if($('html').hasClass('in-store'))
		{
			return;
		}
		
		// contact - form
		(function(){
			var $form = $('#contact-form');
			var $message = $('#contact-form-message');
			
			var text = {
				success: {
					title: '<?=addslashes((strtoupper($text['contact']['box']['header']['success'])))?>',
					messages: {
						success: '<?=addslashes(($text['contact']['box']['success']))?>'
					}
				},
				error: {
					title: '<?=addslashes((strtoupper($text['contact']['box']['header']['error'])))?>',
					messages: {
						failure: '<?=addslashes(($text['contact']['box']['failure']))?>',
						invalid: '<?=addslashes(($text['contact']['box']['invalid']))?>',
						not_checked: '<?=addslashes(($text['contact']['box']['not_checked']))?>',
						wrong_captcha: '<?=addslashes(($text['contact']['box']['wrong_captcha']))?>',
						empty: '<?=addslashes(($text['contact']['box']['empty']))?>',
						spam_ip: '<?=addslashes(($text['contact']['box']['spam']['ip']))?>',
						spam_link_name: '<?=addslashes(($text['contact']['box']['spam']['link']['desc']['top']
											. $text['contact']['box']['spam']['link']['name']
											. $text['contact']['box']['spam']['link']['desc']['bottom']
										))?>',
						spam_link_subject: '<?=addslashes(($text['contact']['box']['spam']['link']['desc']['top']
											. $text['contact']['box']['spam']['link']['subject']
											. $text['contact']['box']['spam']['link']['desc']['bottom']
										))?>',
						spam_link_message: '<?=addslashes(($text['contact']['box']['spam']['link']['desc']['top']
											. $text['contact']['box']['spam']['link']['message']
											. $text['contact']['box']['spam']['link']['desc']['bottom']
										))?>',
						ext_data_consentment: '<?=addslashes(($text['contact']['box']['ext']['data']['consentment']))?>',
						refresh: '<?=addslashes(($text['contact']['box']['refresh']))?>'
					}
				}
			};
			
			$form.submit(function(e){
				e.preventDefault();
				
				$.ajax({
					url: '/contact.php',
					type: 'POST',
					traditional: true,
					data: $form.serialize(),
					success: function(data){
						var response = jQuery.parseJSON(data);
						
						var type = response.success ? 'success' : 'error';
						
						var html = '<div id="success" style="display: block;"><h4>' + text[type].title + '</h4>';
						
						if(response.success)
						{
							html += '<p>' + text[type].messages.success + '</p>';
						}
						else
						{
							var messages = [];
							
							for(var i = 0, l = response.errors.length; i < l; i++)
							{
								var error = response.errors[i];
								
								messages[messages.length] = text[type].messages[error.error + (error.type ? '_' + error.type + (error.field ? '_' + error.field : '') : '')];
							}
							
							html += '<ul><li>' + messages.join('</li><li>') + '</li></ul>';
						}
						
						$message.html(html + '</div>');
						
						if(response.new_captcha)
						{
							$('#captcha_question').html(response.new_captcha);
						}
					}
				});
			});
		})();
		
		// contact - map
		(function(){
			var $map = $('#map');
			
			if(!$map.length)
			{
				return;
			}
			
			var $googlemap = $('#googlemap');
			var $section = $map.closest('.map');
			var $button = $section.find('.map-button');
			
			var ll = $map.data('ll').split(',');
			
		<? if($settings['googlemaps_api_key']){ ?>
			var options = {
                zoom: $map.data('zoom') || 16,
                center: new google.maps.LatLng(ll[0], ll[1]),
                styles: [{ "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "color": "#d3d3d3" }] }, { "featureType": "transit", "stylers": [{ "color": "#808080" }, { "visibility": "off" }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "visibility": "on" }, { "color": "#b3b3b3" }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "road.local", "elementType": "geometry.fill", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "weight": 1.8 }] }, { "featureType": "road.local", "elementType": "geometry.stroke", "stylers": [{ "color": "#d7d7d7" }] }, { "featureType": "poi", "elementType": "geometry.fill", "stylers": [{ "visibility": "on" }, { "color": "#ebebeb" }] }, { "featureType": "administrative", "elementType": "geometry", "stylers": [{ "color": "#a7a7a7" }] }, { "featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "landscape", "elementType": "geometry.fill", "stylers": [{ "visibility": "on" }, { "color": "#efefef" }] }, { "featureType": "road", "elementType": "labels.text.fill", "stylers": [{ "color": "#696969" }] }, { "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{ "visibility": "on" }, { "color": "#737373" }] }, { "featureType": "poi", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi", "elementType": "labels", "stylers": [{ "visibility": "off" }] }, { "featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{ "color": "#d6d6d6" }] }, { "featureType": "road", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, {}, { "featureType": "poi", "elementType": "geometry.fill", "stylers": [{ "color": "#dadada" }] }]
            };

			$button.one('click', function(){
				var map = new google.maps.Map($map[0], options);
				
				var marker = new google.maps.Marker({
					position: options.center,
					map: map,
					title: ''
				});
				
				$section.addClass('show-map');
				$button.click(function(){
					$section.toggleClass('show-map');
					if($section.hasClass('show-map'))
					{
						map.setZoom(options.zoom);
						map.panTo(options.center);
					}
				});
			});
			
		<? } else { ?>
			var options = {
                zoom: $map.data('zoom') || 16,
                center: [ll[0], ll[1]],
				gestureHandling: true,
				gestureHandlingOptions: {
					duration: 1000,
					delay: 0,
					text: {
						touch: '<?=addslashes(($text['contact']['map']['touch']))?>',
						scroll: '<?=addslashes(($text['contact']['map']['scroll']))?>',
						scrollMac: '<?=addslashes(($text['contact']['map']['scrollMac']))?>'
					}
				}
			};

			$button.one('click', function(){
				$section.addClass('show-map');
				var map = L.map($map[0], options);
				
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
				}).addTo(map);
				
				L.marker(options.center).addTo(map);
				
				setTimeout(function(){
					map.invalidateSize();
				}, 500);
					
				$button.click(function(){
					$section.toggleClass('show-map');
					if($section.hasClass('show-map'))
					{
						map.setZoom(options.zoom);
						map.panTo(options.center);
						setTimeout(function(){
							map.invalidateSize();
						}, 500);
					}
				});
			});
		<? } ?>
		})();
	});
})(Function('return this')());