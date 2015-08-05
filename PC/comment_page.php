<?
	include_once   "./header.php";

	//if ($gubun == "MOBILE")
		//echo "<script>location.href='http://www.vonin-allinone.com/MOBILE/index.php';</script>";

	$gender_gubun	= $_REQUEST['gender_gubun'];
	print_r($gender_gubun);

	if ($gender_gubun == "m_1")
		$YT_url	= "https://www.youtube.com/watch?v=uqULeqzTI2w";
	else if ($gender_gubun == "m_2")
		$YT_url	= "https://www.youtube.com/watch?v=EDKRv_2K2cc";
	else if ($gender_gubun == "m_3")
		$YT_url	= "https://www.youtube.com/watch?v=7WbzHaeXoSs";
	else if ($gender_gubun == "m_4")
		$YT_url	= "https://www.youtube.com/watch?v=4eBLryCRBTk";
	else if ($gender_gubun == "w_1")
		$YT_url	= "https://www.youtube.com/watch?v=1rU95PG4QA8 ";
	else if ($gender_gubun == "w_2")
		$YT_url	= "https://www.youtube.com/watch?v=FB_o6r_pO4A";
	else if ($gender_gubun == "w_3")
		$YT_url	= "https://www.youtube.com/watch?v=gxVuph4wbb0";
	else if ($gender_gubun == "w_4")
		$YT_url	= "https://www.youtube.com/watch?v=xk913pR3qpk";

?>
<input type="hidden" name="movie_num" id="movie_num" value="<?=$gender_gubun?>">
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
      <a href="#" onclick="sns_share('fb');"><img src="images/btn_sns_fb.png" alt=""/></a>
      <a href="#" onclick="sns_share('ks');"><img src="images/btn_sns_ks.png" alt=""/></a>
      <a href="#" onclick="sns_share('tw');"><img src="images/btn_sns_tw.png" alt=""/></a>
    </div>
  </div>
</div>

<div id="comment_area1" class="wrap_sec_sub_2_top"> 
  <div class="title">
    <img src="images/title_sub_2.png" alt="" id="comment_title"/>
  </div>
  <div class="bg_top"><img src="images/bg_top_sub2.jpg" alt=""/></div> 
  <div class="bg_blank"></div>    
</div>  
<div id="comment_area2" class="sec_comment">
  <div class="input_comment">
	<div id="livereContainer">
<script type="text/javascript">
	var consumer_seq		= "1012";
	var livere_seq			= "23924";
	var smartlogin_seq		= "1255";
	var title					= "보닌 설렘학개론";
	var refer					= "www.vonin-allinone.com";
	refer						= refer.replace("http://","");

	livereReply				= new Livere(livere_seq, refer, title);
	livereReply.description	= "여자들이 설레는 남자 행동 BEST4! 누구나 설레게 하는 방법 소개! 자세히 보기";
	//livereReply.site				= "<?=$YT_url?>";
	livereReply.site				= "http://www.vonin-allinone.com";
	livereLib.start();

</script>
    </div>   
  </div>
</div>   
<?
	include_once   "./popup_div.php";

	//include_once   "./footer.php";
?>
<?
	if ($IE7 == "Y")
	{
?>
<script type="text/javascript">
function sns_share(media)
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
		alert('지원하지 않는 브라우저 입니다.');
	}

}


$(window).load(function() {

	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();
	//$("#cboxContent").css("background","none");
	resize();
	setTimeout(change_txt(),2000);
});

</script>
<?
	}else{
?>
<script type="text/javascript">
function sns_share(media)
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


$(window).load(function() {
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
	resize();

	setTimeout(change_txt(),2000);

});

</script>
<?
	}
?>

  </body>
</html>

<script type="text/javascript">
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

$(window).resize(resize);
function resize(){
	var __width  = $("body").width();
	var __height = $("body").height();
	var __scale  = Math.max(__width/1400, __height/850);
	var __left   = Math.floor((__width-(1400*__scale))/2);
	var __top    = Math.floor((__height-(850*__scale))/2);

	$(".ar-full-bg").css({width:1400*__scale, height:850*__scale, left:__left, top:__top});
}

function change_txt()
{
	$("#livere_contentText").val('[보닌] 여자들이 설레는 남자 행동 동영상 바로보기 ▶\r\n<?=$YT_url?>');
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
