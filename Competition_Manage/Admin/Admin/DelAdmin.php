<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<br>
<p align='center'>
<font color='green' face='����'>
<?php
$user = new User();
$user->delData($_GET['Id'],"EM_ADMIN_INFO");
echo "ɾ���ɹ�<br>";
echo "<br><a href='AdminList.php'>���ع���Ա�б�</a>";
?>
</font></p>