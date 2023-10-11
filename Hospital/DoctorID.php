<?php
   session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
       $conn=mysqli_connect('localhost','root','','hnd_027_proj');
       if($conn){
           $queGet="SELECT DocSerial FROM doctor";
           if(mysqli_query($conn,$queGet)){
                $rec=mysqli_query($conn,$queGet);

           if(mysqli_num_rows($rec)>0){
                  $maxSer="SELECT MAX(DocSerial) FROM doctor";
                  if(mysqli_query($conn,$maxSer)){
                        $maxId=mysqli_query($conn,$maxSer);


                        while($val=mysqli_fetch_array($maxId)){
                           $sid=$val['MAX(DocSerial)'];
                           $sid+=1;
 
               }
                                                  }
                  else{
                        echo 'Maximum Serial is NOT Selected!',mysqli_error($conn);
                      }
                                      }
            else{
                  $sid='1';
                }
                $_SESSION['DocID']='AHCD-'.$sid;
                header("Location:DoctorReg.php");
                                 }
      else{
            echo 'Data NOT Selected from the Database!',mysqli_error($conn);
          }
             }
   else{
           echo 'The Database Connection is failed!',mysqli_error($conn);
         }
?>
</body>
</html>
