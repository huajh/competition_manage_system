<?php 
require_once('../../config.inc.php');
require_once('../Check.php');
 ?>
<script language='javascript' src='/Js/Base.js'></script>
<form action="NewsAddOk.php?id=$_GET['id']" method="post" name="myform" id="myform">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="p9">
  <tr>
  <td colspan="2" class="caption" align="center"><font size="4" color="blue"><strong>�� �� �� ��</strong></font></td>
  </tr>
	<tr> 
	  <td height="10"></td>
	</tr>
	<tr align="center" > 
	  <td height="20" valign="top" bgcolor="#0066FF"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1"  class=p9>
          <tr align="center"> 
            <td height="35" colspan="9" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="1" class="p9" align="center">
                <tr> 
                  <td width="150" height="30" align="center" bgcolor="#eeeeee">&nbsp;&nbsp;���ű���</td>
                  <td height="30" colspan="5" bgcolor="#eeeeee"> <input name="title" id="title" size="50"> 
                  </td>
                </tr>
                <tr>
                  <td height="30" align="center" bgcolor="#eeeeee">��Դ</td>
                  <td height="30" colspan="5"   bgcolor="#eeeeee"><input name="source" type="text" id="source" size="40" ></td>
                </tr>
			  <tr>
                  <td height="30" align="center" bgcolor="#eeeeee">����</td>
                  <td height="30" colspan="5"   bgcolor="#eeeeee"><input name="author" type="text" id=" author " size="40"></td>
                </tr>
                <tr> 
                </tr>
                <tr> 
                  <td width="150" height="30" align="center" bgcolor="#eeeeee"> 
                    &nbsp;&nbsp;��������</td>
                  <td colspan="5" bgcolor="#eeeeee"></td>
                </tr>					 
                <tr align="center"> 
                  <td colspan="6" valign="top" bgcolor="#eeeeee">
				<div align='center'><textarea name='content' cols="80" rows="15" ></textarea>
</div></td>
                </tr>
              </table></td>
          </tr>
          <tr align="center"> 
            <td height="25" colspan="9" bgcolor="#FFFFFF"> 
              <input type="submit" name="Submit" value="���"> &nbsp;&nbsp; <input type="reset" name="Submit2" value="���" >
            </td>
          </tr>
        </table></td>
	</tr>
	<tr> 
	  <td height="10"></td>
	</tr>
  </table>
</form>

