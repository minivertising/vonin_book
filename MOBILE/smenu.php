<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
	#dlg{
		
		width:500px;
		height:500px;
		min-height:500px;
		background-color:skyblue;
		border:1px solid red;
		z-index:2;
		display:none;
	}
	.overlay{
		position:absolute;
		top:0;
		left:0;
		display:none;
		background-color:black;
		z-index:0;
		
	}
	
	.no-close .ui-dialog-titlebar-close {
		display: none;
	  
	}
	
	</style>

    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
</head>
 <body>
  <div id="open">
	Open Dialog 클릭 !
</div>
<div class="overlay">

</div>
<div id="dlg">
	<table>
		<tr><td>1  <a href="javascript:alert(3)">alert </a></td></tr>
		<tr><td>2</td></tr>
		<tr><td>4</td></tr>
		<tr><td>5</td></tr>
	</table>

</div>
 </body>
</html>
<script type="text/javascript">
	$(document).ready(function () {
			$('#open').click(function () {
				$(".overlay").height($(window).height());
				$(".overlay").width($(window).width());
				$(".overlay").fadeTo(500, 0.4);

				$("#dlg").dialog({
						draggable : false,
				      dialogClass: "no-close",
					// dialogClass: ",
					position:[500,500],
					modal : false,
					//appendTo : "#menuB",
					buttons : false,
					width: "500px",
					height: "auto",
					show: {
					effect: "slide",
					duration: 500,
					},
					hide: {
					effect: "slide",
					duration: 500
					},
					show : function()
					{
						direction: 'right';
					},
					open : function() {
  					  $(this).dialog("widget").find(".ui-dialog-titlebar").hide();
				  	},	
					beforeClose: function () {
					$(".overlay").fadeTo(1000, 0);
					},
					close: function () {
					$(".overlay").css("display", "none");
					},
					resizeStop: function (event, ui) {
					$("#if").height($(this).height());
					$("#if").width($(this).width());
					}
				});
					
			});

			
	$(".overlay").click(function(){
		$("#dlg").dialog( "close" );
		
	});

});
</script>