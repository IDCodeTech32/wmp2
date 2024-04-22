<?php
// Panggil koneksi database
include "koneksi.php";

// Uji jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {
    // Pastikan kunci array tersedia sebelum mengaksesnya
    $kategori = isset($_POST['tkategori']) ? $_POST['tkategori'] : '';
    $target = isset($_POST['ttarget']) ? $_POST['ttarget'] : '';
    $waktu = isset($_POST['twaktu']) ? $_POST['twaktu'] : '';
    $pic = isset($_POST['tpic']) ? $_POST['tpic'] : '';

    // Persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO menambahkan (kategori, target, waktu, pic)
                                      VALUES ('$kategori', '$target', '$waktu', '$pic')");

    // Jika simpan sukses atau gagal, arahkan kembali ke halaman add.php dengan memberikan pesan
    if ($simpan) {
        header('Location: add.php?pesan=sukses');
    } else {
        header('Location: add.php?pesan=gagal');
    }
}

// Uji jika tombol Ubah di klik
if (isset($_POST['bubah'])) {

    // Persiapan Ubah data 
    $ubah = mysqli_query($koneksi, "UPDATE menambahkan SET
                                                            kategori = '$_POST[tkategori]',
                                                            target = '$_POST[ttarget]',
                                                            waktu = '$_POST[twaktu]',
                                                            pic = '$_POST[tpic]'
                                                        WHERE id = '$_POST[id]'
                                                        ");

    // Jika Ubah sukses atau gagal, arahkan kembali ke halaman add.php dengan memberikan pesan
    if ($ubah) {
        header('Location: add.php?pesan=sukses');
    } else {
        header('Location: add.php?pesan=gagal');
    }
}

// Uji jika tombol Hapus di klik
if (isset($_POST['bhapus'])) {

    // Persiapan Hapus data 
    $hapus = mysqli_query($koneksi, "DELETE FROM menambahkan WHERE id = '$_POST[id]' ");

    // Jika Hapus Data sukses atau gagal, arahkan kembali ke halaman add.php dengan memberikan pesan
    if ($hapus) {
        header('Location: add.php?pesan=sukses');
    } else {
        header('Location: add.php?pesan=gagal');
    }
}

?>
