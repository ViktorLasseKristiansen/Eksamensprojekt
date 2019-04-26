<?php
require("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <nav>
      <span><a href="index.php">LOGO</a></span>
      <ul>
        <li> <a href="index.php">Forside</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
        <li><a href="inbox.php">Inbox</a></li>
        <li><a href="includes/logout.php">Log ud</a></li>
      <?php else:?>
        <li><a href="login.php">Login</a></li>
      <?php endif; ?>
      </ul>
    </nav>
