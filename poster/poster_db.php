
<?php
include '../config.php';

$num_members = 1;
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
    $sql = "insert into poster (teamname,name, surname, studentid, room, number, tel) values ('$teamname','$name', '$surname', '$studentid', '$room', '$number', '$tel')";
    mysqli_query($conn, $sql);
    print $sql;
}

$count_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM poster";
$count_result = mysqli_query($conn, $count_query);

if ($count_result) {
  
    mysqli_close($conn);
    header("Location: ../confirmation.html");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}


?>