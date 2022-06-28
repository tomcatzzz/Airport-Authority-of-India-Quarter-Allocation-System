<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['rid'])){

  $rid=$_POST['rid'];
  $oid=$_POST['oid'];

$sql= "SELECT id FROM register where id='".$rid."'limit 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " RECORD EXITS ::" . $row["id"]. "<br>";

    }
} else {
   
   echo "PLEASE PROVIDE CORRECT REGISTRATION ID";
exit();
}
}

$conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "official";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 

if(isset($_POST['oid'])){

  $rid=$_POST['rid'];
  $oid=$_POST['oid'];

$sql1= "SELECT id FROM official where id='".$oid."'limit 1";

$result1 = $conn1->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        echo " RECORD EXITS ::" . $row1["id"]. "<br>";
        
    }
} else {
   
    echo "PLEASE PROVIDE CORRECT OFFICIAL ID";
    exit();
}
}

$conn1->close();
 header('Location: http://localhost/fbook.php');
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


<form name="book" method="post" action="book.php">
<table  border="1" width="80%" bgcolor="#99ff66" align="center" cellpadding="3"cellspacing="12">

<tr>
<td colspan=4><center><font size=4><b>PLEASE PROVIDE THE FOLLOWINGS</b></font></center></td>
</tr>
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
</body>
</html>