<?php  

$mahasiswa = [
[
    'gambar' => 'ironman.jpg',
    'nrp' => '233040100',
    'nama' => 'Iron Man',
    'email' => 'ironman@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'captainamerica.jpg',
    'nrp' => '233040101',
    'nama' => 'Captain America',
    'email' => 'captainamerica@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'antman.jpg',
    'nrp' => '233040102',
    'nama' => 'Ant Man',
    'email' => 'antman@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'hulk.jpg',
    'nrp' => '233040103',
    'nama' => 'Hulk',
    'email' => 'hulk@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'thor.jpg',
    'nrp' => '233040104',
    'nama' => 'Thor',
    'email' => 'thor@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'vision.jpg',
    'nrp' => '233040105',
    'nama' => 'Vision',
    'email' => 'vision@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'spiderman.jpg',
    'nrp' => '233040106',
    'nama' => 'Spiderman',
    'email' => 'kazutokirigaya@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'scarletwitch.jpg',
    'nrp' => '233040107',
    'nama' => 'Scarlet Witch',
    'email' => 'scarletwitch@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'blackpanther.jpg',
    'nrp' => '233040108',
    'nama' => 'Black Panther',
    'email' => 'shineinouzen@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'blackwidow.jpg',
    'nrp' => '233040109',
    'nama' => 'Black Widow',
    'email' => 'blackwidow@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>