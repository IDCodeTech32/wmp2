<?php
// Panggil koneksi database
include "koneksi.php";

// Fungsi untuk menghitung persentase data berdasarkan kategori
function calculatePercentage($kategori) {
    global $koneksi;
    // Query untuk menghitung jumlah data berdasarkan kategori
    $query = "SELECT COUNT(*) as total FROM menambahkan WHERE kategori = '$kategori'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];

    // Query untuk menghitung total data berdasarkan kategori
    $query_total = "SELECT COUNT(*) as total FROM menambahkan";
    $result_total = mysqli_query($koneksi, $query_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_all = $row_total['total'];

    // Hitung persentase
    if ($total_all != 0) {
        $percentage = ($total / $total_all) * 100;
    } else {
        $percentage = 0;
    }

    return round($percentage, 2); // Kembalikan persentase dengan dua desimal
}
?>
