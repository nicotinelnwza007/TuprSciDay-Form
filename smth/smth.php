<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SciDayForm</title>
    <link rel="stylesheet" href="../css/Form.css">
    <link rel="stylesheet" href="../css/Navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   

<form id="competitionForm" method="POST" action="smth_db.php" class="competition-form">
        <div class="Details">
            <div class="header">Register</div>
            <div class="form-name">
                รายการ <div class="highlight">Smth Competition</div>
            </div>
            <div class="descrpition">
                โปรดกรอกข้อมูลให้ถูกต้องครบถ้วนเพื่อทำการลงทะเบียน
            </div>
        </div>
        </div>
        <div class='teamname-container'>
            <label for='teamname'>ชื่อทีม: </label>
            <div class='form-container'>
                <input type='text' id='teamname' name='teamname' class='form-control' required>
            </div>

            <div class="border"></div>
            <?php
            $num_members = 5;
            for ($i = 1; $i <= $num_members; $i++) {
                echo "
            <div class='member-fieldset'>
                <div class='members'>สมาชิกคนที่ $i</div>
                <div class='form-group'>
                    <label for='name$i' class='form'>ชื่อ: </label>
                 <div class='form-container'>
                    <input type='text' id='name$i' name='name$i' class='form-control' required>
                    </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='surname$i' class='form'>นามสกุล: </label>
                     <div class='form-container'>
                    <input type='text' id='surname$i' name='surname$i' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='studentid$i' class='form'>เลขประจำตัวนักเรียน: </label>
                     <div class='form-container'>
                    <input type='text' id='studentid$i' name='studentid$i' class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for='room$i' class='form'>ห้อง: </label>
                     <div class='form-container'>
                    <input type='text' id='room$i' name='room$i' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='number$i' class='form'>เลขที่: </label>
                     <div class='form-container'>
                    <input type='text' id='number$i' name='number$i' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='tel$i' class='form'>เบอร์ติดด่อ: </label>
                    <div class='phone-input-container'>
                        <input type='text' id='tel$i' name='tel$i' class='form-control phone-input' placeholder='087-654-3210' required>
                    </div>
                </div>
            </div>";
            }
            ?>
            <div class="submit-container">
                <input type="submit" value="ดำเนินการต่อ" class="submit-button">
            </div>
    </form>
    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>


</html>