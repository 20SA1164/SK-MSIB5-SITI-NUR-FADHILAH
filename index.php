<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom CSS for Card Styling */
        .hotel{
            padding: 10px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-radius: 15px;
            height: 240px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .card-text {
            margin-top: 0.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header">
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <h1><span>Selamat Datang</span> TravelNest</h1>
                        <p>TravelNest adalah sebuah website yang menyediakan informasi tentang hotel dan restoran yang ada di Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="hotel">
        <?php
        include 'config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM kamar as k join hotel as h ON k.id_hotel = h.id_nama_hotel join jenis_kamar as jk ON k.id_jenis_kamar = jk.id_nama_jenis_kamar GROUP BY nama_hotel");
        if (mysqli_num_rows($query) > 0) {
            $count = 0;
            echo '<div class="row">';
            while ($data = mysqli_fetch_array($query)) {
                if ($count % 2 == 0 && $count != 0) {
                    echo '</div><div class="row">';
                }
        ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="admin/<?php echo $data['gambar']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_hotel']; ?></h5>
                                    <p class="card-text">Hotel Bintang <?php echo $data['bintang']; ?></p>
                                    <p class="card-text"><?php echo $data['alamat']; ?></p>
                                    <p class="card-text">Rp. <?php echo $data['harga']; ?></p>
                                    <a href="#" class="btn btn-primary">Pilih Kamar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                $count++;
            }
            echo '</div>'; // menutup tag row terakhir
        } else {
            echo "Tidak ada data yang ditemukan";
        }
        ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>