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
        header('Location: http://localhost/mid.php');
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
<title>AIRPORT AUTHORITY OF INDIA</title>
</head>
<body bgcolor="#ccffe6">
	<center><img class="centerImage"src="untitled.png" alt="Smiley face" height="250" width="250">
	<h1>AIRPORT AUTHORITY OF INDIA</h1>
	<h2>WELCOME</h2>
	<h2>Quarter Allocation System</h2>
	<a href="https://www.aai.aero/en/system/files/employee_corner/13.%20%20Allotment%20rules.pdf">Click here for Accomodation Rules</a><br>
	<a href="https://www.aai.aero/hi/system/files/employee_corner/Housing%20Allotment%20Revised%20Scheme.pdf">For Accomodation Rules and forms click here:</a>
</center>

<br>
<center><div id="button"><a href="status.php"><b>CLICK HERE TO KNOW YOUR BOOKING STATUS</b></a></div>
</center>

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
      <h2>Basic</h2>
      <h3><span class="uppercase">Free</span></h3>
      <p>10,000 monthly visits</p>
      <ul>
        <li>Limited Email Support</li>
        <li>Unlimited Data Transfer</li>
        <li>10GB Local Storage</li>
      </ul>
      <a href="" class="button">Sign Up</a>
    </div>
        
  </div>


<form name="loginForm" method="post" action="#">
<table  border="1" width="50%" bgcolor="#99ff66" align="center" cellpadding="3"cellspacing="12">

<tr>
<td colspan=4><center><font size=4><b>AIRPORT AUTHORITY OF INDIA</b></font></center></td>
</tr>
<br>
<tr>
<td><b>Username :  </b></td>

<td><input type="text" size=25 name="username">  MAX_SIZE=25</td>
</tr>
<br>
<tr>
<td><b>Password :  </b></td>

<td><input type="Password" size=25 name="password">  MAX_SIZE=25</td>
</tr>
<br>
</table>
<br>
<br>
<center>
<input id="r1" type="Reset">
<span style="display:inline-block; width: 50px;"></span>
<input id="s1" type="submit" onclick="return check(this.form)" value="Login">
</center>



</form>

<br>
<br>





<center><h3>For any info regarding application form or login details, please contact : commn@aai.aero</h3></center>
<br>
<br>
</body>
</html>