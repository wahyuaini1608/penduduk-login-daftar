<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];

    $sql="UPDATE tb_aini3nov SET nik='$nik', nama='$nama', agama='$agama' WHERE id=$kode";
    $query= mysqli_query($koneksi,$sql);

    if($query){
        header ('Location:penduduk.php');
    }else{
        die ("GAGAL MENGEDIT");
    }
}
?>