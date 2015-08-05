<?
	include_once   "./header.php";
?>
<body class="menu">
<input type="hidden" name="movie_num" id="movie_num">
<input type="hidden" name="allchk" id="allchk" value="N">
<input type="hidden" name="usechk" id="usechk" value="N">
<input type="hidden" name="privacychk" id="privacychk" value="N">
<input type="hidden" name="adverchk" id="adverchk" value="N">
<div class="wrap_page" id="top_navi" style="display:none;">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" width="70" alt="" id="navi_logo"/></a></div>
    <div class="right"><a href="navi_menu.php"><img src="images/menu_ham.png" width="30" alt="" id="navi_menu"/></a></div>
  </div>
</div>

<div class="wrap_page" id="input_navi" style="display:none">
  <div class="navi">
    <div class="right"><a href="#" onclick="show_confirm();return false;" class="btn_close"><img src="images/popup/btn_close.png" width="30" /></a></div>
  </div>
</div>

	<div id="main_area" class="wrap_page menu">
		<div class="btn_close">
        	<a href="index.php"><img src="images/popup/btn_close_menu.png" width="30" /></a>
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
<?
	include_once   "./sub_page.php";

	include_once   "./popup_div.php";
?>
</body>
</html>
<script type="text/javascript">
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
		  label: "보닌 설레임학 개론\r\n3020법칙으로 그녀를 심쿵하게 하는 방법! 솔로든 커플이든 꼭 알아야할 설레임 4가지 법칙",
		  image: {
			src: 'http://www.babience-giveandtake.com/MOBILE/images/img_sns_share.jpg',
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

function sel_book(gender)
{
	$("#top_navi").show();
	$("#navi_logo").attr("src","images/logo_b.png");
	$("#navi_menu").attr("src","images/menu_ham_b.png");
	if (gender == "w")
	{
		$("#main_area").hide();
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
		$("#main_area").hide();
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

	$("#navi_logo").attr("src","images/logo.png");
	$("#navi_menu").attr("src","images/menu_ham.png");


	if (gender_gubun == "m_1" || gender_gubun == "m_2" || gender_gubun == "m_3" || gender_gubun == "m_4")
	{
		$("#man_area").hide();
		$("body").removeClass('menu');
		$( "#comment_area" ).fadeIn("slow");
		$("#comment_title").attr("src","images/bg_sub_2_2.jpg");
	}else{
		$("#woman_area").hide();
		$("body").removeClass('menu');
		$( "#comment_area" ).fadeIn("slow");
	}
}

var consumer_seq;
var content;
var image1;
var image2;
var image3;
var ip_address;
var link1;
var link2;
var link3;
var livere_seq;
var member_domain;
var member_group_seq;
var member_icon;
var member_id;
var member_seq;
var member_url;
var member_name;
var parent_seq;
var rep_seq;
var reply_seq;
var site;
var agent;
var member_title;
var reply_regdate;
var status;
var septSNSObj;
var info1;
var info2;
var info3;
function show_inspop(obj)
{
	for(key in obj) {
		if (key = "consumer_seq")
			consumer_seq = obj[key];
		if (key = "content")
			content = obj[key];
		if (key = "image1")
			image1 = obj[key];
		if (key = "image2")
			image2 = obj[key];
		if (key = "image3")
			image3 = obj[key];
		if (key = "ip_address")
			ip_address = obj[key];
		if (key = "link1")
			link1 = obj[key];
		if (key = "link2")
			link2 = obj[key];
		if (key = "link3")
			link3 = obj[key];
		if (key = "livere_seq")
			livere_seq = obj[key];
		if (key = "member_domain")
			member_domain = obj[key];
		if (key = "member_group_seq")
			member_group_seq = obj[key];
		if (key = "member_icon")
			member_icon = obj[key];
		if (key = "member_id")
			member_id = obj[key];
		if (key = "member_seq")
			member_seq = obj[key];
		if (key = "member_url")
			member_url = obj[key];
		if (key = "name")
			member_name = obj[key];
		if (key = "parent_seq")
			parent_seq = obj[key];
		if (key = "rep_seq")
			rep_seq = obj[key];
		if (key = "reply_seq")
			reply_seq = obj[key];
		if (key = "site")
			site = obj[key];
		if (key = "agent")
			agent = obj[key];
		if (key = "title")
			member_title = obj[key];
		if (key = "reply_regdate")
			reply_regdate = obj[key];
		if (key = "status")
			status = obj[key];
		if (key = "septSNSObj")
			septSNSObj = obj[key];
		if (key = "info1")
			info1 = obj[key];
		if (key = "info2")
			info2 = obj[key];
		if (key = "info3")
			info3 = obj[key];
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"					: "insert_comment_info",
			"consumer_seq"		: consumer_seq,
			"content"				: content,
			"image1"					: image1,
			"image2"					: image2,
			"image3"					: image3,
			"ip_address"				: ip_address,
			"link1"					: link1,
			"link2"					: link2,
			"link3"					: link3,
			"livere_seq"				: livere_seq,
			"member_domain"		: member_domain,
			"member_group_seq"	: member_group_seq,
			"member_icon"			: member_icon,
			"member_id"			: member_id,
			"member_seq"			: member_seq,
			"member_url"			: member_url,
			"member_name"		: member_name,
			"parent_seq"			: parent_seq,
			"rep_seq"				: rep_seq,
			"reply_seq"				: reply_seq,
			"site"						: site,
			"agent"					: agent,
			"member_title"			: member_title,
			"reply_regdate"			: reply_regdate,
			"status"					: status,
			"septSNSObj"			: septSNSObj,
			"info1"					: info1,
			"info2"					: info2,
			"info3"					: info3
		},
		url: "../main_exec.php",
		success: function(response){
			$("#navi_logo").attr("src","images/logo_b.png");
			$("#navi_menu").attr("src","images/menu_ham_b.png");
			$("#top_navi").hide();
			$("#comment_area").hide();
			//$("body").attr("class","sub");
			//$("#navi_main").hide();
			//$("#navi_sub").show();
			$("body").removeClass('menu');
			$( "#input_area" ).fadeIn( "slow",function(){
				$("#input_navi").show();
			});

		}
	});

}

