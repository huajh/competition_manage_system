<?php
require_once("../config.inc.php");
require_once(INCLUDE_PATH . "db.inc.php");
require_once(INCLUDE_PATH ."User.inc.php");
session_start();
$user = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{	
	if(strtolower($_SESSION["verify"])!=strtolower(trim($_POST["verify_code"]))){
		$msg2 = "��֤�����";	
	}
	else if(@$r = $user->CheckLogin($_POST['username'],$_POST['password']))
	{
		$_SESSION['GROUP_ID'] = $r['F_ID_GROUP_INFO'];
		$_SESSION['F_ID'] = $r['F_ID'];
		$_SESSION['F_NAME'] = $r['F_USER_NAME'];
		header("Location:Admin_Bg_Index.php");
	}else{
		$msg = "�û������������";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������ϵͳ��̨��½���</title>
<link href="/Style/admin.css" rel="stylesheet" type="text/css">
</head>

<body>

<form name="form1" action="" method="post">
<TABLE height=258 border=0 align=center cellPadding=1 cellSpacing=0 
style="BORDER-RIGHT: 3px outset; BORDER-TOP: 3px outset; BORDER-LEFT: 3px outset; WIDTH: 0px; BORDER-BOTTOM: 3px outset">
  <TBODY>
  <TR>
    <TD height=252>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
          <TD background=images/admin_login_r1_c1.jpg height=17>
            <DIV class=ht align=center></DIV></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
          <TD width=24 height=212><IMG height=212 
            src="images/admin_login_r2_c1.jpg" width=23></TD>
          <TD vAlign=middle align=center width=494 bgColor=#f7faff>
            <TABLE cellSpacing=5 cellPadding=0 width="100%" align=center 
            border=0>
            
            
              <TBODY>
              <TR>
                <TD align=center width="30%"><font color="Red"><small><?php echo $msg?></small></font></TD>
                <TD width="70%" align="left" valign="middle">
                  <DIV align=left>
                    <table width="100%" border="0">
                      <tr>
                        <td><span class="caption"><strong>��������ϵͳ��̨��½���</strong></span></td>
                      </tr>
                    </table>
                    <br>
                    <TABLE class=ht style="BORDER-COLLAPSE: collapse" height=74 
                  cellSpacing=0 cellPadding=0 width=220 border=0>
                    <TBODY>
                    <TR>
                      <TD width=80 height=16 align="right">����Ա�˺�</TD>
                      <TD align=left width=109 height=16>
                        <P><FONT size=2><INPUT id=name4 size=20 name=username style="height:18px;width:120px"> 
                        </FONT></P></TD></TR>
                    <TR vAlign=middle align=center>
                      <TD width=80 height=16 align="right">��½����</TD>
                      <TD align=left width=109 height=16>
                        <P><FONT size=2><INPUT id=password type=password size=20 
                        name=password style="height:18px;width:120px"> 
                        </FONT></P></TD></TR>
                    <TR vAlign=middle align=center>
                      <TD height=16 align="right">��֤��</TD>
                      <TD align=left height=16><input name="verify_code" id="verify_code" size="10" />
      				<img src="../Include/GetVerifyImg.php" onClick="this.src='../Include/GetVerifyImg.php';" /> 
      				</TD></TR>
                    <TR vAlign=middle align=center>
                      <TD colSpan=2 height=13>
                <DIV align=center><FONT size=2>
                  <INPUT type=image 
                        height=19 width=50 src="images/submit.gif" 
                        value=�ύ name=Submit> </FONT><FONT size=2></FONT>
                        <FONT size=2><A onclick=document.form1.reset() 
                        href="javascript:;"><IMG height=19 
                        src="images/reset.gif" width=50 
                        border=0></A></FONT>
                        
                        
                        <font color="Red"><small><?php echo $msg2?></small></FONT></DIV></TD></TR>
                    </TBODY></TABLE>
                  </DIV></TD></TR></TBODY></TABLE></TD>
                  
                  
          <TD width=88><IMG height=212 alt="��վ��̨����ϵͳ" 
            src="images/admin_login_r2_c3.jpg" 
        width=88></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
  <TD><IMG height=21 src="images/admin_login_r4_c1.jpg" 
            width=605></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></form>
</body>
</html>