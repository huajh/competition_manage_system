<?php 
require_once('../../config.inc.php');
require_once('../Check.php');
 require_once(INCLUDE_PATH . 'News.inc.php');
 ?>
<?php
$News = new News();
if(isset($_POST['Submit'])){
	$data['author']=$_POST['author'];
	$data['title']=$_POST['title'];
	$data['author']=$_POST['author'];
	$data['content'] =$_POST['content'];
	$data['source'] =$_POST['source'];
	if ($data['title'] == "")									//�жϱ����Ƿ�Ϊ��
	{
  		echo "<script language =javascript>alert('���ⲻ��Ϊ�գ�');
		location.href='register.php';</script>";
  	}
  	if ($data['content'] == "")								//�ж������Ƿ�Ϊ��
  	{
  		echo "<script language =javascript>alert('���ݲ���Ϊ�գ�');
		location.href='register.php';</script>";
  	}
  	if ($data['content'] > 65536)							//�ж������Ƿ����
  	{
  		echo "<script language =javascript>alert('����̫������64K�������齫�ֳɼ�����¼�롣');
		location.href='register.php';</script>";
  	}
  	$News->insertData("news_info",$data);
  	echo "<p align=center class=caption>�����ɹ�</p>";
	echo "<br><p align=center><a href='NewsList.php'>�����б�</a></p>";
}
?>