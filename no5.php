<?php
$conn = new PDO("mysql:host=localhost; dbname=website; charset=utf8", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 5</title>
</head>
<body>
        <form method="post">
              <div>
                <input type="text" name="website" id="website" placeholder="กรุณากรอกข้อมูลเว็บไซต์">
                <button type="submit" id="input" name="input">input</button>
                <button type="submit" id="prev" name="prev">prev</button>
                <button type="submit" id="next" name="next">next</button>
                <button type="submit" id="current" name="current">current</button>
                <button type="submit" id="all" name="all">all</button>
              </div>
        </form>
        

        <?php
        
        if (isset($_POST['input'])) {
            $stmt = $conn->prepare("INSERT INTO website VALUES ('', ?)");
            $stmt->bindParam(1, $_POST['website']);
            $stmt->execute();
        }
        $stmt = $conn->query("SELECT * FROM website ORDER BY website_id DESC");
        while ($row1 = $stmt->fetch()) {
            $website = array($row1['website_id']);
        }
        echo "$website[0]";
        echo "<br>";
        if (isset($_POST['prev'])) {
            
                
                $n = $website[0] - 1;
                if($n < 0){
                    echo 'No website to previous';
                }
                            
        }
        echo "<br>";
        if (isset($_POST['next'])) {
            
                
                $n = $website[0] + 1;

                if($n > $website[0]){
                    echo 'No website to go';
                }
                
        }    
        echo "<br>";
        if (isset($_POST['current'])) {
            
                $website_url = $row1['website_url'];
                echo "Now you on [".$website_url."]";
        }    
    
        echo "<br>";
        if (isset($_POST['all'])) {
            $stmt = $conn->query("SELECT * FROM website");
            while ($row = $stmt->fetch()) {
                $website_url = $row['website_url'];
                echo "[".$website_url."],";
            }
        }    
        echo "<br>";
        echo "<a href='http://localhost/preinterview-test-Narawit/no4.php'>กลับไปข้อ 4 </a>";
        ?>
    
</body>
</html>