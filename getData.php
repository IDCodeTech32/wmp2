<?php
// Koneksi ke database
include 'koneksi.php';

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Mendapatkan kategori yang diminta dari parameter GET
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Query untuk mengambil data berdasarkan kategori yang diminta
$query = "SELECT * FROM menambahkan WHERE kategori = '$category'";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dieksekusi
if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}

// Array untuk menampung hasil query
$data = array();

// Loop untuk mengambil data dari setiap baris hasil query
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Mengirim data dalam format JSON
echo json_encode($data);

// Tutup koneksi database
mysqli_close($koneksi);
?>
