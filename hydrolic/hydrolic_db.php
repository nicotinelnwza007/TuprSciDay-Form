<?php
	include '../config.php';

	$count_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM hydrolic";
	$count_result = mysqli_query($conn, $count_query);
	$row = mysqli_fetch_assoc($count_result);
	$current_teams = $row['team_count'];
	$num_members = 5;

	for ($i = 1; $i <= $num_members; $i++) {
		$teamname = htmlspecialchars($_POST["teamname"]);
		$name = htmlspecialchars($_POST["name$i"]);
		$surname = htmlspecialchars($_POST["surname$i"]);
		$studentid = htmlspecialchars($_POST["studentid$i"]);
		$room = htmlspecialchars($_POST["room$i"]);
		$number = htmlspecialchars($_POST["number$i"]);
		$tel = htmlspecialchars($_POST["tel$i"]);

		$sql = "INSERT INTO hydrolic (teamname, name, surname, studentid, room, number, tel) VALUES ('$teamname', '$name', '$surname', '$studentid', '$room', '$number', '$tel')";
		mysqli_query($conn, $sql);
	}

	mysqli_close($conn);
	header("Location: ../confirmation.html");
?>
