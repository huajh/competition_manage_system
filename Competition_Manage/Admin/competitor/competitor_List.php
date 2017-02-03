<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php
$users = new User();
if (!$_GET['Page']) $curr_page = 1;								//判断是否有页码,默认为1
$Pagesize = 20;
$List = array();
$sql = "SELECT * FROM competitor_info order by Score desc";
$List = $users->select($sql);
$usersCount = count($List);
$Pagecount = ceil($usersCount / $Pagesize);
If(!$Pagecount) $Pagecount = 1;
?>
  <table width="100%" border="0" cellspacing="0">
	<tr> 
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>参赛学生列表</strong></font></td>
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
		<table width="100%" border="0" align="center">
          <tr align="center" > 
           <th width="30" ><font size='2' color='purple' face='仿宋'>序号</font></th>
            <th width="80" ><font size='2' color='purple' face='仿宋'>学号</font></th>
            <th width="80"><font size='2' color='purple' face='仿宋'>名字</font></th>
            <th width="90"><font size='2' color='purple' face='仿宋'>注册时间</font></th>
            <th width="150"><font size='2' color='purple' face='仿宋'>上传的作品</font></th>
            <th width="50"><font size='2' color='purple' face='仿宋'>已阅次数</font></th>
            <th width="90"><font size='2' color='purple' face='仿宋'>分数</font></th>
            <th width="100"><font size='2' color='purple' face='仿宋'>所获奖项</font></th>
          </tr>    
<?php
$i=0;
foreach($List as $key => $value){									//循环显示信息列表
	$i++;
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//单数行显示灰色,双数白色
	$destination_folder="../../Competitor/User_Upload/".$value['user_Name']."/".$value['Works_Name'];
?>
          <tr <?php echo $bgstr ?> align="center"> 
          <td> <?php echo $i; ?> </td>
            <td> <?php echo $value['F_ID'] ?> </td>
            <td> <?php echo $value['user_Name'] ?> </td>
            <td> <?php echo $value['Register_time'] ?> </td>
            <td > <font size='2' color='purple' face='arial'>
            <?php 
            	if($value['Have_Hand_In']=="YES"){
            	echo "<a href ='$destination_folder'>点击下载学生作品</a>";
            	}else{
            		echo "还未上传";
            	}
            ?> </font></td>
            <td> <?php echo $value['marked_Num'] ?> </td>
            <td> <?php echo $value['Score'] ?> </td>
            <td>  <font size='2' color='maroon' face='仿宋'><?php 
            	if($value['Awards']==''){
            	echo "无";
            	}else if($value['Awards']=="first"){
            		echo "一等奖";
            	}else if($value['Awards']=="second"){
            		echo "二等奖";
            	}else{
            		echo "三等奖";
            	}
            ?></font></td>
            <td align="center"><a href="DelCp.php?id=<?php echo $value['F_ID']?>"> <font color="blue" size='2' face='黑体'>[删除]</font></a></td>
          </tr>
<?php
}
?>
</table></form>
</td>
</tr>
</table>





