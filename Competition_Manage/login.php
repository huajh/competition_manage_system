<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>竞赛管理系统登陆</title>
<link href="Style/admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<br>
<form name="login_form" method="post" action="login_check.php">
<TABLE height=258 border=0 align=center cellPadding=1 cellSpacing=0 
style="BORDER-RIGHT: 3px outset; BORDER-TOP: 3px outset; BORDER-LEFT: 3px outset; WIDTH: 0px; BORDER-BOTTOM: 3px outset">
  <TBODY>
  <TR>
    <TD height=252>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
          <TD background=Admin/images/admin_login_r1_c1.jpg height=17>
            <DIV class=ht align=center></DIV></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
          <TD width=24 height=212><IMG height=212 
            src="Admin/images/admin_login_r2_c1.jpg" width=23></TD>
          <TD vAlign=middle align=center width=494 bgColor=#f7faff>
            <TABLE cellSpacing=5 cellPadding=0 width="100%" align=center 
            border=0>
              <TBODY>
              <TR>
              <TD align=center width="30%"></TD>
                <TD width="70%" align="left" valign="middle">
                  <DIV align=left>
                    <table width="100%" border="0">
                      <tr >
                        <td><span class="caption" ><strong><font size='4' color='blue'>竞赛管理系统登陆</font></strong></span></td>
                      </tr>
                    </table>
                    <br>
                    <TABLE class=ht style="BORDER-COLLAPSE: collapse" height=74 
                  cellSpacing=0 cellPadding=0 width=220 border=0>
                    <TBODY>
                     <tr>
    				 	<TD width=80 height=16 align="right">用户类型</td>
						<td align="center"><label>
						<select name="user_type" style="height:18px;width:120px">
						<option value="null">-用户类型-</option>
						<option value="competitor">选手</option>
						<option value="teacher">教师</option>
						<option value="public">游客</option>
						</select></label></td>
    				</tr>
                    <TR>
                      	<TD width=80 height=16 align="right">用户账号</TD>
                      	<TD align=left width=109 height=16>
                        <P><FONT size=2><INPUT id=name4 size=20 name=user_name style="height:18px;width:120px"> 
                        </FONT></P></TD>
                    </TR>
                    <TR vAlign=middle align=center>
                      <TD width=80 height=16 align="right">登陆密码</TD>
                      <TD align=left width=109 height=16>
                        <P><FONT size=2><INPUT id=password type=password size=20 
                        name=user_psword style="height:18px;width:120px"> 
                        </FONT></P></TD> 
                    </TR>
                    <TR vAlign=middle align=right>
                      <TD colSpan=2 height=13>
                		<DIV align=center><FONT size=2>
                  		<INPUT type=image height=19 width=50 src="Admin/images/submit.gif" value="登陆" name="submit"> </FONT><FONT size=2></FONT>
                        <FONT size=2><A onclick=document.login_form.reset() 
                        href="javascript:;">&nbsp;&nbsp;<IMG height=19 
                        src="Admin/images/reset.gif" width=50 
                        border=0></A></FONT>
         				<a href=Competitor/Register.php>[注册]</a>
                        </DIV></TD></TR>
                    </TBODY></TABLE><p align="right"><font color=green size=2><i>游客选择登陆类型后直接登陆</i></font></p>
                  </DIV></TD></TR></TBODY></TABLE></TD>     
                  
          <TD width=88></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=605 align=center border=0>
        <TBODY>
        <TR>
  <TD><IMG height=21 src="Admin/images/admin_login_r4_c1.jpg" 
            width=605></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></form>
</body>
</html>
