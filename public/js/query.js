$( ".1" ).click(function() {
	$(this).css("background-color","gray");
	$(".2").css("background-color","black");
	$(".3").css("background-color","black");
	$(".slide-Evaluacion").css("display","block");
	$(".slide-Bibliografia").css("display","none");
	$(".slide-Clases").css("display","none");
});

$( ".2" ).click(function() {
	$(".1").css("background-color","black");
	$(this).css("background-color","gray");
	$(".3").css("background-color","black");
	$(".slide-Evaluacion").css("display","none");
	$(".slide-Bibliografia").css("display","block");
	$(".slide-Clases").css("display","none");
});

$( ".3" ).click(function() {
	$(".1").css("background-color","black");
	$(".2").css("background-color","black");
	$(this).css("background-color","gray");
	$(".slide-Evaluacion").css("display","none");
	$(".slide-Bibliografia").css("display","none");
	$(".slide-Clases").css("display","block");
});

