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
   <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>�����</strong></font></td>
  </TR>
  <TR>
    <TD height=80>
      <TABLE width="90%" align=center border=0>
        <TR align=center>
          <TH width=100 height=23><font color=green face="����">������</font></TH>
          <TH width=300><font color=green face="����">������</font></TH>
          <TH width=120><font color=green face="����">����</font></TH></TR>
<?php
foreach($list as $value)											//ѭ���������Ϣ
{
	if($value['F_ID'] == 1)										//�ж��Ƿ���Ĭ����
	{
		$admin = "[Ĭ����]";
	}else{ 
		$admin = "<A href='AddGroup.php?Id={$value[F_ID]}&MenuId=$MenuId'>[�༭]</A>";
		$admin .= " <A href='DelGroup.php?Id={$value[F_ID]}&MenuId=$MenuId' onclick=\"return confirm('���Ҫɾ����Ȩ����')\">[ɾ��]</A>";
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
    <TD align=center><INPUT onClick="window.location='AddGroup.php?MenuId=<?php echo $MenuId?>'" type=button value=������ name=Submit> 
    </TD>
  </TR>
</TABLE>
<center><P><font size=2 color=blue face="����">˵������һ��ֻ����Ĭ�Ϲ���Ա�飨��B_G_Management���������������ɲ������Ա�飨�硰��ʦ�顱����
�����е�Ȩ����Ĭ�Ϲ���Ա��ȷ��</font></P></center>

