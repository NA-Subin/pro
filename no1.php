<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 1</title>
</head>
<body>
        <form method="post">
              <div>
                <input type="text" name="calculate" id="calculate" placeholder="กรุณากรอกข้อมูล n">
                <label class="ftitle">กรุณากรอกข้อมูล</label>
              </div>
              <button type="submit" id="submit" name="submit">ส่ง</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
        for($i=0;$i<=$_POST["calculate"];$i++){
            $totle = $_POST["calculate"]-$i;
            $calculate = $_POST["calculate"]-$totle;
            if($calculate > 0){?>
                <?php 
                    if( ($calculate % 3) == 0 ) {
                        if ( ($calculate % 5) == 0 ){
                            echo $calculate."\tPing Pong<br>";
                        }
                        else{
                            echo $calculate."\tPing<br>";
                        }
                    } else if ( ($calculate % 5) == 0 ){
                        if ( ($calculate % 3) == 0 ){
                            echo $calculate."\tPing Pong<br>";
                        }
                        else{
                            echo $calculate."\tPong<br>";
                        }
                    }
                ?>
            <?php 
            } 
        }
        }

        echo "<a href='http://localhost/preinterview-test-Narawit/no2.php'>ไปข้อที่ 2 </a>";
        ?>
    
</body>
</html>