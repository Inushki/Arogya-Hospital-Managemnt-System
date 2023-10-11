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
color:#FFFFFF;
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
/*$queGetData="SELECT 
roomschedule.RoomNo,roomschedule.ResSerial,roomschedule.PatID,roomschedule.CheckIn,Patient.
PName FROM roomschedule INNER JOIN Patient ON roomschedule.PatID=Patient.PatID WHERE 
CheckOut IS NULL";*/
$queGetData = "SELECT * FROM rooms";
if(mysqli_query($conn,$queGetData)){
echo 'OK';
$ReservationSerial='';
$Records=mysqli_query($conn,$queGetData);
if(mysqli_num_rows($Records)>0){
echo '<table width="94%"  align="center" height="172" border="0" cellpadding="0">
  <tr>
    <td width="207" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="119" height="115" class="style2" /></td>
    <td height="117" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
  </table>
<table border="0" cellspacing="2" cellpadding="5" align="center" 
width="45%">
<tr>
<th bgcolor="#000066">Room Number</th>
<th bgcolor="#000066">Patient ID</th>
<th bgcolor="#000066">Patient Name</th>
<th bgcolor="#000066">Admit (Date & 
Time)</th>
<th bgcolor="#000066">&nbsp</th>
</tr>';
while($recs=mysqli_fetch_assoc($Records)){
$ReservationSerial=$recs['ResSerial'];
echo '<tr>
<td align="center">'.$recs['RoomNo'].'</td>
<td align="center">'.$recs['PatID'].'</td>
<td align="center">'.$recs['PName'].'</td>
<td align="center">'.$recs['Admit'].'</td>
<td align="center"><a 
href="DischargeProcess.php?ResSe='.$ReservationSerial.'"><img src="Discharge.png" width="30" 
height="30"></a></td>
</tr>';
}
}
}
}
else{
echo '<tr>
<td>Database is Not Connected!</td>
 </tr>';
}
echo '</table>';
}
?>
</body>
</html>