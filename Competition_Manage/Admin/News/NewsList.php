<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'News.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php
$News = new News();
if (!$_GET['Page']) $curr_page = 1;								//判断是否有页码,默认为1
$Pagesize = 10;
$List = array();
$List = $News->GetNewsList();
$NewsCount = $News->News_total_num();
$Pagecount = ceil($NewsCount / $Pagesize);
If(!$Pagecount) $Pagecount = 1;
?>
  <table width="100%" border="0" cellspacing="0">
	<tr> 
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue">新闻列表</font></td>
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
            <th width="300" ><font  color='green' face='仿宋'>标题</font></th>
            <th width="100"><font color='green' face='仿宋'>作者</font></th>
            <th width="100"><font color='green' face='仿宋'>发表时间</font></th>
            <th width="90"><font  color='green' face='仿宋'>管理</font></th>
          </tr>
<?php
foreach($List as $key => $value){									//循环显示信息列表
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//单数行显示灰色,双数白色
?>
          <tr <?php echo $bgstr ?>> 
            <td> <?php echo "<a href ='../../public/news_index.php ?id={$value['F_ID']}'\"><font color='blue' face='仿宋'>$value[title]</font></a>";?></td>
            <td> <font color='green' size='2'><?php echo $value['author'] ?> </font></td>
            <td> <font color='green'size='2'><?php echo $value['pubdate'] ?> </font></td>
            <td align="center"><a href="DelNews.php?id=<?php echo $value['F_ID']?>"> <font color="blue" size='2' face='黑体'>[删除]</font></a></td>
          </tr>
<?php
}
?>
</table></form>
</td>
</tr>
</table>