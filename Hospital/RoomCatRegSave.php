<?php
 session_start();
    if(isset($_SESSION['LogUser'])){
       echo '<table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
	   <tr>
      <td align="right">
          You are Logged in as :'.$_SESSION['LogUser'].' <img src="Image/Person.png" width="30" height="30"> 
          (<a href="LogOut.php">LOGOUT [<img src="Image/logout.png" width="25" height="25">]</a>)
      </td>
     </tr>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
     
     $rt=$_POST['txtRT'];
	 $price=$_POST['txtPrice'];
	 
    //Use the below line to verify the data passing between php pages
    //echo 
 $rt.'<br>'.$price;

      $conn=mysqli_connect('localhost','root','','hnd_027_proj');
      if($conn){
              $queSave="INSERT INTO 
 RoomCat(RoomType,Price) 
 VALUES('$rt','$price')";
 
            if(mysqli_query($conn,$queSave)){
               echo '<tr>
                        <td align="center">
                        You have Successfully Save '.$rt.' to the Database!
                        </td>
                     </tr>
                     <tr>
                        <td align="center"><a href="RoomCatReg.php"><img src="Image/back.png" width="50" height="50"></a></td>
                     </tr>
                     <tr>
                        <td align="center"><a href="Main.php"><img src="Image/home.png" width="50" height="50"></a></td>
                     </tr>';
                                                  }
             else{
                   echo 'Data NOT SAVE to the Database!',mysqli_error();
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
