<?
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
	livereReply.site				= "<?=$YT_url?>";
	livereLib.start();

</script>
    </div>   
