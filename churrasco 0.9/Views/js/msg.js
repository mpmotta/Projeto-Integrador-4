
		$(function(){	
			var left = ($(window).width() /2) - ( $('#msg').width() / 2 );
			var top = ($(window).height() / 3) - ( $('#msg').height() / 3 );
			
			$('#msg').css({'top':top,'left':left});
			
			$('#msg').fadeIn(800, function(){
				window.setTimeout(function(){
					$('#msg').fadeOut(800);
				}, 1000);
			});
		});
		