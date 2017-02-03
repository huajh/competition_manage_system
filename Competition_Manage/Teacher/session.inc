<?PHP 
     session_start();
     ob_start();
?>
<?php
if($_SESSION["Login"]!="YES" ){
	echo "<script language =javascript>alert('请先登录！')
	location.href='../login.php';</script>";
}
if($_SESSION["USER_TYPE"]!="teacher"){
	echo "<script language =javascript>alert('你无此权限访问！')
	location.href='../login.php';</script>";
}
?>
