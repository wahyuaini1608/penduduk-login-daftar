<!DOCTYPE html>
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>

<body>
<Body background="bg.jpg"> 
    <h3>Form Pendaftaran Baru</h3>
        <form action="proses-tambah.php" method="POST">
            <form>
                <fieldset>
                <a href="penduduk.php"><input type="button" value="Back" name="back"/></a>
    <p>
        <label for="nik">NIK : </label>
        <input type="number" name="nik" />
    </p>
    <p>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" />
    </p>
    <p>
        <label for="agama"> Agama : </label>
        <select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen </option>
        <option value="katolik">Katolik </option>
        <option value="buddha">Buddha </option>
        <option value="hindu">Hindu </option>
        </select> 
    </p>
    <p>
       <input type="submit" value="Tambah Data" name="tambah"/>
    </p>
</fieldset>
</form>
</body>

</html>