<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php 
$user = new User();
$group = array();
$group = $user->GetGroupList();
if ($_SERVER['REQUEST_METHOD'] == "POST"){							//�ж��Ƿ����ύ����
	if(!$user->CheckAdminExist($_POST['username']))						//�ж��ʺ��Ƿ����
	{
		$data = array();
		$data['F_USER_NAME'] = $_POST['username'];
		$data['F_USER_PASSWORD'] = md5($_POST['pwd']);
		$data['F_ID_GROUP_INFO'] = $_POST['groupid'];
		$user->insertData('EM_ADMIN_INFO',$data);						//��������
		?>
		<br>
		<p align='center'>
		<font color='green' face='����'><?php
		echo "��ӳɹ�<br>";
		echo "<br><a href='AdminList.php?MenuId={$_GET['MenuId']}'>���ع���Ա�б�</a>";
		exit();
	}else{														//��������ʾ
		echo "����Ա�ʺ��Ѵ���<br>";
	}
}
?>
</font></p>

<script language="javascript" src="/Js/Base.js"></script>
<form action="" method="post" name="form1" id="form1" onsubmit="return check_data()">
 <table width="70%" border="0" align="center">
  <tr>
  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>���ӹ���Ա</strong></font></td>
  </tr>
  <tr>
   <td bgcolor="#eeeeee"> 
	<table width="70%" border="0" align="center">
	 <tr> 
	  <td width="18%" align="right">�ʺ�</td>
	  <td width="82%"><input name="username" type="text" id="username" maxlength="16">
	    ��3��16���ַ����</td>
	 </tr>
	 <tr> 
	  <td align="right">����</td>
	  <td><input name="pwd" type="password" id="pwd" maxlength="16">
	   ��5��16���ַ����</td>
	 </tr>
	 <tr> 
	  <td align="right">ȷ������</td>
	  <td><input name="pwd2" type="password" id="pwd2" maxlength="16">
	   �ٴ���������</td>
	 </tr>
	 <tr> 
	  <td align="right">�û���</td>
	  <td><select name="groupid" id="groupid">
	  <option value="">��ѡ��</option>
<?php
foreach($group as $value)											//ѭ������û���ѡ��
{
	$html = "<option value='{$value['F_ID']}'";
	$html .= ">{$value['F_GROUP_NAME']}</option>";
	echo $html;
}
?>
	   </select></td>
	 </tr>
	</table></td>
  </tr>
  <tr>
   <th align="center"><input type="submit" name="Submit" value="�ύ"> </th>
  </tr>
 </table>
</form>
<script language="JavaScript">
/**
 * ���ܣ�����Ԫ��
 * ���أ�TRUE OR FALSE
 */
function check_data(){
	if($('username').value.trim() == "")									//�ж��ʺ��Ƿ�Ϊ��
	{
		alert("�ʺŲ���Ϊ��");
		$('username').focus();
		return false;
	}
	if ($('username').value.trim().len() < 3)								//�ж��ʺ��Ƿ����
	{
		alert("�ʺŲ���С��3���ַ�");
		$('username').username.focus();
		return false;
	}
	if($('username').value.trim().len() > 16)								//�ж��ʺ��Ƿ����
	{
		alert("�ʺŲ��ô���16���ַ�");
		$('username').focus();
		return false;
	}
	if ($('pwd').value.trim().len() < 5){									//�ж������Ƿ����
		alert("���벻��С��5���ַ�");
		$('pwd').focus();
		return false;
	}
	if ($('pwd').value.trim().len() > 16){									//�ж������Ƿ����
		alert("���벻�ô���16���ַ�");
		$('pwd').focus();
		return false
	}	
	if ($('pwd').value != $('pwd2').value){									//�ж����������Ƿ�һ��
		alert("������ȷ�����벻��");
		$('pwd').focus();
		return false;
	}
	if($('groupid').options[$('groupid').selectedIndex].value == "")				//�ж��Ƿ�ѡ�����û���
	{
		alert("��ѡ���û���");
		return false;
	}
	return true
}
</script>
<center><P><font size=2 color=blue face="����">˵����Ĭ������£���Ӹ��ֲ�ͬȨ�޵Ĺ���Ա�Ĺ���ֻ��Ĭ�Ϲ���Ա���С�</font></P></center>