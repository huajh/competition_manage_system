<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'News.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php
$News = new News();
if (!$_GET['Page']) $curr_page = 1;								//�ж��Ƿ���ҳ��,Ĭ��Ϊ1
$Pagesize = 10;
$List = array();
$List = $News->GetNewsList();
$NewsCount = $News->News_total_num();
$Pagecount = ceil($NewsCount / $Pagesize);
If(!$Pagecount) $Pagecount = 1;
?>
  <table width="100%" border="0" cellspacing="0">
	<tr> 
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue">�����б�</font></td>
	</tr>
	<tr> 
	  <td class="stress">&nbsp;</td>
	</tr>
	<tr> 
	  <td colspan="2" align="center"> 
		<?php echo Page($Pagecount,$curr_page,$Pagesize); ?>
	  </td>
	</tr>
	<tr> 
	  <td colspan="2"> 
<form name="form1" method="post" action="">
		<table width="80%" border="0" align="center">
          <tr> 
            <th width="300" ><font  color='green' face='����'>����</font></th>
            <th width="100"><font color='green' face='����'>����</font></th>
            <th width="100"><font color='green' face='����'>����ʱ��</font></th>
            <th width="90"><font  color='green' face='����'>����</font></th>
          </tr>
<?php
foreach($List as $key => $value){									//ѭ����ʾ��Ϣ�б�
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//��������ʾ��ɫ,˫����ɫ
?>
          <tr <?php echo $bgstr ?>> 
            <td> <?php echo "<a href ='../../public/news_index.php ?id={$value['F_ID']}'\"><font color='blue' face='����'>$value[title]</font></a>";?></td>
            <td> <font color='green' size='2'><?php echo $value['author'] ?> </font></td>
            <td> <font color='green'size='2'><?php echo $value['pubdate'] ?> </font></td>
            <td align="center"><a href="DelNews.php?id=<?php echo $value['F_ID']?>"> <font color="blue" size='2' face='����'>[ɾ��]</font></a></td>
          </tr>
<?php
}
?>
</table></form>
</td>
</tr>
</table>