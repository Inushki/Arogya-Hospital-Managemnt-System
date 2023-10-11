<?php
session_start();
if(isset($_SESSION['LogUser'])){
echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" 
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
font-family: Calibri;
font-size: 16px;
color:#000000;
}
body {
background-color:#FFFFFF;
}
.style1 {
font-size: 24px;
color: #0000FF;
font-weight: bold;
}
.style4 {
	font-size: 55px;
	font-weight: bold;
	color:#FFFFFF;
}
.style2{
color:#FFFFFF;
}
-->
</style></head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','hnd_027_proj');
if($conn){
/*if(!isset($_GET['rm'])){*/

/*$rmno=$_GET['rm'];
$_SESSION['RN']=$rmno;
*/
echo'<tr>
<td>
<form id="form1" name="form1" method="post" 
action="RoomRes.php">
 <table width="94%" border="0" align="center" cellpadding="5" cellspacing="0">
   <tr>
    <td width="249" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="129" height="107" class="style2" /></td>
    <td height="118" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4"><div align="center">AROGYA HEALTH CARE</div></td>
    </tr>
 <tr>
 <td colspan="3" bgcolor="#000066"><p><em class="style2"><strong>ROOM RESERVATION</strong></em></p>
   </td>
 </tr>
 <tr>
 <td width="249" rowspan="4"><img src="room.png" width="228" height="128" /></td>
 <td width="220">Room No</td>
 <td width="521"><font color="#FFFF00">';/*$rmno*/ echo '</font></td>
 </tr>
 <tr>
 <td>Patient ID</td>
 <td><label>
 <input name="txtPatID" type="text" id="txtPatID" size="10" maxlength="10" />
 </label></td>
 </tr>
 <tr>
 <td>Patient Name</td>
 <td><label>
 <input name="txtName" type="text" id="txtName" size="30" maxlength="50" />
 </label></td>
 </tr>
 <tr>
 <td height="75">&nbsp;</td>
 <td><label>
 <input name="btnSave" type="submit" class="style1" id="btnSave" value="SAVE" />
 </label></td>
 </tr>
 <tr>
 <td colspan="3" bgcolor="#000066">&nbsp;</td>
 </tr>
 </table>
</form>
</td>
</tr>';
/*}*/
 }
else{
echo '<tr>
<td>Database is NOT CONNECTED!</td>
 </tr>';
}
echo '</table>';
}
?>
</body>
</html>