<?php
    session_start();
    if(isset($_SESSION['LogUser'])){
       echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
     <tr>
      <td align="right">
          You are Logged in as :'.$_SESSION['LogUser'].' <img src="Person.png" width="30" height="30"> 
          (<a href="LogOut.php">LOGOUT [<img src="logout.png" width="25" height="25">]</a>)
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
   font-family: Century Gothic;
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
</style>
</head>

<body>

<?php
//var_dump($_SESSION);
//die();
     $patid=$_SESSION['PatID'];
     $name=$_POST['txtPName'];
     $nic=$_POST['txtNIC'];
     $cont=$_POST['txtConNo'];
     $email=$_POST['txtEmail'];
     $gen=$_POST['rbGen'];
     $cs=$_POST['rbCS'];
     $add=$_POST['txtAddress'];
	 
    //Use the below line to verify the data passing between php pages
    //echo 
 $patid.'<br>'.$name.'<br>'.$nic.'<br>'.$cont.'<br>'.$email.'<br>'.$gen.'<br>'.$cs.'<br>'.$add;

      $conn=mysqli_connect('localhost','root','','hnd_027_proj');
      if($conn){
              $queSave="INSERT INTO 
 patient2(PatID,PName,NIC,ConNo,Email,Gender,CivilStat,PAddress) 
 VALUES('$patid','$name','$nic','$cont','$email','$gen','$cs','$add')";
 
            if(mysqli_query($conn,$queSave)){
               echo '<table width="1005" border="0" align="center" cellpadding="5" cellspacing="0">
            
<tr>
        <td width="164" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="123" height="113" class="style2" /></td>
        <td width="849" height="134" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
  </tr>
  </table>
  <tr colspan="3">
                  <td align="center">
                        You have Successfully Save '.$patid.' to the Database!
                        </td>
</tr>
                     <tr>
                        <td align="center"><a href="PatientID.php"><img src="back-icon.png" width="50" height="50"></a></td>
                     </tr>
                     <tr>
                        <td align="center"><a href="Main.php"><img src="home-icon.png" width="50" height="50"></a></td>
                     </tr>';
                                                  }
             else{
                   echo 'Data NOT SAVE to the Database!',mysqli_error($conn);
                   }
                     }
        else{
              echo 'ERROR CODE:#0005564<br>Check you Connection or Contact your Administrator or Get Lost!',mysqli_error($conn);
              }
			  
             echo '</table>';
                                                    }
?>
</body>
</html>
