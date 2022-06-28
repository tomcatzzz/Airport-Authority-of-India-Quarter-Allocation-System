<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn10 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn10->connect_error) {
    die("Connection failed: " . $conn10->connect_error);
} 

if(isset($_POST['regid'])){

  $regid=$_POST['regid'];
  $empid=$_POST['empid'];

  $sql10="SELECT * from remarks where regid='".$regid."'AND empid='".$empid."'limit 1";



$result10 = $conn10->query($sql10);


if ($result10->num_rows > 0) {
    // output data of each row
   
}}
else echo "NOT ALLOWED";
 





/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ids";

// Create connection
$conn11 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn11->connect_error) {
    die("Connection failed: " . $conn11->connect_error);
} 


$sql11 = "INSERT INTO ids (rid,oid,empname,eid,reid)
VALUES ('$rid','$oid','$new','$new1','$new2')";
$conn11->query($sql11);








$conn10->close();
$conn1->close();

$conn->close(); */

$conn10->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <link rel="stylesheet" type="text/css" href="login1.css">
  <div class="container group">
    <div class="grid-1-5">
<center>


<br>
    <center><div id="button"><a href="login2.php"style="color: white"><b>CLICK HERE TO GO TO HOME</b></a></div>
</center>
</center>
</div>
</div>
</body>
</html>

