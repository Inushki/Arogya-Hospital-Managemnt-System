<?php
session_start();
if(isset($_SESSION['LogUser'])){
echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" 
align="center">
<tr>
<td align="right">
You are Logged in as :'.$_SESSION['LogUser'].' <img 
src="Person.png" width="30" height="30"> 
(<a href="LogOut.php">LOGOUT [<img 
src="logout.png" width="25" height="25">]</a>)
</td>
</tr>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
font-family: Calibri;
font-size: 16px;
color:#000000;
}
body {
background-color:#FFFFFF;
}
.style4 {
	font-size: 60px;
	font-weight: bold;
	color:#FFFFFF;
}
-->
</style></head>
<body>
<?php
echo '<table width="1005" border="0" align="center" cellpadding="5" cellspacing="0">
            
<tr>
        <td width="164" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="123" height="113" class="style2" /></td>
        <td width="849" height="134" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
  </tr>
  </table>
  <tr>
  <td align="center">
  </tr>
  <tr>
<td align="center">Doctor Record Successfully UPDATED!!!</td>
 </tr>
 <tr>
 <th align="center"><a href="DoctorSearch.php"><img 
src="back-icon.png" width="50" height="50"></a></td>
 </tr>
 <tr>
 <td align="center"><a href="Main.php"><img 
src="home-icon.png" width="50" height="50"></a></td>
 </tr>
</table>';
}
?>
</body>
</html>