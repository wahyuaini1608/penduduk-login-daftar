<?php
include ("koneksi.php");
isset($_GET['simpan']);
    $kode=$_GET['id'];
   

    $sql="DELETE FROM tb_aini3nov WHERE id=$kode";
    $query= mysqli_query($koneksi,$sql);

    if($query){
        header ('Location:penduduk.php?status=sukses');
    }else{
        die ("GAGAL MENGHAPUS");
    }

?>