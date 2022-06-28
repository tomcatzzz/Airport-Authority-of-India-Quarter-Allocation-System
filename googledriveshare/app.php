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




$sql10 = "SELECT name,regid,user_id,dept FROM profile group by dept";
$result10 = $conn10->query($sql10);


if ($result10->num_rows > 0) {
    // output data of each row
    while($row = $result10->fetch_assoc()) {
    	$new=$row['name'];
    	$new1=$row['user_id'];
    	$new2=$row['regid'];
      $new3=$row['dept'];
       
        echo "<center><p style='color:red;'><b> NAME: ".$new." <pre> DEPARTMENT: ".$new3."</pre><pre>  EMPLOYEE ID: ".$new1." </pre> <pre> REGISTRATION ID: ".$new2."</pre></b></p></center><br>";
    
 
 }
}
else echo "NOT ALLOWED";
 



$conn10->close();


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
<td colspan="4"><center><font size=4><b>CHECK FORM</b></font></center></td>
</tr>
<tr><td>
<center><span style="display:inline-block; width: 1000px;">
<div id="button"><a href="fbook2.php"style="color: white"><b>CLICK HERE TO DOWNLOAD THE FORM</b></a></div>
</span></center>
</td>
</tr>
</table> 
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