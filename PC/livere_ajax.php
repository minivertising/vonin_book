<?
	$gender_gubun	= $_REQUEST['gender_gubun'];

	if ($gender_gubun == "m_1")
		$YT_url	= "https://www.youtube.com/watch?v=3rBxaOJPVGk";
	else if ($gender_gubun == "m_2")
		$YT_url	= "https://www.youtube.com/watch?v=WWAwu4iYLE8";
	else if ($gender_gubun == "m_3")
		$YT_url	= "https://www.youtube.com/watch?v=h16U39DzIBc";
	else if ($gender_gubun == "m_4")
		$YT_url	= "https://www.youtube.com/watch?v=eefSEWT_1jI";
	else if ($gender_gubun == "w_1")
		$YT_url	= "https://www.youtube.com/watch?v=3rBxaOJPVGk";
	else if ($gender_gubun == "w_2")
		$YT_url	= "https://www.youtube.com/watch?v=WWAwu4iYLE8";
	else if ($gender_gubun == "w_3")
		$YT_url	= "https://www.youtube.com/watch?v=h16U39DzIBc";
	else if ($gender_gubun == "w_4")
		$YT_url	= "https://www.youtube.com/watch?v=eefSEWT_1jI";
?>
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