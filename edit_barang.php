<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

    <?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $sql = $kon->query("SELECT * FROM tb_barang WHERE barang_id='$id'");
    $data = $sql->fetch_assoc();
    ?>

    <div class="container bg-white p-5">

        <h1 class="p-2 text-white text-center font-weight-bold card-header bg-dark">Edit Barang</h1>
        <div class="row">
            <div class="col-4 mb-5">
                <a href="select.php" class="btn btn-primary m-1">Kembali</a>
            </div>
            <div class="col8">
            </div>
            <div class="col-12">
                <form style="width: 50%" method="POST" action="proses_tambah.php">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama" type="text" class="form-control" value="<?php echo $data['barang_nama'] ?>">
                    </div>
                    <div class=" form-group">
                        <label>Modal Barang</label>
                        <input name="modal" type="number" class="form-control" value="<?php echo $data['barang_modal'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input name="harga" type="number" class="form-control" value="<?php echo $data['barang_harga'] ?>">
                    </div>
                    <div class=" form-group">
                        <label>Satuan</label>
                        <input name="satuan" type="text" class="form-control" value="<?php echo $data['barang_satuan'] ?>">
                    </div>
                    <button name=" simpan" type=" submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $modal = $_POST['modal'];
            $harga   = $_POST['harga'];
            $satuan = $_POST['satuan'];

            include "koneksi.php";

            $sql = mysqli_query($kon, "UPDATE `tb_barang` SET `barang_nama`='$nama',`barang_modal`='$modal',`barang_harga`='$harga',`barang_satuan`='$satuan' WHERE barang_id='$id'");

            header('location:select.php');
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>