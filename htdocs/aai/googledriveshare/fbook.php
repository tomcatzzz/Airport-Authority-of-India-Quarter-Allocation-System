<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 






$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

$conn4 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn4->connect_error) {
    die("Connection failed: " . $conn4->connect_error);
} 








$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ids";

// Create connection
$conn3 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
} 
 if(isset($_POST['rid'])){       

  $rid=$_POST['rid'];
  $ent=$_POST['entitlement'];
        

$sql3 = "SELECT oid , reid, rid ,eid FROM ids where reid='".$rid."'limit 1";
$result3 =$conn3->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
      $new=$row3['oid'];
      $new1=$row3['rid'];
      $new2=$row3['reid'];
      $new3=$row3['eid'];
    
    
$sql4 = "SELECT sei FROM register where id='".$new1."'";
$result4 =$conn4->query($sql4);


if ($result4->num_rows > 0) {
    // output data of each row
    while($row1 = $result4->fetch_assoc()) {
      

      
      
      

$sql5 = "SELECT eid FROM ids";
$result5 =$conn3->query($sql5);
 while($row4 = $result5->fetch_assoc()) {
        
       if($row1["sei"]==$row4["eid"])
    {
      echo"YOUR SPOUSE HAS ALREADY BOOKED IT";
    }
}
      
}       
   } 
    


     if(isset($_POST['rid'])){       

  $rid=$_POST['rid'];
  $ent=$_POST['entitlement'];
        
$sql1= "SELECT id,entitlement FROM official where id='".$new."'limit 1";

$result1 = $conn1->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
      

       // echo "BOOKED : ".$row1["entitlement"]."<br>";
      
}       
    
} else {
   
    echo "NOT ALLOTED";
    exit();
}
}

}}
}



if(isset($_POST['rid'])){

  $rid=$_POST['rid'];
  
  $ent=$_POST['entitlement'];

$sql= "UPDATE category
SET space = space - 1
WHERE aai = '".$ent."'
AND space > 0";

$conn->query($sql);


}




    


{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 


if(isset($_POST['rid'])){

  $rid=$_POST['rid'];

  $ent=$_POST['entitlement'];
        
$sql2 = "INSERT INTO result (rid,oid,ent,reid,eid)
VALUES ('$new1','$new','$ent','$new2','$new3')";
$conn2->query($sql2);





// header('Location: http://localhost/confirm.php');  
}
}


$conn4->close();

$conn3->close();
$conn2->close();
$conn1->close();
$conn->close();
*/
$servername="localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 

if(isset($_POST['regid'])){

$regid=$_POST['regid'];
$cat_eligibility=$_POST['cat_eligibility'];
$allottment=$_POST['allottment'];
$house_id=$_POST['house_id'];

$sql="UPDATE regid set regid='$regid'";

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


<form name="book" method="post" action="fbook.php">
<table  border="1" width="80%" bgcolor="#99ff66" align="center" cellpadding="3"cellspacing="12">

<tr>
<td colspan=4><center><font size=4><b>BOOK</b></font></center></td>
</tr>
<br>

<br>
<br>
<tr>
<td><b>YOUR REGISTRATION ID :  </b></td>

<td><input type="text" size=25 name="rid">  MAX_SIZE=25</td>
</tr>
<br>

<br>
<tr>
<td><b>You are eligible for the following category: </b></td>

<td>
<!--<select Name="entitlement">
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="B1">B1</option>
<option value="B2">B2</option>
<option value="C1">C1</option>
<option value="C2">C2</option>
<option value="D">D</option>
<option value="E">E</option>
</select>--></td>
</tr>
<br>
</table>

<br>
<br>
<center>
<input id="s1" type="submit" onclick="return check(this.form)" value="CLICK TO BOOK">
</center>


</table>

</form>

<br>
<br>
</body>
</html>