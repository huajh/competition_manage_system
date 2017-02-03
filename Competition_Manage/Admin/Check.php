<?php
ob_start();
session_start();
if(!$_SESSION['F_ID'])											//判断是否有登陆
{
	header("Location:Login.php");								//没登陆则转到登陆页面
	exit();
}
?>
<link href="/Style/admin.css" rel="stylesheet" type="text/css">