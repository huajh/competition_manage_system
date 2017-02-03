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
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>评奖管理</strong></font></td>
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
		<table width="80%" border="0" align="center">
          <tr align="center" > 
           <th width="30" ><font size='2' color='purple' face='仿宋'>序号</font></th>
            <th width="140" ><font size='2' color='purple' face='仿宋'>学号</font></th>
            <th width="80"><font size='2' color='purple' face='仿宋'>名字</font></th>
            <th width="90"><font size='2' color='purple' face='仿宋'>分数</font></th>
            <th width="150"><font size='2' color='purple' face='仿宋'>获奖设置</font></th>
          </tr>    
<?php
$i=0;
foreach($List as $key => $value){									//循环显示信息列表
	$i++;
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//单数行显示灰色,双数白色
	$destination_folder="../Competitor/User_Upload/".$value['user_Name']."/".$value['Works_Name'];
?>
          <tr <?php echo $bgstr ?> align="center"> 
          <td> <?php echo $i; ?> </td>
            <td> <?php echo $value['F_ID'] ?> </td>
            <td> <?php echo $value['user_Name'] ?> </td>
            <td> <?php echo $value['Score'] ?> </td>
            <td>
            <?php
            if($value['Awards']==''){ 
            ?>
             <form name="form1" method="POST" action="Set_Prize.php ? id=<?php echo $value['F_ID']?>">
            <select name="Awards" id="Awards">
            	<option value=''> 请选择 </option>
            	<option value="first">一等奖</option>
	  			<option value="second">二等奖</option>
	  			<option value="third">三等奖</option>
	    	</select>&nbsp;&nbsp;
	   	    <input type="submit" name="submit" value="提交"></form>
	   	    <?php 
            }else{?>
             <font size='2' color='maroon' face='仿宋'>
            	<?php 
            		if($value['Awards']=="first"){
            			echo "一等奖";
            		}else if($value['Awards']=="second"){
            			echo "二等奖";
            		}else{
            			echo "三等奖";
            		}
            	?> </font>&nbsp;
            	<a href="Alter_Prize.php?id=<?php echo $value['F_ID']?>"> <font color="blue" size='2' face='黑体'>[修改]</font></a>
            <?php
            }
	   	    ?>
	   	    </td>
          </tr>
<?php
}
?>
</table>
</td>
</tr>
</table>
<br></br>
<br></br>
<br></br>
<?php
if(isset($_POST['submit'])){
	$user = new User();
	$data = array();
	$data['Awards']=$_POST["Awards"];
	$user->updateData('competitor_info',$_GET['id'],$data);			//更新数据
  	echo "<script language =javascript>location.href='Set_Prize.php';</script>";
}
?>


