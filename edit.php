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

<?php 
    include "koneksi.php";

    $id = $_GET['id'];

    $sql = mysqli_query($kon, "SELECT * FROM tb_user WHERE user_id='$id'");
    
    while ($res = mysqli_fetch_array($sql)) {
        $user_id = $res['user_id'];
        $username = $res['user_username'];
        $password   = $res['user_password'];
        $namalengkap   = $res['user_nama'];
    }


?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" value="<?php echo $username?>" name="user" id="user"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" value="<?php echo $password ?>" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" value="<?php echo $namalengkap ?>" name="nama" id="nama"></td>
            </tr>
            <tr>
            
                <td colspan="2" align="center"><input type="submit" value="Simpan" name="tambah"></td>
            </tr>
        </table>
        
        <?php 
            include "koneksi.php";

            if (isset($_POST['tambah'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $nama = $_POST['nama'];

                $sql = mysqli_query($kon, "UPDATE tb_user SET user_username='$user', user_password='$pass', user_nama='$nama' WHERE user_id='$id'");

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