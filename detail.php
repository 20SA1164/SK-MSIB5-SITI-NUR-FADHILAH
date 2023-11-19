<!doctype html>
<html lang="en">

<head>
  <!-- Pengaturan karakter dan tampilan responsif -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Kamar</title>
  <!-- Koneksi dengan Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/6beb2a82fc.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #e7e5e5;">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top detailnav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TravelNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item" style="margin: 0 30px;">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item" style="margin: 0 30px;">
            <a class="nav-link" href="hotel.php">Hotel</a>
          </li>
          <li class="nav-item" style="margin: 0 30px;">
            <a class="nav-link" href="#">Pemesanan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Informasi Hotel -->
  <div class="hotel_det mt-5">
    <?php
    include 'config/koneksi.php';
    // Periksa apakah parameter 'id' ada dalam URL
    if (isset($_GET['id'])) {
      // Ambil ID hotel dari parameter URL
      $hotel_id = $_GET['id'];

      // Ambil detail kamar dari database untuk hotel tertentu
      // Contoh ini mungkin perlu disesuaikan dengan struktur database Anda
      $query = mysqli_query($conn, "SELECT * FROM kamar as k join hotel as h ON k.id_hotel = h.id_nama_hotel join jenis_kamar as jk ON k.id_jenis_kamar = jk.id_nama_jenis_kamar WHERE id_hotel = '$hotel_id'");
      $data = mysqli_fetch_array($query); ?>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-7">
            <p class="card-text">
            <h1 class="hotel_detail_nama"><?php echo $data['nama_hotel'] ?></h1>
            <span class="badge rounded-pill text-bg-info">
              <i class="fa-solid fa-hotel"></i>
              Hotel
            </span>
            <?php for ($i = 0; $i < $data['bintang']; $i++) { ?>
              <i class="fa-solid fa-star"></i>
            <?php } ?>
            </p>
            <p><i class="fa-solid fa-map-location-dot"></i> <?php echo $data['alamat'] ?></p>
          </div>
          <div class="col-md-5 ket_harga">
            <p>Harga/kamar/malam mulai dari</p>
            <?php
            $query2 = mysqli_query($conn, "SELECT MIN(harga) as harga_terendah FROM kamar WHERE id_hotel = '$data[id_hotel]'");
            $data2 = mysqli_fetch_array($query2);
            $harga_terendah = $data2['harga_terendah'];
            $formatted_harga = number_format($harga_terendah, 0, ',', '.'); // Format harga menjadi IDR
            ?>
            <p class="card-text harga">Rp. <?php echo $formatted_harga; ?></p>
            <a href="#">
              <button class="btn btn-danger btn-block">Pilih Kamar</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <img src="<?php echo $data['foto_hotel'] ?>" style="width: 500px; height: 500px; overflow: hidden;">
          </div>
          <div class="col-md-5">
            <h2>Fasilitas Utama</h2>
            <p><?php echo $data['fasilitas'] ?></p>
          </div>
        </div>
      </div>
    <?php } else {
      echo "Tidak ada data kamar untuk hotel ini.";
    }
    ?>
  </div>

  <!-- Kamar -->
  <div class="container">
    <div class="row">
      <?php
      include 'config/koneksi.php';
      // Periksa apakah parameter 'id' ada dalam URL
      if (isset($_GET['id'])) {
        // Ambil ID hotel dari parameter URL
        $hotel_id = $_GET['id'];

        // Ambil detail kamar dari database untuk hotel tertentu
        $query = mysqli_query($conn, "SELECT * FROM kamar as k join hotel as h ON k.id_hotel = h.id_nama_hotel join jenis_kamar as jk ON k.id_jenis_kamar = jk.id_nama_jenis_kamar WHERE id_hotel = '$hotel_id' order by id_jenis_kamar asc");

        if (mysqli_num_rows($query) > 0) {
          // Tampilkan detail kamar untuk hotel tersebut
          while ($data = mysqli_fetch_array($query)) { ?>
            <div class="col-md-12 detail">
              <div class="card">
                <img src="admin/<?php echo $data['gambar'] ?>" class="card-img-top" alt="Room Image">
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="card-title"><?php echo $data['jenis_kamar']; ?></h5>
                        <span class="badge rounded-pill text-bg-danger">
                          <i class="fa-solid fa-bed"></i>
                          Kamar
                        </span>
                        <p class="card-text">Rp. <?php echo number_format($data['harga'], 0, ',', '.'); ?>/ Malam</p>
                        <!-- Tambahkan detail kamar lebih lanjut jika diperlukan -->
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                      </div>
                      <div class="col-md-6">
                        <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                        <?php
                        $ketersediaan_kamar = $data['ketersediaan']; // Ambil nilai ketersediaan kamar
                        $warna_teks = ($ketersediaan_kamar < 3) ? 'text-danger' : 'text-success'; // Tentukan warna teks berdasarkan ketersediaan
                        ?>
                        <p class="card-text text-text <?php echo $warna_teks; ?>">(<?php echo $ketersediaan_kamar; ?> Kamar Tersedia)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <?php }
        } else {
          echo "Tidak ada data kamar untuk hotel ini.";
        }
      } else {
        echo "Parameter 'id' tidak ditemukan.";
      }
      ?>
    </div>
  </div>

  <!-- Bootstrap JS untuk fungsi toggle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>