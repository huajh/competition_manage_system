<title>Register</title>
<style type="text/css">
<!--
#register {
	height: 400px;
	width: 600px;
	border: 1px solid #00CCCC;
	background-position: center;
}
.STYLE5 {color: #333333; font-weight: bold; }
-->
</style>
<h2 align="center">REGISTER</h2>
<center>
 <div id="register">
<form name="register_form" method="post" action="register_check.php"> 
  <table width="480"height="358"border="0"align="center"cellpadding="0"cellspacing="0">
    <tr>
      <td colspan="2"align="center"><strong>����ѡ��ע��</strong></td>
    </tr>

    <?PHP//To get the user_ID?>
    <tr>
      <td width="130" align="center"><p align="right" class="STYLE5">ѧ��</p>      </td>
      <td width="350" align="center"><label>
         <input type="text" name="user_ID" size="38" maxlength="20"/>
      </label></td>
    </tr>  

    <?PHP//To get the user_name?>	  
    <tr>
      <td align="center"><p align="right" class="STYLE5">�û���</p>      </td>
      <td align="center"><label>
         <input type="text" name="user_name" size="38" maxlength="20"/>
      </label></td>
    </tr>   
    <?PHP//To get the password?>
    <tr>
      <td align="center"><div align="right" class="STYLE5">��������</div></td>
      <td align="center"><label>
         <input type="password" name="user_pw1" size="38" maxlength="20"/>
      </label></td>
    </tr>  
	  
    <?PHP//To get the password?>
    <tr>
      <td align="center"><div align="right" class="STYLE5">�ٴ���������</div></td>
      <td align="center"><label>
         <input type="password" name="user_pw2" size="38" maxlength="20"/>
      </label></td>
    </tr>   
    <tr>
       <td align="center"><div align="right" class="STYLE5">��֤��</div></td>
       <TD align=center height=16><input type="text" name="passcode" id="passcode" size="10" />
       <img src="../Include/GetVerifyImg.php" onClick="this.src='../Include/GetVerifyImg.php';" /></TD>
      </tr> 
    <tr>
      <td colspan="2"align="center"><label>
      <input name="submit" type="submit" value="ȷ��"/>
      </label>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>
         <input type="reset" name="Submit" value="����" />
        </label>        
    </tr>
  </table>
 

</form>
</div>
</center>