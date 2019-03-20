<?php
require("includes/header.php");
if (isset($_POST['signup_submit'])) {
  if (!empty($_POST['signup_submit'])
    OR  !empty($_POST['signup_firstname'])
    OR  !empty($_POST['signup_lastname'])
    OR  !empty($_POST['signup_email'])
    OR  !empty($_POST['signup_username'])
    OR  !empty($_POST['signup_password'])
    OR  !empty($_POST['signup_repassword']))
    {
    if ($_POST['signup_password'] == $_POST['signup_repassword']) {
        signup();
    }
    else {
      echo "De to kodeord var ikke ens";
    }
  }
  else {
    echo "Du udfyldte ikke alle felterne, prøv igen ;)";
  }
  }


 ?>
 <div class="wrapper">
   <h1>Signup</h1>
   <form action="signup.php" method="POST">
    <input type="text" name="signup_firstname" placeholder="fornavn">
    <input type="text" name="signup_lastname" placeholder="efternavn">
    <input type="email" name="signup_email" placeholder="email">
    <input type="text" name="signup_username" placeholder="Brugernavn">
    <input type="password" name="signup_password" placeholder="Kodeord">
    <input type="password" name="signup_repassword" placeholder="Gentag kodeord">
    <input type="submit" name="signup_submit" value="Opret Bruger">
  </form>
   <p><a href="login.php">Log Ind</a></p>

 </div>
 </body>
 </html>
