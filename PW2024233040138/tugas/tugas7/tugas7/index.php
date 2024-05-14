<?php 
// Informasi koneksi database
$host = 'localhost'; // Host database
$user = 'root'; // Username database
$password = ''; // Password database
$database = 'unpas'; // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="tambah.php" method="post">
        Nama: <input type="text" name="nama" required><br>
        NRP: <input type="text" name="nrp" required><br>
        Fakultas: <input type="text" name="fakultas" required><br>
        Jurusan: <input type="text" name="jurusan" required><br>
        Gambar: <input type="text" name="gambar" required><br>
        IPK: <input type="text" name="ipk" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" value="Tambah">
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>gambar</th>
                <th>nrp</th>
                <th>nama</th>
                <th>fakultas</th>
                <th>jurusan</th>
                <th>ipk</th>
                <th>status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                // output data setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td><img src='./img/" . $row["gambar"] . "' alt='Gambar' style='width:100px;'></td>
                            <td>" . $row["nrp"] . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["fakultas"] . "</td>
                            <td>" . $row["jurusan"] . "</td>
                            <td>" . $row["ipk"] . "</td>
                            <td>" . $row["status"] . "</td>
                            
                            <td><a href='ubah.php?nrp=" . $row["nrp"] . "'>Ubah</a> | <a href='hapus.php?nrp=" . $row["nrp"] . "'>Hapus</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>