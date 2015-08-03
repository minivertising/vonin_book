<?
	include_once   "./header.php";
?>
<input type="hidden" name="movie_num" id="movie_num">
<input type="hidden" name="allchk" id="allchk" value="N">
<input type="hidden" name="usechk" id="usechk" value="N">
<input type="hidden" name="privacychk" id="privacychk" value="N">
<input type="hidden" name="adverchk" id="adverchk" value="N">
<div class="sec_navi">
  <div class="navi">
    <div class="left"><a href="index.php"><img src="images/logo.png" alt=""/></a></div>
    <div class="right">
      <a href="#" id="top_gift_link" onclick="show_gift2();"><img src="images/gnb_gift.png" alt=""/></a>
      <a href="#" id="top_join_link" onclick="show_join();"><img src="images/gnb_howto.png" alt=""/></a>
      <a href="http://everymanis.lgbeautymall.com/everymanis.jsp" target="_blank"><img src="images/gnb_vonin.png" alt=""/></a>
    </div>
  </div>
</div>
<div id="main_area" class="wrap_sec_top"> 
  <div class="title">
    <img src="images/title.png" alt=""/>
  </div>
  <div class="btn_1">
    <a href="#" onclick="sel_book('w')"><img src="images/btn_movie_woman.png" alt=""/></a>
  </div>
  <div class="bar">
    <a href="#"><img src="images/bar.png" alt=""/></a>
  </div>
  <div class="btn_2">
    <a href="#" onclick="sel_book('m')"><img src="images/btn_movie_man.png" alt=""/></a>
  </div>
  <div class="img_gift">
    <a href="#" id="gift_link" onclick="show_gift();"><img src="images/img_gift.png" alt=""/></a>
  </div>
  <div class="sec_top">
    <div class="bg_top" id="cover_image1"><img src="images/bg_top.jpg" alt=""/></div>
  </div>
</div>  

  <div id="man_area" style="width:100%;height:100%;background:orange;display:none">
    <h1  style="padding-top:20px">STEP.1 설렘학 개론(남성)</h1>
    <a href="#">선물보기</a><br />
    <a href="#">참여방법</a><br />
    <div id="man_ytplayer1" class="movie_area" style="width:500px;height:281px">
      <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer2" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer3" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer4" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="m_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <input type="checkbox" name="movie_check" id="movie_check" onclick="chk_reply(this)"><label for="movie_check">영상 선택</label><br />
    <a href="#" onclick="change_chapter('m','1')">Chapter1. 5cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','2')">Chapter2. 3척의 마법</a><br />
    <a href="#" onclick="change_chapter('m','3')">Chapter3. 15cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','4')">Chapter4. 3020의 법칙</a><br />
  </div>
  <div id="woman_area" style="width:100%;height:100%;background:orange;display:none;z-index:1000;position:absolute">
    <h1  style="padding-top:20px">STEP.1 설렘학 개론(여성)</h1>
    <a href="#">선물보기</a><br />
    <a href="#">참여방법</a><br />
    <div id="woman_ytplayer1" class="movie_area" style="width:500px;height:281px">
      <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="woman_ytplayer2" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="woman_ytplayer3" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="woman_ytplayer4" class="movie_area" style="width:500px;height:281px;display:none">
      <iframe allowfullscreen="1" src="" frameborder="0" id="w_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="woman_loading" style="width:500px;height:281px;display:none">
      <img src="images/loading.gif" style="width:100px;height:100px">
    </div>
    <input type="checkbox" name="movie_check" id="movie_check" onclick="chk_reply(this)"><label for="movie_check">영상 선택</label><br />
    <a href="#" onclick="change_chapter('w','1')">Chapter1. 5cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('w','2')">Chapter2. 3척의 마법</a><br />
    <a href="#" onclick="change_chapter('w','3')">Chapter3. 15cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('w','4')">Chapter4. 3020의 법칙</a><br />
  </div>
  <div id="comment_area" style="width:100%;height:100%;background:gray;display:none">
    <h1  style="padding-top:20px">설렘을 모르는 내 남자에게 영상과 함께 한마디 남겨주세요!</h1>
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
<?
	include_once   "./popup_div.php";

	include_once   "./footer.php";
