<?php
require("db.php");
global $conn;
$q = $_GET['q'];
$sql="SELECT * FROM user WHERE user_firstname LIKE '".$q."%' OR user_lastname LIKE '".$q."%'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $response=$row['user_firstname']." ".$row['user_lastname'];
  }
}
else {
  $response="Ingen resultater";
}
echo $response;
