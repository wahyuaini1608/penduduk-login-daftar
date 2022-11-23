<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h2>Login</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "LOGIN GAGAL-!! USERNAME ATAU PASSWORD SALAH-!!";
        }else if($_GET['pesan'] == "logout"){
            echo "ANDA TELAH BERHASIL LOGOUT-!!";
        }else if($_GET['pesan'] == "belum_login"){
            echo "ANDA HARUS LOGIN UNTUK MENGAKSES HALAMAN ADMIN-!!";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="daftar_user.php"><input type="button" name="daftar" value="Daftar"></a></td>
                <td><input type="submit" value="Log In"></td>
            </tr>
        </table>
      
    </form>
</center>
</body>
</html>