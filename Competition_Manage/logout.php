<?PHP
session_start();
$SESSTION["Login"]="NO";
session_destroy();
header ('Location:login.php');
?>