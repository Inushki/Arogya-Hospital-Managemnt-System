<?php
session_start();

if(isset($_SESSION['LogUser'])){
	echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" 
	align="center">
	<tr>
	<td align="right">
	You are Logged in as :'.$_SESSION['LogUser'].
	'<img 
	src="Person.png" width="30" height="30"z> 
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
.style10 {font-size: 18px; font-weight: bold; color:#FFFFFF }
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
$conn=mysqli_connect('localhost','root','','hnd_027_proj');

if($conn){
	$queRoomSel="SELECT rooms.RoomNo,rooms.RoomType,roomcat.Price FROM rooms 
	INNER JOIN roomcat ON Rooms.RoomType=roomcat.RoomType WHERE Status='Available'";
	
	if(mysqli_query($conn,$queRoomSel)){
	$data=mysqli_query($conn,$queRoomSel);

		if(mysqli_num_rows($data)>=0){
			echo '<table border="0" cellspacing="2" cellpadding="5" align="center" 
			width="89%">
			 <td width="120" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="120" height="116" class="style2" /></td>
				<td height="115" colspan="4" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
				</tr>
			 <tr>
			   <th colspan="4" bgcolor="#FFFFFF">&nbsp;</th>
			  </tr>
			 <tr>
			<th bgcolor="#000066" class="style10">Room Number</th>
			<th width="161" bgcolor="#000066" class="style10">Room Status</th>
			<th width="68" bgcolor="#000066" class="style10">Price</th>
			<th width="562" bgcolor="#000066" class="style10">&nbsp</th>
			</tr>
			<tr>
			</tr>
			<tr>
			<td></td>
			</tr>';
		}
		echo '</table>';
	} 
}
} else {echo "Stranger danger";}
?>
</body>
</html>