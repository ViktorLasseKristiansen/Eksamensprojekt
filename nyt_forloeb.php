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
        <input id="fornavn" type="text" name="fornavn" placeholder="Fornavn eller efternavn" onkeyup="gethint(this.value)">
        <p>Personer: <ul id="txtHint"></ul></p>
        <input id="fornavn" type="text" name="fornavn" placeholder="Fornavn eller efternavn" onkeyup="gethint(this.value)">
        <p>Personer: <ul id="txtHint2"></ul></p>
        <input type="text" name="signup_firstname" placeholder="Teams">
        <input type="text" name="signup_firstname" placeholder="Ledere">
    <input type="submit" name="opret_forloeb" value="Opret forloeb">
    <script>
function gethint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "includes/search_user.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script>
function gethint2(str) {
if (str.length == 0) {
    document.getElementById("txtHint2").innerHTML = "";
    return;
} else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint2").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "includes/search_team.php?q=" + str, true);
    xmlhttp.send();
}
}
</script>
 </form>
</div>
</body>
</html>
