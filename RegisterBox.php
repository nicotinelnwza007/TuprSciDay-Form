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
                <img src="img/tuprllogo2.jpg" class="tuprlogo">
                <a href="FirstPage.html">SCIENCE WEEK 2024</a>
                <div class="description">วันวิทยาศาสตร์และเทคโนโลยี "เด็กช่างคิด วิทย์สร้างฝัน"</div>
            </div>
    </nav>
<!-- 
    <?php
    include 'config.php';

    $count_hydrolic_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM hydrolic";
    $count_poster_query = "SELECT COUNT(DISTINCT studentid) AS studentid_count FROM poster";
    $count_sciquiz_query = "SELECT COUNT(DISTINCT teamname) AS team_count FROM sciquiz";

    $count_poster_query_M1_M3 = "
SELECT 
    SUM(CASE WHEN (room LIKE '1%' OR room LIKE '2%' OR room LIKE '3%') THEN 1 ELSE 0 END) AS M1_3	
FROM poster";

    $count_poster_query_M4_M6 = "
SELECT SUM(CASE WHEN (room LIKE '6%' OR room LIKE '5%' OR room LIKE '4%') 
THEN 1 ELSE 0 END) AS M4_6 FROM poster";

    $count_scicloth_query_M1_M3 = "
SELECT 
    SUM(CASE WHEN (room LIKE '1%' OR room LIKE '2%' OR room LIKE '3%') THEN 1 ELSE 0 END) AS M1_3	
FROM scicloth";


    $count_scicloth_query_M4_M6 = "
SELECT SUM(CASE WHEN (room LIKE '6%' OR room LIKE '5%' OR room LIKE '4%') 
THEN 1 ELSE 0 END) AS M4_6 FROM scicloth";


    $count_distinct_studentid_query = "
SELECT COUNT(DISTINCT studentid) AS studentid_count FROM (
    SELECT studentid FROM poster
    UNION
    SELECT studentid FROM scicloth
) AS combined";


    $conn = new mysqli($servername, $username, $password, $dbname);


    $result_poster_M1_M3 = $conn->query($count_poster_query_M1_M3);
    $result_poster_M4_M6 = $conn->query($count_poster_query_M4_M6);
    $result_scicloth_M1_M3 = $conn->query($count_scicloth_query_M1_M3);
    $result_scicloth_M4_M6 = $conn->query($count_scicloth_query_M4_M6);
    $result_studentid_count = $conn->query($count_distinct_studentid_query);

    $row_poster_M1_M3 = $result_poster_M1_M3->fetch_assoc();
    $row_poster_M4_M6 = $result_poster_M4_M6->fetch_assoc();
    $row_scicloth_M1_M3 = $result_scicloth_M1_M3->fetch_assoc();
    $row_scicloth_M4_M6 = $result_scicloth_M4_M6->fetch_assoc();
    $row_studentid_count = $result_studentid_count->fetch_assoc();


    // echo "M1-M3 Posters: " . $row_poster_M1_M3['M1_3'] . "<br>";
    // echo "M4-M6 Posters: " . $row_poster_M4_M6['M4_6'] . "<br>";
    // echo "M1-M3 Scicloths: " . $row_scicloth_M1_M3['M1_3'] . "<br>";
    // echo "M4-M6 Scicloths: " . $row_scicloth_M4_M6['M4_6'] . "<br>";
    // echo "Distinct Student IDs: " . $row_studentid_count['studentid_count'] . "<br>";


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
        $team_count_poster = $row['studentid_count'];
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

    // echo "M1-M3 Posters: " . $row_M1_M3['M1_3'] . "<br>";
    // echo "M4-M6 Posters: " . $row_M4_M6['M4_6'] . "<br>";


    mysqli_close($conn);
    ?> -->



    <div class="box-container">
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันการออกแบบโปสเตอร์</h1>
                <a href="pdf/Poster.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร ม.ต้น: <?php echo htmlspecialchars($row_poster_M1_M3['M1_3']); ?> / 20</p>
                <p>ทีมที่สมัคร ม.ปลาย: <?php echo htmlspecialchars($row_poster_M4_M6['M4_6']); ?> / 20</p>
                <h2>วันที่แข่ง : 13 ส.ค. 67  <br> สถานที่แข่ง : ห้อง 324</h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
                <a href="poster/poster.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การอบรมการแข่งขันแขนกลไฮดรอลิก</h1>
                <a href="pdf/Hydrolicarm.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร: <?php echo htmlspecialchars($team_count_hydrolic); ?> / ไม่จำกัดจำนวน</p>
                <h2>วันที่แข่ง : 13-16 ส.ค. 67 <br> สถานที่แข่ง : หอประชุมโรงเรียนฯ</h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
                <a href="hydrolic/Hydrolic.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันตอบปัญหาวิทยาศาสตร์และเทคโนโลยี</h1>
                <a href="img/SciQuiz.png" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร: <?php echo htmlspecialchars($team_count_sciquiz); ?> / 50</p>
                <h2>วันที่แข่ง : 19 ส.ค. 67 <br> สถานที่แข่ง : หอประชุมโรงเรียนฯ </h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
                <a href="Sciquiz/SciQuiz.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันการแสดงทางวิทยาศาสตร์ <br>(Science Show)</h1>
                <a href="img/SciSHow.JPG" class="details">คลิกดูรายละเอียด</a>
                <h2>วันที่แข่ง : 20 ส.ค. 67<br> สถานที่แข่ง : หอประชุมโรงเรียนฯ </h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขัน Sci-Tech Clothing (ชุดวิทย์)</h1>
                <a href="pdf/Sccloth.pdf" class="details">คลิกดูรายละเอียด</a>
                <p>ทีมที่สมัคร ม.ต้น:  <?php echo htmlspecialchars($row_scicloth_M1_M3['M1_3']); ?> / 30</p>
                <p>ทีมที่สมัคร ม.ปลาย: <?php echo htmlspecialchars($row_scicloth_M4_M6['M4_6']); ?> / 30</p>
                <h2>วันที่แข่ง : 21 ส.ค. 67<br> สถานที่แข่ง : หอประชุมโรงเรียนฯ </h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
                <a href="SciCloth/scicloth.php" class="btn-register">Register</a>
            </div>
        </div>
        <div class="box box-link">
            <div class="box-content">
                <h1>การแข่งขันโครงงานวิทยาศาสตร์และเทคโนโลยี ประเภททดลองและประเภทสิ่งประดิษฐ์</h1>
                <a href="pdf/SciProject.pdf" class="details">คลิกดูรายละเอียด</a>
                <h2>วันที่แข่ง : 23 ส.ค. 67<br> สถานที่แข่ง : หอประชุมโรงเรียนฯ </h2>
                <h3> วันปิดรับสมัคร : 9 ส.ค. 67 </h3>
            </div>
        </div>
    </div>

    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>

</html>