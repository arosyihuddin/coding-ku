<?php
include "../connect/koneksi.php";
session_start();
$nik = $_GET["nik"];
$delete = mysqli_query($koneksi,"DELETE from tb_user where tb_user.nik='$nik'");
if($delete){
    $_SESSION["pesan"] = "sukses";
    header("location: ../admin/user.php");
}else{
    $_SESSION["pesan"] = "gagal";
    header("location: ../admin/user.php");
}
?>