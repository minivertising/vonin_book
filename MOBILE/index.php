<?
	include_once   "./header.php";
?>
<input type="hidden" name="movie_num" id="movie_num">
<input type="hidden" name="allchk" id="allchk" value="N">
<input type="hidden" name="usechk" id="usechk" value="N">
<input type="hidden" name="privacychk" id="privacychk" value="N">
<input type="hidden" name="adverchk" id="adverchk" value="N">
<div class="wrap_page">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" width="70" alt="" id="navi_logo"/></a></div>
    <div class="right"><a href="#" onclick="show_menu()"><img src="images/menu_ham.png" width="30" alt="" id="navi_menu"/></a></div>
  </div>
</div>

<div id="mobile_menu" class="mobile_menu">
  <ul>
    <li><a href="http://www.babience.co.kr/m/index.jsp" target="_blank"><img src="images/btn_bb_home.png"  alt=""/></a></li>
    <li><a href="#" onclick="move_area('story')"><img src="images/btn_story.png"  alt=""/></a></li>
    <li><a href="#" onclick="move_area('give')"><img src="images/btn_give.png"  alt=""/></a></li>
    <li><a href="#" onclick="move_area('message')"><img src="images/btn_suu.png"  alt=""/></a></li>
    <li><a href="popup_gift_check.php"><img src="images/btn_view_gift.png"  alt=""/></a></li>
  </ul>
  <div class="btn_sns">
    <div class="inner_sns clearfix">
      <a href="#" onclick="m_sns_share('kt');" id="kakao-link-btn"><img src="images/btn_kt.jpg"  alt=""/></a>
      <a href="#" onclick="m_sns_share('ks');"><img src="images/btn_ks.jpg"  alt=""/></a>
      <a href="#" onclick="m_sns_share('fb');"><img src="images/btn_fb.jpg"  alt=""/></a>
      <a href="#" onclick="m_sns_share('tw');"><img src="images/btn_tw.jpg"  alt=""/></a>
    </div>
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


<div id="man_area" class="sec_top sub_1" style="display:none">
  <div class="title">
    <img src="images/sub_title_1_1.png" alt=""/>
  </div>
  <div class="btn_block">
    <a href="#" onclick="show_gift();return false;"><img src="images/btn_gift.png" alt=""/></a>
    <a href="#" onclick="show_join();return false;"><img src="images/btn_howto.png" alt=""/></a>
  </div>
  <div class="title_chap">
    <img src="images/label_chap_1.png" alt="" id="m_chapter_label"/>
  </div>
  <div id="man_ytplayer1" class="movie">
    <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="man_ytplayer2" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="man_ytplayer3" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="man_ytplayer4" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>

  <div class="btn_share">
    <a href="#" onclick="chk_reply(this)"><img src="images/btn_share_movie.png" alt=""/></a>
  </div>
  <div class="block_thumb">
    <div class="one clearfix">
      <a href="#" onclick="change_chapter('m','1');return false;"><img src="images/thumb_1_on.png" alt="" id="m_thumb_img1"/></a>
      <a href="#" onclick="change_chapter('m','2');return false;"><img src="images/thumb_2_off.png" alt="" id="m_thumb_img2"/></a>
    </div>
    <div class="one clearfix">
      <a href="#" onclick="change_chapter('m','3');return false;"><img src="images/thumb_3_off.png" alt="" id="m_thumb_img3"/></a>
      <a href="#" onclick="change_chapter('m','4');return false;"><img src="images/thumb_4_off.png" alt="" id="m_thumb_img4"/></a>
    </div>
  </div>
  <div class="bg">
    <img src="images/bg_sub_1.jpg" alt=""/>
  </div>
</div>

<div id="woman_area" class="sec_top sub_1" style="display:none">
  <div class="title">
    <img src="images/sub_title_1_1.png" alt=""/>
  </div>
  <div class="btn_block">
    <a href="#" onclick="show_gift();return false;"><img src="images/btn_gift.png" alt=""/></a>
    <a href="#" onclick="show_join();return false;"><img src="images/btn_howto.png" alt=""/></a>
  </div>
  <div class="title_chap">
    <img src="images/label_chap_1.png" alt="" id="w_chapter_label"/>
  </div>
  <div id="woman_ytplayer1" class="movie">
    <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="woman_ytplayer2" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="woman_ytplayer3" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div id="woman_ytplayer4" class="movie" style="display:none">
    <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
  </div>
  <div class="btn_share">
    <a href="#" onclick="chk_reply(this)"><img src="images/btn_share_movie.png" alt=""/></a>
  </div>
  <div class="block_thumb">
    <div class="one clearfix">
      <a href="#" onclick="change_chapter('w','1');return false;"><img src="images/thumb_1_on.png" alt="" id="w_thumb_img1"/></a>
      <a href="#" onclick="change_chapter('w','2');return false;"><img src="images/thumb_2_on.png" alt="" id="w_thumb_img2"/></a>
    </div>
    <div class="one clearfix">
      <a href="#" onclick="change_chapter('w','3');return false;"><img src="images/thumb_3_on.png" alt="" id="w_thumb_img3"/></a>
      <a href="#" onclick="change_chapter('w','4');return false;"><img src="images/thumb_4_on.png" alt="" id="w_thumb_img4"/></a>
    </div>
  </div>
  <div class="bg">
    <img src="images/bg_sub_1.jpg" alt=""/>
  </div>
