<?php
 session_start();
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
          color:#000000;
}
body {
background-color:#FFFFFF
}
.style4 {
	font-size: 55px;
	font-weight: bold;
	color:#FFFFFF;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1034" height="374" border="0" align="center" cellpadding="0">
  <tr>
    <td width="127" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="110" height="106" class="style2" /></td>
    <td width="901" height="57" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
    </tr>
    
    <tr>
      <td height="283" colspan="4"><div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
      <div align="center"></div>        <div align="center"></div></td>
    </tr>
<?php
        if(isset($_SESSION['LogUser'])){
         $con=mysqli_connect('localhost','root','','hnd_027_proj');
     if($con){
         $un=$_SESSION['Un'];
         $queCheck="SELECT MAX(LogSerial) FROM loginsch WHERE Username='$un' 
             GROUP BY Username ORDER BY LogSerial DESC LIMIT 1";
     if(mysqli_query($con,$queCheck)){
         $queGet=mysqli_query($con,$queCheck);
             while($rv=mysqli_fetch_array($queGet)){
         $id=$rv["MAX(LogSerial)"];
         $queUpdate="UPDATE loginsch SET LogOut=(now()) WHERE 
             LogSerial='$id'";
     if(mysqli_query($con,$queUpdate)){
       session_destroy();
      echo '<table border="0" width="100%" cellpadding="10" cellspacing="0"align="center">
 <tr>
   <td align="center">You have LOGOUT Successfully!</td>
 </tr>
 <tr>
   <td align="center"><a href="Login.html">CLICK HERE to LOGIN <img src="Person.png" width="50" height="50"></a></td>
 </tr>';
 
     }
   }
  }
}
else{
    echo '<b>404 SERVER NOT FOUND</b><br> Server is NOT Connected! <br> Server under Construction, Try again Later!';
   }
}
?>
 </table>
</form>
</body>
</html>
