<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            color: white;
            display: flex;
            border-radius: 15px;
        }

        .kotak h2 {
            margin: auto;
        }


        .baris {
            display: flex;
            width: fit-content;
            height: fit-content;
        }

        .baris-1 {
            .kotak {
                background-color: #00704A;
                color: black;
            }
        }

        .baris-2 {
            .kotak {
                background-color: #27251F;
            }
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nomor">Masukkan nomor :</label>
        <input type="text" name="jumlah-nomor" id="nomor">
        <input type="submit">
    </form>

    <?php if(!isset($_POST["jumlah-nomor"])) : ?>
        <h3>silahkan masukkan jumlah nomor terlebih dahulu</h3>
    <?php else : ?>
        <?php for ($i = $_POST["jumlah-nomor"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="baris baris-1">
            <?php else : ?>
                <div class="baris baris-2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><h2><?= "$i" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>