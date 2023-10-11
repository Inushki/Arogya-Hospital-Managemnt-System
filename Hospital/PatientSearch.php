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
	background-color: #FFFFFF;
}
.style1 {
       font-size: 20px;
       font-weight: bold;
       font-style: italic;
	   color:#FFFFFF;
}
.style2 {
       font-family: Arial, Helvetica, sans-serif;
       color: #000099;
}
.style3 {
        font-size: 16px;
        color:#000000;
	font-weight: bold;
}
.style5 {font-weight: bold; color: #000066; font-size: 24px;}
.style7 {font-weight: bold; color: #990033; font-size: 24px; }

.style10 {
     font-size: 12px;
     font-family: "Century Gothic";
     color: #00FFFF;
     font-style: italic;
}
.style4 {
	font-size: 60px;
	color:#FFFFFF;
	}
-->
</style>
</head>

<body>
<?php
      echo '<tr>
              <td>
                 <form id="form1" name="form1" method="post" action="Result.php">
                  <table width="1067" height="541" border="0" align="center" cellpadding="5" cellspacing="0">
<tr>
               <td width="113" valign="middle" bgcolor="#000066"><img src="8920e8782358e8296fb5b242a4f9204f.jpg" width="121" height="113" class="style2" /></td>
               <td height="57" colspan="3" align="center" valign="middle" bgcolor="#000066" class="style4">AROGYA HEALTH CARE</td>
            </tr>
 
            <tr>
               <td colspan="3" bgcolor="#000066"><span class="style1">SEARCH</span></td>
            </tr>
            <tr>
               <td width="113" height="78" class="style3">Patient ID</td>
           <td width="219">
                   <input name="txtCID" type="text" class="style2" id="txtPatID" size="10" maxlength="10" /> 
            </td>
               <td width="705"><img src="search-icon.png" width="50" height="50"></td>
            </tr>
            <tr>
                <td height="74" class="style3">&nbsp;</td>
                <td colspan="2"><span class="style10">* To Search All Records keep the Text Box BLANK!</span></td>
            </tr>
            <tr>
            <td height="114"><label>
             <div align="center">
                 <input name="btnSearch" type="submit" class="style5" id="btnSearch" value="SEARCH" />
                 </div>
               </label></td>
           <td colspan="2"><div align="center">
               <input name="btnCl" type="reset" class="style7" id="btnCl" value="CLEAR" />
               </div></td>
            </tr>
            <tr>
                <td colspan="3" bgcolor="#000066">&nbsp;</td>
            </tr>
        </table>
       </form>
                  </td>
            </tr>
                        </table>';
                                              }
?>
</body>
</html>
