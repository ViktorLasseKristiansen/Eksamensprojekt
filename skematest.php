<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			width: 100%;

		}
		table, tr, td, th{
			border-collapse: collapse;
			border: 1px solid red;
		}
		.pause{
			background: rgba(0,0,0,.5);
			text-align: center;
		}
	</style>
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

$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
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
$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_second_module").innerHTML = "'.$row2['team_name'].'";
</script>';
			}
		}
	}
}
$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_third_module").innerHTML = "'.$row2['team_name'].'";
</script>';
			}
		}
	}
}
$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_fourth_module").innerHTML = "'.$row2['team_name'].'";
</script>';
			}
		}
	}
}
$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_fifth_module").innerHTML = "'.$row2['team_name'].'";
</script>';
			}
		}
	}
}
$sql = "SELECT * FROM modules LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$sql2 = "SELECT * FROM teams WHERE team_id='".$row['module_team']."'";
		$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				echo '<script type="text/javascript">
	document.getElementById("mon_sixth_module").innerHTML = "'.$row2['team_name'].'";
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
