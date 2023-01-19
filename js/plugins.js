var timer = "30";
$.countdownHandler = {
	timer: function(obj) {
		setInterval(function() {
		  --timer;
		  	if(timer >= 0) { 
		  		 obj.html(timer);
		  		timer = timer; 
	  		} else if(timer === -1) {
	  			obj.html('Times Up!');
	  			obj.css({'font-size' : '200px'});
	  		} else { }
		}, 1000);
	}
}
$(document).ready(function(){

	$('.btn_start').click(function(e) {
		e.preventDefault();
		var audio = new Audio('http://localhost/countdown/mp3/countdown.mp3');

		$('.h1_title').css({'display' : 'none'});
		$('.main-entry').css({'display' : 'none'});
		$('.timer').css({'display' : 'block'});

		$.countdownHandler.timer($('h2.countdown'));
		audio.play();
	});

	$('.main-result').click(function(e) {
		e.preventDefault();
		var audio = new Audio('http://localhost/countdown/mp3/celebration.mp3');

		$('.celebration1').css({'display' : 'block'});
		$('.celebration2').css({'display' : 'block'});

		audio.play();
	})

	new WOW().init();
});
