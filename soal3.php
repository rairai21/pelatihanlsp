<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO printer (no, nama_merek, warna, jumlah) 
            VALUES ('$no', '$nama_merek', '$warna', '$jumlah')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan'); window.location.href='tambah_barang.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Barang</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <form action="tambah_barang.php" method="POST">
        <div>
            <label for="no">No:</label>
            <input type="text" id="no" name="no" required>
        </div>
        <div>
            <label for="nama_merek">Nama Merek:</label>
            <input type="text" id="nama_merek" name="nama_merek" required>
        </div>
        <div>
            <label for="warna">Warna:</label>
            <input type="text" id="warna" name="warna" required>
        </div>
        <div>
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>
        <div>
            <button type="submit" name="simpan">Simpan</button>
            <button type="reset">Ulangi</button>
            <button type="button" onclick="window.location.href='index.php';">Kembali</button>
        </div>
    </form>
</body>
</html>
