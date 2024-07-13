
<?php
$num_members = 5;
for ($i = 1; $i <= $num_members; $i++) {
    $teamname = htmlspecialchars($_POST["teamname"]);
    $name = htmlspecialchars($_POST["name$i"]);
    $surname = htmlspecialchars($_POST["surname$i"]);
    $studentid = htmlspecialchars($_POST["studentid$i"]);
    $room = htmlspecialchars($_POST["room$i"]);
    $number = htmlspecialchars($_POST["number$i"]);
    $tel = htmlspecialchars($_POST["tel$i"]);

    $conn = mysqli_connect("localhost", "root", "admin");
    $db = mysqli_select_db($conn,"sciweek_db");
    $sql = "insert into hydrolic (teamname,name, surname, studentid, room, number, tel) values ('$teamname','$name', '$surname', '$studentid', '$room', '$number', '$tel')";
    mysqli_query($conn, $sql);
    print $sql;
}

$count_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM student";
$count_result = mysqli_query($conn, $count_query);

if ($count_result) {
    $row = mysqli_fetch_assoc($count_result);
    $team_count = $row['team_count'];
    echo "Number of teams registered: " . $team_count;
} else {
    echo "Error: " . mysqli_error($conn);
}


?>