<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header ("Location:penduduk.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_aini3nov WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$penduduk = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("DATA TIDAK DITEMUKAN");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
    <h2>Form Edit</h2>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $penduduk ['id'] ?>"/>

        <p>
            <label for="nik">NIK :</label>
            <input type="number" name="nik" value="<?php echo $penduduk ['nik'] ?>"/>
        </p>

        <p>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="<?php echo $penduduk ['nama'] ?>"/>
        </p>

        <p>
        <label for="agama">Agama :</label>
        <select name="agama" value="<?php echo $penduduk ['agama'] ?>">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="buddha">Buddha</option>
        <option value="hindhu">Hindu</option>
        </select>
        </p>

        <p>
            <input type="submit" value="Edit" name="edit" />
        </p>
</center>
</body>
</html>