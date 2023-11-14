<?php
include '../config/koneksi.php';

if (isset($_POST['kode_kamar'])) {
    $kode_kamar = $_POST['kode_kamar'];

    $query = "SELECT * FROM kamar WHERE kode_kamar = '$kode_kamar'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "exists"; // Kode Produk sudah ada di database
    } else {
        echo "not_exists"; // Kode Produk belum ada di database
    }
}
?>
