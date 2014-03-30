$(document).ready(function(){

	var $container = $('#container');
	$container.masonry({ 
		columnWidth: 200, 
		itemSelector: '.item'
	});
	var msnry = $container.data('masonry');

	$('#courses div').click(function() {
		if(!$(this).hasClass('active')){
			$(this).animate({height: "40%", width: "70%"});
		} else {
			$(this).animate({height: "100px", width: '255px'});
		}
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).siblings().animate({height: "100px", width: '255px'});
	});

});