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

echo"<center><p style='color:red;'><b>YOUR APPLICATION HAS BEEN FORWARDED TO THE HR DEPARTMENT</b></p></center><br>";


$sql10 = "SELECT name ,user_id FROM profile ORDER BY id DESC LIMIT 1";
$result10 = $conn10->query($sql10);


if ($result10->num_rows > 0) {
    // output data of each row
    while($row = $result10->fetch_assoc()) {
    	$new=$row['name'];
    	$new1=$row['user_id'];
    	$new2=substr($new ,0,4).substr($new1 ,-4);
       
        echo "<center><p style='color:red;'><b> YOUR REGISTRATION ID: ".$new2."</b></p></center><br>";
        $conn10->query("update profile set regid='$new2' where user_id = $new1");
       $sqlif="SELECT bpay from profile where regid = '$new2'";
        $ifselect=$conn10->query($sqlif);
        if($ifselect->num_rows > 0){
            while($row = $ifselect->fetch_assoc()){
                if($row['bpay']>20000) 
        
        {
         echo "<center><p style='color:red;'><b> You are eligible for the following type(s): A2,A1 </b></p></center><br>";
        } else echo "<center><p style='color:red;'><b>You are eligible for type(s) : A1 </b></p></center><br> ";
}
}else echo "no";
 
     }}else {
    echo "0 results";
}





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
echo "<center><p style='color:red;'><b>PLEASE NOTE DOWN THE ID</b></p></center>";

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

    <div id="button"><a href="fbook.php"style="color: white"><b>CLICK HERE TO DOWNLOAD YOUR FORM</b></a></div>
<br>
    <center><div id="button"><a href="login2.php"style="color: white"><b>CLICK HERE TO GO TO HOME</b></a></div>
</center>
</center>
</div>
</div>
</body>
</html>

