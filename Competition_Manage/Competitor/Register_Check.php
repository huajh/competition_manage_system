<?PHP 
     session_start();
     ob_start();
?>
<?php require_once('../config.inc.php'); ?>
<?php require_once(INCLUDE_PATH . 'mysql.inc');?>
<?php
//  只有competitor可以注册。教师、管理员只有由管理员添加！
if(isset($_POST['submit'])){
	$passcode=$_SESSION["verify"];
	$usercode=$_POST["passcode"];
	$user_ID=$_POST['user_ID'];
	$user_pw1=$_POST['user_pw1'];
	$user_pw2=$_POST['user_pw2'];
	$user_name=$_POST['user_name'];
	$aa=new mysql;
	$aa->link("");
	if(empty($user_pw1)||empty($user_pw2)||empty($passcode)||empty($user_ID)||empty($user_name)){
  	echo "<script language =javascript>alert('请填写完整!');
	location.href='register.php';</script>";
  	exit();
	}
	$query="select * from competitor_info where F_ID ='$user_ID'";
	$result=$aa->excu($query);
	if(mysql_num_rows($result)!=0){
		echo "<script language =javascript>alert('对不起，该学号已被注册，请重新注册！');
  		location.href='register.php';</script>";
		exit();
	}
	$query="select * from competitor_info where user_Name ='$user_name'";
	$result=$aa->excu($query);
	if(mysql_num_rows($result)!=0){
		echo "<script language =javascript>alert('对不起，该用户名已被注册，请重新注册！');
  		location.href='register.php';</script>";
		exit();
	}
 	if ($user_pw1!=$user_pw2){
 		echo "<script language =javascript>alert('两次输入的密码不一致，请重新注册！');
 		location.href='register.php';</script>";	
 	}
	if($passcode!=$usercode){
  	echo "<script language =javascript>alert('验证码错误！');
	location.href='register.php';</script>";	
  	exit();	
	}	
	$user_pw1 = md5($user_pw1);
	$query="INSERT INTO competitor_info(F_ID,user_Name,user_Password) VALUES('".$user_ID."','".$user_name."','".$user_pw1."')";
 	if($aa->excu($query)){
  		echo  "<script language =javascript>alert('恭喜您注册成功！现在你可以登录了！');
  		location.href='../login.php';</script>";
	}

}
?>


