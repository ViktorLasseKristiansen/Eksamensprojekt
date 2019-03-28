<?php
global $conn;
  $sql="SELECT * FROM user WHERE user_firstname LIKE %'$q'% OR user_lastname LIKE %'$q'%;
  $result = $conn->query($sql); 
 ?>
