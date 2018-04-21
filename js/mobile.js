
	// maintain zoom on portait / landscape change
	// -------------------------------------------
	(function(doc) {
		var addEvent = 'addEventListener',
		    type = 'gesturestart',
		    qsa = 'querySelectorAll',
		    scales = [1, 1],
		    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

		function fix() {
			meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
			doc.removeEventListener(type, fix, true);
		}

		if ((meta = meta[meta.length - 1]) && addEvent in doc) {
			fix();
			scales = [.25, 1.6];
			doc[addEvent](type, fix, true);
		}

	}(document));

	// nav toggle hide / show
	// -------------------------------------------
	$(function(){
		$('#sidebar').data('isOpen', false);
		$('#toggle').click(function(){	// toggle menu 
			var isOpen = $('#sidebar').data('isOpen');			
			$('#sidebar').animate({'left': ( isOpen ? '-120px' : 0) }, 300, function(){
				$(this).data('isOpen', !isOpen);
			});
		});
	});

