<?php
session_start();
if(isset($_SESSION['LogUser'])){
echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" 
align="center">
<tr>
<td><img src="Image/ban.jpg" width="100%"></td>
</tr>
<tr>
<td align="right">
You are Logged in as :'.$_SESSION['LogUser'].' <img 
src="Image/user.png" width="30" height="30"> 
(<a href="LogOut.php">LOGOUT [<img 
src="Image/logout.png" width="25" height="25">]</a>)
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
color: #FFFFFF;
}
body {
background-color: #408080;
}
-->
</style></head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','hnd_027_proj');
if($conn){
$rno=$_SESSION['RN'];
$cid=$_POST['txtCusID'];
$name=$_POST['txtName'];
$queSave="INSERT INTO roomschedule(RoomNo,CusID,CheckIn) 
VALUES('$rno','$cid',(now()))";
if(mysqli_query($conn,$queSave)){
$queUp="UPDATE rooms SET status='Unavailable' WHERE RoomNo='$rno'";
if(mysqli_query($conn,$queUp)){
echo '<tr>
<td>
You have Reserve the Room No:'.$rno.' to the Customer 
'.$name.'('.$cid.') Successfully!; 
</td>
</tr>
<tr>
<td align="center"><a href="RoomAva.php"><img 
src="Image/back.png" width="50" height="50"></a>
</td>
 </tr>
 <tr>
 <td align="center"><a href="Main.php"><img 
src="Image/home.png" width="50" height="50"></a>
</td>
 </tr>';
}
}
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