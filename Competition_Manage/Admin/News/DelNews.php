<?php require_once('../../config.inc.php'); ?>
<?php require_once('../Check.php');?>
<?php require_once(INCLUDE_PATH . 'News.inc.php');?>
<?php
$News = new News();
$News->DelNews($_GET['id']);
echo "<script>window.history.back();</script>";
?>