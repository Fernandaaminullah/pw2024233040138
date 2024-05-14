<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "unpas");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];
    $status = $_POST['status'];
    $ipk = $_POST['ipk']; // Pastikan ini diambil dengan benar

    // SQL untuk menambahkan data
    $insertSql = "INSERT INTO mahasiswa (nama, nrp, fakultas, jurusan, gambar, ipk, status) VALUES ('$nama', '$nrp', '$fakultas', '$jurusan', '$gambar', '$ipk', '$status')";
    if ($koneksi->query($insertSql) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman index
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}

$koneksi->close();
?>
