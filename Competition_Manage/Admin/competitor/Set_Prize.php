<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php
$users = new User();
if (!$_GET['Page']) $curr_page = 1;								//�ж��Ƿ���ҳ��,Ĭ��Ϊ1
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
	  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>��������</strong></font></td>
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
           <th width="30" ><font size='2' color='purple' face='����'>���</font></th>
            <th width="140" ><font size='2' color='purple' face='����'>ѧ��</font></th>
            <th width="80"><font size='2' color='purple' face='����'>����</font></th>
            <th width="90"><font size='2' color='purple' face='����'>����</font></th>
            <th width="150"><font size='2' color='purple' face='����'>������</font></th>
          </tr>    
<?php
$i=0;
foreach($List as $key => $value){									//ѭ����ʾ��Ϣ�б�
	$i++;
	$bgstr = "bgcolor=" . ($key % 2 ? "#eeeeee" : "#ffffff");				//��������ʾ��ɫ,˫����ɫ
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
            	<option value=''> ��ѡ�� </option>
            	<option value="first">һ�Ƚ�</option>
	  			<option value="second">���Ƚ�</option>
	  			<option value="third">���Ƚ�</option>
	    	</select>&nbsp;&nbsp;
	   	    <input type="submit" name="submit" value="�ύ"></form>
	   	    <?php 
            }else{?>
             <font size='2' color='maroon' face='����'>
            	<?php 
            		if($value['Awards']=="first"){
            			echo "һ�Ƚ�";
            		}else if($value['Awards']=="second"){
            			echo "���Ƚ�";
            		}else{
            			echo "���Ƚ�";
            		}
            	?> </font>&nbsp;
            	<a href="Alter_Prize.php?id=<?php echo $value['F_ID']?>"> <font color="blue" size='2' face='����'>[�޸�]</font></a>
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
	$user->updateData('competitor_info',$_GET['id'],$data);			//��������
  	echo "<script language =javascript>location.href='Set_Prize.php';</script>";
}
?>


