<?PHP 
     session_start();
     ob_start();
?>
<?php
if($_SESSION["Login"]!="YES" ){
	echo "<script language =javascript>alert('���ȵ�¼��')
	location.href='../login.php';</script>";
}
if($_SESSION["USER_TYPE"]!="competitor"){
	echo "<script language =javascript>alert('���޴�Ȩ�޷��ʣ�')
	location.href='../login.php';</script>";
}
?>