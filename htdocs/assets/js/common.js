$(function(){

//SPメニュー
	var wHeight = $(document).innerHeight();
	$(".nav-menu").css({
		height: wHeight
	});
	$(".menu_btn").click(function(){
		$(".nav-menu").css({"display":"block"}).animate({
			right: 0
		});
		$("#content").addClass("body-fixed");
		$(".menu-back").addClass("menu-back-css")
		$(".menu-back").css("height",wHeight);
	});
	$('.menu-back').on("click",function(){
		$(".nav-menu").animate({
			right: "-" + 170
		},function(){
			$(this).css({"display":"none"});
			$("body").removeClass("body-fixed");
			$(".menu-back").css("height","auto").removeClass("menu-back-css");
		});
	});
});