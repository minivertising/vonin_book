/*
$("#all_agree").click(function() {
		
		$("input[name=agree]:checkbox").attr("checked", true);
});
*/
function all_check()
{
	var chk = $("#all_agree").is(':checked');

    if (chk) {
        $("input[name=agree]:checkbox").prop('checked', true);
    } else {
        $("input[name=agree]:checkbox").prop('checked', false);
    }
}

function sns_share(media)
{
	if (media == "fb")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.babience-giveandtake.com/?media=fb'),'sharer','toolbar=0,status=0,width=600,height=325');
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
		  label: "[기부 앤 테이크 릴레이] 우리 아기 이름으로 첫 기부도 하고, 매일매일 100% 당첨 선물도 테이크하세요!",
		  image: {
			src: 'http://www.babience-giveandtake.com/MOBILE/images/img_sns_share_kt.jpg',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '베비언스',
			url: 'http://www.babience-giveandtake.com/?media=kt' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
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
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("[베비언스] 우리 아기 이름으로 첫 기부도 하고, 매일매일 100% 당첨 선물도 테이크하세요!") + '&url='+ encodeURIComponent('http://bit.ly/1LIDUII'),'sharer','toolbar=0,status=0,width=600,height=325');
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
						url : 'http://www.babience-giveandtake.com/?media=ks'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"[베비언스]\r\n우리 아기 이름으로 첫 기부도 하고, 매일매일 100% 당첨 선물도 테이크하세요!"
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

function auto_count()
{
	$.ajax({
		type:"POST",
		data:{
			"exec"					: "total_member"
		},
		url: "../main_exec.php",
		success: function(response){
			$(".block_p_num").html(response);
		}
	});
}

function auto_give_count()
{
	$.ajax({
		type:"POST",
		data:{
			"exec"					: "total_give_member"
		},
		url: "../main_exec.php",
		success: function(response){
			$("#give_view_num1").html(response);
		}
	});
}

function auto_give_count2()
{
	$.ajax({
		type:"POST",
		data:{
			"exec"					: "total_give_member2"
		},
		url: "../main_exec.php",
		success: function(response){
			$("#give_view_num2").html(response);
		}
	});
}

var timerId = 0;
function auto_comment(num)
{
	$.ajax({
		type:"POST",
		data:{
			"exec"		: "view_comment",
			"num"		: num
		},
		url: "../main_exec.php",
		success: function(response){
			var comment_txt	= response.split("||");
			$("#comment_view").html(comment_txt[0]);
			timerId = setInterval("comment_rolling("+comment_txt[1]+","+num+")",2500);
		}
	});

}
var rolling_num		= 1;
function comment_rolling(cnt, num)
{
	$("#ct_"+rolling_num).fadeOut("fast");
	$("#cn_"+rolling_num).fadeOut("fast",function(){
		if (rolling_num == cnt)
		{
			rolling_num	= 0;
		}
		rolling_num = rolling_num + 1;
		$("#cn_"+rolling_num).fadeIn("fast");
		$("#ct_"+rolling_num).fadeIn("fast");
	});
}

function go_recom(num, detail)
{
	if (confirm('추천하시겠어요?'))
	{
		if (detail == "main")
		{
			popup_desc('pop_event_input', num);
		}else{
			$.magnificPopup.close();
			setTimeout("popup_desc('pop_event_input', "+num+");",500);
		}
	}
}

function go_detail(num)
{
	if (num == 1)
		popup_desc('pop_detail_view1', 0);
	else if (num == 2)
		popup_desc('pop_detail_view2', 0);
	else if (num == 3)
		popup_desc('pop_detail_view3', 0);
	else if (num == 4)
		popup_desc('pop_detail_view4', 0);
	else if (num == 5)
		popup_desc('pop_detail_view5', 0);
	else if (num == 6)
		popup_desc('pop_detail_view6', 0);
}

function go_gift()
{
	popup_desc('pop_search_gift', 0);
}

function popup_desc(param, num)
{
	$.magnificPopup.open({
		items: {
			src: '#' + param+ ''
		},
		type: 'inline',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'hidden',
		closeBtnInside: true,
		//preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		showCloseBtn : false,
		closeOnBgClick: true,
		callbacks: {
			open: function() {
				$("#blogger_num").val(num);
				if (param == "pop_thanks_div")
				{
					$("#serial_number").html();
				}else if (param == "pop_detail_view1"){
					auto_comment('1');
				}else if (param == "pop_detail_view2"){
					auto_comment('2');
				}else if (param == "pop_detail_view3"){
					auto_comment('3');
				}else if (param == "pop_detail_view4"){
					auto_comment('4');
				}else if (param == "pop_detail_view5"){
					auto_comment('5');
				}else if (param == "pop_detail_view6"){
					auto_comment('6');
				}
			},
			close: function() {
				chk_ins = 0;
				if (param == "pop_detail_view1"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}else if (param == "pop_detail_view2"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}else if (param == "pop_detail_view3"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}else if (param == "pop_detail_view4"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}else if (param == "pop_detail_view5"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}else if (param == "pop_detail_view6"){
					$("#comment_view").html("");
					clearInterval(timerId);
					rolling_num = 1;
				}
				//chk_ins2 = 0;
				//$("#mb_receive").val("");
				//$("#mb_send").val("");
				//$("#mb_message").val("");
				$("#mb_name").val("");
				$("#mb_baby_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#s_name").val("");
				$("#s_phone1").val("010");
				$("#s_phone2").val("");
				$("#s_phone3").val("");
				$("#mb_comment").val("");
				$("#mb_nickname").val("");
				$('input').iCheck('uncheck');
				$(".block_gift_num").html("");
				b_sel_num = "4";
			}
		}
	}, 0);
}

function input_info()
{
	if (chk_ins == 0)
	{
		chk_ins = 1;
		var mb_name			= $("#mb_name").val();
		var mb_phone1			= $("#mb_phone1").val();
		var mb_phone2			= $("#mb_phone2").val();
		var mb_phone3			= $("#mb_phone3").val();
		var mb_baby_name	= $("#mb_baby_name").val();
		var blogger_num		= $("#blogger_num").val();
		var mb_phone			= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;

		if (mb_name == "")
		{

			alert('이름을 입력해 주세요.');

			$("#mb_name").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_phone2 == "")
		{

			alert('전화번호를 입력해 주세요.');

			$("#mb_phone2").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_phone3 == "")
		{

			alert('전화번호를 입력해 주세요.');

			$("#mb_phone3").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_baby_name == "")
		{

			alert('아기 이름을 입력해주세요.');

			$("#mb_baby_name").focus();
			chk_ins = 0;
			return false;
		}

		if ($('#use_agree').is(":checked") == false)
		{
			alert("개인정보 활용 동의를 안 하셨습니다");
			chk_ins = 0;
			return false;
		}

		if ($('#privacy_agree').is(":checked") == false)
		{
			alert("개인정보 취급 위탁 동의를 안 하셨습니다");
			chk_ins = 0;
			return false;
		}

		if ($('#adver_agree').is(":checked") == false)
		{
			alert("광고 동의 약관에 동의를 안 하셨습니다");
			chk_ins = 0;
			return false;
		}

		$.ajax({
			type:"POST",
			data:{
				"exec"					: "insert_info",
				"mb_name"			: mb_name,
				"mb_phone"			: mb_phone,
				"mb_baby_name"	: mb_baby_name,
				"blogger_num"		: blogger_num
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "N")
				{
					alert("사용자가 많아 접속이 지연되고 있습니다. 다시 추천해 주세요.");
				}else if (response == "D"){
					popup_desc("pop_dupli_div", 0);
				}else if (response == "E"){
					popup_desc("pop_complete_div", 0);
				}else{
					popup_desc("pop_thanks_div", 0);
					var giftArr	= response.split("||");
					if (giftArr[0] == "CASH")
					{
						$("#prize_txt").attr("src","images/popup/img_gift_coupon.png");
					}else if (giftArr[0] == "WATER"){
						$("#prize_txt").attr("src","images/popup/img_gift_water.png");
					}else if (giftArr[0] == "WASH"){
						$("#prize_txt").attr("src","images/popup/img_gift_wash.png");
					}else if (giftArr[0] == "CAMERA"){
						$("#prize_txt").attr("src","images/popup/img_gift_camera.png");
					}else if (giftArr[0] == "HOTEL"){
						$("#prize_txt").attr("src","images/popup/img_gift_hotel.png");
					}else if (giftArr[0] == "WG"){
						$("#prize_txt").attr("src","images/popup/img_gift_wg.png");
					}else if (giftArr[0] == "MILK"){
						$("#prize_txt").attr("src","images/popup/img_gift_milk.png");
					}
					$("#serial_number").html(giftArr[1]);
				}
			}
		});
	}
}

