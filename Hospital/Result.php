<?php
session_start();
if(isset($_SESSION['LogUser'])){
	echo '
	<table border="0" width="100%" cellpadding="10" cellspacing="0" 
	align="center">
	<tr>
	<td align="right">
	You are Logged in as :'.$_SESSION['LogUser'].' <img 
	src="Person.png" width="30" height="30"> 
	(<a href="logOut.php">LOGOUT [<img 
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
font-family: Century Gothic;
font-size: 14px;
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

if(isset($POST['txtPatID']))
{
	$patid=$_POST['txtPatID'];
}

$conn=mysqli_connect('localhost','root','','hnd_027_proj');
if($conn){
if(!empty($patid)){
$queData="SELECT `PatID` , `PName` , `PName` , `NIC` , `ConNo` , `Email` , `Gender` , `CivilStat` , `PAddress`
FROM `patient2` WHERE PatID = '$patid'";

var_dump(mysqli_fetch_assoc($recRec));
die();
if(mysqli_query($conn,$queData)){
$resRec=mysqli_query($conn,$queData);



if(mysqli_num_rows($resRec)>0){
echo '<tr>
<td>
<table border="0" width="95%" cellspacing="0" cellpadding="8" align="center">
<tr>
<th bgcolor="#000066">Patient ID</th>
<th bgcolor="#000066">Name</th>
<th bgcolor="#000066">NIC</th>
<th bgcolor="#000066">Contact No</th>
<th bgcolor="#000066">Email Address</th>
<th bgcolor="#000066">Gender</th>
<th bgcolor="#000066">Civil Status</th>
<th bgcolor="#000066">Address</th>
<th bgcolor="#000066">&nbsp</th>
<th bgcolor="#000066">&nbsp</th>
</tr>';
while($Vals=mysqli_fetch_array($resRec)){
echo '
<tr>
<td>'.$Vals['PatID'].'</td>
<td>'.$Vals['PName'].'</td>
<td>'.$Vals['NIC'].'</td>
<td>'.$Vals['ConNo'].'</td>
<td>'.$Vals['Email'].'</td>
<td>'.$Vals['Gender'].'</td>
<td>'.$Vals['CivilStat'].'</td>
<td>'.$Vals['PAddress'].'</td>
<td><a href="Edit.php?id='.$patid.'"><img src="pencil.png" width="30" 
height="30"></a></td>
<td><a href="Delete.php?id='.$patid.'"><img src="trash.png" width="30" 
height="30"></a></td>
</tr>';
}
'</table>
</td>
</tr>';
}
else{
echo 'Patient ID:'.$patid.' NOT AVAILABLE in the Database!<br> Check 
the Patient ID & Retry!';
}
}
else{
echo 'Error while Search for Patient Details!',mysqli_error($conn);
}
}
else{
$queData="SELECT * FROM patient2";
if(mysqli_query($conn,$queData)){
$resRec=mysqli_query($conn,$queData);
if(mysqli_num_rows($resRec)>0){
echo '<table width="1005" border="0" align="center" cellpadding="5" cellspacing="0">
            
<tr>
        <td width="164" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="123" height="113" class="style2" /></td>
        <td width="849" height="134" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
  </tr>
  </table>
<tr>
<td>
<table border="0" width="95%" cellspacing="0" cellpadding="8" align="center">
<tr>
<th bgcolor="#000066">Patient ID</th>
<th bgcolor="#000066">Name</th>
<th bgcolor="#000066">NIC</th>
<th bgcolor="#000066">Contact No</th>
<th bgcolor="#000066">Email Address</th>
<th bgcolor="#000066">Gender</th>
<th bgcolor="#000066">Civil Status</th>
<th bgcolor="#000066">Address</th>
<th bgcolor="#000066">&nbsp</th>
</tr>';
while($Vals=mysqli_fetch_array($resRec)){
echo '
<tr>
<td>'.$Vals['PatID'].'</td>
<td>'.$Vals['PName'].'</td>
<td>'.$Vals['NIC'].'</td>
<td>'.$Vals['ConNo'].'</td>
<td>'.$Vals['Email'].'</td>
<td>'.$Vals['Gender'].'</td>
<td>'.$Vals['CivilStat'].'</td>
<td>'.$Vals['PAddress'].'</td>
<td><a href="Edit.php?id='.$Vals['PatID'].'"><img src="pencil.png" width="30" 
height="30"></a></td>
<td><a href="Delete.php?id='.$Vals['PatID'].'"><img src="trash.png" width="30" 
height="30"></a></td>
</tr>';
}
echo '</table>
</td>
</tr> ';
}
else{
echo 'Patient ID:'.$cid.' NOT AVAILABLE in the Database!<br> 
Check the Patient ID & Retry!<br><a href="PatientSearch.php"><img src="back.png" width="50" 
height="50"></a>';
}
}
else{
echo 'Error while Search for Patient Details!',mysqli_error($conn);
}
}
 }
else{
echo 'Database is NOT CONNECTED!',mysqli_error($conn);
}
echo '<tr>
 <th align="center"><a href="PatientSearch.php"><img 
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