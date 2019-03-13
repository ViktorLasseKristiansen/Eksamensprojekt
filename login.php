<?php require("includes/header.php");

if (isset($_POST['login_submit'])) {
  if (!empty($_POST['login_username']) && !empty($_POST['login_submit'])) {
    login();
  }
}
?>
<div class="wrapper">
  <h1>Log Ind</h1>
  <form method="POST" action="login.php" >

<input type="text"
  name="login_username"
  placeholder="Username/Email">

<input type="password"
  name="login_password"
  placeholder="Password">

<input type="submit"
  name="login_submit"
  value="Log Ind">
  </form>
  <p><a href="signup.php">Opret bruger</a></p>
</div>
