<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
$User = new User();
$list = array();
$list = $User->GetGroupList();
$MenuId = $_GET['MenuId'];
?>
<TABLE width="70%" align=center border=0>
  <TR>
   <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>组管理</strong></font></td>
  </TR>
  <TR>
    <TD height=80>
      <TABLE width="90%" align=center border=0>
        <TR align=center>
          <TH width=100 height=23><font color=green face="黑体">组名称</font></TH>
          <TH width=300><font color=green face="黑体">组描述</font></TH>
          <TH width=120><font color=green face="黑体">管理</font></TH></TR>
<?php
foreach($list as $value)											//循环输出组信息
{
	if($value['F_ID'] == 1)										//判断是否是默认组
	{
		$admin = "[默认组]";
	}else{ 
		$admin = "<A href='AddGroup.php?Id={$value[F_ID]}&MenuId=$MenuId'>[编辑]</A>";
		$admin .= " <A href='DelGroup.php?Id={$value[F_ID]}&MenuId=$MenuId' onclick=\"return confirm('真的要删除此权限吗')\">[删除]</A>";
	}
?>
        <TR bgColor=#eeeeee align=center>
          <TD  bgcolor="#eeeeee"><?php echo $value['F_GROUP_NAME']?></TD>
          <TD ><?php echo $value['F_GROUP_DESCRIPTION'] ?></TD>
          <TD ><?php echo $admin?></TD>
        </TR>
<?php
}
?>
        </TABLE>
  		</TD>
  </TR>
  <TR>
    <TD align=center><INPUT onClick="window.location='AddGroup.php?MenuId=<?php echo $MenuId?>'" type=button value=新增组 name=Submit> 
    </TD>
  </TR>
</TABLE>
<center><P><font size=2 color=blue face="黑体">说明：组一般只能由默认管理员组（即B_G_Management）创建，用于生成部署管理员组（如“教师组”），
其享有的权限由默认管理员组确定</font></P></center>

