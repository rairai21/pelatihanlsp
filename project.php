<?php
// Tentukan halaman yang akan ditampilkan berdasarkan URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            transition: margin-left 0.3s ease;
        }
        .container-fluid {
            margin-top: 20px;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }
        .sidebar.active {
            transform: translateX(0);
        }
        .content {
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }
        .content.active {
            margin-left: 250px;
        }
        .toggle-sidebar-btn {
            font-size: 30px;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
            cursor: pointer;
        }
        h2 {
            color: #007bff;
        }
        .card-columns {
            column-count: 3;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="container-fluid bg-primary text-white p-3">
        <h1 class="text-center">Koperasi Pegawai</h1>
        <span class="toggle-sidebar-btn" onclick="toggleSidebar()">&#9776;</span> <!-- Hamburger Icon -->
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 sidebar" id="sidebar">
                <h4>Menu</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'dashboard') ? 'active' : ''; ?>" href="?page=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'pinjaman') ? 'active' : ''; ?>" href="?page=pinjaman">Pinjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'login') ? 'active' : ''; ?>" href="?page=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'register') ? 'active' : ''; ?>" href="?page=register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'identitas') ? 'active' : ''; ?>" href="?page=identitas">Identitas</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content" id="content">
                <div class="container mt-5">
                    <?php
                    // Tampilkan konten sesuai dengan parameter 'page'
                    if ($page == 'dashboard') {
                        ?>
                        <div id="dashboard">
                            <h2>Dashboard Koperasi Pegawai</h2>
                            
                            <!-- Tampilkan Kartu Informasi -->
                            <div class="card-columns">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Peminjam</h5>
                                        <p class="card-text" style="font-size: 2rem;">120</p>
                                    </div>
                                </div>

                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Barang Tersedia</h5>
                                        <p class="card-text" style="font-size: 2rem;">500</p>
                                    </div>
                                </div>

                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Unit of Measure (UOM)</h5>
                                        <p class="card-text" style="font-size: 2rem;">Unit</p>
                                    </div>
                                </div>

                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Status</h5>
                                        <p class="card-text" style="font-size: 2rem;">Aktif</p>
                                    </div>
                                </div>

                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">DO Number</h5>
                                        <p class="card-text" style="font-size: 2rem;">DO123456</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } elseif ($page == 'pinjaman') {
                        ?>
                        <div id="pinjaman">
                            <h2>Data Pinjaman</h2>

                            <!-- Tampilkan Tabel Pinjaman -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Pinjaman</th>
                                        <th>Nama Peminjam</th>
                                        <th>Jumlah Pinjaman</th>
                                        <th>Tanggal Pinjaman</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PJ001</td>
                                        <td>John Doe</td>
                                        <td>Rp 5,000,000</td>
                                        <td>2025-03-10</td>
                                        <td>Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>PJ002</td>
                                        <td>Jane Doe</td>
                                        <td>Rp 3,000,000</td>
                                        <td>2025-02-15</td>
                                        <td>Lunas</td>
                                    </tr>
                                    <tr>
                                        <td>PJ003</td>
                                        <td>Ali Budi</td>
                                        <td>Rp 4,500,000</td>
                                        <td>2025-03-05</td>
                                        <td>Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>PJ004</td>
                                        <td>Rina Sari</td>
                                        <td>Rp 2,000,000</td>
                                        <td>2025-01-25</td>
                                        <td>Lunas</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    } elseif ($page == 'identitas') {
                        ?>
                        <div id="identitas">
                            <h2 class="text-center">Identitas Koperasi</h2>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Foto koperasi -->
                                    <img src="foto_koperasi.jpg" alt="Foto Koperasi" class="profile-photo img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <!-- Detail Identitas Koperasi -->
                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <td>: 001</td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>: Koperasi Pegawai ABC</td>
                                        </tr>
                                        <tr>
                                            <th>Badan Hukum</th>
                                            <td>: PT. Koperasi Pegawai ABC</td>
                                        </tr>
                                        <tr>
                                            <th>NPWP</th>
                                            <td>: 01.234.567.8-123.000</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: koperasiabc@example.com</td>
                                        </tr>
                                        <tr>
                                            <th>URL</th>
                                            <td>: www.koperasiabc.com</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>: Jl. Raya No. 123, Jakarta</td>
                                        </tr>
                                        <tr>
                                            <th>Telepon</th>
                                            <td>: +62 21 12345678</td>
                                        </tr>
                                        <tr>
                                            <th>Fax</th>
                                            <td>: +62 21 87654321</td>
                                        </tr>
                                        <tr>
                                            <th>Rekening</th>
                                            <td>: 123-456-7890-12</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                    } elseif ($page == 'login') {
                        ?>
                        <div id="login">
                            <h2 class="text-center">Login</h2>
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <?php
                    } elseif ($page == 'register') {
                        ?>
                        <div id="register">
                            <h2 class="text-center">Register</h2>
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Fungsi untuk mengubah status sidebar (menampilkan/menyembunyikan)
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        }
    </script>

</body>
</html>
