<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 4</title>
</head>
<body>
        <form method="post">
              <div>
                <input type="date" name="X" id="X">
                <label>Date X</label><br>
                <input type="date" name="Y" id="Y">
                <label>Date Y</label><br>
                <input type="date" name="M" id="M">
                <label>Date M</label><br>
              </div>
              <button type="submit" id="submit" name="submit">ส่ง</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $date_X = strtotime($_POST['X']);
            $date_Y = strtotime($_POST['Y']);
            $date_M = strtotime($_POST['M']);
            if(($date_M > $date_X) && ($date_M < $date_Y)){
                $date = $date_M - $date_X;
                $ndays = round($date / 86400);
                echo "true\t,".$ndays."\tDays";
            }
            else {
                $date = $date_M - $date_X;
                $ndays = round($date / 86400);
                echo "false\t,".$ndays."\tDays";
            }
            
        }
        echo "<a href='http://localhost/preinterview-test-Narawit/no1.php'>กลับไปข้อที่ 3 </a>";
        echo "<br>";
        echo "<a href='http://localhost/preinterview-test-Narawit/no5.php'>ไปข้อที่ 5 </a>";
        ?>
    
</body>
</html>