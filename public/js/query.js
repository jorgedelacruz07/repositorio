$( ".pdf" ).click(function() {
	$(this).css("background-color","gray");
	$(".papers").css("background-color","black");
	$(".images").css("background-color","black");
	$(".links").css("background-color","black");
	$(".slider-pdf").css("display","block");
	$(".slider-papers").css("display","none");
	$(".slider-images").css("display","none");
	$(".slider-links").css("display","none");
});

$( ".papers" ).click(function() {
	$(".pdf").css("background-color","black");
	$(this).css("background-color","gray");
	$(".images").css("background-color","black");
	$(".links").css("background-color","black");
	$(".slider-pdf").css("display","none");
	$(".slider-papers").css("display","block");
	$(".slider-images").css("display","none");
	$(".slider-links").css("display","none");
});

$( ".images" ).click(function() {
	$(".pdf").css("background-color","black");
	$(".papers").css("background-color","black");
	$(this).css("background-color","gray");
	$(".links").css("background-color","black");
	$(".slider-pdf").css("display","none");
	$(".slider-papers").css("display","none");
	$(".slider-images").css("display","block");
	$(".slider-links").css("display","none");
});

$( ".links" ).click(function() {
	$(".pdf").css("background-color","black");
	$(".papers").css("background-color","black");
	$(".images").css("background-color","black");
	$(this).css("background-color","gray");
	$(".slider-pdf").css("display","none");
	$(".slider-papers").css("display","none");
	$(".slider-images").css("display","none");
	$(".slider-links").css("display","block");
});


