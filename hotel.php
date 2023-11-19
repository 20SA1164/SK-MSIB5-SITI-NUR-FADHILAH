<!doctype html>
<html lang="en">

<head>
    <!-- Mengatur pengkodean karakter dan viewport untuk responsif -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TravelNest</title>

    <!-- Menghubungkan Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Menghubungkan Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/6beb2a82fc.js" crossorigin="anonymous"></script>

    <!-- Menghubungkan file CSS kustom -->
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #e7e5e5;">
    <!-- Navbar untuk navigasi -->
    <nav class="navbar navbar-expand-lg fixed-top hotelnav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TravelNest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Tautan navigasi -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Tautan Beranda -->
                    <li class="nav-item" style="margin: 0 30px;">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- Tautan Hotel -->
                    <li class="nav-item" style="margin: 0 30px;">
                        <a class="nav-link active" href="hotel.php">Hotel</a>
                    </li>
                    <!-- Tautan Pemesanan -->
                    <li class="nav-item" style="margin: 0 30px;">
                        <a class="nav-link" href="#">Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian Daftar Hotel -->
    <section class="hotel">
        <?php
        // Sertakan file koneksi ke database
        include 'config/koneksi.php';

        // Ambil data dari database
        $query = mysqli_query($conn, "SELECT * FROM kamar as k join hotel as h ON k.id_hotel = h.id_nama_hotel join jenis_kamar as jk ON k.id_jenis_kamar = jk.id_nama_jenis_kamar GROUP BY nama_hotel");

        // Periksa apakah data ada
        if (mysqli_num_rows($query) > 0) {
            $count = 0;
            echo '<div class="row">';

            // Loop melalui setiap data hotel
            while ($data = mysqli_fetch_array($query)) {
                // Buat baris baru setelah dua hotel
                if ($count % 2 == 0 && $count != 0) {
                    echo '</div><div class="row">';
                }
        ?>
                <!-- Kartu Hotel -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- Gambar Hotel -->
                                <img src="<?php echo $data['foto_hotel']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <!-- Nama Hotel -->
                                    <h5 class="card-title"><?php echo $data['nama_hotel']; ?></h5>
                                    <p class="card-text">
                                        <!-- Badge untuk Hotel -->
                                        <span class="badge rounded-pill text-bg-info">
                                            <i class="fa-solid fa-hotel"></i>
                                            Hotel
                                        </span>
                                        <!-- Rating bintang -->
                                        <?php for ($i = 0; $i < $data['bintang']; $i++) { ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php } ?>
                                    </p>
                                    <!-- Alamat Hotel -->
                                    <p class="card-text"><?php echo $data['alamat']; ?></p>

                                    <?php
                                    // Ambil harga kamar terendah untuk hotel
                                    $query2 = mysqli_query($conn, "SELECT MIN(harga) as harga_terendah FROM kamar WHERE id_hotel = '$data[id_hotel]'");
                                    $data2 = mysqli_fetch_array($query2);
                                    $harga_terendah = $data2['harga_terendah'];
                                    $formatted_harga = number_format($harga_terendah, 0, ',', '.'); // Format harga ke Rupiah
                                    ?>
                                    <!-- Tampilkan harga kamar terendah -->
                                    <p class="card-text">Rp. <?php echo $formatted_harga; ?></p>

                                    <!-- Tombol untuk memilih kamar -->
                                    <a href="detail.php?id=<?php echo $data['id_nama_hotel'] ?>" class="btn btn-primary">Pilih Kamar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                $count++;
            }
            echo '</div>'; // Tutup tag baris terakhir
        } else {
            echo "Tidak ada data yang ditemukan"; // Tampilkan jika tidak ada data
        }
        ?>
    </section>

    <!-- Bootstrap JS untuk fungsionalitas toggle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>