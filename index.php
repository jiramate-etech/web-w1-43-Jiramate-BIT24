<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ (For Loop)</title>
    <style>
        body { margin: 30px; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid #999; padding: 8px 30px; text-align: center; }
    </style>
</head>
<body>

    <h2>โปรแกรมคำนวณแม่สูตรคูณ (For Loop)</h2>
    <a href="index.php" style="color:blue">For Loop</a> :
    <a href="while.php" style="color:green">While Loop</a>
    <form action="">
        <label for="">กรอกแม่สูตรคูณ :</label>
        <input type="number" name="num1" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php if (isset($_GET["num1"])) : ?>
        <?php $num1 = $_GET["num1"]; ?>

        <h3>สูตรคูณแม่ <?= $num1 ?></h3>

        <table>
            <tr>
                <th>สูตร</th>
                <th>ผลลัพธ์</th>
            </tr>
            <?php for ($i = 1; $i <= 12; $i++) : ?>
            <tr>
                <td><?= $num1 ?> x <?= $i ?></td>
                <td><?= $num1 * $i ?></td>
            </tr>
            <?php endfor; ?>
        </table>

    <?php endif; ?>

</body>
</html>
