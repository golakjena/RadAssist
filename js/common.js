
function patient(){
	$(".patient").css({opacity:0});
	$(".patient").each(function(){
		$(this).waypoint(function() {
            $(this).css({opacity:1});
            
            TweenMax.to($(this), 10, {left:700, opacity:1, delay:0.1, force3D:false}, 1);
        },{
            offset: '85%',
            triggerOnce: true
        });
	});
}
function textEffectRight(){
	$(".txtEffectRight").css({opacity:0});
	$(".txtEffectRight").each(function(){
		$(this).waypoint(function() {
            $(this).css({opacity:1});
            
            TweenMax.from($(this), 1, {right:-300, opacity:0, delay:0.1, ease:Expo.easeOut, force3D:true}, 0.2);
        },{
            offset: '85%',
            triggerOnce: true
        });
	});
}
function textEffectLeft(){
	$(".txtEffectLeft").css({opacity:0});
	$(".txtEffectLeft").each(function(){
		$(this).waypoint(function() {
            $(this).css({opacity:1});
            
            TweenMax.from($(this), 1, {left:-300, opacity:0, delay:0.1, ease:Expo.easeOut, force3D:true}, 0.2);
        },{
            offset: '85%',
            triggerOnce: true
        });
	});
}

function textEffectBottom(){
	$(".txtEffectBottom").css({opacity:0});
	$(".txtEffectBottom").each(function(){
		$(this).waypoint(function() {
            $(this).css({opacity:1});
            
            TweenMax.from($(this), 1, {bottom:-100, opacity:0, delay:0.1, ease:Expo.easeOut, force3D:true}, 0.2);
        },{
            offset: '85%',
            triggerOnce: true
        });
	});
}

function textEffectZoom(){
	$(".txtEffectZoom").css({opacity:0});
	$(".txtEffectZoom").each(function(){
		$(this).waypoint(function() {
            $(this).css({opacity:1});
            
            TweenMax.from($(this), 1, {scale:0, opacity:0, delay:0.1, ease:Expo.easeOut, force3D:true}, 0.2);
        },{
            offset: '85%',
            triggerOnce: true
        });
	});
}
	

function gotoSection(){
	$(".btnCommon").each(function(){
		$(this).click(function(){
			var destination = $(this).attr("href");
			console.log(typeof destination);
			$("html, body").animate({
				scrollTop:$(destination).offset().top
			}, 300);
			return false;
		});
	});
}

$(function(){
	patient();
	textEffectLeft();
	textEffectRight();
	textEffectBottom();
	textEffectZoom();
	gotoSection();
});