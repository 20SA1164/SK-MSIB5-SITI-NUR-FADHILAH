<?php 
include '../config/koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$nama = $_POST["nama_hotel"];
$jenis = $_POST["jenis_kamar"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$ketersediaan = $_POST["ketersediaan"];
$updated_at = date('Y-m-d H:i:s');

// Upload Proses
$target_dir = "images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "UPDATE `kamar` set 
`id_hotel` = '$nama', 
`gambar` = '$target_file', 
`id_jenis_kamar` = '$jenis', 
`deskripsi` = '$deskripsi', 
`harga` = '$harga', 
`ketersediaan` = '$ketersediaan', 
`updated_at` = '$updated_at', `updated_at`= '$updated_at' where `id` = '$_GET[id]'");

header("Location:data_kamar.php");

?>