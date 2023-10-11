<?php
session_start();
if(isset($_SESSION['LogUser'])){
echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" 
align="center">
<tr>
<td><img src="Image/ban.jpg" width="100%"></td>
</tr>
<tr>
<td align="right">
You are Logged in as :'.$_SESSION['LogUser'].' <img 
src="Image/user.png" width="30" height="30"> 
(<a href="LogOut.php">LOGOUT [<img 
src="Image/logout.png" width="25" height="25">]</a>)
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
color: #FFFFFF;
}
body {
background-color: #408080;
}
-->
</style></head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1083" height="121" border="0" cellpadding="0">
  <tr>
    <td width="207" valign="middle" bgcolor="#000066"><img src="file:///C|/xampp/htdocs/HND/Hospital/8920e8782358e8296fb5b242a4f9204f.jpg" width="119" height="115" class="style2" /></td>
    <td height="117" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
  </table>
</form>
<?php
echo '<tr>
<td align="center">Thank You for your Payment!<br>Come Again!</td>
 </tr>
 <tr>
 <td align="center"><a href="Main.php"><img 
src="file:///C|/xampp/htdocs/HND/Hospital/home-icon.png" width="60" height="59" /></a></td>
 </tr>
</table>';
}
?>
</body>
</html>