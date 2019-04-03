<?php
session_start();
require("./includes/db.php");

function login(){
  global $conn;
  $user = mysqli_escape_string($conn,$_POST['login_username']);
  $password = mysqli_escape_string($conn,$_POST['login_password']);
  $sql="SELECT * FROM user WHERE user_email='$user'OR user_username='$user'";
  $result = $conn->query($sql);
  if ($result->num_rows >0) {
    while ($row =$result->fetch_assoc()) {
      $passCheck = password_verify($password, $row['user_password']);
      if ($passCheck == true) {
        $_SESSION['user_id'] = $row['user_id'];
      echo"<script type='text/javascript'>document.location.href='./';</script>";
      }
      else {
        echo "kodeordet var forkert, proev igen";
      }
    }
  }
  else {
    echo "der findes ingen bruger med denne email eller dette brugernavn.";
  }
}


function loadFirstname(){
  global $conn;
    $sql="SELECT user_firstname FROM user WHERE user_id='".$_SESSION['user_id']."'";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
      while ($row =$result->fetch_assoc()){
        return $row['user_firstname'];
      }
    }
}

function loadLastname(){
  global $conn;
    $sql="SELECT user_lastname FROM user WHERE user_id='".$_SESSION['user_id']."'";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
      while ($row =$result->fetch_assoc()){
        return $row['user_lastname'];
      }
    }
}

function signup(){
  global $conn;
  $firstname =mysqli_escape_string($conn,$_POST['signup_firstname']);
  $lastname =mysqli_escape_string($conn,$_POST['signup_lastname']);
  $email =mysqli_escape_string($conn,$_POST['signup_email']);
  $username =mysqli_escape_string($conn,$_POST['signup_username']);
  $password =mysqli_escape_string($conn,$_POST['signup_password']);
  // Her skrives en kryptering, password_hash er en opdateret krypteringsform fra php5,
  // PASSWORD_DEFAULT anvender seneste krypteringsversion.
  $hashpassword =password_hash($password,PASSWORD_DEFAULT);

  $sql="SELECT user_email FROM user WHERE user_email='$email'OR user_username='$username'";
  $result=$conn->query($sql);
  if($result->num_rows<1){
  $sql2="INSERT INTO user (user_firstname, user_lastname, user_email, user_username, user_password)
    VALUES ('$firstname', '$lastname', '$email', '$username', '$hashpassword')";
    if ($conn-> query($sql2) === TRUE) {
      // Bruger oprettet
      echo"<script type='text/javascript'>document.location.href='./login.php';</script>";
    }
    else {
      echo "Brugeren blev ikke oprettet pga. SQL fejl.";
    }
  }
  else {
    echo "denne mail eller dette brugernavn er allerede i brug";
  }
}
function nyt_forloeb(){
  global $conn;
  $forloeb_navn =mysqli_escape_string($conn,$_POST['forloeb_navn']);
  $start_dato =mysqli_escape_string($conn,$_POST['start_dato']);
  $start_tid =mysqli_escape_string($conn,$_POST['start_tid']);
  $slut_dato =mysqli_escape_string($conn,$_POST['slut_dato']);
  $slut_tid =mysqli_escape_string($conn,$_POST['slut_tid']);

  $sql="SELECT forløb_navn FROM forløb WHERE forløb_navn='$forloeb_navn'";
  $result=$conn->query($sql);
  if($result->num_rows<1){
  $sql2="INSERT INTO forløb (forløb_navn, start_dato, start_tid, slut_dato, slut_tid)
    VALUES ('$forloeb_navn', '$start_dato', '$start_tid', '$slut_dato', '$slut_tid')";
    if ($conn-> query($sql2) === TRUE) {
      // Bruger oprettet
      echo"<script type='text/javascript'>document.location.href='./forloebs_oversigt.php';</script>";
    }
    else {
      echo "Forloeb blev ikke oprettet pga. SQL fejl.";
    }
  }
  else {
    echo "der findes allerede et forløb med dette navn";
  }
};
function new_team(){
  global $conn;
  $team_name =mysqli_escape_string($conn,$_POST['team_name']);
  $team_leader =mysqli_escape_string($conn,$_POST['team_leader']);
  $team_member =mysqli_escape_string($conn,$_POST['team_member']);

  $sql="SELECT team_name FROM team WHERE team_name ='$team_name'";
  $result=$conn->query($sql);
  if($result->num_rows<1){
  $sql2="INSERT INTO team (team_name, team_leader, team_member)
    VALUES ('team_name', 'team_leader', 'team_member')";
    if ($conn-> query($sql2) === TRUE) {
      // Bruger oprettet
      echo"<script type='text/javascript'>document.location.href='./team_oversigt.php';</script>";
    }
    else {
      echo "Hold blev ikke oprettet pga. SQL fejl.";
    }
  }
  else {
    echo "der findes allerede et hold med dette navn";
  }
};
