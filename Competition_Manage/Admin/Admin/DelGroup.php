<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<br>
<p align='center'>
<font color='green' face='����'>
<?php
$User = new User();
$User->DelGroup($_GET['Id']);
echo "ɾ���ɹ�<br>";
echo "<a href='GroupList.php?MenuId={$_GET['MenuId']}'>�����б�</a>";
?>
</font></p>