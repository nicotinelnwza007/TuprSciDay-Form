<?php
    $todayDate = new DateTime();
    $dead_line = new DateTime('2024-08-09');
    //echo 'aaa' . $todayDate . ' ' . $dead_line;
    if ($todayDate > $dead_line) {
        header('Location: ../notify.html');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SciDayForm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Form.css">
    <link rel="stylesheet" href="../css/Navbar.css">
</head>

<body>
<form id="competitionForm" method="POST" action="poster_db.php" class="competition-form">
        <div class="Details">
            <div class="header">Register</div>
            <div class="form-name">
                รายการ <div class="highlight">การแข่งขันการออกแบบโปสเตอร์</div>
            </div>
            <div class="descrpition">
                โปรดกรอกข้อมูลให้ถูกต้องครบถ้วนเพื่อทำการลงทะเบียน
            </div>
        </div>
        </div>
        <!-- <div class='teamname-container'>
            <label for='teamname'>ชื่อผลงาน: </label>
            <div class='form-container'>
                <input type='text' id='teamname' name='teamname' class='form-control' required>
            </div> -->

            <div class="border"></div>
            <?php
            $num_members = 1;
            for ($i = 1; $i <= $num_members; $i++) {
                echo "
            <div class='member-fieldset'>
                <div class='members'>สมาชิกคนที่ $i</div>
                  <div class='form-group'>
                    <label for='studentid$i' class='form'>เลขประจำตัวนักเรียน : </label>
                     <div class='form-container'>
                   <input type='number' id='studentid<?= $i ?>' name='studentid<?= $i ?>'  class='form-control' required MAXLENGTH='5' oninput='validateStudentID(this)' pattern='[1-9][0-9]{0,4}' title='กรุณาใส่เลขประจำตัวนักเรียน 1-99999'>
                </div>
                <div class='form-group'>
                    <label for='name$i' class='form'>คำนำหน้าและชื่อ (ตัวอย่าง นายตอพร ไม่ต้องเว้นวรรค) : </label>
                 <div class='form-container'>
                    <input type='text' id='name$i' name='name$i' class='form-control' required>
                    </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='surname$i' class='form'>นามสกุล : </label>
                     <div class='form-container'>
                    <input type='text' id='surname$i' name='surname$i' class='form-control' required>
                    </div>
                </div>
                <div class='form-group'>
                          <label for='room$i' class='form'>ห้อง ( ตัวอย่าง 6/1 = 601 ) : </label>
                     <div class='form-container'><SELECT name='room$i' class='form-control' required><option value=''>- - Please select - -</option>";

                     
                        for($j=1; $j<=6; $j++)
                            for($k=1; $k<=12; $k++)
                                print "<option value='$j". substr("0$k", -2) . "'>$j" . substr("0$k", -2) . "</option>";
                  
                    
                    //<input type='text' id='room$i' name='room$i' class='form-control' required MAXLENGTH='3'>-->
                
                echo "</SELECT></div>
                </div>
                <div class='form-group'>
                    <label for='number$i' class='form'>เลขที่ : </label>
                     <div class='form-container'>
                    <input type='number' id='number$i' name='number$i' class='form-control' required MAXLENGTH='2' onkeypress='if((event.keyCode<46)||(event.keyCode>57)) event.returnValue=false;'>
                    </div>
                </div>
                 <div class='form-group'>
                    <label for='tel$i' class='form'> เบอร์ติดด่อ (ตัวอย่าง 0999999999 ไม่ต้องใส่ - ) : </label>
                     <div class='phone-input-container'>
                        <input type='number' id='tel$i' name='tel$i' class='form-control phone-input' placeholder='0876543210'  required>
                    </div>
                </div>
            </div>";
            }
            ?>
            <div class="submit-container">
                <input type="submit" value="ดำเนินการต่อ" class="submit-button " href="../confirmation.html">
            </div>
    </form>
    <div class="footer">© 2024 TUPRDev. All rights reserved.</div>

</body>


</html>