</div>

<div id="comment_area" class="sec_top sub_2" style="display:none">
  <div class="title">
    <img src="images/bg_sub_2_1.jpg" alt=""/>
  </div>
    <div id="livereContainer">
<script type="text/javascript">
	var consumer_seq		= "1012";
	var livere_seq			= "23924";
	var smartlogin_seq		= "1255";
	var title					= "보닌 설렘학 개론";
	var refer					= "www.mnv.kr";
	refer						= refer.replace("http://","");

	livereReply				= new Livere(livere_seq, refer, title);
	livereLib.start();
</script>
    </div>   
</div>

<div id="input_area" class="sec_top sub_3" style="display:none">
  <div class="title">
    <img src="images/bg_sub_3.jpg" alt=""/>
  </div>
  <div class="block_input">
    <div class="input">
      <input type="text" name="mb_name" id="mb_name" placeholder="성함 입력">
    </div>
    <div class="input">
      <input type="text" name="mb_phone" id="mb_phone" maxlength="11" placeholder="휴대폰 (번호만 입력)" onkeyup="only_num(this);">
    </div>
    <div class="block_check">
      <div class="one_check all clearfix">
        <span class="check"><img src="images/check_out.png" width="20px" alt="" name="all_agree" id="all_agree" alt="" onclick="all_check()"/></span>
        <span class="txt" onclick="all_check()">전체약관동의</span>
      </div>
      <div class="one_check clearfix">
        <span class="check"><img src="images/check_out.png" width="20px" alt="" name="use_agree" id="use_agree" onclick="use_check()"/></span>
        <span class="txt" onclick="use_check()">동의</span>
        <a href="#" onclick="show_use_agree();return false;">개인정보 활용 약관</a>
      </div>
      <div class="one_check clearfix">
        <span class="check"><img src="images/check_out.png" width="20px" alt="" name="privacy_agree" id="privacy_agree" onclick="privacy_check()"/></span>
        <span class="txt" onclick="privacy_check()">동의</span>
        <a href="#" onclick="show_privacy_agree();return false;">개인정보 취급 위탁 약관</a>
      </div>
      <div class="one_check clearfix">
        <span class="check"><img src="images/check_out.png" width="20px" alt="" name="adver_agree" id="adver_agree" onclick="adver_check()"/></span>
        <span class="txt" onclick="adver_check()">동의</span>
        <a href="#" onclick="show_adver_agree();return false;">광고성 정보 전송 약관</a>
      </div>
    </div>
  </div>
  <div class="block_comp_btn">
    <a href="#" onclick="input_info();return false;"><img src="images/btn_comp.png" alt=""/></a>
  </div>        
</div>



<div class="mask"></div>
<?
	include_once   "./popup_div.php";
?>

</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();
	//$("#cboxContent").css("background","none");
	$(".mask").click(function(){
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(300);
			$(window).off(".disableScroll");
		});
	});

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
	$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#join_popup", onComplete: function(){
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
	$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#use_agree_popup", onComplete: function(){
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
	$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#privacy_agree_popup", onComplete: function(){
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
	$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#adver_agree_popup", onComplete: function(){
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
	$.colorbox({innerWidth:"100%", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#confirm_popup", onComplete: function(){
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
		$( "#comment_area" ).fadeIn("slow");
	}else{
		$("#woman_area").hide();
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
			$("#comment_area").hide();
			//$("body").attr("class","sub");
			//$("#navi_main").hide();
			//$("#navi_sub").show();
			$( "#input_area" ).fadeIn( "slow");

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

	if (mb_name == "")
	{

		alert('이름을 입력해 주세요.');

		$("#mb_name").focus();
		chk_ins = 0;
		return false;
	}

	if (mb_phone == "")
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