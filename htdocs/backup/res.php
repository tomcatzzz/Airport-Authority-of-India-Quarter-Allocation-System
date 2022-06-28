<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "residential";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 

if (isset($_POST['submit'])) {
  # code...

$padd = $_POST['padd'];
$oacc = $_POST['oacc'];
$loan = $_POST['loan'];
$gloan = $_POST['gloan'];



$sql = "INSERT INTO residential (padd,oacc,loan,gloan)
VALUES ('$padd','$oacc','$loan','$gloan')";

if (!mysqli_query($conn,$sql)) {
       echo "Error: " .$sql. "<br>" .$conn->error;
} else {

     header('Location: http://localhost/output.php');  
}

}
$conn->close();
?>








<html>
<head>
<title>RESIDENTIAL</title>
</head>
<center><img class="centerImage"src="untitled.png" alt="Smiley face" height="250" width="250">
	<h1>AIRPORT AUTHORITY OF INDIA</h1>
	<h2>WELCOME</h2>
	<h2>Quarter Allocation System</h2>
</center>


<table border="5" cellpadding="3" width="100%" align="center"
cellspacing="3">
  <tr>
    <td bgcolor="#33ff33" ><center><font size="4"><b>REGISTRATION</b></center></font></center></td>
      <td bgcolor="#33ff33"><center><font size="4"><b>OFFICIAL DETAILS</b></center></font></center></td>
          <td bgcolor="#42b3f4"><center><font size="4"><b>RESIDENTIAL DETAILS</b></center></font></center></td>

  </tr>
</table>
<br>
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
<form action="res.php" method="post">

<body bgcolor="#ccffe6">
<table style="font-weight: bold; font-size: 18" border="1" cellpadding="3" width="80%" bgcolor="#ffcccc" align="center"
cellspacing="12">

<tr>
<td colspan=2>
<center><font size=4><b>RESIDENTIAL FORM</b></font></center>
</td>
</tr>

<tr>
<td>1) Present Residential Address</td>
<td><input type=text name=padd size="30"></td>
</tr>

<tr>
<td>2) Are you or or spouse occupying accomadation alloted by any departmental or any other pool</td>
<td><input type="radio" name="oacc" value="yes" size="10">YES
<input type="radio" name="oacc" value="no" size="10">NO</td>
</tr>


<tr>
<td>3) Sanctioned housing / building loan?</td>
<td><input type="radio" name="loan" value="yes" size="10">YES
<input type="radio" name="loan" value="no" size="10">NO</td>
</tr>
<tr>
<td>4) Whether applied for housing loan from any other source other than govt.?</td>
<td><input type="radio" name="gloan" value="yes" size="10">YES
<input type="radio" name="gloan" value="no" size="10">NO</td>
</tr>
</table>
<br>
<br>
<center><input type="reset" id="r1"/>

	<span style="display:inline-block; width: 50px;"></span>
<input id="s1" type="submit" value="Submit Form" name="submit"/>
</center>

</form>
<br>
<br>
</body>
</html>
