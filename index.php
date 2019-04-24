<?php require("includes/header.php");?>

<?php
if (!isset($_SESSION['user_id'])) {
  echo "<script>document.location.href='./login.php'</script>";
}
?>
      <div class="wrapper">
          <h1>Forside</h1>
          <?php
          if (isset($_SESSION['user_id'])) {
            echo "<h3>Velkommen ".loadFirstname()." ".loadLastname()."</h3>";
          }
          ?>
      </div>
<a href="nyt_forloeb.php">Opret forløb</a>
<a href="new_team.php">Opret hold</a>
<html>
<head>
<title></title>
</head>
<body>
<table>
	<tr>
		<th>Tid</th>
		<th>Man</th>
		<th>Tir</th>
		<th>Ons</th>
		<th>Tor</th>
		<th>Fre</th>
		<th>Lør</th>
		<th>Søn</th>
	</tr>
	<tr>
		<td>8:10-9:40</td>
		<td id="mon_first_module">Dansk</td>
		<td id="tue_first_module"></td>
		<td id="wed_first_module"></td>
		<td id="thu_first_module"></td>
		<td id="fri_first_module"></td>
		<td id="sat_first_module"></td>
		<td id="sun_first_module"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="pause" colspan="7">Pause</td>
	</tr>
	<tr>
		<td>10:00-11:30</td>
		<td id="mon_second_module">Dansk</td>
		<td id="tue_second_module"></td>
		<td id="wed_second_module"></td>
		<td id="thu_second_module"></td>
		<td id="fri_second_module"></td>
		<td id="sat_second_module"></td>
		<td id="sun_second_module"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="pause" colspan="7">Pause</td>
	</tr>
	<tr>
		<td>12:00-13:30</td>
		<td id="mon_third_module">Dansk</td>
		<td id="tue_third_module"></td>
		<td id="wed_third_module"></td>
		<td id="thu_third_module"></td>
		<td id="fri_third_module"></td>
		<td id="sat_third_module"></td>
		<td id="sun_third_module"></td>

	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="pause" colspan="7">Pause</td>
	</tr>
	<tr>
		<td>13:45-15:15</td>
		<td id="mon_fourth_module">Dansk</td>
		<td id="tue_fourth_module"></td>
		<td id="wed_fourth_module"></td>
		<td id="thu_fourth_module"></td>
		<td id="fri_fourth_module"></td>
		<td id="sat_fourth_module"></td>
		<td id="sun_fourth_module"></td>
	</tr>
</table>

<?php
global $conn;

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM team WHERE team_id='".$row['team_name']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_first_module").innerHTML = "'.$row2['team_name'].'";
</script>';
			}
		}
	}
}

else{
	echo "ingen moduler";
}
?>

</body>
</html>
  </body>
</html>
