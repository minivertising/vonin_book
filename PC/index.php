<?
	include_once   "./header.php";
?>
<input type="hidden" name="movie_num" id="movie_num">
<input type="hidden" name="allchk" id="allchk" value="N">
<input type="hidden" name="usechk" id="usechk" value="N">
<input type="hidden" name="privacychk" id="privacychk" value="N">
<input type="hidden" name="adverchk" id="adverchk" value="N">
<div class="sec_navi" id="navi_main">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" alt=""/></a></div>
    <div class="right">
      <a href="#" onclick="show_gift2();"><img src="images/gnb_gift.png" alt=""/></a>
      <a href="#" onclick="show_join();"><img src="images/gnb_howto.png" alt=""/></a>
      <a href="#" onclick="show_notice();"><img src="images/gnb_notice.png" alt=""/></a>
      <a href="http://everymanis.lgbeautymall.com/everymanis.jsp" target="_blank"><img src="images/gnb_vonin.png" alt=""/></a>
    </div>
  </div>
</div>

<div class="sec_navi" id="navi_sub" style="display:none">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo_b.png" alt=""/></a></div>
    <div class="right">
      <a href="#" onclick="show_gift2();"><img src="images/gnb_gift_b.png" alt=""/></a>
      <a href="#" onclick="show_join();"><img src="images/gnb_howto_b.png" alt=""/></a>
      <a href="#" onclick="show_notice();"><img src="images/gnb_notice_b.png" alt=""/></a>
      <a href="http://everymanis.lgbeautymall.com/everymanis.jsp" target="_blank"><img src="images/gnb_vonin_b.png" alt=""/></a>
    </div>
  </div>
</div>


<div id="main_area" class="wrap_sec_top"> 
  <div class="title">
    <img src="images/title.png" alt=""/>
  </div>
  <div class="btn_block">
    <a href="#" onclick="sel_book('w')"><img src="images/btn_movie_woman.png" alt=""/></a>
    <a href="#"><img src="images/bar.png" alt=""/></a>
    <a href="#" onclick="sel_book('m')"><img src="images/btn_movie_man.png" alt=""/></a>
  </div>
  <div class="img_gift">
    <a href="#" id="gift_link" onclick="show_gift();"><img src="images/img_gift.png" alt=""/></a>
  </div>
  <div class="sec_top">
    <div class="bg_top"><img src="images/bg_top.jpg" alt=""  id="cover_image1"/></div>
  </div>
</div>

<div id="man_area1" class="wrap_sec_sub_1_top" style="display:none"> 
  <div class="title"><img src="images/title_sub_1_top.png" alt=""/></div>
  <div class="block_movie">
    <div class="label_ch"><img src="images/sub_label_ch_1.png" alt="" id="m_chapter_label" /></div>
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

    <div class="btn_block"><a href="#" onclick="chk_reply(this)"><img src="images/btn_share_movie.png" alt=""/></a></div>
  </div>
</div>  
<div id="man_area2" class="wrap_sec_sub_1_bottom" style="display:none"> 
  <div class="thumb_movie">
    <a href="#" onclick="change_chapter('m','1');return false;"><img src="images/img_thumb_1_on.png" alt="" id="m_thumb_img1"/></a>
    <a href="#" onclick="change_chapter('m','2');return false;"><img src="images/img_thumb_2_off.png" alt="" id="m_thumb_img2" /></a>
    <a href="#" onclick="change_chapter('m','3');return false;"><img src="images/img_thumb_3_off.png" alt="" id="m_thumb_img3" /></a>
    <a href="#" onclick="change_chapter('m','4');return false;"><img src="images/img_thumb_4_off.png" alt="" id="m_thumb_img4" /></a>
  </div>
</div> 
<div id="woman_area1" class="wrap_sec_sub_1_top" style="display:none"> 
  <div class="title"><img src="images/title_sub_1_top.png" alt=""/></div>
  <div class="block_movie">
    <div class="label_ch"><img src="images/sub_label_ch_1.png" alt="" id="w_chapter_label"/></div>
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

    <div class="btn_block"><a href="#" onclick="chk_reply(this)"><img src="images/btn_share_movie.png" alt=""/></a></div>
  </div>
</div>  
<div id="woman_area2" class="wrap_sec_sub_1_bottom" style="display:none"> 
  <div class="thumb_movie">
    <a href="#" onclick="change_chapter('w','1');return false;"><img src="images/img_thumb_1_on.png" alt="" id="w_thumb_img1"/></a>
    <a href="#" onclick="change_chapter('w','2');return false;"><img src="images/img_thumb_2_off.png" alt="" id="w_thumb_img2" /></a>
    <a href="#" onclick="change_chapter('w','3');return false;"><img src="images/img_thumb_3_off.png" alt="" id="w_thumb_img3" /></a>
    <a href="#" onclick="change_chapter('w','4');return false;"><img src="images/img_thumb_4_off.png" alt="" id="w_thumb_img4" /></a>
  </div>
