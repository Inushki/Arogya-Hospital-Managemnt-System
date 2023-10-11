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
color: #000000;
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
.style3 {
font-size: 16px;
color:#000000;
}
.style4 {
	font-size: 60px;
	font-weight: bold;
	color:#FFFFFF;
}
-->
</style>
</head>

<body>
<?php
echo'<tr>
   <td>
<form id="form1" name="form1" method="post" action="">
  <table width="1063" height="347" border="0" cellpadding="0" align="center">
   <tr>
    <td width="112" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="110" height="106" class="style2" /></td>
    <td height="115" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
    <tr>
 <td height="37" colspan="4" bgcolor="#000066"><blockquote>
   <p><span class="style1">PATIENT</span></p>
 </blockquote></td>
 </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="192"><img src="User-icon (1).png" width="113" height="92" /></td>
      <td width="751"><blockquote class="style3"><a href="PatientID.php">Register</a></blockquote></td>
      
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><img src="search-icon.png" width="107" height="83" /></td>
      <td width="751"><blockquote class="style3"><a href="PatientSearch.php">Search</a></blockquote></td>
    </tr>
         <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>';                                                          }
?>
</body>
</html>
