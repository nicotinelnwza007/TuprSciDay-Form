<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Registration Count</title>
    <link rel="stylesheet" href="css/Box.css">
    <link rel="stylesheet" href="css/Navbar.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="FirstPage.html">SCIENCE WEEK 2024</a>
            </div>
    </nav>

    <?php
    include 'config.php';

    $count_hydrolic_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM hydrolic";
    $count_poster_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM poster";
    $count_smth_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM smth";
  
    $count_hydrolic_result = mysqli_query($conn, $count_hydrolic_query);
    if ($count_hydrolic_result) {
        $row = mysqli_fetch_assoc($count_hydrolic_result);
        $team_count_hydrolic = $row['team_count'];
    } else {
        $team_count_hydrolic = "Error: " . mysqli_error($conn);
    }
    

    $count_poster_result = mysqli_query($conn, $count_poster_query);
    if ($count_poster_result) {
        $row = mysqli_fetch_assoc($count_poster_result);
        $team_count_poster = $row['team_count'];
    } else {
        $team_count_poster = "Error: " . mysqli_error($conn);
    }
    

    $count_smth_result = mysqli_query($conn, $count_smth_query);
    if ($count_smth_result) {
        $row = mysqli_fetch_assoc($count_smth_result);
        $team_count_smth = $row['team_count'];
    } else {
        $team_count_smth = "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>

   

    <div class="box-container">
        <div class="box box-link">
            <div class="box-content">
                <h1>Hydrulics Arms Competiton</h1>
                <h2>อภิสันต์ สามัญตา</h2>
                <p>ทีมที่สมัคร:  <?php echo htmlspecialchars($team_count_hydrolic); ?></p>
                <a href="hydrolic/Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>Sci week</h1>
                <h2>อภิสันต์ สามัญตา</h2>
                <p>ทีมที่สมัคร:<?php echo htmlspecialchars($team_count_poster); ?></p>
                <a href="poster/poster.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>แข่ง hydrolic อะตุเอง</h1>
                <h2>อภิสันต์ สามัญตา</h2>
                <p>ทีมที่สมัคร: <?php echo htmlspecialchars($team_count_smth); ?></p>
                <a href="smth/smth.php" class="btn-register">Register</a>
            </div>
        </div>
    </div>

    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>

</html>