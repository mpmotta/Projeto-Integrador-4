
		$(function(){	
			var left = ($(window).width() /2) - ( $('#erro').width() / 2 );
			var top = ($(window).height() / 3) - ( $('#erro').height() / 3 );
			
			$('#erro').css({'top':top,'left':left});
			
			$('#erro').fadeIn(800, function(){
				window.setTimeout(function(){
					$('#erro').fadeOut(800);
				}, 1000);
			});
		});
		