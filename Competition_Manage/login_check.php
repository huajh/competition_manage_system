<?PHP 
     session_start();
     ob_start();
?>
<?php require_once('config.inc.php'); ?>
<?php require_once(INCLUDE_PATH . 'mysql.inc');?>
<?PHP
// When the submit button is chosen 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // When there is no user name
  $user_type=$_POST['user_type'];
	if($user_type=="public") {  //匿名登陆公共主页
		echo "<script language =javascript>
		location.href='public/Public_Index.php';</script>";	
	}
  if($user_type=="null"){
	echo "<script language =javascript>alert('请输入用户类型，重新登录!');
	location.href='login.php';</script>";
  }
  $user_name=$_POST['user_name'];
  if(empty($user_name)){
	echo "<script language =javascript>alert('请输入用户名！!');
	location.href='login.php';</script>";
  }
  //When there is no pass word	 
  $user_psword=md5($_POST['user_psword']);
 
  if(empty($user_psword)){
  	echo "<script language =javascript>alert('请输入密码!');
	location.href='login.php';</script>";
  }
  else{
   // To see if the user has corrected logged in.
	$aa=new mysql;
	$aa->link("");
	if($user_type=="competitor"){
		$query="select *from competitor_info where user_Name ='$user_name'";
		$result=mysql_query($query);
		if(mysql_num_rows($result)<1){
			echo "<script language =javascript>alert('输入的用户名不存在,请重新登录!');
			location.href='login.php';</script>";
		}else{
			$info=mysql_fetch_array($result,MYSQL_ASSOC);
			if($info['user_Password']!=$user_psword){
				echo "<script language =javascript>alert('密码输入错误,请重新登录！');
				location.href='login.php';</script>";
			}else{
				//如果ID、密码都正确，则注册一个SESSION来标记其登录状态。
				session_start();
				$_SESSION["Name"]=$user_name;
				$_SESSION["USER_TYPE"]=$user_type;
				$_SESSION["Login"]="YES";
				echo "<script language =javascript>
				location.href='Competitor/competitor_Index.php';</script>";
			}
		}
	}
	else if($user_type=="teacher"){
		$query="select *from em_admin_info where F_USER_NAME ='$user_name'";
		$result=mysql_query($query);
		if(mysql_num_rows($result)<1){
			echo "<script language =javascript>alert('输入的用户名不存在,请重新登录!');
			location.href='login.php';</script>";
		}else{
			$info=mysql_fetch_array($result,MYSQL_ASSOC);
			if($info['F_USER_PASSWORD']!=$user_psword){
				echo "<script language =javascript>alert('密码输入错误,请重新登录！');
				location.href='login.php';</script>";
			}else{
				//如果用户名、密码都正确，则注册一个SESSION来标记其登录状态。
				session_start();
				$_SESSION["F_ID"]=$info['F_ID'];
				$_SESSION["Name"]=$user_name;
				$_SESSION["USER_TYPE"]=$user_type;
				$_SESSION["Login"]="YES";
				echo "<script language =javascript>
				location.href='Teacher/teacher_Index.php';</script>";
			}
		}
	}
  }
}else{
	echo "not submit";
}
?>