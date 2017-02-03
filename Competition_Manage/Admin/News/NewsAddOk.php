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
	if ($data['title'] == "")									//判断标题是否为空
	{
  		echo "<script language =javascript>alert('标题不能为空！');
		location.href='register.php';</script>";
  	}
  	if ($data['content'] == "")								//判断内容是否为空
  	{
  		echo "<script language =javascript>alert('内容不能为空！');
		location.href='register.php';</script>";
  	}
  	if ($data['content'] > 65536)							//判断内容是否过长
  	{
  		echo "<script language =javascript>alert('内容太长，（64K）！建议将分成几部分录入。');
		location.href='register.php';</script>";
  	}
  	$News->insertData("news_info",$data);
  	echo "<p align=center class=caption>操作成功</p>";
	echo "<br><p align=center><a href='NewsList.php'>返回列表</a></p>";
}
?>