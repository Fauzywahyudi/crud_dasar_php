<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 align="center">Data User </h1>
    <a href="tambah.php" style="margin-left: 140px"><button>Tambah Data</button></a>
    <p></p>
    <table border="1" width="80%" align="center">
        <tr>
            <th>No</th>
            <th>ID User</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php 
        
            include "koneksi.php";
            $no=1;
            $sql = mysqli_query($kon, "SELECT * FROM tb_user");
            while ($res = mysqli_fetch_array($sql)) {
                echo "<tr>
                <td align=center>$no</td>
                <td align=center>$res[user_id]</td>
                <td align=center>$res[user_username]</td>
                <td align=center>$res[user_password]</td>
                <td align=center>$res[user_nama]</td>
                <td align=center><a href='edit.php?id=$res[user_id]'>Edit</a> | <a href='hapus.php?id=$res[user_id]'>Hapus</a></td>
                </tr>";
                $no++;
            }
        
        ?>
    </table>
</body>
</html>