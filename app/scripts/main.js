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

$(function(){
	grapheme.AnimImages({
		auto_time: [4000, 7000],
		start_timeout: 1500,
		element: $('.js-text')
	});
	grapheme.AnimImages({});
});