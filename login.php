<?php
include 'koneksi.php';

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// ...

// Memeriksa apakah formulir login dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mendapatkan data user berdasarkan email
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Memeriksa kesesuaian password
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION['username'] = $row['username']; // Menyimpan informasi sesi
            $_SESSION['user_id'] = $row['id']; // Menyimpan ID pengguna
            // ...

            // Redirect ke halaman index.php setelah login berhasil
            header("Location: index.php");
            exit();
        } else {
            echo "Login gagal. Password salah.";
        }
    } else {
        echo "Login gagal. Email tidak ditemukan.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Custom fonts -->
    <link href="assets/font.min.css" rel="stylesheet" type="text/css">
    <link href="assets/font.css" rel="stylesheet">
    <!-- Tambahkan tautan ke CSS kustom atau tambahkan inline styling di sini jika diperlukan -->
    <link rel="icon" href="img/PERSERO.jpg" type="image/jpg">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="assets/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="bg-gradient-primary">
    <!-- Isi bagian body sesuai kebutuhan Anda -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"
                        style="background-image: url('img/monitor.png');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4">Login ke akun anda</h1>
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username" class="form-label" style="color: black;">Username:</label>
                                            <input type="username" class="form-control form-control-user" name="username" placeholder="Masukkan Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="form-label" style="color: black;">Password:</label>
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password" required>
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    <p class="text-center" style="color: black;">Belum punya akun? <a class="small" href="daftar.php">Buat Akun Baru</a> </p>
                                    </div>
                                </div>
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
    <!-- Tambahkan tautan ke JavaScript kustom atau tambahkan inline scripting di sini jika diperlukan -->
</body>

</html>
