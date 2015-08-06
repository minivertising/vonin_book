<?
	include_once   "./header.php";
?>
 <body>
<input type="hidden" name="movie_num" id="movie_num">
<input type="hidden" name="allchk" id="allchk" value="N">
<input type="hidden" name="usechk" id="usechk" value="N">
<input type="hidden" name="privacychk" id="privacychk" value="N">
<input type="hidden" name="adverchk" id="adverchk" value="N">
<input type="hidden" name="b_page" id="b_page" value="main">
<!-- <div class="wrap_page" id="top_navi" style="display:none;">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" width="70" alt="" id="navi_logo"/></a></div>
    <div class="right"><a href="navi_menu.php"><img src="images/menu_ham.png" width="30" alt="" id="navi_menu"/></a></div>
  </div>
</div>

<div class="wrap_page" id="input_navi" style="display:none">
  <div class="navi">
    <div class="right"><a href="#" onclick="show_confirm();return false;" class="btn_close"><img src="images/popup/btn_close.png" width="30" /></a></div>
  </div>
</div> -->

	<div id="menu_area" class="wrap_page menu" style="display:none;">
		<div class="btn_close">
        	<a href="#" onclick="hide_menu()"><img src="images/popup/btn_close_menu.png" width="30" /></a>
        </div>
        <div class="bt_list">
        	<a href="#" onclick="sel_book('w')">
        	<img src="images/gnb_woman.png" />
            </a>
        </div>
        <div class="bt_list">
        	<a href="#" onclick="sel_book('m')">
        	<img src="images/gnb_man.png" />
            </a>
        </div>
        <div class="bt_list">
        	<a href="#" onclick="show_gift();return false;">
        	<img src="images/gnb_gift.png" />
            </a>
        </div>
        <div class="bt_list">
        	<a href="#" onclick="show_join();return false;">
        	<img src="images/gnb_howto.png" />
            </a>
        </div>
        <div class="bt_list last">
        	<a href="#" onclick="show_notice();return false;">
        	<img src="images/gnb_notice.png" />
            </a>
        </div>
       <div class="bt_list shop">
        	<a href="http://everymanis.lgbeautymall.com/m/everymanis.jsp" target="_blank">
        	<img src="images/gnb_shop.png" />
            </a>
        </div>
        <div class="bt_list sns clearfix">
        	<a href="#" id="kakao-link-btn" onclick="m_sns_share('kt');return false;"><img src="images/gnb_kt.png" /></a>
        	<a href="#" onclick="m_sns_share('ks');return false;"><img src="images/gnb_ks.png" /></a>
        	<a href="#" onclick="m_sns_share('fb');return false;"><img src="images/gnb_fb.png" /></a>
        	<a href="#" onclick="m_sns_share('tw');return false;"><img src="images/gnb_tw.png" /></a>
        </div>
    </div>
<div class="wrap_page" id="all_navi">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" width="70" alt="" id="navi_logo"/></a></div>
    <div class="right"><a href="#" onclick="show_menu();return false;"><img src="images/menu_ham.png" width="30" alt="" id="navi_menu"/></a></div>
  </div>
</div>

<div class="wrap_page" id="input_navi" style="display:none">
  <div class="navi">
    <div class="right"><a href="#" onclick="show_confirm();return false;" class="btn_close"><img src="images/popup/btn_close.png" width="30" /></a></div>
  </div>
</div>

<div id="main_area" class="sec_top">
  <a href="#" onclick="sel_book('w')" class="btn_woman">여자영상</a>
  <a href="#" onclick="sel_book('m')" class="btn_man">남자영상</a>
  <a href="#" class="btn_gift" onclick="show_gift();">선물</a>
  <div class="bg">
    <img src="images/bg_main.jpg" alt=""/>
  </div>
</div>

<div class="mask"></div>
<?
	include_once   "./sub_page.php";

	include_once   "./popup_div.php";
?>
    <script type='text/javascript' src='../lib/pageslide/pageslide.js'></script>

</body>
</html>
<script type="text/javascript">

$(document).ready(function() {
	Kakao.init('33c0597a1dc81a3e616c83f0fb9c2bc5');
	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();
	//$("#cboxContent").css("background","none");
});


