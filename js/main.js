function popup_desc(param)
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
			},
			close: function() {
			}
		}
	}, 0);
}
var chk_ins = 0;
function input_info()
{
	var mb_name			= $("#mb_name").val();
	var mb_phone1			= $("#mb_phone1").val();
	var mb_phone2			= $("#mb_phone2").val();
	var mb_phone3			= $("#mb_phone3").val();
	var sel_movie			= $("#movie_num").val();
	var use_agree			= $("#usechk").val();
	var privacy_agree		= $("#privacychk").val();
	var adver_agree		= $("#adverchk").val();
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

/*
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
*/

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
			$.colorbox({width:"542px", height:"742px", inline:true, opacity:"0.9", closeButton:false, href:"#thanks_popup"});
		}
	});

}