<?php require_once('../config.inc.php'); ?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php require_once('session.inc');?>
<?php
if(isset($_POST['submit'])){
	$passcode=$_SESSION["verify"];
	$usercode=$_POST["passcode"];
	$user_pw1=$_POST['user_pw1'];
	$user_pw2=$_POST['user_pw2'];
	$user = new User();
	if($passcode!=$usercode){
  	echo "<script language =javascript>alert('��֤�����');
	location.href='Edit_info.php';</script>";		
	}
  	if ($user_pw1!=$user_pw2){
  		echo "<script language =javascript>alert('����������벻һ�£��������޸ģ�');
  		location.href='Edit_info.php';</script>";	
  	}
	$data = array();
	if(!empty($_POST['user_sign'])){
	$data['user_sign'] =$_POST['user_sign'];
	}
	if(!empty($_POST['user_pw1'])){
	$data['user_Password'] = md5($user_pw1);
	}
	$user->updateData('competitor_info',$_SESSION["F_ID"],$data);			//��������
  	echo "<script language =javascript>alert('��ϲ���޸ĳɹ���');
  	location.href='Edit_info.php';</script>";
}
?>




