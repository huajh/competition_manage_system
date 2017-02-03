<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<br></br>
<p align="center"><font size="4" color="blue"><strong>其他设置</strong></font></p>

<form name="form2" method="post" action="Allow_Upload.php">
<p align="center">
		<font size=3 color='blue' face='黑体'> 是否允许学生上传作品：</font>
         	<select name="Allow_upload" id="Allow_upload">
            	<option value=''> 请选择 </option>
            	<option value="yes">允许</option>
            	<option value=''>不允许</option>
	    	</select>&nbsp;&nbsp;
	   	    <input type="submit" name="submit" value="提交"></p>
	   	    <center> <p><font size=2 color=red face=“黑体"><i>注：此功能用于限制学生作品上传时间，非到指定时间不能轻易用</i></font></p></center>   	    
</form>
<form name="form3" method="post" action="Restore_info.php">
<p align="center">
		<font size=3 color='blue' face='黑体'> 还原学生竞赛信息(慎用！)：</font>
	   	    <input type="submit" name="submit" value="确认"></p>
	   	   <center> <p><font size=2 color=red face=“黑体"><i>注意：一旦还原，学生原有信息将不复存在。这些信息包括：学生作品，作品批阅次数
	   	    ，学生成绩以及学生获奖情况</i></font></p></center>
</form>