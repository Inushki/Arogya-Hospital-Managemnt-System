<?php
    session_start();
    if(isset($_SESSION['LogUser'])){
       echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
     <tr>
      <td align="right">
          You are Logged in as :'.$_SESSION['LogUser'].' <img src="Person.png" width="30" height="30"> 
          (<a href="LogOut.php">LOGOUT [<img src="logout.png" width="25" height="25">]</a>)
      </td>
     </tr>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
         font-family: Century Gothic;
         font-size: 16px;
		 color:#000000;
}
body {
	background-color: #FFFFFF;
}
.style1 {
       font-size: 20px;
       font-weight: bold;
       font-style: italic;
	   color:#FFFFFF;
}
.style2 {
       font-family: Arial, Helvetica, sans-serif;
       color: #000099;
}
.style3 {
       font-size: 16px;
       color:#000000;
}
.style4 {
	font-size: 60px;
	font-weight: bold;
	color:#FFFFFF;
}
.style5 {font-weight: bold; color: #000066; font-size: 24px;}
.style7 {font-weight: bold; color: #990033; font-size: 24px; }
-->
</style>
</head>

<body>
<?php
$docid=$_SESSION['DocID'];
echo '<tr>
   <td>
     <form id="form1" name="form1" method="post" action="DoctorSave.php">
     <table border="0" align="center" cellpadding="5" cellspacing="0">
            
     <tr>
        <td width="128" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="110" height="106" class="style2" /></td>
        <td height="57" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
     </tr>
 
     <tr>
        <td colspan="3" bgcolor="#000066"><span class="style1">DOCTOR REGISTRATION</span></td>
     </tr>
     <tr>
        <td width="128" class="style3">Doctor ID</td>
        <td width="180"><font color="#ffff00"><b>'.$docid.'</b></font></td>
        <td width="776" class="style3">&nbsp;</td>
     </tr>
     <tr>
        <td class="style3">Doctor Name</td>
        <td colspan="2"><label>
         <input name="txtDName" type="text" class="style2" id="txtDName" size="60" maxlength="100" />
        </label></td>
     </tr>
     <tr>
       <td colspan="2" class="style3">NIC</td>
       <td class="style3">Contact No</td>
     </tr>
     <tr>
       <td colspan="2"><label>
        <input name="txtNIC" type="text" class="style2" id="txtNIC" size="12" maxlength="12" />
       </label></td>
       <td><input name="txtConNo" type="text" class="style2" id="txtConNo" size="10" maxlength="10" 
/></td>
     </tr>
     <tr>
        <td colspan="2" class="style3">Email</td>
        <td class="style3">Gender</td>
     </tr>
     <tr>
        <td colspan="2"><input name="txtEmail" type="text" class="style2" id="txtEmail" size="40" maxlength="50" /></td>
        <td class="style3"><label>
          <input type="radio" name="rbGen" id="radio" value="Male" />
         Male
          <input type="radio" name="rbGen" id="radio2" value="Female" />
         Female
         </label></td>
        </tr>
        <tr>
          <td colspan="2" class="style3">Civil Status</td>
          <td>Address </td>
       </tr>
       <tr>
          <td colspan="2" class="style3"><input type="radio" name="rbCS" id="radio3" value="Married" />
         Married
           <input type="radio" name="rbCS" id="radio4" value="Unmarried" />
         Unmarried </td>
            <td><textarea name="txtAddress" cols="40" rows="4" class="style2" id="txtAddress"></textarea></td>
       </tr>
       <tr>
        <td colspan="2" bgcolor="#FFFFFF"><label>
        <div align="center">
         <input name="btnSave" type="submit" class="style5" id="btnSave" value="SAVE" />
        </div>
       </label></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <input name="btnCl" type="reset" class="style7" id="btnCl" value="CLEAR" />
       </div></td>
       </tr>
       <tr>
         <td colspan="3" bgcolor="#000066">&nbsp;</td>
       </tr>
    </table>s
   </form>
  </td> </tr>
</table>';
                                                          }
?>
</body>
</html>
