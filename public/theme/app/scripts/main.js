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
		$body = $('body'),
		$self = this;

	$contBtn.click( function(){
		$body.addClass('contacts-active');
	});

	$closeBtn.click( function(){
		$body.removeClass('contacts-active');
		window.location.hash = '';
	});

	$(window).on('hashchange', function(){
		$self.hashShow();
	});
	this.hashShow = function() {
		console.log(window.location.hash.substring(1));
		if(window.location.hash.substring(1) == 'show-contacts'){
			$body.addClass('contacts-active');
		}
	}
	$self.hashShow();
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

	var wow = new WOW(
	  {
	    boxClass:     'wow',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       true,       // trigger animations on mobile devices (default is true)
	    live:         true,       // act on asynchronously loaded content (default is true)
	    callback:     function(box) {
	      // the callback is fired every time an animation is started
	      // the argument that is passed in is the DOM node being animated
	    }
	  }
	);
	wow.init();
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