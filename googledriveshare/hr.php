<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "demo";

$mysqli = new mysqli("localhost", "root", "", "demo");

if(isset($_POST['username'])){

  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from login where user='".$uname."'AND pass='".$password."'limit 1";

  $result=$mysqli->query($sql);
    $rowcount = mysqli_num_rows($result);
      
  if($rowcount==1){
        header('Location: http://localhost/app.php');
}
else
{
  echo "ACCESS DENIED";
  exit();
}


}


?>
 




<html>
<head>
<title>AIRPORTS AUTHORITY OF INDIA</title>
</head>
 
  
<body>
  <div class="container group">
    <div class="grid-1-5">
  <center><img class="centerImage"src="untitled.png" alt="Smiley face" height="250" width="250">
  
  <h1><font color="#cc0000">AIRPORTS AUTHORITY OF INDIA</font></h1>
  <h1><font color="#ff6600">WELCOME</font></h1>
  <h1><font color="#ff6600">Quarter Allocation System</font></h1>
 
</center>

</div>
</div>


<br>
<br>
<style type="text/css">
  #r1{
     background-color: #ff1a1a; 
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }

    #s1{
     background-color: #009933; 
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }


</style>

  <link rel="stylesheet" type="text/css" href="login1.css">
  <div class="container group">
    <div class="grid-1-5">
  
      
<form name="loginForm" method="post" action="#">
<table  border="5"  width="50%" bgcolor="#99ff66"align="center" cellpadding="12" >

<tr>
<td colspan="4"><center><font size=4><b>HR DEPARTMENT</b></font></center></td>
</tr>
<br>
<tr>
<td><b>Username :  </b></td>

<td><input type="text" size=25 name="username">  </td>
</tr>
<br>
<tr>
<td ><b >Password :  </b></td>

<td><input type="Password" size=25 name="password">  </td>
</tr>
<br>
</table>
<br>
<br>
<center>
<input id="r1" type="Reset" class="button" >
<span style="display:inline-block; width: 150px;"></span>
<input id="s1" class="button" type="submit" onclick="return check(this.form)" value="Login">


</center>





    
    </form>


    </div>
        
  </div>
<br>
<br>
<center><div id="button"><a href="login2.php"style="color: white"><b>CLICK HERE TO GO TO HOME</b></a></div>
</center>
<br>






<center><h3><font color="#cc0000">For any info regarding application form or login details, please contact : commn@aai.aero</font></h3></center>
<br>
<br>
</body>
</html>