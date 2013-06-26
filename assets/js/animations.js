$(document).ready(function() {
	$('#head_menu').mouseover(function() {
		$('#head_menu').animate({
			'left' : '-40%'
		}, 300);
	}).mouseleave(function() {
		$('#head_menu').stop(true);
		$('#head_menu').animate({
			'left' : '-75%'
		}, 300);
	});

	$('#destaque1').mouseover(function() {
		$('#img_destaque1').animate({
			'width' : '49.899%%'
		}, 300);
		$('#title_destaque1').animate({
			'width' : '50%'
		}, 300);
	}).mouseleave(function() {
		$('#title_destaque1').stop(true);
		$('#img_destaque1').stop(true);
		$('#title_destaque1').animate({
			'width' : '25%'
		}, 300);
		$('#img_destaque1').animate({
			'width' : '74.899%'
		}, 300);
	});

});
