<?php require_once('../config.inc.php'); ?>
<?php require_once('session.inc');?>
<?php require_once(INCLUDE_PATH . 'User.inc.php');?>
<?php require_once(INCLUDE_PATH . 'function.inc.php');?>
<?php 
	$user_name=$_SESSION["Name"];
	$ID=$_SESSION["F_ID"];
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>竞赛管理系统</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=gb2312">
  <style type="text/css">
<!--
body,td,th {
	color: #333333;
	font-family: Lucida Sans;
	font-size: 12px;
	
}
LI {
	line-height: 24px;
	text-align: left;
	list-style-type: disc;
	margin: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 10px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dashed;
	border-left-style: none;
	border-top-color: #C7D9FA;
	border-right-color: #C7D9FA;
	border-bottom-color: #C7D9FA;
	border-left-color: #C7D9FA;
}
a:link {
	color: #2757AF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #2757AF;
}
a:hover {
	text-decoration: underline;
	color: #7B9FE1;
}
a:active {
	text-decoration: none;
	color: #2757AF;
}
body {
	background-image: url(../images/bg.gif);
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
	margin-bottom: 0px;
}	
input {
    background-color: #F2F2F2; 
    color: #2554AA;
    font-family: Verdana;
    font-size: 11;
}
select {
    background-color: #F2F2F2; 
    color: #2554AA;
    font-family: Verdana;
    font-size: 11;
}
textarea{
    background-color: #F2F2F2; 
    color: #2554AA;
    font-family: Verdana;
    font-size: 11;
}
}
@charset "utf-8";
* {font-family:"Arial, Helvetica, sans-serif";
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px; LIST-STYLE-TYPE: none
}
BODY {font-family:"Arial, Helvetica, sans-serif";
	BACKGROUND: #fff; FONT: 11px/180% Verdana,Tahoma,"宋体"; COLOR: #434343
}
div,ul,li{font-family:"Arial"}
input{ font-size:12px; color:#666;}
.mainbg{ background:url(../images/mainbg.gif) repeat-x;min-height:322px;}
#header {width:980px;height:68px;position:relative; margin:0 auto; padding-top:20px;}
.logo {position:absolute;width:550px;height:78px;background:url(../images/logo.gif) no-repeat;left:3px;bottom:2px;}
.logo span {display:none}
.login {position:absolute;right:3px;top:30px;}
.login a {text-decoration:underline;}
#nav_index {
	BACKGROUND: url(../images/navbg.gif) repeat-x 0px -76px; MARGIN: 5px auto 0px; WIDTH: 980px; POSITION: relative; HEIGHT: 38px
}
#nav_index UL {
	BACKGROUND: url(../images/navbg.gif) no-repeat left top; FLOAT: left; height:38px; line-height:0; 
}
#nav_index LI SPAN {
	RIGHT: 0px; BACKGROUND: url(../images/navbg.gif) no-repeat 0px -38px; WIDTH: 6px; POSITION: absolute; TOP: 0px; HEIGHT: 38px
}
#menu {
	BACKGROUND: url(../images/menubg.gif) repeat-x 0px -60px;
	MARGIN: 4px 0px;
	left:30px;
	WIDTH: 910px;
	POSITION:absolute;
	left:32px;
	top: 2px;
}
#menu UL {
	BACKGROUND: url(../images/menubg.gif) no-repeat left top; FLOAT: left; height:30px;
}
#menu li{ float:left; background:url(../images/line.gif) no-repeat right;}
#menu LI A {PADDING-RIGHT: 20px; DISPLAY: block; PADDING-LEFT: 20px; FONT-WEIGHT: bold; FONT-SIZE: 14px; BACKGROUND: url(images/spacer.gif) no-repeat 10px 3px; FLOAT: left; PADDING-BOTTOM: 0px; COLOR: #666; LINE-HEIGHT:28px; PADDING-TOP: 2px;TEXT-ALIGN: center; text-decoration:none; width:100px}
#menu LI A:hover {
	PADDING-RIGHT: 20px; DISPLAY: block; PADDING-LEFT: 20px; FONT-WEIGHT: bold;FONT-SIZE: 14px; BACKGROUND: url(images/navsub.gif) no-repeat 10px 3px; FLOAT: left; PADDING-BOTTOM: 0px; COLOR: #fff; LINE-HEIGHT:28px; PADDING-TOP:2px; TEXT-ALIGN: center;
}
#menu LI SPAN {
	RIGHT: 0px; BACKGROUND: url(../images/menubg.gif) no-repeat 0px -30px; WIDTH: 5px; POSITION: absolute; TOP: 0px; HEIGHT: 30px
}


