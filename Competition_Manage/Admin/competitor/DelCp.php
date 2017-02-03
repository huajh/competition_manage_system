<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<br>
<p align='center'>
<font color='green' face='黑体'>
<?php
$user = new User();
$user->delData($_GET['id'],"competitor_info");
echo "删除成功<br>";
echo "<br><a href='competitor_List.php'>返回管理员列表</a>";
?>
</font></p>