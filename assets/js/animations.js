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



	$('#destaque2').mouseover(function() {
		$('#img_destaque2').animate({
			'width' : '49.899%%'
		}, 300);
		$('#title_destaque2').animate({
			'width' : '50%'
		}, 300);
	}).mouseleave(function() {
		$('#title_destaque2').stop(true);
		$('#img_destaque2').stop(true);
		$('#title_destaque2').animate({
			'width' : '25%'
		}, 300);
		$('#img_destaque2').animate({
			'width' : '74.899%'
		}, 300);
	});

	$('#destaque3').mouseover(function() {
		$('#img_destaque3').animate({
			'width' : '49.899%%'
		}, 300);
		$('#title_destaque3').animate({
			'width' : '50%'
		}, 300);
	}).mouseleave(function() {
		$('#title_destaque3').stop(true);
		$('#img_destaque3').stop(true);
		$('#title_destaque3').animate({
			'width' : '25%'
		}, 300);
		$('#img_destaque3').animate({
			'width' : '74.899%'
		}, 300);
	});
	
	
});
