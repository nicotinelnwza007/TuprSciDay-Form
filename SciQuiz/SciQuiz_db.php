<?php
include '../config.php';

$MAX_TEAMS = 2;

$conn = mysqli_connect("localhost", "root", "admin", "sciweek_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$count_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM sciquiz";
$count_result = mysqli_query($conn, $count_query);

if ($count_result) {
    $row = mysqli_fetch_assoc($count_result);
    $current_teams = $row['team_count'];

    if ($current_teams >= $MAX_TEAMS) {
        mysqli_close($conn);
        header("Location: ../max_teams_reached.html");
        exit();
    }
} else {
    echo "Error: " . mysqli_error($conn);
    mysqli_close($conn);
    exit();
}

$num_members = 2;
for ($i = 1; $i <= $num_members; $i++) {
    $teamname = htmlspecialchars($_POST["teamname"]);
    $name = htmlspecialchars($_POST["name$i"]);
    $surname = htmlspecialchars($_POST["surname$i"]);
    $studentid = htmlspecialchars($_POST["studentid$i"]);
    $room = htmlspecialchars($_POST["room$i"]);
    $number = htmlspecialchars($_POST["number$i"]);
    $tel = htmlspecialchars($_POST["tel$i"]);
    
    $sql = "INSERT INTO sciquiz (teamname, name, surname, studentid, room, number, tel) VALUES ('$teamname', '$name', '$surname', '$studentid', '$room', '$number', '$tel')";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
header("Location: ../confirmation.html");
exit();
?>
