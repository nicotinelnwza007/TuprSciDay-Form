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
    $count_sciquiz_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM sciquiz";
  
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
    

    $count_sciquiz_result = mysqli_query($conn, $count_sciquiz_query);
    if ($count_sciquiz_result) {
        $row = mysqli_fetch_assoc($count_sciquiz_result);
        $team_count_sciquiz = $row['team_count'];
    } else {
        $team_count_sciquiz = "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>

   

    <div class="box-container">
        <div class="box box-link">
        <div class="box-content">
                <h1>การแข่งขันการออกแบบโปสเตอร์</h1>
                <a href="pdf/Poster.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร:<?php echo htmlspecialchars($team_count_poster); ?> / 40</p>
                <h2>วันที่แข่ง : 13 ส.ค. 67 </h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
                <a href="poster/poster.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การอบรมการแข่งขันแขนกลไฮดรอลิก</h1>
                <a href="pdf/Hydrolicarm.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร:  <?php echo htmlspecialchars($team_count_hydrolic); ?></p>
                <h2>วันที่แข่ง : 13-16 ส.ค. 67</h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
                <a href="hydrolic/Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>การแข่งขันตอบปัญหาวิทยาศาสตร์และเทคโนโลยี</h1>
                <a href="img/SciQuiz.png" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร: <?php echo htmlspecialchars($team_count_sciquiz); ?> / 50</p>
                <h2>วันที่แข่ง : 19 ส.ค. 67 </h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
                <a href="Sciquiz/SciQuiz.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันการแสดงทางวิทยาศาสตร์ (Science Show)</h1>
                <a href="img/SciSHow.JPG" class="details">คลิกดูรายละเอียด</a>
                <h2>วันที่แข่ง : 20 ส.ค. 67 </h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
            </div>
        </div>
        <div class="box box-link">
        <div class="box-content">
                <h1>การแข่งขัน Sci-Tech Clothing (ชุดวิทย์)</h1>
                <a href="pdf/Sccloth.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร: <?php echo htmlspecialchars($team_count_sciquiz); ?> / 30</p>
                <h2>วันที่แข่ง : 21 ส.ค. 67 </h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
                <a href="SciCloth/scicloth.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันโครงงานวิทยาศาสตร์และเทคโนโลยี ประเภททดลองและประเภทสิ่งประดิษฐ์</h1>
                <a href="pdf/SciProject.pdf" class="details">คลิกดูรายละเอียด</a>
                <h2>วันที่แข่ง : 23 ส.ค. 67 </h2>
                <h3> วันปิดรับสมัคร : 13-16 ส.ค. 67 </h3>
            </div>
        </div>
    </div>

    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>

</html>