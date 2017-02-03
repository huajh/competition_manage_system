<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php
$User = new User();
$list = array();
$list = $User->GetMenu(0);
$id = $_GET['Id'];
if($id)														//�ж��Ƿ��Ǳ༭״̬
{
	$info = $User->getInfo($id,"EM_GROUP_INFO");
}
$MenuId = $_GET['MenuId'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($User->CheckGroupExit($_POST['name']))
	{
		echo "�������ظ�<br>";
		echo "<a href='javascript:window.history.back();'>����</a>";
		exit();
	}
	if($id)													//�ж��Ƿ��Ǳ༭״̬
	{
		$data[F_GROUP_NAME] = $_POST['name'];
		$data[F_GROUP_DESCRIPTION] = $_POST['description'];
		$User->updateData("EM_GROUP_NAME",$id,$data);			//��������
		$User->DelMenuGroup($id);								//ɾ��ԭ������˵���Ϣ
	}else{
		$data[F_GROUP_NAME] = $_POST['name'];
		$data[F_GROUP_DESCRIPTION] = $_POST['description'];
		$id = $User->insertData("EM_GROUP_INFO",$data);			//��������
	}
	$User->begintransaction();									//������ʼ
	if($_POST['main'])											//�ж��Ƿ��ύ�����˵�����
	{
		try {
			foreach($_POST['main'] as $value)						//ѭ���������˵�����
			{
				$data = array();
				$data[F_ID_GROUP_INFO] = $id;
				$data[F_ID_MENU_INFO] = $value;
				$data[F_PARENT_ID] = 0;
				$User->insertData("EE_MENU_GROUP",$data);
			}
		}catch (Exception $e){									//�����쳣
			echo "����ʧ��";
			echo $e;
			$User->rollback();									//�����쳣���ع�
		}
	}
	
	if($_POST['sub'])											//�ж��Ƿ��ύ���Ӳ˵�����
	{
		try{
			foreach($_POST['sub'] as $value)						//ѭ�������Ӳ˵�
			{
				list($main,$sub) = explode("_",$value);
				if(!$User->CheckMenuExit($id,$main))				//�жϸ��Ӳ˵��ĸ��˵��Ƿ����
				{
					$data = array();
					$data[F_ID_GROUP_INFO] = $id;
					$data[F_ID_MENU_INFO] = $main;
					$data[F_PARENT_ID] = 0;
					$User->insertData("EE_MENU_GROUP",$data);	//����������븸�˵�
				}
				$data = array();
				$data[F_ID_GROUP_INFO] = $id;
				$data[F_ID_MENU_INFO] = $sub;
				$data[F_PARENT_ID] = $main;
				$User->insertData("EE_MENU_GROUP",$data);
			}
		}catch (Exception $e){									//�����쳣
			echo "����ʧ��";									//����쳣
			echo $e;
			$User->rollback();									//�ع�
		}
	}
	$User->commit();											//�ύ
	?>
	<br>
	<p align='center'>
	<font color='green' face='����'><?php
	echo "�����ɹ�<br>";
	echo "<a href='GroupList.php?MenuId=$MenuId'>�����б�</a>";?>
	</font></p>
	<?php 
	exit();
}
?>
<script language=javascript src='/Js/Base.js'></script>
<form id=form1 name=form1 onSubmit="return Check();" action="" method=post>
<table width="60%" align=center border=0>
  <tr>
    <th class=caption height=23>������</th>
  </tr>
  <tr>
    <td bgColor=#eeeeee>
      <table width="88%" align=center border=0>
        <tr>
          <td align=right width="23%">������</td>
          <td width="77%"><input id=name maxLength=16 name=name value="<?php echo $info['F_GROUP_NAME']?>"></td></tr>
        <tr>
          <td align=right>������</td>
          <td><input name="description" type="text" id="description" size="40" value="<?php echo $info['F_GROUP_DESCRIPTION']?>"></td>
        </tr>          
        <tr>
          <td vAlign=top align=right height=60>����Ȩ��</td>
          <td vAlign=top><table width="100%" border="0">
            <tr>
              <td>
			  <?php
			  foreach($list as $value)
			  {
			  		$check = "";
			  		$sub = array();
			  		$sub = $User->GetMenu($value[F_ID]);
			  		$count = count($sub);
			  		if($id)
			  		{
			  			if($User->CheckMenuExit($id,$value['F_ID']))
			  			{
			  				$check = " checked='checked'";
			  			}
			  		}
			  ?>
			  <div>
			  <input name="main[]" type="checkbox" id="main[]" value="<?php echo $value['F_ID']?>"<?php echo $check?>>
               <?php echo $value[F_MENU_NAME]?>
                  <table width="100%" border="0">
              <?php
              	foreach($sub as $key => $val)
              	{
              		$check = "";
              		if($id)
			  		{
			  			if($User->CheckMenuExit($id,$val['F_ID']))
			  			{
			  				$check = " checked='checked'";
			  			}
			  		}
              		if($key % 2 == 0)
              		{
              ?>
                    <tr>
              <?php
              		}
              ?>
                      <td width="50%" align="left" class="pad">
                      <input name="sub[]" type="checkbox" id="sub[]" value="<?php echo $value[F_ID]?>_<?php echo $val[F_ID]?>"<?php echo $check?>><?php echo $val[F_MENU_NAME]?>
                      </td>
			  <?php
					if($key % 2 == 1)
					{
			?>
                    </tr>			
			<?php
					}
			?>
              <?php
              	}
              	if($key % 2 < 1)
              	{
              		for(;$key % 2 < 1;$key++)
              			echo "<td width=50%>&nbsp;</td>";
              		echo "</tr>";
              	}
              ?>
                  </table>
			  </div>
			  <?php
			  }
			  ?>
			  </td>
            </tr>                  
          </table></td>
        </tr></table></td></tr>
  <tr>
    <th align=center><input type=submit value=�ύ name=Submit> 
</th></tr></table></form>
<script language=JavaScript>
function Check()
{
	if($('name').value.trim() == "")
	{
		alert("����д������");
		$('name').focus();
		return false;
	}
	if($('description').value.trim() == "")
	{
		alert("����д������");
		$('description').focus();
		return false;
	}
	return true;
}
</script>
