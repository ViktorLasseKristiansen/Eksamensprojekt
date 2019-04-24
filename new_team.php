<?php
require("includes/header.php");
if (isset($_POST['opret_team'])){
  if(!empty($_POST['team_name'])
  OR !empty($_POST['team_leader'])
  OR !empty($_POST['team_member']))
  {
    new_team();
  }
}
?>
<form action="new_team.php" method="POST">
  <h1>Opret nyt hold</h1>
  <p><b>Hold Navn:</b></p>
  <input type="text" name="team_name">
  <p><b>Leder:</b></p>
  <input type="text" name="team_leader">
  <input type="text" name="team_member">
  <input type="submit" name="opret_team" value="opret_team">
</form>
