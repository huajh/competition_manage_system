<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php
$users = new User();
if (!$_GET['Page']) $curr_page = 1;								//�ж��Ƿ���ҳ��,Ĭ��Ϊ1
$Pagesize = 20;
$List = array();
$sql = "SELECT * FROM competitor_info where Awards!='' order by Score desc";
$List = $users->select($sql);
$usersCount = count($List);
$Pagecount = ceil($usersCount / $Pagesize);
If(!$Pagecount) $Pagecount = 1;
?>
  <table width="100%" border="0" cellspacing="0">
	<tr> 
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>������</strong></font></td>
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
		<table width="50%" border="0" align="center">
          <tr align="center" > 
           <th width="30" ><font size='2' color='purple' face='����'>���</font></th>
            <th width="140" ><font size='2' color='purple' face='����'>ѧ��</font></th>
            <th width="80"><font size='2' color='purple' face='����'>����</font></th>
            <th width="90"><font size='2' color='purple' face='����'>����</font></th>
            <th width="100"><font size='2' color='purple' face='����'>������</font></th>
          </tr>    
<?php
$i=0;
foreach($List as $key => $value){									//ѭ����ʾ��Ϣ�б�
	$i++;
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//��������ʾ��ɫ,˫����ɫ
?>
          <tr <?php echo $bgstr ?> align="center"> 
          <td> <?php echo $i; ?> </td>
            <td> <?php echo $value['F_ID'] ?> </td>
            <td> <?php echo $value['user_Name'] ?> </td>
            <td> <?php echo $value['Score'] ?> </td>
            <td >  <font size='2' color='maroon' face='����'><?php 
            if($value['Awards']=="first"){
            	echo "һ�Ƚ�";
            }else if($value['Awards']=="second"){
            	echo "���Ƚ�";
            }else{
            	echo "���Ƚ�";
            }
            ?></font></td>
          </tr>
<?php
}
?>
</table></form>
</td>
</tr>
</table>