function show_gift()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%",inline:true, opacity:"0.9", scrolling:false, preloading:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#gift_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_join()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#join_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_use_agree()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#use_agree_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_privacy_agree()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#privacy_agree_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_adver_agree()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#adver_agree_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_confirm()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#confirm_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_notice()
{
	$.colorbox({innerWidth:"100%", initialWidth:"95%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#notice_popup", onComplete: function(){
		$("#cboxContent").css("background","none");
		$("#colorbox").width($("body").width());
		$("#cboxWrapper").width($("body").width());
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}


function sel_book(gender)
{
	$("#navi_logo").attr("src","images/logo_b.png");
	$("#navi_menu").attr("src","images/menu_ham_b.png");
	if (gender == "w")
	{
		if($("#menu_area").css("display") == "none")
		{
			$("#main_area").hide();
		}else{
			$("#all_navi").show();
			$("#menu_area").hide();
		}
		//$("body").attr("class","sub");
		//$("#navi_main").hide();
		//$("#navi_sub").show();
		$( "#woman_area" ).fadeIn( "slow", function() {
			$("#w_ytplayer1").attr("src","<?=$_gl['w_yt_url1']?>");
			$("#movie_num").val('w_1');
			
			var w_yt_width	= $(window).width() * 0.85;
			var w_yt_height	= (w_yt_width*9) / 16;
			$(".movie").height(w_yt_height);
		});
	}else{
		if($("#menu_area").css("display") == "none")
		{
			$("#main_area").hide();
		}else{
			$("#all_navi").show();
			$("#menu_area").hide();
		}
		//$("body").attr("class","sub");
		//$("#navi_main").hide();
		//$("#navi_sub").show();
		$( "#man_area" ).fadeIn( "slow", function() {
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$("#movie_num").val('m_1');
			
			var m_yt_width	= $(window).width() * 0.85;
			var m_yt_height	= (m_yt_width*9) / 16;
			$(".movie").height(m_yt_height);
		});
		//$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
		//$("#movie_num").val('m_1');
		//$("#m_ytplayer2").attr("src","<?=$_gl['m_yt_url2']?>");
		//$("#m_ytplayer3").attr("src","<?=$_gl['m_yt_url3']?>");
		//$("#m_ytplayer4").attr("src","<?=$_gl['m_yt_url4']?>");
	}
}

function change_chapter(gender, cnt)
{
	if (gender == "w")
	{
		if (cnt == "1")
		{
			$("#w_ytplayer1").attr("src","<?=$_gl['w_yt_url1']?>");
			$(".movie").hide();
			$("#woman_ytplayer1").show();
			$("#movie_num").val('w_1');
			$("#w_thumb_img1").attr("src","images/thumb_1_on.png");
			$("#w_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#w_chapter_label").attr("src","images/label_chap_1.png");
		}else if (cnt == "2"){
			$("#w_ytplayer2").attr("src","<?=$_gl['w_yt_url2']?>");
			$(".movie").hide();
			$("#woman_ytplayer2").show();
			$("#movie_num").val('w_2');
			$("#w_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/thumb_2_on.png");
			$("#w_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#w_chapter_label").attr("src","images/label_chap_2.png");
		}else if (cnt == "3"){
			$("#w_ytplayer3").attr("src","<?=$_gl['w_yt_url3']?>");
			$(".movie").hide();
			$("#woman_ytplayer3").show();
			$("#movie_num").val('w_3');
			$("#w_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/thumb_3_on.png");
			$("#w_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#w_chapter_label").attr("src","images/label_chap_3.png");
		}else if (cnt == "4"){
			$("#w_ytplayer4").attr("src","<?=$_gl['w_yt_url4']?>");
			$(".movie").hide();
			$("#woman_ytplayer4").show();
			$("#movie_num").val('w_4');
			$("#w_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/thumb_4_on.png");
			$("#w_chapter_label").attr("src","images/label_chap_4.png");
		}
	}else{
		if (cnt == "1")
		{
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$(".movie").hide();
			$("#man_ytplayer1").show();
			$("#movie_num").val('m_1');
			$("#m_thumb_img1").attr("src","images/thumb_1_on.png");
			$("#m_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#m_chapter_label").attr("src","images/label_chap_1.png");
		}else if (cnt == "2"){
			$("#m_ytplayer2").attr("src","<?=$_gl['m_yt_url2']?>");
			$(".movie").hide();
			$("#man_ytplayer2").show();
			$("#movie_num").val('m_2');
			$("#m_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/thumb_2_on.png");
			$("#m_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#m_chapter_label").attr("src","images/label_chap_2.png");
		}else if (cnt == "3"){
			$("#m_ytplayer3").attr("src","<?=$_gl['m_yt_url3']?>");
			$(".movie").hide();
			$("#man_ytplayer3").show();
			$("#movie_num").val('m_3');
			$("#m_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/thumb_3_on.png");
			$("#m_thumb_img4").attr("src","images/thumb_4_off.png");
			$("#m_chapter_label").attr("src","images/label_chap_3.png");
		}else if (cnt == "4"){
			$("#m_ytplayer4").attr("src","<?=$_gl['m_yt_url4']?>");
			$(".movie").hide();
			$("#man_ytplayer4").show();
			$("#movie_num").val('m_4');
			$("#m_thumb_img1").attr("src","images/thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/thumb_4_on.png");
			$("#m_chapter_label").attr("src","images/label_chap_4.png");
		}

	}
}

var gender_gubun;
function chk_reply(param)
{
	gender_gubun	= $("#movie_num").val();
	location.href	= "./comment_page.php?gender_gubun=" + gender_gubun;
}

function show_menu(param)
{
	if($("#main_area").css("display") == "block")
	{
		$("#main_area").hide();
		$("#b_page").val("main");
	}else if($("#man_area").css("display") == "block"){
		$("#man_area").hide();
		$("#b_page").val("man");
	}else if($("#woman_area").css("display") == "block"){
		$("#woman_area").hide();
		$("#b_page").val("woman");
	}
	$("#all_navi").hide();
	$("body").addClass("menu");
	$( "#menu_area" ).fadeIn("slow");
}

function hide_menu()
{
	$( "#menu_area" ).hide();
	$("#all_navi").show();
	$("body").removeClass("menu");
	if ($("#b_page").val() == "main")
	{
		$("#main_area").fadeIn("slow");
	}else if ($("#b_page").val() == "man"){
		$("#man_area").fadeIn("slow");
	}else if ($("#b_page").val() == "woman"){
		$("#woman_area").fadeIn("slow");
	}
}

function m_sns_share(media)
{
	if (media == "fb")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.vonin-allinone.com/?media=fb'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "kt"){
		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "보닌 설레임학 개론\r\n3020법칙으로 그녀를 심쿵하게 하는 방법!\r\n솔로든 커플이든 꼭 알아야할 설레임 4가지 법칙",
		  image: {
			src: 'http://www.vonin-allinone.com/MOBILE/images/img_sns_share.jpg',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '보닌 설렘학 개론',
			url: 'http://www.vonin-allinone.com/?media=kt' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
		  }
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "tw"){
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("보닌 설렘학 개론! 여자들이 직접 알려주는 여자를 설레이게 하는 4가지 법칙. 설렘학 개론 배우고 선물도 받자.") + '&url='+ encodeURIComponent('http://bit.ly/1E72Gxy'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		// 로그인 창을 띄웁니다.
		Kakao.Auth.login({
			success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
					url : '/v1/api/story/linkinfo',
					data : {
						url : 'http://www.vonin-allinone.com/?media=ks'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"30초만에 여자친구 설레이게 하는 방법!"
						}
					});
				}).then(function(res) {
					return Kakao.API.request( {
						url : '/v1/api/story/mystory',
						data : { id : res.id }
					});
				}).then(function(res) {
					$.ajax({
						type   : "POST",
						async  : false,
						url    : "../main_exec.php",
						data:{
							"exec" : "insert_share_info",
							"media" : "story"
						}
					});
					alert("카카오스토리에 공유 되었습니다.");
				}, function (err) {
					alert(JSON.stringify(err));
				});

			},
			fail: function(err) {
				alert(JSON.stringify(err))
			},
		});
	}

}


</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65963846-1', 'auto');
  ga('send', 'pageview');

</script>
