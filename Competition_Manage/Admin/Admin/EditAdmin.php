<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php 
$user = new User();
$group = array();
$group = $user->GetGroupList();
$info = $user->getInfo($_GET['Id'],"EM_ADMIN_INFO");
if ($_SERVER['REQUEST_METHOD'] == "POST"){							//�ж��Ƿ����ύ����
	$data = array();
	$data['F_USER_PASSWORD'] = md5($_POST['pwd']);
	$data['F_ID_GROUP_INFO'] = $_POST['groupid'];
	$user->updateData('EM_ADMIN_INFO',$_GET['Id'],$data);				//��������
	echo "�༭�ɹ�";
	echo "<br><a href='AdminList.php?MenuId={$_GET[��MenuId��]}'>���ع���Ա�б�</a>";
	exit();
}
?>
<script language="javascript" src="/Js/Base.js"></script>
<form action="" method="post" name="form1" id="form1" onsubmit="return check_data()">
 <table width="70%" border="0" align="center">
  <tr>
   <th height="23" class="caption">�༭����Ա</th>
  </tr>
  <tr>
   <td bgcolor="#eeeeee">
	<table width="70%" border="0" align="center">
	 <tr> 
	  <td width="18%" align="right">�ʺ�</td>
	  <td width="82%"><?php echo $info['F_USER_NAME']?></td>
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
	if($value['F_ID'] == $info['F_ID_GROUP_INFO'])						//�ж����Ĭ��ѡ��
		$html .= " selected='selected'";
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
