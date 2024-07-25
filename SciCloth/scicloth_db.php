
<?php
include '../config.php';

$num_members = 1;
$MAX_TEAMS_M4_6 = 20;
$MAX_TEAMS_M1_3 = 1;


$num_members = 6;
for ($i = 1; $i <= $num_members; $i++) {
    $teamname = htmlspecialchars($_POST["teamname"]);
    $name = htmlspecialchars($_POST["name$i"]);
    $surname = htmlspecialchars($_POST["surname$i"]);
    $studentid = htmlspecialchars($_POST["studentid$i"]);
    $room = htmlspecialchars($_POST["room$i"]);
    $number = htmlspecialchars($_POST["number$i"]);
    $tel = htmlspecialchars($_POST["tel$i"]);
    $sql = "INSERT INTO scicloth (teamname, name, surname, studentid, room, number, tel) VALUES ('$teamname', '$name', '$surname', '$studentid', '$room', '$number', '$tel')";
    mysqli_query($conn, $sql);
}


$conn = mysqli_connect("localhost", "root", "admin");
$db = mysqli_select_db($conn,"sciweek_db");


$count_query = "SELECT 
   SUM(CASE WHEN (room LIKE '6%' OR room LIKE '5%' OR room LIKE '4%') THEN 1 ELSE 0 END) AS M4_6,   
   SUM(CASE WHEN (room LIKE '1%' OR room LIKE '2%' OR room LIKE '3%') THEN 1 ELSE 0 END) AS M1_3	
FROM scicloth";
$count_result = mysqli_query($conn, $count_query);



if ($row = mysqli_fetch_array($count_result)) {

    $team_count_M4_6 = $row['M4_6']==""?0:$row['M4_6'];
    $team_count_M1_3 = $row['M1_3']==""?0:$row['M1_3'];
    
    if ($room*1>=101 && $room<=312) 
    {
        if ($team_count_M1_3 >= $MAX_TEAMS_M1_3) {
            mysqli_close($conn);
            header("Location: ../max_teams_reached.html");
            exit();
        } else {
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: ../confirmation.html");
            exit();
        }
    }  
    else 
    {
        if ($team_count_M4_6 >= $MAX_TEAMS_M4_6) {
            mysqli_close($conn);
            header("Location: ../max_teams_reached.html");
            exit();
        } else {
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: ../confirmation.html");
            exit();
        }
    }

} else {
    echo "Error: " . mysqli_error($conn);
    mysqli_close($conn);
}
?>