function search_gift()
{
	var s_name	= $("#s_name").val();
	var s_phone1	= $("#s_phone1").val();
	var s_phone2	= $("#s_phone2").val();
	var s_phone3	= $("#s_phone3").val();
	var s_phone			= s_phone1 + "-" + s_phone2 + "-" + s_phone3;

	if (s_name == "")
	{
		alert('검색하실 이름을 입력해 주세요.');

		$("#s_name").focus();
		return false;
	}

	if (s_phone2 == "")
	{
		alert('검색하실 전화번호를 입력해 주세요.');

		$("#s_phone2").focus();
		return false;
	}

	if (s_phone3 == "")
	{
		alert('검색하실 전화번호를 입력해 주세요.');

		$("#s_phone3").focus();
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "search_info",
			"s_name"				: s_name,
			"s_phone"			: s_phone
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "")
			{
			$(".no_gift").show();
			$(".yes_gift").hide();
			}else{
				$(".no_gift").hide();
				$(".yes_gift").show();
				$(".block_gift_num").html(response);
			}

		}
	});
}

function input_comment()
{
	var mb_nickname	= $("#mb_nickname").val();
	var mb_comment	= $("#mb_comment").val();
	var blogger_idx		= $("#blogger_idx").val();
	if (mb_nickname== "")
	{
		alert('닉네임을 입력해 주세요.');

		$("#mb_nickname").focus();
		return false;
	}

	if (mb_comment == "")
	{
		alert('응원 댓글을 입력해 주세요.');

		$("#mb_comment").focus();
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_comment",
			"mb_nickname"	: mb_nickname,
			"mb_comment"		: mb_comment,
			"blogger_idx"		: blogger_idx
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "Y")
			{
				if (blogger_idx == 1)
				{
					popup_desc("pop_detail_view1", 0);
				}else if (blogger_idx == 2){
					popup_desc("pop_detail_view2", 0);
				}else if (blogger_idx == 3){
					popup_desc("pop_detail_view3", 0);
				}else if (blogger_idx == 4){
					popup_desc("pop_detail_view4", 0);
				}else if (blogger_idx == 5){
					popup_desc("pop_detail_view5", 0);
				}else if (blogger_idx == 6){
					popup_desc("pop_detail_view6", 0);
				}
			}else{
				alert("접속자가 많아 지연되고 있습니다. 다시 시도해 주세요.");
			}
		}
	});

}

