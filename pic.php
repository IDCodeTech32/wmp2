<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MONITOR IT | PIC</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="icon" href="img/PERSERO.jpg" type="image/jpg">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-4" href="index.php">
                <div class="sidebar-brand-icon" style="padding-top: 30px;">
                    <img src='img/persero batam.png' width='70px'>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="margin-top: 6px !important;" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="margin-top: 5px;">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Add -->
            <li class="nav-item">
                <a class="nav-link" href="add.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add</span></a>
            </li>

            <!-- Nav Item - PIC -->
            <li class="nav-item active">
                <a class="nav-link" href="pic.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>PIC</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: #D3D3D3">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h1 class="h3 mb-0 text-black-800 text-center text-warning"><strong>MONITOR PEKERJAAN IT</strong>
                    </h1>
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Adrian Sinaga</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>NIP</td>
                                            <td>NAMA</td>
                                            <td>ALAMAT</td>
                                            <td>TEMPAT LAHIR</td>
                                            <td>TGL LAHIR</td>
                                            <td>KELAMIN</td>
                                            <td>DARAH</td>
                                            <td>AGAMA</td>
                                            <td>TGL MASUK</td>
                                            <td>PENDIDIKAN</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- PHP  -->
                                        <?php

                                        include "koneksi.php";


                                        if ($koneksi->connect_error) {
                                            die("KONEKSI DATABASE GAGAL: " . $koneksi->connect_error);
                                        }

                                        $sql = "SELECT * FROM pic";
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["No"] . "</td>";
                                                echo "<td>" . $row["NIP"] . "</td>";
                                                echo "<td>" . $row["NAMA"] . "</td>";
                                                echo "<td>" . $row["ALAMAT"] . "</td>";
                                                echo "<td>" . $row["TEMPAT LAHIR"] . "</td>";
                                                echo "<td>" . $row["TGL LAHIR"] . "</td>";
                                                echo "<td>" . $row["KELAMIN"] . "</td>";
                                                echo "<td>" . $row["DARAH"] . "</td>";
                                                echo "<td>" . $row["AGAMA"] . "</td>";
                                                echo "<td>" . $row["TGL MASUK"] . "</td>";
                                                echo "<td>" . $row["PENDIDIKAN"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>Tidak ditemukan data pada tabel</td></tr>";
                                        }
                                        $koneksi->close();
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'layouts/footer.php';
            ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Batal
                    </button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>