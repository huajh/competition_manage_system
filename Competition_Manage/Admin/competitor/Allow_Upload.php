<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
if(isset($_POST['submit'])){
	$users = new User();
	$Allow_Upload=$_POST['Allow_upload'];
	$query = "update  competitor_info set Allow_Upload= '$Allow_Upload'";
	mysql_query($query);
	if($Allow_Upload==''){
  		echo "<script language =javascript>alert('�޸ĳɹ�!��ǰ״̬Ϊ��������');
  		location.href='Other_Sets.php';</script>";
	}else{
		echo "<script language =javascript>alert('�޸ĳɹ�!��ǰ״̬Ϊ������');
  		location.href='Other_Sets.php';</script>";
	}
}else{
	echo "no submit";
}
?>