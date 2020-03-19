<?php 

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

    
