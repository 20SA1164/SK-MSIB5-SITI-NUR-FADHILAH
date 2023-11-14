<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password']; 

$login = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
if(mysqli_num_rows($login) == 1){
    header("location:../admin/dashboard.php");
}else{
    header("location:../login_admin.php?pesan=1");
}
$cek = mysqli_num_rows($login);
?>