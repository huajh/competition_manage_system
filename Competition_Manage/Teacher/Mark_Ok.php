<?php require_once('../config.inc.php'); ?>
<?php require_once('session.inc');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
if($_POST['Score']==0){
	echo "<script language =javascript>alert('�ɼ�����Ϊ��!');
	location.href='Give_Mark.php';</script>";	
	exit();
}
if($_POST['Score']<0 ||$_POST['Score']>100 ){
	echo "<script language =javascript>alert('�ɼ�ֻ����0-100֮��!');
	location.href='Give_Mark.php';</script>";	
	exit();
}
$user = new User();
$data=$user->getinfo($_GET['id'],'competitor_info');
$i=$data['marked_Num'];
$tempScore=$data['tempScore'];
$i++;
$tempScore+= $_POST['Score'];
$data1=array();
if($i==10){
	$data1['Score']=$tempScore/10;
}
	$data1['marked_Num']=$i;
	$data1['tempScore']=$tempScore;
	$user->updateData('competitor_info',$_GET['id'],$data1);
	echo "<script language =javascript>alert('��ֳɹ�!');
	location.href='Give_Mark.php';</script>";
?>
      