//==========================================================================================================================================================

/* !------------------------------------------------- */
/* ! 	VARIABLE */

//==========================================================================================================================================================
var BG_LOADER 	= new Image();
//==========================================================================================================================================================

/* !------------------------------------------------- */
/* ! 	DOCUMENT READY */

//==========================================================================================================================================================
$(document).ready(function(){
	resize();
});

$(window).resize(resize);
function resize(){
	var __width  = $("body").width();
	var __height = $("body").height();
	var __scale  = Math.max(__width/1400, __height/850);
	var __left   = Math.floor((__width-(1400*__scale))/2);
	var __top    = Math.floor((__height-(850*__scale))/2);

	$(".ar-full-bg").css({width:1400*__scale, height:850*__scale, left:__left, top:__top});
}

