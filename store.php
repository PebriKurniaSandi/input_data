<?php

include './koneksi.php';


$Nama = $_POST['Nama'];
$No_KTP = $_POST['No_KTP'];
$No_Telp = $_POST['No_Telp'];
$Tahun_Masuk = $_POST['Tahun_Masuk'];
$Masa_Kerja = $_POST['Masa_Kerja'];


mysqli_query($koneksi, "insert into data_karyawan values('','$Nama','$No_KTP','$No_Telp','$Tahun_Masuk','$Masa_Kerja')");
header("location./home.php");