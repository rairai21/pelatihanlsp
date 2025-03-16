<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Makanan</title>
</head>
<body>
    <h2>Form Pemesanan Makanan</h2>
    <form method="post" action="proses_pesanan.php">
        <label for="nama_makanan">Nama Makanan:</label><br>
        <input type="text" id="nama_makanan" name="nama_makanan"><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga"><br><br>

        <label for="jumlah">Jumlah:</label><br>
        <input type="number" id="jumlah" name="jumlah"><br><br>

        <input type="submit" value="Pesan">
    </form>
</body>
</html>