</div> 
<div id="comment_area1" class="wrap_sec_sub_2_top" style="display:none"> 
  <div class="title">
    <img src="images/title_sub_2.png" alt=""/>
  </div>
  <div class="bg_top"><img src="images/bg_top_sub2.jpg" alt=""/></div> 
  <div class="bg_blank">ttt</div>    
</div>  
<div id="comment_area2" class="sec_comment" style="display:none">
  <div class="input_comment">
    <div id="livereContainer">
<script type="text/javascript">
	var consumer_seq		= "1012";
	var livere_seq			= "23924";
	var smartlogin_seq		= "1255";
	var title					= "보닌 설렘학 개론";
	var refer					= "www.vonin-allinone.com";
	refer						= refer.replace("http://","");

	livereReply				= new Livere(livere_seq, refer, title);
	livereReply.description	= "그녀의 마음을 설레이게 하는 4가지 방법. 설렘효과 보장!";
	livereLib.start();
</script>
    </div>   
  </div>
</div>   
<?
	include_once   "./popup_div.php";

	//include_once   "./footer.php";
?>
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
});

function sel_book(gender)
{
	if (gender == "w")
	{
		$("#main_area").hide();
		$("body").attr("class","sub");
		$("#navi_main").hide();
		$("#navi_sub").show();
		$( "#woman_area1" ).fadeIn( "slow", function() {
			$(".wrap_sec_footer").hide();
			$("#w_ytplayer1").attr("src","<?=$_gl['w_yt_url1']?>");
			$("#movie_num").val('w_1');
		});
		$( "#woman_area2" ).fadeIn("slow");
	}else{
		$("#main_area").hide();
		$("body").attr("class","sub");
		$("#navi_main").hide();
		$("#navi_sub").show();
		$( "#man_area1" ).fadeIn( "slow", function() {
			$(".wrap_sec_footer").hide();
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$("#movie_num").val('m_1');
		});
		$( "#man_area2" ).fadeIn("slow");
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
			$("#w_chapter_label").attr("src","images/sub_label_ch_1.png");
			$("#w_thumb_img1").attr("src","images/img_thumb_1_on.png");
			$("#w_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "2"){
			$("#w_ytplayer2").attr("src","<?=$_gl['w_yt_url2']?>");
			$(".movie").hide();
			$("#woman_ytplayer2").show();
			$("#movie_num").val('w_2');
			$("#w_chapter_label").attr("src","images/sub_label_ch_2.png");
			$("#w_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/img_thumb_2_on.png");
			$("#w_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "3"){
			$("#w_ytplayer3").attr("src","<?=$_gl['w_yt_url3']?>");
			$(".movie").hide();
			$("#woman_ytplayer3").show();
			$("#movie_num").val('w_3');
			$("#w_chapter_label").attr("src","images/sub_label_ch_3.png");
			$("#w_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/img_thumb_3_on.png");
			$("#w_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "4"){
			$("#w_ytplayer4").attr("src","<?=$_gl['w_yt_url4']?>");
			$(".movie").hide();
			$("#woman_ytplayer4").show();
			$("#movie_num").val('w_4');
			$("#w_chapter_label").attr("src","images/sub_label_ch_4.png");
			$("#w_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#w_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#w_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#w_thumb_img4").attr("src","images/img_thumb_4_on.png");
		}
	}else{
		if (cnt == "1")
		{
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$(".movie").hide();
			$("#man_ytplayer1").show();
			$("#movie_num").val('m_1');
			$("#m_chapter_label").attr("src","images/sub_label_ch_1.png");
			$("#m_thumb_img1").attr("src","images/img_thumb_1_on.png");
			$("#m_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "2"){
			$("#m_ytplayer2").attr("src","<?=$_gl['m_yt_url2']?>");
			$(".movie").hide();
			$("#man_ytplayer2").show();
			$("#movie_num").val('m_2');
			$("#m_chapter_label").attr("src","images/sub_label_ch_2.png");
			$("#m_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/img_thumb_2_on.png");
			$("#m_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "3"){
			$("#m_ytplayer3").attr("src","<?=$_gl['m_yt_url3']?>");
			$(".movie").hide();
			$("#man_ytplayer3").show();
			$("#movie_num").val('m_3');
			$("#m_chapter_label").attr("src","images/sub_label_ch_3.png");
			$("#m_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/img_thumb_3_on.png");
			$("#m_thumb_img4").attr("src","images/img_thumb_4_off.png");
		}else if (cnt == "4"){
			$("#m_ytplayer4").attr("src","<?=$_gl['m_yt_url4']?>");
			$(".movie").hide();
			$("#man_ytplayer4").show();
			$("#movie_num").val('m_4');
			$("#m_chapter_label").attr("src","images/sub_label_ch_4.png");
			$("#m_thumb_img1").attr("src","images/img_thumb_1_off.png");
			$("#m_thumb_img2").attr("src","images/img_thumb_2_off.png");
			$("#m_thumb_img3").attr("src","images/img_thumb_3_off.png");
			$("#m_thumb_img4").attr("src","images/img_thumb_4_on.png");
		}

	}
}

function show_gift()
{
	$("#gift_link").colorbox({width:"712px", height:"602px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#gift_popup", onComplete: function(){
		$("#cboxLoadedContent").height(560);
		$("#cboxContent").css("background","none");

	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});

}
function show_gift2()
{
	$.colorbox({width:"712px", height:"602px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#gift_popup", onComplete: function(){
		$("#cboxLoadedContent").height(560);
		$("#cboxContent").css("background","none");
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_join()
{
	$.colorbox({width:"592px", height:"502px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#join_popup", onComplete: function(){
		$("#cboxLoadedContent").height(460);
		$("#cboxContent").css("background","none");
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_notice()
{
	$.colorbox({width:"592px", height:"502px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#join_popup", onComplete: function(){
		$("#cboxLoadedContent").height(460);
		$("#cboxContent").css("background","none");
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function back_input()
{
	$.colorbox({width:"492px", height:"632px", inline:true, opacity:"0.9", closeButton:false, href:"#insert_popup", onComplete:function(){
		$("#cboxLoadedContent").height(592);
		$("#cboxContent").css("background","none");
	},
	onClosed: function(){
		$("#cboxContent").css("background","#fff");
	}});
}

function show_use_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#use_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
		$("#cboxContent").css("background","none");
	}});
}

function show_privacy_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#privacy_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
		$("#cboxContent").css("background","none");
	}});
}

function show_adver_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#adver_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
		$("#cboxContent").css("background","none");
	}});
}

function show_confirm()
{
	$.colorbox({width:"452px", height:"312px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#confirm_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
		$("#cboxContent").css("background","none");
	}});
}

var gender_gubun;
function chk_reply(param)
{
	gender_gubun	= $("#movie_num").val();

	$("#navi_main").show();
	$("#navi_sub").hide();

	if (gender_gubun == "m_1" || gender_gubun == "m_2" || gender_gubun == "m_3" || gender_gubun == "m_4")
	{
		$("#man_area1").hide();
		$("#man_area2").hide();
		$( "#comment_area1" ).fadeIn("slow");
		$( "#comment_area2" ).fadeIn("slow");
		//$("#comment_area").show();
	}else{
		$("#woman_area1").hide();
		$("#woman_area2").hide();
		$( "#comment_area1" ).fadeIn("slow");
		$( "#comment_area2" ).fadeIn("slow");
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
			$.colorbox({width:"492px", height:"632px", inline:true, opacity:"0.9", overlayClose:false, closeButton:false, href:"#insert_popup", onComplete:function(){
				$("#cboxLoadedContent").height(592);
				$("#cboxContent").css("background","none");
			},
			onClosed: function(){
				$("#cboxContent").css("background","#fff");
			}});
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
		$("#all_agree").attr("src","images/popup/check_in.png");
		$("#use_agree").attr("src","images/popup/check_in.png");
		$("#privacy_agree").attr("src","images/popup/check_in.png");
		$("#adver_agree").attr("src","images/popup/check_in.png");
		all_flag	= "1";
	}else{
		$("#allchk").val('N');
		$("#usechk").val('N');
		$("#privacychk").val('N');
		$("#adverchk").val('N');
		$("#all_agree").attr("src","images/popup/check_out.png");
		$("#use_agree").attr("src","images/popup/check_out.png");
		$("#privacy_agree").attr("src","images/popup/check_out.png");
		$("#adver_agree").attr("src","images/popup/check_out.png");
		all_flag	= "0";
	}
}

function use_check()
{
	if (use_flag == 0)
	{
		$("#usechk").val('Y');
		$("#use_agree").attr("src","images/popup/check_in.png");
		use_flag	= "1";
	}else{
		$("#usechk").val('N');
		$("#use_agree").attr("src","images/popup/check_out.png");
		use_flag	= "0";
	}
}

function privacy_check()
{
	if (privacy_flag == 0)
	{
		$("#privacychk").val('Y');
		$("#privacy_agree").attr("src","images/popup/check_in.png");
		privacy_flag	= "1";
	}else{
		$("#privacychk").val('N');
		$("#privacy_agree").attr("src","images/popup/check_out.png");
		privacy_flag	= "0";
	}
}

function adver_check()
{
	if (adver_flag == 0)
	{
		$("#adverchk").val('Y');
		$("#adver_agree").attr("src","images/popup/check_in.png");
		adver_flag	= "1";
	}else{
		$("#adverchk").val('N');
		$("#adver_agree").attr("src","images/popup/check_out.png");
		adver_flag	= "0";
	}
}

function focus_val(param)
{
	if (param.id == "mb_name")
	{
		if (param.value == "성함을 입력해 주세요.")
		{
			param.value = "";
		}
	}else{
		if (param.value == "휴대폰 번호를 입력해 주세요.(숫자만)")
		{
			param.value = "";
		}
	}
}

function blur_val(param)
{
	if (param.id == "mb_name")
	{
		if (param.value == "")
		{
			param.value = "성함을 입력해 주세요.";
		}
	}else{
		if (param.value == "")
		{
			param.value = "휴대폰 번호를 입력해 주세요.(숫자만)";
		}
	}

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


</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65963846-1', 'auto');
  ga('send', 'pageview');

</script>