<?php
session_start();
require("./includes/db.php");

function login(){
  global $conn;
  $user = mysqli_escape_string($conn,$_POST['login_username']);
  $password = mysqli_escape_string($conn,$_POST['login_password']);
  $sql="SELECT * FROM users WHERE user_email='$user'OR user_username='$user'";
  $result = $conn->query($sql);
  if ($result->num_rows >0) {
    while ($row =$result->fetch_assoc()) {
      if ($password == $row['user_password']) {
        $_SESSION['user_id'] = $row['user_id'];
      echo"<script type='text/javascript'>document.location.href='./';</script>";
      }
      else {
        echo "kodeordet var forkert, prøv igen";
      }
    }
  }
  else {
    echo "der findes ingen bruger med denne email eller dette brugernavn.";
  }
}


function loadFirstname(){
  global $conn;
    $sql="SELECT user_firstname FROM users WHERE user_id='".$_SESSION['user_id']."'";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
      while ($row =$result->fetch_assoc()){
        return $row['user_firstname'];
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

  $sql="SELECT user_email FROM users WHERE user_email='$email'OR user_username='$username'";
  $result=$conn->query($sql);
  if($result->num_rows<1){
    $sql2="INSERT INTO users(user_firstname, user_lastname, user_email, user_username, user_password)
    VALUES('$user_firstname', '$user_lastname', '$user_email', '$user_username', '$hashpassword')";
    if ($conn->$query($sql2)=== TRUE) {
      // Bruger oprettet
      header("Location:login.php");
    }
    else {
      echo "Brugeren blev ikke oprettet pga. SQL fejl.";
    }
  }
  else {
    echo "denne mail eller dette brugernavn er allerede i brug";
  }
}