function copy_url(ss_url)
{
	//window.clipboardData.setData('text',"11<?=$_SESSION['ss_url']?>");
    //alert("클립보드에 복사되었습니다.");
	//var text = $("#serial_number").val();
	var text = ss_url;
	if(window.clipboardData){
		// IE처리
		// 클립보드에 문자열 복사
		window.clipboardData.setData('text', text);
		alert("클립보드에 복사되었습니다.");
	} else {
		// 비IE 처리    
		window.prompt ("Ctrl+C를 눌러 나의 선물번호를 복사해주세요!", text);  
	}
}

/*
** param1 : 파워블로거 순번 (1~6)
** param2 : 주차 (1~4)
*/
var b_sel_num	= "4";
var b_url = "";
function show_story(param1, param2)
{
	if (param1 == "1")
	{
		if (param2 == "1")
		{
			b_url = "http://vazzanga.blog.me/220406355379";
		}else if (param2 == "2"){
			b_url = "http://vazzanga.blog.me/220413766743";
		}else if (param2 == "3"){
			b_url = "http://vazzanga.blog.me/220420676272";
		}else if (param2 == "4"){
			b_url = "http://vazzanga.blog.me/220429963527";
		}
	}else if (param1 == "2"){
		if (param2 == "1")
		{
			b_url = "http://blog.naver.com/goeun061133/220406179689";
		}else if (param2 == "2"){
			b_url = "http://blog.naver.com/goeun061133/220413488609";
		}else if (param2 == "3"){
			b_url = "http://blog.naver.com/goeun061133/220420035884";
		}else if (param2 == "4"){
			b_url = "http://blog.naver.com/goeun061133/220429923527";
		}
	}else if (param1 == "3"){
		if (param2 == "1")
		{
			b_url = "http://blog.naver.com/luckyj407/220406414442";
		}else if (param2 == "2"){
			b_url = "http://blog.naver.com/luckyj407/220413302937";
		}else if (param2 == "3"){
			b_url = "http://blog.naver.com/luckyj407/220420096757";
		}else if (param2 == "4"){
			b_url = "http://blog.naver.com/luckyj407/220428436797";
		}
	}else if (param1 == "4"){
		if (param2 == "1")
		{
			b_url = "http://jinjuseo.blog.me/220406575011";
		}else if (param2 == "2"){
			b_url = "http://jinjuseo.blog.me/220413279091";
		}else if (param2 == "3"){
			b_url = "http://jinjuseo.blog.me/220420390740";
		}else if (param2 == "4"){
			b_url = "http://jinjuseo.blog.me/220428422900";
		}
	}else if (param1 == "5"){
		if (param2 == "1")
		{
			b_url = "http://lovewjs012.blog.me/220406442563";
		}else if (param2 == "2"){
			b_url = "http://lovewjs012.blog.me/220413721936";
		}else if (param2 == "3"){
			b_url = "http://lovewjs012.blog.me/220419511767";
		}else if (param2 == "4"){
			b_url = "http://lovewjs012.blog.me/220428098259";
		}
	}else if (param1 == "6"){
		if (param2 == "1")
		{
			b_url = "http://clever_fox.blog.me/220406173165";
		}else if (param2 == "2"){
			b_url = "http://clever_fox.blog.me/220413541064";
		}else if (param2 == "3"){
			b_url = "http://clever_fox.blog.me/220420230434";
		}else if (param2 == "4"){
			b_url = "http://clever_fox.blog.me/220427841369";
		}
	}

	//if (param2 == "4")
	//{
		//alert("곧 오픈됩니다!");
		//return false;
	//}
	$("#post_area"+param1).fadeOut("fast", function(){
		var post_html = "<a href='"+b_url+"' target='_blank'><img src='images/popup/bloger_img_"+param1+"_"+param2+".png' alt=''/></a>";
		$("#post_area"+param1).html(post_html);
		$("#b"+param1+"_tab"+b_sel_num).attr("src","images/popup/tab_menu_"+b_sel_num+"_off.png");
		$("#post_area"+param1).fadeIn("fast", function(){
			$("#b"+param1+"_tab"+param2).attr("src","images/popup/tab_menu_"+param2+"_on.png");
			$("#b_name_url"+param1).attr("href",b_url);
			b_sel_num = param2;
		});
	});
}
