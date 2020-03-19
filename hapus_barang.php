<?php 
    include "koneksi.php";

    $id = $_GET['id'];

    $sql = $kon->query("DELETE FROM tb_barang WHERE barang_id='$id'");

    header('location:select.php');
?>