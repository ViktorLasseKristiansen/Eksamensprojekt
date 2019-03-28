<?php
require("includes/header.php");
if (isset($_POST['opret_forloeb'])) {
  if (!empty($_POST['forloeb_navn'])
    OR  !empty($_POST['start_dato'])
    OR  !empty($_POST['start_tid'])
    OR  !empty($_POST['slut_dato'])
    OR  !empty($_POST['slut_tid']))
    {
     nyt_forloeb();
   }
  else {
    echo "Du udfyldte ikke alle felterne, proev igen";
  }
  }
?>
<div class="wrapper">
  <h1>Opret Nyt Forloeb</h1>
    <form action="nyt_forloeb.php" method="POST">
      <p><b>Angiv forloebsnavn:</b></p>
      <input type="text" name="forloeb_navn" placeholder="">
      <p><b>Tidsperiode:</p>
      <p>Fra:
        <input type="date" name="start_dato" placeholder="Angiv periode">
        <input type="time" name="start_tid" placeholder="Angiv periode">
        <br><br>Til:
        <input type="date" name="slut_dato" placeholder="Angiv periode">
        <input type="time" name="slut_tid" placeholder="Angiv periode">
      </b></p>
        <input type="text" name="signup_firstname" placeholder="Personer">
        <input type="text" name="signup_firstname" placeholder="Teams">
        <input type="text" name="signup_firstname" placeholder="Ledere">
    <input type="submit" name="opret_forloeb" value="Opret forloeb">

 </form>
</div>
</body>
</html>
