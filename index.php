<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ (For Loop)</title>
    <style>
        body {
            margin: 40px;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: #f4f3ef;
            color: #1a1a1a;
        }
        h2 {
            margin-bottom: 12px;
            padding-bottom: 10px;
            border-bottom: 2px solid #1a1a1a;
            display: inline-block;
        }
        h3 {
            color: #555;
            margin: 20px 0 10px;
            padding-left: 10px;
            border-left: 3px solid #2563eb;
        }
        form {
            background: #fff;
            padding: 14px 16px;
            border-radius: 6px;
            display: inline-block;
            margin-top: 16px;
            margin-bottom: 8px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
        }
        hr { border: none; border-top: 1px solid #ddd; margin: 16px 0; }
        td:last-child { color: #2563eb; font-weight: 600; }
        input[type="number"] {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 80px;
            outline: none;
        }
        input[type="number"]:focus { border-color: #2563eb; }
        input[type="submit"] {
            padding: 6px 16px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover { background: #1d4ed8; }
        table {
            border-collapse: collapse;
            margin-top: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border-radius: 6px;
            overflow: hidden;
        }
        th {
            background: #1a1a1a;
            color: #fff;
            padding: 9px 40px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        td { padding: 8px 40px; text-align: center; border-bottom: 1px solid #ddd; }
        tr:nth-child(even) td { background: #ebebeb; }
        tr:hover td { background: #dbeafe; }
        tr:last-child td { border-bottom: none; }
    </style>
</head>
<body>

    <h2>โปรแกรมคำนวณแม่สูตรคูณ (For Loop)</h2>
    <h3>Links</h3>
    <a href="index.php" style="color:blue; font-weight:bold; text-decoration:underline;">For Loop</a> :
    <a href="while.php" style="color:green">While Loop</a>
    <hr>
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
