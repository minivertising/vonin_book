<?
	include_once   "./header.php";
?>
<div style="width:100%;">
  <div style="width:100%;height:70px;background:skyblue">
    <a href="index.php">VONIN</a>
    <a href="#" id="top_gift_link" onclick="show_gift2();">GIFT</a>
    <a href="#" id="top_join_link" onclick="show_join();">JOIN IN</a>
    <a href="#">VONIN SHOP</a>
  </div>
  <div id="main_area" style="width:100%;height:100%;background:gray">
    <a href="#" onclick="sel_book('w')">여성을 위한 개론서 episode4</a><br />
    <a href="#" onclick="sel_book('m')">남성을 위한 개론서 episode4</a><br />
    <a href="#" id="gift_link" onclick="show_gift();">선물보기</a>
  </div>
  <div id="man_area" style="width:100%;height:100%;background:orange;display:none">
    <h1  style="padding-top:20px">STEP.1 설렘학 개론(남성)</h1>
    <a href="#">선물보기</a><br />
    <a href="#">참여방법</a><br />
    <div id="man_ytplayer1" class="movie_area" style="width:100%;height:200px">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url1']?>" frameborder="0" id="m_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer2" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url2']?>" frameborder="0" id="m_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer3" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url3']?>" frameborder="0" id="m_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer4" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url4']?>" frameborder="0" id="m_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <a href="#" onclick="change_chapter('m','1')">Chapter1. 5cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','2')">Chapter2. 3척의 마법</a><br />
    <a href="#" onclick="change_chapter('m','3')">Chapter3. 15cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','4')">Chapter4. 3020의 법칙</a><br />
  </div>
  <div id="woman_area" style="width:100%;height:100%;background:orange;display:none">
    <h1  style="padding-top:20px">STEP.1 설렘학 개론(여성)</h1>
    <a href="#">선물보기</a><br />
    <a href="#">참여방법</a><br />
    <div id="man_ytplayer1" class="movie_area" style="width:100%;height:200px">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url1']?>" frameborder="0" id="m_ytplayer1" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer2" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url2']?>" frameborder="0" id="m_ytplayer2" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer3" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url3']?>" frameborder="0" id="m_ytplayer3" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <div id="man_ytplayer4" class="movie_area" style="width:100%;height:200px;display:none">
      <iframe allowfullscreen="1" src="<?=$_gl['m_yt_url4']?>" frameborder="0" id="m_ytplayer4" class="ytplayer" style="width:100%;height:100%;"></iframe>
    </div>
    <a href="#" onclick="change_chapter('m','1')">Chapter1. 5cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','2')">Chapter2. 3척의 마법</a><br />
    <a href="#" onclick="change_chapter('m','3')">Chapter3. 15cm의 법칙</a><br />
    <a href="#" onclick="change_chapter('m','4')">Chapter4. 3020의 법칙</a><br />
  </div>
</div>
<?
	include_once   "./popup_div.php";

	include_once   "./footer.php";
?>
<script type="text/javascript">
$(document).ready(function() {
	$("#main_area").height($(document).height() - 70);
	$("#man_area").height($(document).height() - 70);
	$("#woman_area").height($(document).height() - 70);

	paceOptions = {
	  // Disable the 'elements' source
		ajax: true, // disabled
		document: true, // disabled
		eventLag: true,
		restartOnRequestAfter: false
	}

	$("#cboxTopLeft").hide();
	$("#cboxTopRight").hide();
	$("#cboxBottomLeft").hide();
	$("#cboxBottomRight").hide();
	$("#cboxMiddleLeft").hide();
	$("#cboxMiddleRight").hide();
	$("#cboxTopCenter").hide();
	$("#cboxBottomCenter").hide();

});

function sel_book(gender)
{
	if (gender == "w")
	{
		$("#woman_area").show();
		$("#main_area").hide();
	}else{
		$("#man_area").show();
		$("#main_area").hide();
	}
}

function change_chapter(gender, cnt)
{
	if (gender == "w")
	{
		alert('준비중');
	}else{
		if (cnt == "1")
		{
			$(".movie_area").hide();
			$("#man_ytplayer1").show();
			yt_api(cnt);
			alert(controllable_player);
			controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "2"){
			$(".movie_area").hide();
			$("#man_ytplayer2").show();
			yt_api(cnt);
			controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "3"){
			$(".movie_area").hide();
			$("#man_ytplayer3").show();
			yt_api(cnt);
			controllable_player.seekTo(0);controllable_player.stopVideo();
		}else if (cnt == "4"){
			$(".movie_area").hide();
			$("#man_ytplayer4").show();
			yt_api(cnt);
			controllable_player.seekTo(0);controllable_player.stopVideo();
		}

	}
}

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

function show_gift()
{
	//popup_desc("gift_popup");
	//$("#inline").colorbox({inline:true, href:"#gift_popup"});
	$("#gift_link").colorbox({width:"542px", height:"742px", inline:true, opacity:"0.9", closeButton:false, href:"#gift_popup"});
	//$(".iframe").colorbox({iframe:true, fixed:true, width:"1055", height:"80%", opacity: '0.5'});

/*
	$('#gift_popup').css('top','-1400px');
	// 이동위치값 지정
	var position = "50%";
	event_triger = 0;
	$('#gift_popup').show().animate({top:position},{duration:1000,easing:'easeOutBounce'});
*/
}
function show_gift2()
{
	$("#top_gift_link").colorbox({width:"542px", height:"742px", inline:true, opacity:"0.9", closeButton:false, href:"#gift_popup"});
}

function show_join()
{
	$("#top_join_link").colorbox({width:"542px", height:"742px", inline:true, opacity:"0.9", closeButton:false, href:"#join_popup"});
}
</script>