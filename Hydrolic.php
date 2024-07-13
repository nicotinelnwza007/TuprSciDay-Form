<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SciDayForm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="Navbar.css" rel="stylesheet">
    <link href="Form.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="first.php"><img src="./img/TuprLogo.png" alt="TuprLogo"></a>
            </div>
            <!-- <div class="links">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                <a href="#">Link 4</a>
                <a href="#">Link 5</a>
            </div> -->
        </div>
    
    </nav>

  

   
    <form id="competitionForm" method="POST" action="index.php" class="competition-form">
    <h1>Hydrolic Arms Competition</h1>
        <div class='form-group'>
            <label for='teamname'>ชื่อทีม: </label>
            <input type='text' id='teamname' name='teamname' class='form-control' required>
        </div>
        <?php
        $num_members = 5;
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


    <script src="script.js"></script>

</body>


</html>