?>
<script type="text/javascript">
$(document).ready(function() {
	//$("#main_area").height($(document).height() - 70);
	$("#man_area").height($(document).height() - 70);
	$("#woman_area").height($(document).height() - 70);

/*
	paceOptions = {
	  // Disable the 'elements' source
		ajax: true, // disabled
		document: true, // disabled
		eventLag: true,
		restartOnRequestAfter: false
	}
*/
	//setInterval("changeImage()",7000);

	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();
	$("")
});

var rolling_num=0;
function changeImage()
{
	if (rolling_num == 0)
	{
	$("#cover_image1").fadeOut("slow",function(){
		$("#cover_image2").fadeIn("slow");
		rolling_num=1;
		/*
		if (rolling_num == 0)
		{
			$("#cover_image").attr("src","images/img_gift.png");
			rolling_num=1;
		}else if (rolling_num == 1){
			$("#cover_image").attr("src","images/bg_top.jpg");
			rolling_num=2;
		}else if (rolling_num == 2){
			$("#cover_image").attr("src","images/img_gift.png");
			rolling_num=3;
		}else if (rolling_num == 3){
			$("#cover_image").attr("src","images/bg_top.jpg");
			rolling_num=0;
		}
		*/
	});
	}else{
	$("#cover_image2").fadeOut("slow",function(){
		$("#cover_image1").fadeIn("slow");
		rolling_num=1;
		/*
		if (rolling_num == 0)
		{
			$("#cover_image").attr("src","images/img_gift.png");
			rolling_num=1;
		}else if (rolling_num == 1){
			$("#cover_image").attr("src","images/bg_top.jpg");
			rolling_num=2;
		}else if (rolling_num == 2){
			$("#cover_image").attr("src","images/img_gift.png");
			rolling_num=3;
		}else if (rolling_num == 3){
			$("#cover_image").attr("src","images/bg_top.jpg");
			rolling_num=0;
		}
		*/
	});
	}

}

function sel_book(gender)
{
	if (gender == "w")
	{
		$("#main_area").hide();
		$( "#woman_area" ).fadeIn( "slow", function() {
			$("#w_ytplayer1").attr("src","<?=$_gl['w_yt_url1']?>");
			$("#movie_num").val('w_1');
		});
		//$("#woman_area").show();
		//$("#w_ytplayer2").attr("src","<?=$_gl['w_yt_url2']?>");
		//$("#w_ytplayer3").attr("src","<?=$_gl['w_yt_url3']?>");
		//$("#w_ytplayer4").attr("src","<?=$_gl['w_yt_url4']?>");
	}else{
		$("#main_area").hide();
		$( "#man_area" ).fadeIn( "slow", function() {
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$("#movie_num").val('m_1');
		});
		$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
		$("#movie_num").val('m_1');
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
			$(".movie_area").hide();
			$("#woman_ytplayer1").show();
			$("#movie_num").val('w_1');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "2"){
			$("#w_ytplayer2").attr("src","<?=$_gl['w_yt_url2']?>");
			$(".movie_area").hide(0,function(){
				$("#woman_loading").show(100,function(){
					$("#woman_ytplayer2").show(0,function(){
						$("#woman_loading").hide(0);
					});
				});
			});
			$("#movie_num").val('w_2');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "3"){
			$("#w_ytplayer3").attr("src","<?=$_gl['w_yt_url3']?>");
			$(".movie_area").hide();
			$("#woman_ytplayer3").show();
			$("#movie_num").val('w_3');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "4"){
			$("#w_ytplayer4").attr("src","<?=$_gl['w_yt_url4']?>");
			$(".movie_area").hide();
			$("#woman_ytplayer4").show();
			$("#movie_num").val('w_4');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}
	}else{
		if (cnt == "1")
		{
			$("#m_ytplayer1").attr("src","<?=$_gl['m_yt_url1']?>");
			$(".movie_area").hide();
			$("#man_ytplayer1").show();
			$("#movie_num").val('m_1');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "2"){
			$("#m_ytplayer2").attr("src","<?=$_gl['m_yt_url2']?>");
			$(".movie_area").hide();
			$("#man_ytplayer2").show();
			$("#movie_num").val('m_2');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "3"){
			$("#m_ytplayer3").attr("src","<?=$_gl['m_yt_url3']?>");
			$(".movie_area").hide();
			$("#man_ytplayer3").show();
			$("#movie_num").val('m_3');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "4"){
			$("#m_ytplayer4").attr("src","<?=$_gl['m_yt_url4']?>");
			$(".movie_area").hide();
			$("#man_ytplayer4").show();
			$("#movie_num").val('m_4');
			//yt_api(cnt);
			//controllable_player.seekTo(0);controllable_player.stopVideo();
		}

	}
}

