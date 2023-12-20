<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 2</title>
</head>
<body>
        <form method="post">
              <div>
                <input type="text" name="calculate" id="calculate" placeholder="กรุณากรอกข้อมูล n i j">
                <label>กรุณากรอกข้อมูล</label><br>
              </div>
              <button type="submit" id="submit" name="submit">ส่ง</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $calculate1  = $_POST['calculate'];
            $totle1 = explode(" ", $calculate1);
        for($i=0;$i<=$totle1[0];$i++){
            $totle2 = $totle1[0]-$i;
            $calculate2 = $totle1[0]- $totle2;
            if($calculate2 > 0){?>
                <?php 
                    if( ($calculate2 % $totle1[1]) == 0 ) {
                        if ( ($calculate2 % $totle1[2]) == 0 ){
                            echo $calculate2."\tPing Pong<br>";
                        }
                        else{
                            echo $calculate2."\tPing<br>";
                        }
                    } else if ( ($calculate2 % $totle1[2]) == 0 ){
                        if ( ($calculate2 % $totle1[1]) == 0 ){
                            echo $calculate2."\tPing Pong<br>";
                        }
                        else{
                            echo $calculate2."\tPong<br>";
                        }
                    }
                ?>
            <?php 
            } 
        }
        }
        echo "<a href='http://localhost/preinterview-test-Narawit/no1.php'>กลับไปข้อที่ 1 </a>";
        echo "<br>";
        echo "<a href='http://localhost/preinterview-test-Narawit/no3.php'>ไปข้อที่ 3 </a>";
        ?>
    
</body>
</html>