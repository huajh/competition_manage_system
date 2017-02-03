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
  	echo "<script language =javascript>alert('验证码错误！');
	location.href='Edit_info.php';</script>";		
	}
  	if ($user_pw1!=$user_pw2){
  		echo "<script language =javascript>alert('您输入的密码不一致，请重新修改！');
  		location.href='Edit_info.php';</script>";	
  	}
	$data = array();
	if(!empty($_POST['user_sign'])){
	$data['user_sign'] =$_POST['user_sign'];
	}
	if(!empty($_POST['user_pw1'])){
	$data['user_Password'] = md5($user_pw1);
	}
	$user->updateData('competitor_info',$_SESSION["F_ID"],$data);			//更新数据
  	echo "<script language =javascript>alert('恭喜您修改成功！');
  	location.href='Edit_info.php';</script>";
}
?>




