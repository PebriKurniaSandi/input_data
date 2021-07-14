<?php
//koneksi database
include './koneksi.php';

//Menangkap data yang dikirim dari form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$No_KTP = $_POST['No_KTP'];
$No_Telp = $_POST['No_Telp'];
$Tahun_Masuk = $_POST['Tahun_Masuk'];
$Masa_Kerja = $_POST['Masa_Kerja'];

//Update data ke database
mysqli_query($koneksi, "update data_karyawan set Nama='$Nama', No_KTP='$No_KTP', No_Telp='$No_Telp', Tahun_Masuk='$Tahun_Masuk', Masa_Kerja='$Masa_Kerja', where id ='$id'");

//Mengalihkan halaman kembali ke home.php
header("location:home.php");