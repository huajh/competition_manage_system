<?php
ob_start();
session_start();
if(!$_SESSION['F_ID'])											//�ж��Ƿ��е�½
{
	header("Location:Login.php");								//û��½��ת����½ҳ��
	exit();
}
?>
<link href="/Style/admin.css" rel="stylesheet" type="text/css">