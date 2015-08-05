<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];

	$_SESSION['ss_media'] = $media;

	BR_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.vonin-allinone.com/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.vonin-allinone.com/PC/index.php");
		exit;
	}

?>
