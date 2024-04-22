<?php
include 'koneksi.php';

// Inisialisasi variabel notifikasi
$notificationType = '';
$notificationMessage = '';

// Fungsi untuk melakukan pendaftaran user baru
function registerUser($koneksi, $username, $password)
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data user baru ke dalam tabel users
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    $result = $koneksi->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Memeriksa apakah formulir pendaftaran dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    // Memeriksa apakah password dan konfirmasi password cocok
    if ($password == $repassword) {
        // Panggil fungsi untuk mendaftarkan user baru
        if (registerUser($koneksi, $username, $password)) {
            $notificationType = 'success';
            $notificationMessage = 'Pendaftaran berhasil. Silakan login dengan akun baru Anda.';
        } else {
            $notificationType = 'danger';
            $notificationMessage = 'Gagal mendaftarkan user baru.';
        }
    } else {
        $notificationType = 'warning';
        $notificationMessage = 'Password dan konfirmasi password tidak cocok.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONITOR IT - Daftar Akun</title>
    <!-- Custom fonts-->
    <link href="assets/font.min.css" rel="stylesheet" type="text/css">
    <link href="assets/font.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Custom styles-->
    <link href="assets/style.css" rel="stylesheet">
    <!-- Tautan ke Bootstrap CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="gambar/logo persero.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link href="assets/sb-admin-2.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="icon" href="img/PERSERO.jpg" type="image/jpg">
</head>

<body class="bg-gradient-primary">
    <!-- Isi bagian body sesuai kebutuhan formulir pendaftaran -->

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"
                        style="background-image: url('img/monitor.png');"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Buat Akun Baru</h1>
                            </div>
                            <?php if ($notificationType !== '' && $notificationMessage !== ''): ?>
                                <div class="alert alert-<?php echo $notificationType; ?>" role="alert">
                                    <?php echo $notificationMessage; ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group">
                                    <label for="username" class="form-label" style="color: black;">Username:</label>
                                    <input type="text" class="form-control form-control-user" id="username"
                                        name="username" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password" class="form-label" style="color: black;">Password:</label>
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="repassword" class="form-label" style="color: black;">Konfirmasi
                                            Password:</label>
                                        <input type="password" class="form-control" id="repassword" name="repassword"
                                            placeholder="Konfirmasi Password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="register">Daftar
                                    Akun</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Saya sudah memiliki akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
</body>

</html>