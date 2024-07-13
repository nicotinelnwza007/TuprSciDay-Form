<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Registration Count</title>
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="Box.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="first.php">SCIENCE WEEK 2024</a>
            </div>
    </nav>

    <?php
    include 'config.php';

    $count_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM student";
    $count_result = mysqli_query($conn, $count_query);

    if ($count_result) {
        $row = mysqli_fetch_assoc($count_result);
        $team_count = $row['team_count'];
    } else {
        $team_count = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

    <div class="box-container">
        <div class="box box-link">
            <div class="box-content">
                <h1>แข่ง hydrolic อะตุเอง</h1>
                <h2>by ครูทวารดี</h2>
                <p>ทีมที่สมัคร: <?php echo $team_count; ?></p>
                <a href="Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>แข่ง hydrolic อะตุเอง</h1>
                <h2>by ครูทวารดี</h2>
                <p>ทีมที่สมัคร: <?php echo $team_count; ?></p>
                <a href="Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>แข่ง hydrolic อะตุเอง</h1>
                <h2>by ครูทวารดี</h2>
                <p>ทีมที่สมัคร: <?php echo $team_count; ?></p>
                <a href="Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>แข่ง hydrolic อะตุเอง</h1>
                <h2>by ครูทวารดี</h2>
                <p>ทีมที่สมัคร: <?php echo $team_count; ?></p>
                <a href="Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
    </div>

    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>

</html>