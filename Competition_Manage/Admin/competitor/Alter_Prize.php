<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
	$user = new User();
	$data = array();
	$data['Awards']='';
	$user->updateData('competitor_info',$_GET["id"],$data);			//更新数据
  	echo "<script language =javascript>
  	location.href='Set_Prize.php';</script>";
?>