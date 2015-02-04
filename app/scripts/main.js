/* jshint devel:true */

function Random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

var grapheme = {};
grapheme.AnimImages = function(settings) {
	var showobj = {
		auto_time: [5000, 10000],
		active_item: 0,
		start_timeout: 0,
		element: $('.js-image'),
		start: function(settings) {
			var self = this;
			if(settings) {
				$.each(settings, function(index, value){
					self[index] = value;
				});
			}
			setTimeout(function(){
				self.auto();
			}, self.start_timeout);
		},
		auto: function() {
			var self = this;
			self.change();
			var random_time = Random(self.auto_time[0], self.auto_time[1]);
			setTimeout(function(){
				self.auto();
			}, random_time);
		},
		change: function() {
			var self = this;
			var random_element = Random(0, self.element.length-1);
			self.element.eq(random_element).addClass('active')
				.siblings().removeClass('active');
			self.active_item = random_element;
		}
	}
	showobj.start(settings);
}
grapheme.Contacts = function() {
	var $parent = $('.block-contacts'),
		$contBtn = $('.js-contacts'),
		$closeBtn = $parent.find('.contacts-cross'),
		$body = $('body');

	$contBtn.click( function(){
		$body.addClass('contacts-active');
	});

	$closeBtn.click( function(){
		$body.removeClass('contacts-active');
	});
}
grapheme.Animsition = function(){
	$(document).ready(function() {  
	  	$(".animsition").animsition({	  
	    	inClass               :   'fade-in',
	    	outClass              :   'fade-out',
	    	inDuration            :    1500,
	    	outDuration           :    800,
	    	linkElement           :   '.animsition-link',
	    	// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
	    	loading               :    true,
	    	loadingParentElement  :   'body', //animsition wrapper element
	    	loadingClass          :   'animsition-loading',
	    	unSupportCss          : [ 'animation-duration',
	        	                      '-webkit-animation-duration',
	            	                  '-o-animation-duration'
	                	            ],
	    	//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
	    	//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
	    
	    	overlay               :   false,
	    
	    	overlayClass          :   'animsition-overlay-slide',
	    	overlayParentElement  :   'body'
	  	});
	});
}
grapheme.Appear = function(){
	//Appeat animations for about page
	var aboutAnimation = (function(){

		var $parent = $('body.about-page');

		var $elements = {
			teaser: $parent.find('.teaser p'),
			page_desc: $parent.find('.js-double-unit .unit'),
			support_desc: $parent.find('.js-triple-unit .unit'),
			product_items: $parent.find('.prods-li'),
			partners: $parent.find('.wrapper.partners .unit'),
			clients: $parent.find('.clients-li')
		}
		//Animations
		var tl1 = new TimelineMax({ paused: true });
  	 		tl1.staggerFromTo( $elements.teaser, 1, {x: '100%', opacity: '0'}, {x: '0%', opacity: '1', ease:Circ.easeOut}, 0.2);

  	 	var tl2 = new TimelineMax({ paused: true });
  	 		tl2.staggerFromTo( $elements.page_desc, 2, {x: '100%', opacity: '0'}, {x: '0%', opacity: '1', ease:Circ.easeOut}, 0.2);

  	 	var tl3 = new TimelineMax({ paused: true });
  	 		tl3.fromTo( $('.js-about-areas h2'), .6, {scale: .5, opacity: '0'}, {scale: 1, opacity: '1', ease:Circ.easeOut} )
  	 		   .staggerFromTo( $elements.support_desc, 1, {x: '100%', opacity: '0'}, {x: '0%', opacity: '1', ease:Circ.easeOut}, 0.2);

  	 	var tl4 = new TimelineMax({ paused: true });
  	 		tl4.staggerFromTo( $elements.product_items, 2, {x: '100%', opacity: '0'}, {x: '0%', opacity: '1', ease:Circ.easeOut}, 0.2);

  	 	var tl5 = new TimelineMax({ paused: true });
  	 		tl5.fromTo( $('.js-about-partners h2'), .6, {scale: .5, opacity: '0'}, {scale: 1, opacity: '1', ease:Circ.easeOut} )
  	 		   .staggerFromTo( $elements.partners, 1, {x: '100%', opacity: '0'}, {x: '0%', opacity: '1', ease:Circ.easeOut}, 0.2)
  	 		   .staggerFromTo( $('.partners-li'), 1, {scale: .5, opacity: '0'}, {scale: 1, opacity: '1', ease:Circ.easeOut}, 0.2 );

  	 	var tl6 = new TimelineMax({ paused: true });
  	 		tl5.staggerFromTo( $elements.clients, 1, {scale: .5, opacity: '0'}, {scale: 1, opacity: '1', ease:Circ.easeOut}, 0.2);

  		var $containers = {
  			main: $('.js-about-main'),
  			desc: $('.js-about-desc'),
  			areas: $('.js-about-areas'),
  			prods: $('.js-about-prods'),
  			partners: $('.js-about-partners'),
  			clients: $('.js-about-clients')
  		}
  		//Init Appear for each container
  		$containers.main.add($containers.desc).add($containers.areas).add($containers.prods).add($containers.partners).appear();
      	
		//Write appear rules for each elements
		$containers.main.on('appear', function(event, $all_appeared_elements) {
      		tl1.restart();
      		$(this).off();
    	});
    	$containers.desc.on('appear', function(event, $all_appeared_elements) {
      		setTimeout( function(){
      			tl2.restart();
      		}, 500);
      		$(this).off();
    	});
    	$containers.areas.on('appear', function(event, $all_appeared_elements) {
      		tl3.restart();
      		$(this).off();
    	});
    	$containers.prods.on('appear', function(event, $all_appeared_elements) {
      		tl4.restart();
      		$(this).off();
    	});
    	$containers.partners.on('appear', function(event, $all_appeared_elements) {
      		tl5.restart();
      		$(this).off();
    	});
    	$containers.clients.on('appear', function(event, $all_appeared_elements) {
      		tl6.restart();
      		$(this).off();
    	});

    	//Awake appeat first time
    	$('html').scroll();

	})();
}

$(function(){
	grapheme.AnimImages({
		auto_time: [4000, 7000],
		start_timeout: 1500,
		element: $('.js-text')
	});
	grapheme.AnimImages({});
	grapheme.Contacts();
	grapheme.Animsition();
	grapheme.Appear();
});