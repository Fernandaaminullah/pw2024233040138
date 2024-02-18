<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b</title>
</head>
<body>
   <?php 
   $nim ="38";

   echo "Aku adalah angka"." "."<b>".$nim."</b>"."</br>";

//hasil kali
  $hasil_kali = $nim * 5; 
  echo "Jika aku dikali 5, maka aku sekarang menjadi <b> $hasil_kali</b> </br>";
//hasil bagi
 $hasil_bagi =$hasil_kali / 2;
 echo "Jika aku dibagi 2, maka aku sekarang menjadi<b> $hasil_bagi</b> </br>";
//hasil tambah
$hasil_tambah =$hasil_bagi + 75;
echo "Jika aku ditambah 75, maka aku sekarang menjadi<b> $hasil_tambah</b> </br>";
//hasil kurang
$hasil_kurang =$hasil_tambah - 20;
echo "Jika aku dikurang 20, maka aku sekarang menjadi<b> $hasil_kurang</b> </br>";
   ?> 

</body>
</html>