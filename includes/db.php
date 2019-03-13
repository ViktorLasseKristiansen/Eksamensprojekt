<?php
$dbhost='mysql30.unoeuro.com';
$dbuser='prjctteamu_com';
$dbpass='Testviktor123';
$dbname='prjctteamup_com_db2';

// opret forbindelse
$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn,"utf8");
