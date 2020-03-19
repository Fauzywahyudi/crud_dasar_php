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
    <!-- <link rel="icon" href="img/favicon.png">
    Bootstrap CSS
    <link rel="stylesheet" href="css/bootstrap.min.css">
    animate CSS
    <link rel="stylesheet" href="css/animate.css">
    owl carousel CSS
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    font awesome CSS
    <link rel="stylesheet" href="css/all.css">
    flaticon CSS
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    font awesome CSS
    <link rel="stylesheet" href="css/magnific-popup.css">
    swiper CSS
    <link rel="stylesheet" href="css/slick.css">
    style CSS
    <link rel="stylesheet" href="css/style.css"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>


    <div class="container bg-white p-5">

        <h1 class="p-2 text-white text-center font-weight-bold card-header bg-dark">Tambah Barang</h1>
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
                        <input name="nama" type="text" class="form-control" ">
                    </div>
                    <div class=" form-group">
                        <label>Modal Barang</label>
                        <input name="modal" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input name="harga" type="number" class="form-control" ">
                    </div>
                    <div class=" form-group">
                        <label>Satuan</label>
                        <input name="satuan" type="text" class="form-control" ">
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

        $sql = mysqli_query($kon, "INSERT INTO `tb_barang`( `barang_nama`, 
                                                                `barang_modal`, 
                                                                `barang_harga`, 
                                                                `barang_satuan`) 
                                                                VALUES (
                                                                    '$nama',
                                                                    '$modal',
                                                                    '$harga',
                                                                    '$satuan')");

        header('location:select.php');
        }
        ?>

    </div>

    <!-- jquery plugins here
    <script src="js/jquery-1.12.1.min.js"></script>
    popper js
    <script src="js/popper.min.js"></script>
    bootstrap js
    <script src="js/bootstrap.min.js"></script>
    easing js
    <script src="js/jquery.magnific-popup.js"></script>
    swiper js
    <script src="js/swiper.min.js"></script>
    swiper js
    <script src="js/mixitup.min.js"></script>
    particles js
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    slick js
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    custom js
    <script src="js/custom.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>