<?
	include_once   "./header.php";

	$gender_gubun	= $_REQUEST['gender_gubun'];

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

<div id="comment_area" class="sec_top sub_2">
  <div class="title">
<?
	if ($gender_gubun == "m_1" || $gender_gubun == "m_2" || $gender_gubun == "m_3" || $gender_gubun == "m_4")
	{
?>
    <img src="images/bg_sub_2_2.jpg" alt="" id="comment_title"/>
<?
	}else{
?>
    <img src="images/bg_sub_2_1.jpg" alt="" id="comment_title"/>
<?
	}
?>
  </div>
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
<?
	include_once   "./sub_page.php";

	include_once   "./popup_div.php";
?>
</body>
</html>
<script type="text/javascript">
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
	change_txt();
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
			$("#all_navi").hide();
			$("#comment_area").hide();
			//$("body").attr("class","sub");
			//$("#navi_main").hide();
			//$("#navi_sub").show();
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
	$("#comment_area").hide();
	$("#all_navi").hide();
	$("body").addClass("menu");
	$( "#menu_area" ).fadeIn("slow");
}

function hide_menu()
{
	$( "#menu_area" ).hide();
	$("#all_navi").show();
	$("body").removeClass("menu");
	$("#comment_area").fadeIn("slow");

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