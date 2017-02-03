<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
if(isset($_POST['submit'])){
	$List = array();
	$users = new User();
	$query = "update  competitor_info set Have_Hand_In= '' , marked_Num=0 
	,tempScore=0.00 ,Score=0.0 , Awards='' ,Allow_Upload=''";
	mysql_query($query);
	echo "<script language =javascript>alert('还原成功！');
  	location.href='Other_Sets.php';</script>";
}else{
	echo "提交失败";
}
?>