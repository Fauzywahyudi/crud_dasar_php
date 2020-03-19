<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamah Data</title>
</head>

<body>
<h1 align="center">Tambah Data</h1>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" name="user" id="user"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
            
                <td colspan="2" align="center"><input type="submit" value="Tambah" name="tambah"></td>
            </tr>
        </table>
        
        <?php 
            include "koneksi.php";

            if (isset($_POST['tambah'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $nama = $_POST['nama'];

                $sql = mysqli_query($kon, "INSERT INTO tb_user VALUES(NULL,'$user','$pass','$nama')");

                if ($sql) {
                    echo "Berhasil ditambahkan";
                    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
                }else{
                    echo "Gagal";
                }
            
            }
        ?>
    </form>
</body>

</html>