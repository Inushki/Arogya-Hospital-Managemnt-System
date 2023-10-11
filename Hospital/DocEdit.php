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
	background-color: #FFFFFF;
}
.style1 {
	font-size: 20px;
	font-style: italic;
	font-weight: bold;
	color:#FFFFFF;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color:#000000;
}
.style3 {
	font-size: 24px;
	font-weight: bold;
	color: #003300;
}
.style5 {
	font-size: 24px;
	font-weight: bold;
	color: #990033;
}
.style4 {
	font-size: 60px;
	font-weight: bold;
	color:#FFFFFF;
}
.style10 {font-size: 18px; font-weight: bold; color:#000000 }
-->
</style>
</head>
<body>
<?php
	$conn=mysqli_connect('localhost','root','','hnd_027_proj');
	if($conn){
	if(isset($_GET['id'])){
	$eid=$_GET['id'];
	if(isset($_POST['btnUpdate'])){
	$n=$_POST['txtDName'];
	$nic=$_POST['txtNIC'];
	$cn=$_POST['txtConNo'];
	$e=$_POST['txtEmail'];
	$g=$_POST['rbGen'];
	$c=$_POST['rbCS'];
	$a=$_POST['txaAdd'];
	$queUp="UPDATE Doctor SET 
	DName='$n',NIC='$nic',ConNo='$cn',Email='$e',Gender='$g',CivilStat='$c',DAddress='$a' WHERE 
	DocID='$eid'";
	if(mysqli_query($conn,$queUp)){
	header("Location:DocUpSuc.php");
}
}
$queGet="SELECT * FROM doctor WHERE DocID='$eid'";
$DataRes=mysqli_query($conn,$queGet);
$myRec=mysqli_fetch_array($DataRes);
?>
<form id="form1" name="form1" method="post" action="">
 <table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="243" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="121" height="118" class="style2" /></td>
    <td height="115" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
 <tr>
 <td colspan="3" bgcolor="#000066"><span class="style1">EDIT DOCTOR DETAILS</span></td>
 </tr>
 <tr>
 <td width="243" class="style10">Doctor ID</td>
 <td width="173" class="style10"><font color="#000000"><?php echo $myRec['DocID'];?></font></td>
 <td width="611">&nbsp;</td>
 </tr>
 <tr>
 <td class="style10">Doctor Name</td>
 <td colspan="2"><label>
 <input name="txtDName" type="text" class="style2" id="txtDName" size="60" maxlength="100" 
value="<?php echo $myRec['DName'];?>"/>
 </label></td>
 </tr>
 <tr>
 <td colspan="2" class="style10">NIC</td>
 <td class="style10">Contact No</td>
 </tr>
 <tr>
 <td colspan="2"><input name="txtNIC" type="text" class="style2" id="txtNIC" size="12" 
maxlength="12" value="<?php echo $myRec['NIC'];?>"/></td>
 <td><input name="txtConNo" type="text" class="style2" id="txtConNo" size="12" maxlength="10" 
value="<?php echo $myRec['ConNo'];?>"/></td>
 </tr>
 <tr>
 <td colspan="2" class="style10">Email</td>
 <td class="style10">Gender</td>
 </tr>
 <tr>
 <td colspan="2"><input name="txtEmail" type="text" class="style2" id="txtEmail" size="50" 
maxlength="100" value="<?php echo $myRec['Email'];?>"/></td>
 <td class="style10"><label>
 <input type="radio" name="rbGen" <?php if(isset($myRec['Gender']) && 
$myRec['Gender']=="Male") echo "checked";?> value="Male" /> Male
 <input type="radio" name="rbGen" <?php if(isset($myRec['Gender']) && 
$myRec['Gender']=="Female") echo "checked";?> value="Female" /> Female</label></td>
 </tr>
 <tr>
 <td colspan="2" class="style10">Civil Status</td>
 <td class="style10">Address</td>
 </tr>
 <tr>
 <td colspan="2" class="style10"><input type="radio" name="rbCS" <?php if(isset($myRec['CivilStat']) && 
$myRec['CivilStat']=="Married") echo "checked";?> value="Married" /> Married
 <input type="radio" name="rbCS" <?php if(isset($myRec['CivilStat']) && 
$myRec['CivilStat']=="Unmarried") echo "checked";?> value="Unmarried" /> Unmarried</td>
 <td><textarea name="txaAdd" cols="50" rows="4" class="style2" id="txaAdd"><?php echo 
$myRec['PAddress'];?></textarea></td>
 </tr>
 <tr>
 <td colspan="2"><label>
 <div align="center">
 <input name="btnUpdate" type="submit" class="style3" id="btnUpdate" value="UPDATE" />
 </div>
 </label></td>
 <td>&nbsp;</td>
 </tr>
 <tr>
 <td colspan="3" bgcolor="#000066"><p>&nbsp;</p>
   <p>&nbsp;</p></td>
 </tr>
 </table>
</form>
<?php
 }
 }
else{
echo '<tr>
<td>ERROR 4004!<br>Database is NOT Connected!</td>
</tr>';
}
'</table>';
 }
?>
</body>
</html>

