<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php 
$user = new User();
$list = array();
$list = $user->GetAdminList();
?>
<table width="80%" border="0" align="center">
 <tr>
 <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>管理员管理</strong></font></td>
 </tr>
 <tr>
  <td height="80">
    <table width="60%" border="0" align="center">
	<tr align=center> 
	 <th width="150" height="23"><font color=green face="黑体">用户帐号</font></th>
	 <th width="150"><font color=green face="黑体">组名称</font></th>
	 <th width="150"><font color=green face="黑体">管理</font></th>
	</tr>
<?php
foreach($list as $key => $value){								//循环显示管理员
	$info = $user->getInfo($value['F_ID_GROUP_INFO'],"EM_GROUP_INFO");
	$admin = "<a href='EditAdmin.php?Id={$value['F_ID']}&MenuId={$_GET['MenuId']}'>[编辑]</a> ";
	if($value['F_ID'] > 1)
		$admin .= "<a href='DelAdmin.php?Id={$value['F_ID']}&MenuId={$_GET['MenuId']}' onclick=\"return confirm('真的要删除此用户吗')\">[删除]</a> ";
	if($key % 2 == 0)
		$bg = "#ffffff";
	else
		$bg = "#eeeeee";
?>
	<tr bgcolor="<?php echo $bg?>"> 
	 <td align="center"><?php echo $value['F_USER_NAME']; ?></td>
	 <td align="center"><?php echo $info['F_GROUP_NAME'] ?></td>
	 <td align="center"><?php echo $admin; ?></td>
	</tr>
<?php
}
?>
   </table>
  </td>
 </tr>
<tr>
    <td align=center>
	<input onClick="window.location='AddAdmin.php?MenuId=<?php echo $_GET['MenuId']?>'" type=button value=新增管理员 name=Submit> 
</td>
</tr>
</table>

<center><P><font size=2 color=blue face="黑体">说明：默认管理员（即B_G_Management）拥有最高权限。其属下的管理员（如"教师"）
所拥有的权限由B_G_Management组的管理员确定。</font></P></center>




