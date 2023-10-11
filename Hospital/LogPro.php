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
			color: #FFFFFF;
	}
	body {
		  background-color:#FFFFFF;
	}
-->

</style>
</head>

<body>
<?php
    $un=$_POST['txtUn'];
    $pw=$_POST['txtPassword'];
	if(!empty($un) && !empty($pw)){
       $con=mysqli_connect('localhost','root','','hnd_027_proj');
       
       if($con){
          $queLog="SELECT * FROM usertbl WHERE Username='$un'";
          if(mysqli_query($con,$queLog)){
               $DataRec=mysqli_query($con,$queLog);
                   if(mysqli_num_rows($DataRec)>0){
                       $RowVal=mysqli_fetch_array($DataRec);
					   var_dump($RowVal);
                       
                   if($RowVal["Username"]==$un && $RowVal['Password']==$pw){
                      $_SESSION['LogUser']=$RowVal['RealName'];
                      $_SESSION['Un']=$RowVal['Username'];
                      $queInSch="INSERT INTO loginsch(Username,Login) VALUES('$un',(now()))";
                      if(mysqli_query($con,$queInSch)){
                     			 header("Location:Main.php");
                                                      } 
                                                 
                                            }
                                            
                  else{
                      echo 'LOGIN ERROR!<br>Incorrect Username or Password!';
                      }
                   }
                }
                
     else{
         echo 'Please Register before LOGIN! <br>Contact the Administrator!!!';
                }
             }
  else{
     echo '<b>404 SERVER NOT FOUND</b><br>GREAT VILLA Server is NOT 
         Connected! <br> Server under Construction, Try again Later!';
      }
    }
 else{
   echo '<p align="center">User or Password Cannot be a BLANK!!!</p>';
    }  
?>                                     
</body>
</html>
