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
.style3 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
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
$conn=mysqli_connect('localhost','root','','hnd_027_proj');
if($conn){
if(isset($_GET['id'])){
$patid=$_GET['id'];
echo '<table width="1005" border="0" align="center" cellpadding="5" cellspacing="0">
            
<tr>
        <td width="164" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="123" height="113" class="style2" /></td>
        <td width="849" height="134" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
  </tr>
  </table>
<tr>
<td>';
?>
<form id="form1" name="form1" method="post" action="">
<table align="center" border="0" cellpadding="5" cellspacing="0" 
width="90%">
 <tr>
<td><b>CONFIRM TO DELETE!</b><br>Are you sure, You want to 
DELETE Doctor ID:<?php echo $docid;?> from the Database?</td>
</tr>
 <tr>
 <td>
 <input name="btnDelete" type="submit" class="style3" id="btnDelete" value="DELETE" />
 </td>
 </table>
</form>
<?php
echo '</td>
</tr>';
if(isset($_POST['btnDelete'])){
$queDel="DELETE FROM doctor WHERE DocID='$docid'";
if(mysqli_query($conn,$queDel)){
header("Location:DelConf.php");
}
}
 }
}
else{
echo '<tr>
<td align="center">
Database is not connected!<br>Connection 40014 ERROR!
</td>
</tr>';
}
echo '</table>';
}
?>
</body>
</html>
