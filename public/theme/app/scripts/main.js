/* jshint devel:true */

function Random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

var grapheme = {};
grapheme.scrollIt = function() {
    $('[data-scrollTo]').on('click', function(){
        var toname = $(this).attr('data-scrollTo');
        $('html, body').animate({
            scrollTop: $('[data-scrollName="' + toname + '"]').offset().top
        });
        return false;
    });
}
grapheme.ApplyForm = function() {
	var form = $('#applyform');
	form.find('[type="checkbox"]').button();
	form.find('select').selectmenu();
	jQuery.extend(jQuery.validator.messages, {
	        required: "Это поле необходимо заполнить.",
	        remote: "Пожалуйста, введите правильное значение.",
	        email: "Пожалуйста, введите корретный адрес электронной почты.",
	        url: "Пожалуйста, введите корректный URL.",
	        date: "Пожалуйста, введите корректную дату.",
	        dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
	        number: "Пожалуйста, введите число.",
	        digits: "Пожалуйста, вводите только цифры.",
	        creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
	        equalTo: "Пароли не совпадают",
	        accept: "Пожалуйста, выберите файл с правильным расширением.",
	        maxlength: jQuery.validator.format("Пожалуйста, введите не больше {0} символов."),
	        minlength: jQuery.validator.format("Пожалуйста, введите не меньше {0} символов."),
	        rangelength: jQuery.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),
	        range: jQuery.validator.format("Пожалуйста, введите число от {0} до {1}."),
	        max: jQuery.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),
	        min: jQuery.validator.format("Пожалуйста, введите число, большее или равное {0}.")
	});
	form.validate({
        rules: {
        	name: {
        		required: true
        	},
            email: {
            	required: true,
            	email: true
            }
        },
        submitHandler: function(form) {
        	var response_cont = $('.js-response-text');
        	var final_response = $('.js-final-response');
        	console.log(final_response);
        	var options = { 
        	    beforeSubmit: function(){
        	        response_cont.hide();
        	        $(form).find('[type="submit"]').addClass('loading')
        	            .attr('disabled', 'disabled');
        	    }, 
        	    success: function(data){
        	        if(data.status && data.redirect && data.redirect != '') {
        	            window.location.href = data.redirect;
        	        }
        	        if(data.responseText && !data.status) {
        	            response_cont.show().text(data.responseText);
        	        }
        	        if(data.status) {
        	        	$(form).slideUp();
        	        	final_response.text(data.responseText).show();
        	        }
        	        $(form).find('[type="submit"]').removeClass('loading')
        	            .removeAttr('disabled');
        	    },
        	    error: function(data) {
        	        response_cont.show().text('Ошибка на сервере, попробуйте позже');
        	        $(form).find('[type="submit"]').removeClass('loading')
        	            .removeAttr('disabled');
        	    }
        	};
            $(form).ajaxSubmit(options);
        }
    });
}
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
	grapheme.ApplyForm();
    grapheme.scrollIt();
});