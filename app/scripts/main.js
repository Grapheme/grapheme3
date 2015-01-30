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

$(function(){
	grapheme.AnimImages({
		auto_time: [4000, 7000],
		start_timeout: 1500,
		element: $('.js-text')
	});
	grapheme.AnimImages({});
	grapheme.Contacts();
	grapheme.Animsition();
});