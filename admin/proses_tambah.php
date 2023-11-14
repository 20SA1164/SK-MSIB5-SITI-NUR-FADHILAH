<?php 
include '../config/koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$kode = $_POST["kode_kamar"];
$nama_hotel = $_POST["nama_hotel"];
$jenis_kamar = $_POST["jenis_kamar"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];
$ketersediaan = $_POST["ketersediaan"];
$created_at = date('Y-m-d h:i:s');

// Upload Proses
$target_dir = "images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `kamar` (`id`,`kode_kamar`,`id_hotel`, `gambar`, `id_jenis_kamar`, `deskripsi`, `harga`, `jumlah_kamar`, `ketersediaan`, `created_at`) 
VALUES ('','$kode', '$nama_hotel', '$target_file', '$jenis_kamar', '$deskripsi', '$harga', '$jumlah', '$ketersediaan', '$created_at');");

header("Location:data_kamar.php");

echo $result;

?>''