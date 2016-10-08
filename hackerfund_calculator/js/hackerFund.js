// JavaScript Document

jQuery(document).ready(function () {
	$(".button-Plus").find('.button-text').html("+");
	$(".button-Minus").find('.button-text').html("−");
	$(".button-Times").find('.button-text').html("×");
	$(".button-Divide").find('.button-text').html("÷");
});

function performOperation1 (x,y) {
	return x+y;
}

function performOperation2 (x,y) {
	return x-y;
}

function performOperation3 (x,y) {
	return x*y;
}

function performOperation4 (x,y) {
	return x/y;
}