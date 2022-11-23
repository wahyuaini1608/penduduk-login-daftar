<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Penduduk</title>
</head>
<body>
    <center>
    <br/>

<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
}
?>
<h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! ANDA BERHASIL LOGIN-!!</h4>
 <br/>
 <br/>
    <h2>APLIKASI PENDATAAN</h2>
    <h2>WARGA DS. SUKAMUNDUR</h2>
    <form action="penduduk.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>

<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="SELECT * FROM  tb_aini3nov WHERE nama LIKE '%".$cari."%'";
    $query = mysqli_query($koneksi, $sql); 
    			
}else{
    $sql='SELECT * FROM  tb_aini3nov';
    $query = mysqli_query($koneksi, $sql);  	
}
while($penduduk=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$penduduk['id']."</td>";
    echo"<td>".$penduduk['nik']."</td>";
    echo"<td>".$penduduk['nama']."</td>";
    echo"<td>".$penduduk['agama']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id=".$penduduk['id']."'>Edit</a>|";
    echo "<a href='hapus.php?id=".$penduduk['id']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";
}
?>
</center>
</table>
<a href="logout.php"><input type="button" value="Log Out" name="logout"/></a>
<a href="tambah.php"><input type="submit" value="Tambah Data" name="tambah"/></a>
</body>
</html>


