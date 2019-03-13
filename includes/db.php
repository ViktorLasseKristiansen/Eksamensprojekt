<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='login';

// opret forbindelse
$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn,"utf8");
