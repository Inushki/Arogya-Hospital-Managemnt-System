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
$conn=mysqli_connect('localhost','root','','hnd_027_proj');
if($conn){
if(isset($_GET['ResSe'])){
$Serial=$_GET['ResSe'];
$_SESSION['RSe']=$Serial;
$queUpRoomSchedule="UPDATE roomschedule SET Discharge=(now()) WHERE 
ResSerial='$Serial'";
mysqli_query($conn,$queUpRoomSchedule);
$queUpRooms="UPDATE rooms SET Status='Available' WHERE 
RoomNo=(SELECT RoomNo FROM roomschedule WHERE ResSerial='$Serial')";
mysqli_query($conn,$queUpRooms);
if(!mysqli_query($conn,$queUpRoomSchedule) && 
!mysqli_query($conn,$queUpRooms)){
echo '<table width="94%"  align="center" height="172" border="0" cellpadding="0">
  <tr>
    <td width="207" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="119" height="115" class="style2" /></td>
    <td height="117" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
  </table>
  <tr>
<td align="center">Patient Discharge Details 
Successfully UPDATED!</td>
 </tr>
 <tr>
<td align="center"><a href="Payment.php"><img 
src="Ecommerce.png" width="50" height="50"></a>
</td>
 </tr>
 <tr>
 <td align="center"><a href="Main.php"><img 
src="home-icon.png" width="50" height="50"></a>
</td>
 </tr>';
 } else {echo 'AHHH';}
 }
 }
else{
echo '<tr>
<td>Database is Not Connected!</td>
 </tr>';
}
echo '<table>';
}
?>
</body>
</html>