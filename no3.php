<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 3</title>
</head>
<body>
        <form method="post">
              <div>
                <input type="text" name="array" id="array" placeholder="กรุณากรอกข้อมูล a">
                <label>กรุณากรอกข้อมูล</label>
                <input type="text" name="text" id="text" placeholder="กรุณากรอกตัวอักษร X ">
                <label>กรุณากรอกข้อมูล</label>
              </div>
              <button type="submit" id="submit" name="submit">ส่ง</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $pizza  = $_POST['array'];
            $totle = explode(", ",$pizza);
            $count = count($totle);
            $num = 0;
            echo "[";
            for($i=0;$i < $count;$i++){
                $text = strripos($totle[$i],$_POST['text']);
                if($text == ""){
                    
                }else{
                    echo $totle[$i].",";
                    $num = $num + 1;
                }
            
            }
            echo "]";
            echo "<br>";
            for($j=0;$j < $count;$j++){
                $text = strripos($totle[$j],$_POST['text']);
                if($text == ""){
                    
                }else{
                    echo $text.",";
                    $num = $num + 1;
                }

            }
            if($num == 0 ){
                echo "No results found";
            }
        }
        echo "<a href='http://localhost/preinterview-test-Narawit/no2.php'>กลับไปข้อที่ 2 </a>";
        echo "<br>";
        echo "<a href='http://localhost/preinterview-test-Narawit/no4.php'>ไปข้อที่ 4 </a>";
        ?>
    
</body>
</html>