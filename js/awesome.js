// ON LOAD
// ----------------------

var $ = jQuery;

$(document).ready(function(){
	menuToggle();
	slideshow();
	bindToggle();
});



// --------------------------
// FUNCTIONS
// --------------------------

function menuToggle() {
	$('#sidebar .parent > a').click(function(e){
		e.preventDefault();
		var parent = $(this);
		var child = parent.siblings('.children');
		var children = $('#sidebar .children').not(child);
		child.slideToggle(500, function(){
			parent.css({'background-position': child.is(':hidden') ? '100% 0' : '100% 100%'});
		});
		children.each(function(i,el){
			if(! $(el).is(':hidden')) {
				$(el).slideToggle(500, function(){
					$(this).siblings('a').css({'background-position': '100% 0'});
				});
			}
		});
	});
}

function bindToggle() {
	var toggle = $('#toggle');
	var sidebar = $('#sidebar');
	toggle.click(function() {
		sidebar.toggleClass('active');
	});
}



function slideshow() {
	var jumps = $('.jump');
	var art = $('.art');
	var current = 0;

	if (!jumps.length) return;

	art.eq(0).fadeIn(1000).addClass('active');
	jumps.eq(0).addClass('active');

	jumps.each(function(i){
		$(this).click(function(e){
			var show = $(this).attr('href');

			e.preventDefault();

			$('.art.active').fadeOut('slow').removeClass('active');
			$(show).fadeIn('slow').addClass('active');

			jumps.removeClass('active');
			$(this).addClass('active');
			current = i;
		});
	});

	$('.prev').click(function(e) { e.preventDefault(); prev(); });
	$('.next').click(function(e) { e.preventDefault(); next(); });

	$(document).keydown(function(e) {
	    if (e.keyCode == 37) prev();
	    if (e.keyCode == 39) next();
	});

	function prev() { jumps.eq(current-1).click(); }
	function next() { jumps.eq(current+1).click(); }

}
