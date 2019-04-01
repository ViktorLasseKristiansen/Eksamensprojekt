<?php
require("db.php");
global $conn;
$q = $_GET['q'];
$sql="SELECT * FROM team WHERE team_name LIKE '%".$q."%' OR team_leader LIKE '%".$q."%'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $response=$row['team_name'].", ".$row['team_leader'];
  }
}
else {
  $response="Ingen resultater";
}
echo $response;
