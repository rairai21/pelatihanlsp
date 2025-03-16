<?php

// Fungsi untuk menghitung diskon
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    // Cek kondisi untuk diskon
    if ($totalBelanja >= 100000) {
        $diskon = 0.10;  // Diskon 10%
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05;  // Diskon 5%
    }

    // Menghitung jumlah diskon yang diterima
    $jumlahDiskon = $totalBelanja * $diskon;

    return $jumlahDiskon;
}

function tampilkanHasil($totalBelanja) {
    $jumlahDiskon = hitungDiskon($totalBelanja);
    $totalSetelahDiskon = $totalBelanja - $jumlahDiskon;

    echo "Total Belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . "<br>";
    echo "Diskon: Rp. " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
    echo "Total Setelah Diskon: Rp. " . number_format($totalSetelahDiskon, 0, ',', '.') . "<br>";
}

$totalBelanja = 75000;  
tampilkanHasil($totalBelanja);

?>