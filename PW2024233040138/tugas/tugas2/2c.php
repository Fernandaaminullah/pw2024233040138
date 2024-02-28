<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        td {
            width: 40px;
            height: 40px;
            background-color: #FFAACF;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php 

        $s = 1;

        for ($n = 10; $n >= $s; $n--) {
            echo "<tr>";
            for ($c = 1; $c <= $n; $c++) {
                echo "<td>$c</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>