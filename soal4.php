<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO mahasiswa (no, nim, nama, gender, jurusan) 
            VALUES ('$no', '$nim', '$nama', '$gender', '$jurusan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $nim = $_GET['delete'];
    $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='mahasiswa.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <h2>Form Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="POST">
        <div>
            <label for="no">No:</label>
            <input type="text" id="no" name="no" required>
        </div>
        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label>Gender:</label>
            <input type="checkbox" id="genderL" name="gender" value="L"> Laki-laki
            <input type="checkbox" id="genderP" name="gender" value="P"> Perempuan
        </div>
        <div>
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Manajemen">Manajemen</option>
            </select>
        </div>
        <div>
            <button type="submit" name="simpan">Simpan</button>
            <button type="reset">Ulangi</button>
        </div>
    </form>

    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['no']}</td>
                            <td>{$row['nim']}</td>
                            <td>{$row['nama']}</td>
                            <td>" . ($row['gender'] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>
                            <td>{$row['jurusan']}</td>
                            <td>
                                <a href='mahasiswa.php?delete={$row['nim']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
