<?php 
session_start();
include_once "../config/koneksi.php";


$email          = $_SESSION['email'];
$queryUser      = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email'");
$idUser         = mysqli_fetch_array($queryUser);
$users          = $idUser['id'];
$idBarang       = $_POST['idBarang'];
$tawar          = $_POST['harga_tawaran'];

if(empty($email) || empty($tawar)){
    echo "<script>alert('Lengkapi Data Anda.');window.location='main.php?page=item&&id=$idBarang';</script>";
} else {
    $query = "INSERT INTO t_lelang (harga_tawar,user_id,barang_id) VALUES (
        '$tawar',
        '$users',
        '$idBarang'
    )";
    
    $excute = mysqli_query($koneksi,$query);
    if($excute){
        echo "<script>alert('Tawaran Masuk Antrian.');window.location='main.php?page=item&&id=$idBarang';</script>";
    }
}
?>