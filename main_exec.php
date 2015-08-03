<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_share_info" :
		$media	= $_REQUEST['media'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, inner_media, sns_regdate) values('".$media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

	case "insert_comment_info" :
		$consumer_seq				= $_REQUEST['consumer_seq'];
		$content						= $_REQUEST['content'];
		$image1						= $_REQUEST['image1'];
		$image2						= $_REQUEST['image2'];
		$image3						= $_REQUEST['image3'];
		$ip_address					= $_REQUEST['ip_address'];
		$link1							= $_REQUEST['link1'];
		$link2							= $_REQUEST['link2'];
		$link3							= $_REQUEST['link3'];
		$livere_seq					= $_REQUEST['livere_seq'];
		$member_domain			= $_REQUEST['member_domain'];
		$member_group_seq		= $_REQUEST['member_group_seq'];
		$member_icon				= $_REQUEST['member_icon'];
		$member_id					= $_REQUEST['member_id'];
		$member_seq				= $_REQUEST['member_seq'];
		$member_url				= $_REQUEST['member_url'];
		$member_name			= $_REQUEST['member_name'];
		$parent_seq					= $_REQUEST['parent_seq'];
		$rep_seq						= $_REQUEST['rep_seq'];
		$reply_seq					= $_REQUEST['reply_seq'];
		$site							= $_REQUEST['site'];
		$agent						= $_REQUEST['agent'];
		$member_title				= $_REQUEST['member_title'];
		$reply_regdate				= $_REQUEST['reply_regdate'];
		$status						= $_REQUEST['status'];
		$septSNSObj				= $_REQUEST['septSNSObj'];
		$info1							= $_REQUEST['info1'];
		$info2							= $_REQUEST['info2'];
		$info3							= $_REQUEST['info3'];
		$media						= $_SESSION['ss_media'];

		$query 		= "INSERT INTO ".$_gl['comment_info_table']."(consumer_seq, content, image1, image2, image3, ip_address, link1, link2, link3, livere_seq, member_domain, member_group_seq, member_icon, member_id, member_seq, member_url, member_name, parent_seq, rep_seq, reply_seq, site, agent, member_title, reply_regdate, status, sept_sns, info1, info2, info3, comm_media) values('".$consumer_seq."','".$content."','".$image1."','".$image2."','".$image3."','".$ip_address."','".$link1."','".$link2."','".$link3."','".$livere_seq."','".$member_domain."','".$member_group_seq."','".$member_icon."','".$member_id."','".$member_seq."','".$member_url."','".$member_name."','".$parent_seq."','".$rep_seq."','".$reply_seq."','".$site."','".$agent."','".$member_title."','".$reply_regdate."','".$status."','".$septSNSObj."','".$info1."','".$info2."','".$info3."','".$media."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;

	case "insert_info" :
		$mb_name	= $_REQUEST['mb_name'];
		$mb_phone	= $_REQUEST['mb_phone'];
		$sel_movie	= $_REQUEST['sel_movie'];
		$media		= $_SESSION['ss_media'];

		$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_name, mb_phone, mb_movie, mb_gubun, mb_media, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".$sel_movie."','".$gubun."','".$media."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $query;

	break;
}
?>