<?PHP 
     session_start();
     ob_start();
?>
<?php require_once('../config.inc.php'); ?>
<?php require_once(INCLUDE_PATH . 'mysql.inc');?>
<?php
//  ֻ��competitor����ע�ᡣ��ʦ������Աֻ���ɹ���Ա��ӣ�
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
  	echo "<script language =javascript>alert('����д����!');
	location.href='register.php';</script>";
  	exit();
	}
	$query="select * from competitor_info where F_ID ='$user_ID'";
	$result=$aa->excu($query);
	if(mysql_num_rows($result)!=0){
		echo "<script language =javascript>alert('�Բ��𣬸�ѧ���ѱ�ע�ᣬ������ע�ᣡ');
  		location.href='register.php';</script>";
		exit();
	}
	$query="select * from competitor_info where user_Name ='$user_name'";
	$result=$aa->excu($query);
	if(mysql_num_rows($result)!=0){
		echo "<script language =javascript>alert('�Բ��𣬸��û����ѱ�ע�ᣬ������ע�ᣡ');
  		location.href='register.php';</script>";
		exit();
	}
 	if ($user_pw1!=$user_pw2){
 		echo "<script language =javascript>alert('������������벻һ�£�������ע�ᣡ');
 		location.href='register.php';</script>";	
 	}
	if($passcode!=$usercode){
  	echo "<script language =javascript>alert('��֤�����');
	location.href='register.php';</script>";	
  	exit();	
	}	
	$user_pw1 = md5($user_pw1);
	$query="INSERT INTO competitor_info(F_ID,user_Name,user_Password) VALUES('".$user_ID."','".$user_name."','".$user_pw1."')";
 	if($aa->excu($query)){
  		echo  "<script language =javascript>alert('��ϲ��ע��ɹ�����������Ե�¼�ˣ�');
  		location.href='../login.php';</script>";
	}

}
?>


