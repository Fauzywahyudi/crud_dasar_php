<?php 
    include "koneksi.php";
    $id = $_GET['id'];

    $sql = mysqli_query($kon, "DELETE FROM tb_user WHERE user_id='$id'");

    if ($sql) {
        echo "<script>
            window.alert('Berhasil dihapus')
        </script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>
            window.alert('Gagal dihapus')
        </script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
    
?>