<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<br></br>
<p align="center"><font size="4" color="blue"><strong>��������</strong></font></p>

<form name="form2" method="post" action="Allow_Upload.php">
<p align="center">
		<font size=3 color='blue' face='����'> �Ƿ�����ѧ���ϴ���Ʒ��</font>
         	<select name="Allow_upload" id="Allow_upload">
            	<option value=''> ��ѡ�� </option>
            	<option value="yes">����</option>
            	<option value=''>������</option>
	    	</select>&nbsp;&nbsp;
	   	    <input type="submit" name="submit" value="�ύ"></p>
	   	    <center> <p><font size=2 color=red face=������"><i>ע���˹�����������ѧ����Ʒ�ϴ�ʱ�䣬�ǵ�ָ��ʱ�䲻��������</i></font></p></center>   	    
</form>
<form name="form3" method="post" action="Restore_info.php">
<p align="center">
		<font size=3 color='blue' face='����'> ��ԭѧ��������Ϣ(���ã�)��</font>
	   	    <input type="submit" name="submit" value="ȷ��"></p>
	   	   <center> <p><font size=2 color=red face=������"><i>ע�⣺һ����ԭ��ѧ��ԭ����Ϣ���������ڡ���Щ��Ϣ������ѧ����Ʒ����Ʒ���Ĵ���
	   	    ��ѧ���ɼ��Լ�ѧ�������</i></font></p></center>
</form>