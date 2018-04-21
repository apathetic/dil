// ON LOAD
// ----------------------

var $ = jQuery;

$(document).ready(function(){

	// Image navigation
	var jumps = $('.jump');
	var art = $('.art');
	var now, active = 'image-1';
	jumps.eq(0).addClass('active');

	jumps.click(function(e){
		e.preventDefault();
		var to = $(this).attr('href');
		if (to == '#') to = 0;
		$(window).scrollTo(to, 500, {'offset':-90});
	});

	$('.prev').click(function(e){
		e.preventDefault();
		try { $('.jump.active').prev().click(); } catch(e) { }
	});
	$('.next').click(function(e){
		e.preventDefault();
		try { $('.jump.active').next().click(); } catch(e) { }
	});

	$(window).scroll( $.throttle( 250, function(){
		var offset = $(window).scrollTop(); 			// + 90;	// 90, or height of header	....this works because margin on item == headerheight
		art.each(function(i, item){
			// if (offset < ( $(item).offset().top + $(item).outerHeight(true)) ) { 
			if (offset < ( $(item).offset().top + $(item).height()) ) { 
				now = $(item).prop('id');
				return false;
			}
		});
		if (now != active) {					
			jumps.removeClass('active');
			jumps.filter('[href=#'+now+']').addClass('active');
			active = now;
		}
	}));


});


// UNIVERSAL PLUGINS
// ----------------------

(function( $ ){

	// image-cycler for main banner bg
	$.fn.__scrollTo = function(opts) {
		opts = $.extend({
			to:'',
			time:500
		},
		opts || {});
	    return this.each(function() {
			var d = $(opts.to).offset().top; $("html:not(:animated),body:not(:animated)").animate({ scrollTop: d}, time);
		});
	}


})(jQuery);



/*
 * jQuery throttle / debounce : Copyright (c) 2010 "Cowboy" Ben Alman | http://benalman.com/projects/jquery-throttle-debounce-plugin/
 * Dual licensed under the MIT and GPL licenses.
 */
(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);

/**
 * jQuery.ScrollTo : Copyright (c) 2007-2008 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 */
(function(h){var m=h.scrollTo=function(b,c,g){h(window).scrollTo(b,c,g)};m.defaults={axis:'y',duration:1};m.window=function(b){return h(window).scrollable()};h.fn.scrollable=function(){return this.map(function(){var b=this.parentWindow||this.defaultView,c=this.nodeName=='#document'?b.frameElement||b:this,g=c.contentDocument||(c.contentWindow||c).document,i=c.setInterval;return c.nodeName=='IFRAME'||i&&h.browser.safari?g.body:i?g.documentElement:this})};h.fn.scrollTo=function(r,j,a){if(typeof j=='object'){a=j;j=0}if(typeof a=='function')a={onAfter:a};a=h.extend({},m.defaults,a);j=j||a.speed||a.duration;a.queue=a.queue&&a.axis.length>1;if(a.queue)j/=2;a.offset=n(a.offset);a.over=n(a.over);return this.scrollable().each(function(){var k=this,o=h(k),d=r,l,e={},p=o.is('html,body');switch(typeof d){case'number':case'string':if(/^([+-]=)?\d+(px)?$/.test(d)){d=n(d);break}d=h(d,this);case'object':if(d.is||d.style)l=(d=h(d)).offset()}h.each(a.axis.split(''),function(b,c){var g=c=='x'?'Left':'Top',i=g.toLowerCase(),f='scroll'+g,s=k[f],t=c=='x'?'Width':'Height',v=t.toLowerCase();if(l){e[f]=l[i]+(p?0:s-o.offset()[i]);if(a.margin){e[f]-=parseInt(d.css('margin'+g))||0;e[f]-=parseInt(d.css('border'+g+'Width'))||0}e[f]+=a.offset[i]||0;if(a.over[i])e[f]+=d[v]()*a.over[i]}else e[f]=d[i];if(/^\d+$/.test(e[f]))e[f]=e[f]<=0?0:Math.min(e[f],u(t));if(!b&&a.queue){if(s!=e[f])q(a.onAfterFirst);delete e[f]}});q(a.onAfter);function q(b){o.animate(e,j,a.easing,b&&function(){b.call(this,r,a)})};function u(b){var c='scroll'+b,g=k.ownerDocument;return p?Math.max(g.documentElement[c],g.body[c]):k[c]}}).end()};function n(b){return typeof b=='object'?b:{top:b,left:b}}})(jQuery);