/*
var yt_player_ctr	= "";
var controllable_player,start;
function yt_api(cnt)
{
	yt_player_ctr	= "m_ytplayer" + cnt;
	// 유튜브 반복 재생
	var statechange = function(e){
		alert('start');
		if (e.data === 0) // 종료됨
		{
			alert('222');
		}else if (e.data === 1) // 재생중
		{
			alert('111');
		}
	};
	function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player(yt_player_ctr, {events: {'onStateChange': statechange}}); 
	}

	if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
	}

	if (typeof(controllable_player) == 'undefined'){
		onYouTubeIframeAPIReady();
	}
}
*/

function show_gift()
{
	$("#gift_link").colorbox({width:"712px", height:"602px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#gift_popup", onComplete: function(){
		$("#cboxLoadedContent").height(560);
	}});

}
function show_gift2()
{
	$("#top_gift_link").colorbox({width:"712px", height:"602px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#gift_popup", onComplete: function(){
		$("#cboxLoadedContent").height(560);
	}});
}

function show_join()
{
	//$("#top_join_link").colorbox({width:"592px", height:"502px", inline:true, opacity:"0.9", closeButton:false, href:"#join_popup"});
	$("#top_join_link").colorbox({width:"592px", height:"502px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#join_popup", onComplete: function(){
		$("#cboxLoadedContent").height(460);
	}});
}

function back_input()
{
	$.colorbox({width:"492px", height:"632px", inline:true, opacity:"0.9", closeButton:false, href:"#insert_popup", onComplete:function(){
		$("#cboxLoadedContent").height(592);
	}});
}

function show_use_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#use_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
	}});
}

function show_privacy_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#privacy_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
	}});
}

function show_adver_agree()
{
	$.colorbox({width:"492px", height:"566px", inline:true, opacity:"0.9", scrolling:false, closeButton:false, overlayClose: true, fadeOut: 300, href:"#adver_agree_popup", onComplete: function(){
		$("#cboxLoadedContent").height(526);
	}});
}

var gender_gubun;
function chk_reply(param)
{
	gender_gubun	= $("#movie_num").val();
	if (param.checked == true)
	{
		if (gender_gubun == "m_1" || gender_gubun == "m_2" || gender_gubun == "m_3" || gender_gubun == "m_4")
		{
			$("#man_area").hide();
			$("#comment_area").show();
		}else{
			$("#woman_area").hide();
			$("#comment_area").show();
		}
	}else{
		alert('22');
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
			$.colorbox({width:"492px", height:"632px", inline:true, opacity:"0.9", closeButton:false, href:"#insert_popup", onComplete:function(){
				$("#cboxLoadedContent").height(592);
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
		all_flag	= "1";
	}else{
		$("#allchk").val('N');
		$("#usechk").val('N');
		$("#privacychk").val('N');
		$("#adverchk").val('N');
		all_flag	= "0";
	}
}

function use_check()
{
	if (use_flag == 0)
	{
		$("#usechk").val('Y');
		use_flag	= "1";
	}else{
		$("#usechk").val('N');
		use_flag	= "0";
	}
}

function privacy_check()
{
	if (privacy_flag == 0)
	{
		$("#privacychk").val('Y');
		privacy_flag	= "1";
	}else{
		$("#privacychk").val('N');
		privacy_flag	= "0";
	}
}

function adver_check()
{
	if (adver_flag == 0)
	{
		$("#adverchk").val('Y');
		adver_flag	= "1";
	}else{
		$("#adverchk").val('N');
		adver_flag	= "0";
	}
}


</script>