<?php require_once('../config.inc.php'); ?>
<?php require_once('session.inc.'); ?>
<?php require_once(INCLUDE_PATH . 'News.inc.php');?>
<?php require_once('../myfunction.php');?>
<?php $user_name=$_SESSION["Name"];
	$news= new News();
	$myfun=new myfunction();
	$F_ID=$_GET['id'];
	$sql = "SELECT * FROM news_info WHERE F_ID = '$F_ID'";             
	$info = $news->select($sql); 
	foreach($info as $key => $value){
       	$title=$value['title']; 
      	$author=$value['author'];
      	$source=$value['source'];
      	$content=$value['content'];        
      	$pubdate=$value['pubdate']; 
}
$content=$myfun->str_to($content);
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
   	 <li><?php echo "<a href=\"../Competitor/Upload_Works.php\"><font color='purple'>作品上传</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"../Competitor/Result_of.php\"><font color='purple'>竞赛结果</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"../Competitor/Edit_info.php\"><font color='purple'>个人资料</font></a>;";?> </li>
   	 <li><?php echo "<a href=\"/logout.php\"><font color='purple'>注销</font></a>;";?> </li>
   	 </ul>
	</div> 
</div>
</td>
    </tr>  
		<tr>
		<td align="center" bgcolor="#ffffff" colspan="2" height="155" valign="top" width="755px"><table width="100%" height="30px"><tr>
			<td  style="color:#FFF;background-image:url(../images/bg_list.gif); font-size:15px;">
			<strong><?php echo "用户名：$user_name"; ?></strong></td></tr></table>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" bgcolor="#E2F0FE" valign="top" height="155" valign="top" width="755px">
               <div id="BinessAffiche" >
      			<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" >
      		 	<tr > 
       		  	<td colspan="1" align="center"><font size=4 face="黑体" color="navy"><?php echo $title."<br>"; ?>
         	 	</font></td>
        		 </tr>
        		  <tr > 
        			 <td colspan="2" align="center">
        			 <font  face="黑体" color="#fff"><?php echo "来源:$source"; ?></font>
        			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			 <font face="黑体" color="#fff"><?php echo "作者:$author";?></font>
         			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         			<font face="黑体" color="#fff"><?php echo "时间:$pubdate"."<br><br>";?></font>
         			</td>
        		</tr>      
        		<tr > 
        			 <td colspan="1"><font color="black" size="3"><?php echo $content; ?>
         		 	</font></td>
        		</tr>
        		<tr> 
          			<td colspan="3">
		  				<P>&nbsp;</P>
		 			 <br /> <br /><br/></td>
		 		</table></div>
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
</table></body>
	</html>