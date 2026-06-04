<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    echo "<h1 style='color:blue'>งานที่ 1 จิรเมธ กรรขำ BIT.2/4 เลขที่ 43</h1>";
?>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label><br>
        <input type="number" name="num1" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php 
        if(isset($_GET["num1"])){
            $num1 = $_GET["num1"];
            // ใช้ . หรือ , ก็ได้
            echo "สูตรคูณแม่ ".$num1; 
        }
    ?>
</body>
</html>