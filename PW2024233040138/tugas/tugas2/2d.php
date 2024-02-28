<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>
        .td-1 {
            height: 80px;
            width: 80px;
            background-color: #000;
        }

        .td-2 { 
            height: 80px;
            width: 80px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ($s = 1; $s <= 5; $s++) {
            echo "<tr>";
            for ($c = 1; $c <= 5; $c++) {
            $b = $s + $c;
                if ($b % 2 == 0) {
                    echo "<td class='td-1'></td>";
                } else {
                    echo "<td class='td-2'></td>";
                }
              }
              echo "</tr>";
            }
        ?>
    </table>
</body>
</html>