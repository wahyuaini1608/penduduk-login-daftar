<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];

    $sql = "INSERT INTO tb_aini3nov(nik, nama, agama) VALUES ('$nik', '$nama', '$agama')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:penduduk.php?status=sukses');
    }else{
        header('location:penduduk.php?status=gagal');
    }
}
?>