.search{ position:absolute; right:20px; height:24px; top:7px;}
.search_text{ background:url(../images/search.gif) no-repeat; border:0; padding-left:3px; height:22px; padding-top:5px; width:170px;}
.sub{background:url(../images/searchsub.gif) no-repeat; width:16px; height:16px;border:0; position:absolute; top:3px; right:10px;}

#main,#center{ width:980px;margin:0 auto; padding-top:8px;}
.swf_pic{ float:left;}
.member_login{ float:left; margin-left:8px; background:url(../images/rightbg.gif) 0 -346px repeat-x; width:228px; height:173px; position:relative;}
.member_login ul{background:url(../images/rightbg.gif) top left no-repeat;width:228px; height:173px; color:#fff}
.member_login span{background:url(../images/rightbg.gif) 0 -173px no-repeat;width:5px; height:173px; float:right; position:absolute; right:-2px; top:0}
.member_login li{ line-height:32px;font-size:12px; margin-left:10px; color:white}
.member_login 2 p{
	position:absolute;
	right:5px;
	top:48px;
	background:none;
	width:60px;
	height:24px;
	color:#fff;
}
.member a{ color:white;  font-size:12px; text-decoration:none; background:url(images/memberli.gif) 0 4px no-repeat; padding-left:10px; margin-left:10px; }
.member a:hover{ color:white; text-decoration:underline}
.member{margin-top:30px; text-align:center;}
.remberme{border: medium none ; background: rgb(243, 243, 243) none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; border:0}
.checkbox{background:url(../images/remember.gif) no-repeat; border:0; width:10px; height:10px;}
.sr{ background:url(../images/text.gif) no-repeat; width:94px; height:21px; border:0; padding:3px 3px 0}
.tit{ width:200px; margin:0 auto; font-size:14px; font-weight:bold; color:white; background:url(images/titlinebg.gif) repeat-x bottom; line-height:36px;}


.mainleft {
	BACKGROUND: url(../images/clbg.gif) repeat-x 0px -524px; MARGIN:0 auto; WIDTH:743px; POSITION: relative; HEIGHT: 262px; float:left}
.mainleft UL {list-style:none;	BACKGROUND: url(../images/clbg.gif) no-repeat left top;float:left;height:262px; }
.mainleft LI SPAN {RIGHT: 0px; BACKGROUND: url(../images/clbg.gif) no-repeat 0px -262px; WIDTH: 5px; POSITION: absolute; TOP: 0px; HEIGHT: 262px}
.mainleft li{ list-style:none; font-size:14px;color:#666;  float:left; text-align:center}
.mainleft h1{ font-size:14px; float:left; line-height:32px;}

.maincon{ position:absolute; top:30px; left:0; display:inline; z-index:2}
.maincon ul{ height:auto;list-style:none; margin:0; background:none; margin-left:13px; display:inline}
.maincon li{ width:362px; height:103px; float:left; background:url(../images/conbg.gif) no-repeat;margin-top:8px; position:relative; display:inline}


.bg1 {
	background-image: url(../images/11.gif);
	background-repeat: no-repeat;
	height: 21px;
	text-align: left;
	padding-top: 5px;
}
.style2 {font-size: 12px}
.style3 {font-size: 12px}
.style5 {color: #2757AF}
-->
 </style>
</head>
<body><table align="center" border="0" cellpadding="0" cellspacing="0" width="880">
<tbody>
	<tr>
		<td colspan="4" align="left" valign="bottom">
		<div class="mainbg">
		<P id=header><A class=logo title="竞赛管理系统" ><SPAN>竞赛管理系统</SPAN>
		</A> <SPAN class=login><font size="4" face="幼圆" color='maroon' ><strong>欢迎来到竞赛管理系统&nbsp;&nbsp;&nbsp;&nbsp;</strong></font></SPAN></P></div>
	<div id=nav_index>
 	 <div id="menu">
   	 <ul><li><?php echo "<a href=\"../Competitor/Competitor_index.php\"><font color='purple'>首页</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"Upload_Works.php\"><font color='purple'>作品上传</font></a>;";?> </li>
   	  <li><?php echo "<a href=\"Result_of.php\"><font color='purple'>竞赛结果</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"Edit_info.php\"><font color='purple'>个人资料</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"../logout.php\"><font color='purple'>注销</font></a>;";?> </li>
   	 </ul>
	</div> 
</div>
</td>
    </tr>  
		<tr>
		<td align="center" bgcolor="#ffffff" colspan="2" height="155" valign="top" width="1055px"><table width="100%" height="30px"><tr>
			<td  style="color:#FFF;background-image:url(../images/bg_list.gif); font-size:15px;">
			<strong><?php echo "用户名：$user_name"; ?></strong></td></tr></table>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" bgcolor="#E2F0FE" valign="top" height="355" valign="top" width="755px">
               <div id="BinessAffiche" >
               
<?php IF($_SESSION["Allow_Upload"]=='yes'){
/******************************************************************************

参数说明:
$max_file_size  : 上传文件大小限制, 单位BYTE
$destination_folder : 上传文件路径

******************************************************************************/

//上传文件类型列表
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png',
    'application/octet-stream',
	'application/x-zip-compressed'
);

$max_file_size=MAX_UPLOAD_SIZE;     //上传文件大小限制, 单位BYTE
$destination_folder="User_Upload/".$user_name."/"; //上传文件路径
?>
<form enctype="multipart/form-data" method="post" name="upform">
  上传文件:
  <input name="upfile" type="file">
  <input type="submit" value="上传"><br><br>
  <p align="center"><font size="2" color="blue">允许上传的文件类型为:<?=implode(', ',$uptypes)?></font></p>
   <p align="center"><font size="2" color="red">注意：你可以多次上传，但系统只取你最后一次上次的作品，在截至日期后，你将无法上传。</font></p>
   <p align="center"><font size="2" color="red">最好打包好上传，，以便管理</font></p>
  
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!is_uploaded_file($_FILES["upfile"][tmp_name]))
    //是否存在文件
    {
         echo "文件不存在!";
         exit;
    }

    $file = $_FILES["upfile"];
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "文件太大!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "文件类型不符!".$file["type"];
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }
    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    $time=time();
    $destination = $destination_folder.$time.".".$ftype;
    if(!move_uploaded_file ($filename, $destination))
    {
        echo "移动文件出错";
        exit;
    }

    $pinfo=pathinfo($destination);
    $fname=$pinfo[basename];
    echo " <font color=red>已经成功上传</font><br>";
    echo "<br> 大小:".$file["size"]." bytes";
    $data = array();
    $user =new User();
    $data['Have_Hand_In']="YES";
    $data['Works_Name']=$fname;
    $user->updateData('competitor_info',$ID,$data);
}
}else{?>
	<br>
	<p align="center"><font size="3" color="red" face="黑体"><strong>现在不能上传作品，可能已过截至时间或竞赛未开始!</strong></font></p>
<?php 	
}
?> 
				 </div>
              	</tr> 
    			<tr>
	    	<td></td>
    </tr></table></td></tr> 
    <tr>
	  <!--  <td align="left" background="images/index_09.gif" nowrap="nowrap" valign="top">-->
	  <td valign="top">
		    <center><span class="style2"></span></center>
	    </td>
    </tr>
    <tr>
	   <!-- <td colspan="3" align="center" background="images/index_10.gif" height="54" valign="middle">-->
	   <td align="center" valign="middle" colspan="3">
		<?php include "../include/foot.inc"; ?>
	    </td>
    </tr>
</tbody>
</table>
	   
</body>	
</html>