var all_flag		= 0;
var use_flag		= 0;
var privacy_flag	= 0;
var adver_flag	= 0;
function all_check()
{
	if (all_flag == 0)
	{
		$("#allchk").val('Y');
		$("#usechk").val('Y');
		$("#privacychk").val('Y');
		$("#adverchk").val('Y');
		$("#all_agree").attr("src","images/check_in.png");
		$("#use_agree").attr("src","images/check_in.png");
		$("#privacy_agree").attr("src","images/check_in.png");
		$("#adver_agree").attr("src","images/check_in.png");
		all_flag	= "1";
	}else{
		$("#allchk").val('N');
		$("#usechk").val('N');
		$("#privacychk").val('N');
		$("#adverchk").val('N');
		$("#all_agree").attr("src","images/check_out.png");
		$("#use_agree").attr("src","images/check_out.png");
		$("#privacy_agree").attr("src","images/check_out.png");
		$("#adver_agree").attr("src","images/check_out.png");
		all_flag	= "0";
	}
}

function use_check()
{
	if (use_flag == 0)
	{
		$("#usechk").val('Y');
		$("#use_agree").attr("src","images/check_in.png");
		use_flag	= "1";
	}else{
		$("#usechk").val('N');
		$("#use_agree").attr("src","images/check_out.png");
		use_flag	= "0";
	}
}

function privacy_check()
{
	if (privacy_flag == 0)
	{
		$("#privacychk").val('Y');
		$("#privacy_agree").attr("src","images/check_in.png");
		privacy_flag	= "1";
	}else{
		$("#privacychk").val('N');
		$("#privacy_agree").attr("src","images/check_out.png");
		privacy_flag	= "0";
	}
}

function adver_check()
{
	if (adver_flag == 0)
	{
		$("#adverchk").val('Y');
		$("#adver_agree").attr("src","images/check_in.png");
		adver_flag	= "1";
	}else{
		$("#adverchk").val('N');
		$("#adver_agree").attr("src","images/check_out.png");
		adver_flag	= "0";
	}
}

function input_info()
{
	var mb_name			= $("#mb_name").val();
	var mb_phone			= $("#mb_phone").val();
	var sel_movie			= $("#movie_num").val();
	var use_agree			= $("#usechk").val();
	var privacy_agree		= $("#privacychk").val();
	var adver_agree		= $("#adverchk").val();

	if (mb_name == "" || mb_name == "성함을 입력해 주세요.")
	{

		alert('이름을 입력해 주세요.');

		$("#mb_name").focus();
		chk_ins = 0;
		return false;
	}

	if (mb_phone == "" || mb_phone == "휴대폰 번호를 입력해 주세요.(숫자만)")
	{

		alert('전화번호를 입력해 주세요.');

		$("#mb_phone").focus();
		chk_ins = 0;
		return false;
	}

	if (use_agree == "N")
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		chk_ins = 0;
		return false;
	}

	if (privacy_agree == "N")
	{
		alert("개인정보 취급 위탁 동의를 안 하셨습니다");
		chk_ins = 0;
		return false;
	}

	if (adver_agree == "N")
	{
		alert("광고성 정보전송 약관에 동의를 안 하셨습니다");
		chk_ins = 0;
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"					: "insert_info",
			"mb_name"			: mb_name,
			"mb_phone"			: mb_phone,
			"sel_movie"			: sel_movie
		},
		url: "../main_exec.php",
		success: function(response){
			$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#thanks_popup", onComplete: function(){
				//$("#cboxLoadedContent").height(560);
				//alert($("#colorbox").width());
			//$("#cboxContent").width(356);
				$("#cboxContent").css("background","none");
				$("#colorbox").width($("body").width());
				$("#cboxWrapper").width($("body").width());
			},
			onClosed: function(){
				$("#cboxContent").css("background","#fff");
			}});
		}
	});
}

function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}
 
	if(flag == false)
	{
		alert("전화번호는 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	} 
	return true;
}

function show_menu()
{
	if ($("#mobile_menu").css("display") == "block")
	{
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(300);
			$(window).off(".disableScroll");
		});
	}else{
		$(".mask").width($(window).width());
		$(".mask").height($(window).height());
		$(".mask").fadeTo(1000, 0.6);

		$('#mobile_menu').css('right','-200px');
		// 이동위치값 지정
		var position = 0;
		$('#mobile_menu').show().animate({right:position},300,'linear');

		$(window).on("mousewheel.disableScroll DOMMouseScroll.disableScroll touchmove.disableScroll", function(e) {
			e.preventDefault();
			return;
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