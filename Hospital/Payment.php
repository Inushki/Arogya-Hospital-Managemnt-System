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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.style3 {color:#FF0000; font-weight: bold; font-style: italic; font-size: 30px; }
.style4 {
	font-size: 60px;
	font-weight: bold;
	color:#FFFFFF;
}
.style5{
color:#FFFFFF;
}
.style10 {font-size: 18px; font-weight: bold; color:#000000 }
-->
</style>
</head>

<body>
<?php
		$rs=$_SESSION['RSe'];
		$conn=mysqli_connect('localhost','root','','hnd_027_proj');
		$rn='';$patid='';$cIn='';$cOut='';$price='';$name='';$tot='';
		if($conn){
/*		$queRes="SELECT * FROM roomschedule WHERE ResSerial='$rs'";
*/		
		$queRes="SELECT *
FROM `roomshedule`";
		$Data=mysqli_query($conn,$queRes);
		if(mysqli_num_rows($Data)>0){
		while($Rec=mysqli_fetch_assoc($Data)){
		$rn=$Rec['RoomNo'];
		$cusid=$Rec['PatID'];
		$cIn=new DateTime($Rec['Admit']);
		$cOut=new DateTime($Rec['Discharge']);
 }
}
$queRoomCharge="SELECT Price FROM roomcat WHERE RoomType=(SELECT RoomType FROM 
rooms WHERE RoomNo='$rn')";
$Data=mysqli_query($conn,$queRoomCharge);
if(mysqli_num_rows($Data)>0){
while($Rec=mysqli_fetch_assoc($Data)){
$price=$Rec['Price'];
 }
}
$queCusDtls="SELECT PName FROM patient WHERE PatID='$patid'";
$Data=mysqli_query($conn,$queCusDtls);
if(mysqli_num_rows($Data)>0){
while($Rec=mysqli_fetch_assoc($Data)){
$name=$Rec['PName'];
 }
}
$totDs=date_diff($cOut,$cIn)->format("%a");
$totFee=$price*($totDs+1);
echo '<tr>
<td>';
?>
<?php 
echo '
<form id="form1" name="form1" method="post" action="">
 <table border="0" align="center" cellpadding="5" cellspacing="0">
 <tr>
    <td width="207" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="117" height="118" class="style2" /></td>
    <td height="115" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
 
 <tr>
 <td colspan="4" bgcolor="#000066" class="style5"><em><strong>PAYMENT</strong></em></td>
 </tr>
 <tr>
 <td width="207" class="style10">Reservation Serial</td>
 <td width="176" class="style10">Room No</td>
 <td colspan="2" class="style10">Room Charges per Day</td>
 </tr>
 <tr>
 <td><font color="#00FFFF"><?php echo $rs;?></td>
 <td><font color="#00FFFF"><?php echo $rn;?></td>
 <td colspan="2"><font color="#00FFFF"><?php echo $price;?></td>
 </tr>
 <tr>
 <td class="style10">Patient ID</td>
 <td colspan="3" class="style10">Patient Name</td>
 </tr>
 <tr>
 <td><font color="#00FFFF"><?php echo $patid;?></td>
 <td colspan="3"><font color="#00FFFF"><?php echo $name;?></td>
 </tr>
 <tr>
 <td><strong class="style10">Pay Amount</strong></td>
 <td colspan="3" class="style10">Payment Method</td>
 </tr>
 <tr>
 <td rowspan="2"><font color="#FF0000" size="+4">Rs.<?php echo $totFee;?>.00</font></td>
 <td rowspan="3"><label>
 <input type="radio" name="PayMeth" id="radio" value="Cash" />
 <img src="cash-icon.png" width="46" height="39" /></label></td>
 <td width="35"><input type="radio" name="PayMeth" id="radio2" value="Visa" /></td>
 <td width="516"><img src="Visa-icon.png" width="70" height="56" /></td>
 </tr>
 <tr>
 <td><input type="radio" name="PayMeth" id="radio3" value="Master-Card" /></td>
 <td><img src="Master-Card-Blue-icon.png" width="71" height="68" /></td>
 </tr>
 <tr>
 <td><label>
 <div align="center">
 <input name="btnPay" type="submit" class="style3" id="btnPay" value="PAYMENT" />
 </div>
 </label></td>
 <td><input type="radio" name="PayMeth" id="radio4" value="American-Express" /></td>
 <td><img src="American-Express-icon.png" width="71" height="52" /></td>
 </tr>
 <tr>
 <td colspan="4" bgcolor="#000066">&nbsp;</td>
 </tr>
 </table>
</form>
';




?>

<?php
if(isset($_POST['btnPay'])){
$paym=$_POST['PayMeth'];
$quePay="INSERT INTO 
payment(ResSerial,RoomNo,RoomChargePatID,PatName,PayAmount,PayMethod,PayDate) 
VALUES('$rs','$rn','$price','$patid','$name','$totFee','$paym',(now()))";
if(mysqli_query($conn,$quePay)){
header("Location:Message.php");
 }
}
}
else{
echo ' </td>
</tr>
<tr>
<td>Database is Not Connected!</td>
 </tr>';
}
echo '</table>';
}
?>
</body>
</html>
