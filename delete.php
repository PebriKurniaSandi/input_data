<?php
    include 'koneksi.php';

    $id = $_GET['id'];


    mysqli_query($koneksi, "delete from data_karyawan where id='$id'");

    header("location:home.php");