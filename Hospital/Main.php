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
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.style4 {
	font-size: 55px;
	font-weight: bold;
	color:#FFFFFF;
}
.style5 {
	font-size: 24px
}
-->
</style>
</head>

<body>
<?php
echo'<tr>
       <td align = center>
  <table width="90%" height="79" border="0" align="center" cellpadding="0">
   <tr>
    <td width="128" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="110" height="106" class="style2" /></td>
    <td height="57" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4"><div align="center">AROGYA HEALTH CARE</div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#000066"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><img src="patient.jpg" width="265" height="190" /></td>
      <td align="center"><img src="doctor.png" width="265" height="190" /></td>
      <td align="center"><img src="Rooms.jpg" alt="r" width="265" height="190" /></td>
    </tr>
    <tr>
      <td align="center"><a href="Patient.php" class="style5">Patient</a></td>
      <td align="center"><a href="doctor.php" class="style5">Doctor</a></td>
      <td align="center"><a href="Room.php" class="style5">Rooms</a></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#000066"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr align="center">
      <td><p>&nbsp;</p>
      <p><img src="service.jpeg" alt="s" width="264" height="173" /></p>
      <p>&nbsp;</p></td>
      <td><img src="payment.jpeg" alt="p" width="301" height="167" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><a href="serveces.php" class="style5">Services</a></td>
      <td align="center"><a href="payment.php" class="style5">Payment</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#000066"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
</td>
</tr>
</table>';
}
?>
</body>
</html>
