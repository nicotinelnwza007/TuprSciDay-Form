<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SciDayForm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/Form.css">
    <link rel="stylesheet" href="../css/Navbar.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="../FirstPage.htm"><img src="../img/TuprLogo.png" alt="TuprLogo"></a>
            </div>
        </div>
    
    </nav>

  

   
    <form id="competitionForm" method="POST" action="smth_db.php" class="competition-form">
    <h1>Smth</h1>
        <div class='form-group'>
            <label for='teamname'>ชื่อทีม: </label>
            <input type='text' id='teamname' name='teamname' class='form-control' required>
        </div>
        <?php
        $num_members = 1;
        for ($i = 1; $i <= $num_members; $i++) {
            echo "
            <fieldset class='member-fieldset'>
                <legend>สมาชิกคนที่ $i</legend>
                <div class='form-group'>
                    <label for='name$i'>ชื่อ: </label>
                    <input type='text' id='name$i' name='name$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='surname$i'>นามสกุล: </label>
                    <input type='text' id='surname$i' name='surname$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='studentid$i'>เลขประจำตัวนักเรียน: </label>
                    <input type='text' id='studentid$i' name='studentid$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='room$i'>ห้อง: </label>
                    <input type='text' id='room$i' name='room$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='number$i'>เลขที่: </label>
                    <input type='text' id='number$i' name='number$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='tel$i'>เบอร์โทร: </label>
                    <input type='text' id='tel$i' name='tel$i' class='form-control' required>
                </div>
            </fieldset>
                  ";
        }
        ?>
        <input type="submit" value="Submit" class="submit-button">
    </form>
    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

    <script src="script.js"></script>

</body>


</html>