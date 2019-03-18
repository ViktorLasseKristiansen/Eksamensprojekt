<?php require("includes/header.php");?>
      <div class="wrapper">
          <h1>Forside</h1>
          <?php
          if (isset($_SESSION['user_id'])) {
            echo "<h3>Velkommen ".loadFirstname()." ".loadLastname()."</h3>";
          }
          ?>
      </div>
  </body>
</html>
