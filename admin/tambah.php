<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- <?php
            include '../config/koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM kamar as k join hotel as h ON k.id_hotel = h.id_nama_hotel join jenis_kamar as jk ON k.id_jenis_kamar = jk.id_nama_jenis_kamar")
            //   $admin = mysqli_query($conn, "SELECT * FROM `admin` WHERE 'id' = '$_GET[id]'");

            //   while ($p = mysqli_fetch_array($admin)) {
            //     $username = $p["username"];
            // }
            ?> -->
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Hotel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dashboard.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kamar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Kamar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Kamar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <center>
                        <div class="card text-bg-light mb-3" style="max-width: 50rem;">
                            <div class="card-header">
                                <h3>ADD PAGE</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Data Kamar</h5>
                                <form action="proses_tambah.php" method="post" enctype="multipart/form-data" id="tambah_kamar">
                                    <input class="form-control mb-3" type="text" placeholder="Kode Kamar" name="kode_kamar" id="kode_kamar">
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="nama_hotel" id="nama_hotel">
                                            <option selected>Nama Hotel</option>
                                            <?php
                                            // Fetch data from the "items" table
                                            $query = mysqli_query($conn, "SELECT * FROM hotel");
                                            if (mysqli_num_rows($query) > 0) {
                                                while ($data = mysqli_fetch_array($query)) {

                                                    echo "<option value='" . $data["id_nama_hotel"] . "'>" . $data["nama_hotel"] . "</option>";
                                                }
                                            } else {
                                                echo "<option value=''>No items available</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input class="form-control mb-3" type="file" name="fileToUpload" id="fileToUpload">
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="jenis_kamar" id="jenis_kamar">
                                            <option selected>Jenis Kamar</option>
                                            <?php
                                            // Fetch data from the "items" table
                                            $query = mysqli_query($conn, "SELECT * FROM jenis_kamar");
                                            if (mysqli_num_rows($query) > 0) {
                                                while ($data = mysqli_fetch_array($query)) {

                                                    echo "<option value='" . $data["id_nama_jenis_kamar"] . "'>" . $data["jenis_kamar"] . "</option>";
                                                }
                                            } else {
                                                echo "<option value=''>No items available</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input class="form-control mb-3" type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi">
                                    <input class="form-control mb-3" type="number" placeholder="Harga /malam" name="harga" id="harga">
                                    <input class="form-control mb-3" type="number" placeholder="Jumlah Kamar" name="jumlah" id="jumlah">
                                    <input class="form-control mb-3" type="number" placeholder="Ketersediaan Kamar" name="ketersediaan" id="keterdiaan">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input type="submit" id="submitBtn" value="Submit" class="btn btn-success" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </center>

                    </table>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <script src="https://kit.fontawesome.com/6beb2a82fc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#data-tabel');
    </script>
    <!-- Add this script block at the end of your <body> section -->
    <!-- Add this script block at the end of your <body> section -->
    <!-- Add this script block at the end of your <body> section -->
    <script>
        $(document).ready(function() {
            $("#kode_kamar").on("blur", function() {
                var kode_kamar = $(this).val();

                $.ajax({
                    url: "check_kode_kamar.php",
                    type: "POST",
                    data: {
                        kode_kamar: kode_kamar
                    },
                    success: function(response) {
                        if (response == "exists") {
                            alert("Kode Kamar yang anda masukkan sudah ada");
                            $("#kode_kamar").val(""); // Clear the input field
                        }
                    }
                });
            });

            function checkInputs() {
                var allInputsFilled = true;

                // Loop through each input field
                $('form#tambah_kamar input').each(function() {
                    // Check if the input field is empty
                    if ($(this).val() === '') {
                        allInputsFilled = false;
                    }
                });

                // Enable or disable the submit button based on the result
                $('#submitBtn').prop('disabled', !allInputsFilled);
            }

            // Add event listener for input fields
            $('form#tambah_kamar input').on('input', function() {
                checkInputs();
            });

            // Add event listener for the select fields
            $('form#tambah_kamar select').on('change', function() {
                checkInputs();
            });
        });
    </script>
</body>


</html>