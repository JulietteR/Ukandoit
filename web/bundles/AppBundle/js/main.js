$(document).ready(function(){
	$('.parallax').parallax();
});

$(window).load(function()
{
	if(document.body.scrollTop!==0 || document.documentElement.scrollTop!==0){
		$(".underHeader").slideUp('fast');
	}
});

//Remonte le underHeader quand scroll
window.onscroll = function(e){
	if(window.innerWidth > 768)
	{
		if (document.body.scrollTop!==0 || document.documentElement.scrollTop!==0){
			$(".underHeader").slideUp('fast');
		}
		else{
			$(".underHeader").slideDown();
		}
	}
	else{
		$(".underHeader").css("display","none");
	}
}

/* -- OVERLAY MENU -- */

$(document).ready(function() {
});
$(".nav-toggle").click(function() {
    $(this).toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});
$(".overlay ul li a").click(function() {
    $(".nav-toggle").toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});
$(".overlay").click(function() {
    $(".nav-toggle").toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});