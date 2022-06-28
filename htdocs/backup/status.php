<?php

{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 


if(isset($_POST['rid'])){

  $rid=$_POST['rid'];
  $oid=$_POST['oid'];
  $ent=$_POST['entitlement'];
        
$sql2 = "SELECT rid , oid , ent  FROM result where rid='".$rid."'AND oid='".$oid."'AND ent='".$ent."' limit 1";

$result2=$conn2->query($sql2);
    $rowcount = mysqli_num_rows($result2);
      
  if($rowcount==1){
        echo"<center><p style='color:red;'><b>YOU HAVE BEEN ALLOTED</b></p></center>";
}
else
{
  echo "NOT ALLOTED";
  exit();
}


}}



$conn2->close();

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
	
</center>


<style type="text/css">
  

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


<form name="book" method="post" action="status.php">
<table  border="1" width="80%" bgcolor="#99ff66" align="center" cellpadding="3"cellspacing="12">

<tr>
<td colspan=4><center><font size=4><b>STATUS</b></font></center></td>
</tr>
<br>

<br>
<br>
<tr>
<td><b>YOUR REGISTRATION ID :  </b></td>

<td><input type="text" size=25 name="rid">  MAX_SIZE=25</td>
</tr>
<br>
<tr>
<td><b>YOUR OFFICIAL ID :  </b></td>

<td><input type="text" size=25 name="oid">  MAX_SIZE=25</td>
</tr>
<br>
<tr>
<td><b>YOUR DESIRED ENTITLEMENT :  </b></td>

<td><select Name="entitlement">
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="B1">B1</option>
<option value="B2">B2</option>
<option value="C1">C1</option>
<option value="C2">C2</option>
<option value="D">D</option>
<option value="E">E</option>
</select></td>
</tr>
<br>
</table>

<br>
<br>
<center>
<input id="s1" type="submit" onclick="return check(this.form)" value="KNOW STATUS">
</center>
<br>
<br>
<center><div id="button"><a href="login.php"><b>CLICK HERE TO GO TO HOME</b></a></div>

</table>

</form>

<br>
<br>
</body>
</html>
