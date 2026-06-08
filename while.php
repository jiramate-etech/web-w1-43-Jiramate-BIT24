<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ (While Loop)</title>
</head>
<body>
    <h2>โปรแกรมคำนวณแม่สูตรคูณ (While Loop)</h1>
    <a href="index.php" style='color:blue'>For Loop</a><br>
    <a href="while.php" style='color:green'>While Loop</a>
    <form action="">
        <label for="">กรอกแม่สูตรคูณ</label>
        <input type="number" name="num1" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php 
        if(isset($_GET["num1"])){
            $num1 = $_GET["num1"];
            echo "สูตรคูณแม่ ". $num1 . "<br>"; 
            $i = 1;
            while ($i <= 12) {
                echo $num1 . " x " . $i . " = " .$num1*$i . "<br>";
                $i++;
            }
        }
    ?>
</body>
</html>