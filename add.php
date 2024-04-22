<?php

//panggil koneksi Database
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MONITOR IT | ADD</title>

    <link rel="stylesheet" href="css/style.css">
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
            <li class="nav-item active">
                <a class="nav-link" href="add.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add</span></a>
            </li>

            <!-- Nav Item - PIC -->
            <li class="nav-item">
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="m-0 font-weight-bold text-primary">Tambah Data</h3>
                                <div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#contohModal">Tambah Data</button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%;text-align:center;">No</th>
                                            <th style="width: 10%;text-align:center;">Kategori</th>
                                            <th style="width: 20%;text-align:center;">Target</th>
                                            <th style="width: 9%;text-align:center;">Waktu</th>
                                            <th style="width: 12%;text-align:center;">PIC</th>
                                            <th style="width: 15%;text-align:center;">Aksi</th>
                                        </tr>

                                        <?php

                                        //Persiapan menampilkan data
                                        $id = "1";
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM menambahkan ORDER BY id DESC");
                                        while ($data = mysqli_fetch_array($tampil)):

                                            ?>
                                        </thead>
                                        <tr>
                                            <td>
                                                <?= $id++ ?>
                                            </td>
                                            <td>
                                                <?= $data['kategori'] ?>
                                            </td>
                                            <td>
                                                <?= $data['target'] ?>
                                            </td>
                                            <td>
                                                <?= $data['waktu'] ?>
                                            </td>
                                            <td>
                                                <?= $data['pic'] ?>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modalUbah<?= $id ?>">Ubah</i></a>
                                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus<?= $id ?>">Hapus</a>
                                            </td>
                                        </tr>

                                        <!-- Modal Ubah Data-->
                                        <div class="modal fade" id="modalUbah<?= $id ?>" role="dialog" arialabelledby="modalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>Ubah Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST" action="aksi_crud.php">
                                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Kategori</label><br>
                                                                <select class="form-select" name="tkategori" value="<?= $data['kategori'] ?>">
                                                                    <option>Pilih Kategori</option>
                                                                    <option value="Hardware & Networking">Hardware & Networking</option>
                                                                    <option value="Software Development">Software Development</option>
                                                                    <option value="Administrasi IT">Administrasi IT</option>
                                                                    <option value="IT Vendor Project">IT Vendor Project</option>
                                                                </select>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label">Target</label>
                                                                <textarea class="form-control" name="ttarget" id="exampleFormControlTextarea1" rows="3"><?= $data['target'] ?></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="waktu">Waktu</label><br>
                                                                <input type="date" name="twaktu" value="<?= $data['waktu'] ?>" id="waktu" name="waktu"><br>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>PIC</label><br>
                                                                <select class="form-select form-select-lg mb-3" name="tpic" value="<?= $data['pic'] ?>"
                                                                    aria-label="Large select example">
                                                                    <option selected>Pilih PIC</option>
                                                                    <option value="Muhammad Ali">Muhammad Ali</option>
                                                                    <option value="M.Abdul Sukur">M.Abdul Sukur</option>
                                                                    <option value="Hadi Wicaksono">Hadi Wicaksono</option>
                                                                    <option value="Ghossan Ammar Santos">Ghossan Ammar Santos</option>
                                                                    <option value="Muhammad Iqbal">Muhammad Iqbal</option>
                                                                    <option value="Dini Pratiwi">Dini Pratiwi</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <!-- Modal Footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="bubah">UBAH</button>
                                                            <button type="reset" class="btn btn-danger">RESET</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus Data-->
                                        <div class="modal fade" id="modalHapus<?= $id ?>" role="dialog" arialabelledby="modalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>Konfirmasi Hapus Data<Datag></Datag></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST" action="aksi_crud.php">
                                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                        <!-- Modal Body -->
                                                        <div class="modal-body">

                                                            <h5 class="text-center">Apakah Anda Yakin ingin menghapus data ini?<br>
                                                                <span class="text-danger"><?=$data['kategori']?> - <?=$data['target']?> - <?=$data['waktu']?> - <?=$data['pic']?></span>
                                                            </h5>
                                                           

                                                        </div>
                                                        <!-- Modal Footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                                            <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Keluar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    <?php endwhile; ?>
                                    <tbody>

                                        <!-- Isi tabel di sini -->

                                        <!-- Isi tabel bisa ditambahkan secara dinamis sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol Tambah Baris dan Simpan -->
                <div class="row mb-3">
                    <div class="col-md-6">

                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="aksi_crud.php">
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Kategori</label><br>
                                                <select class="form-select" name="tkategori">
                                                    <option>Pilih Kategori</option>
                                                    <option value="Hardware & Networking">Hardware & Networking</option>
                                                    <option value="Software Development">Software Development</option>
                                                    <option value="Administrasi IT">Administrasi IT</option>
                                                    <option value="IT Vendor Project">IT Vendor Project</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label">Target</label>
                                                <textarea class="form-control" name="ttarget"
                                                    id="exampleFormControlTextarea1" rows="3" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="waktu">Waktu</label><br>
                                                <input type="date" name="twaktu" id="waktu" name="waktu"><br>
                                            </div>

                                            <div class="form-group">
                                                <label>PIC</label><br>
                                                <select class="form-select form-select-lg mb-3" name="tpic"
                                                    aria-label="Large select example">
                                                    <option selected>Pilih PIC</option>
                                                    <option value="Muhammad Ali">Muhammad Ali</option>
                                                    <option value="M.Abdul Sukur">M.Abdul Sukur</option>
                                                    <option value="Hadi Wicaksono">Hadi Wicaksono</option>
                                                    <option value="Ghossan Ammar Santos">Ghossan Ammar Santos</option>
                                                    <option value="Muhammad Iqbal">Muhammad Iqbal</option>
                                                    <option value="Dini Pratiwi">Dini Pratiwi</option>
                                                </select>
                                            </div>

                                        </div>
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bsimpan">SUBMIT</button>
                                            <button type="reset" class="btn btn-danger" data-dismiss="modal">KELUAR</button>
                                        </div>
                                    </form>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <script>
        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses'): ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Data berhasil disimpan.',
                showConfirmButton: false,
                timer: 1900
            });
        <?php elseif (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Terjadi kesalahan, data gagal disimpan.',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    </script>

</body>

</html>