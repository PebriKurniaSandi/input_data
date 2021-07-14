<?php
//koneksi database
include './koneksi.php';

//menangkap data id 
$id  = $_GET['id'];

//update data ke database
$data_karyawan = mysqli_query($koneksi, "select * from data_karyawan where id='$id'");

while($data = mysqli_fetch_assoc($data_karyawan)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title><?php echo $data['Nama']?></title>
    </head>
    <body onload="window.print();">
        <div class="container my-5">
            <p class="fw-bold">Profil Karyawan</p>
            <p>Nama      : <?php echo $data['Nama']?></p>
            <p>No.KTP     : <?php echo $data['No_KTP']?></p>
            <p>No.Telp    : <?php echo $data['No_Telp']?></p>
            <p>Tahun Masuk   : <?php echo $data['Tahun_Masuk']?></p>
            <p>Masa Kerja    : <?php echo $data['Masa_Kerja']?></p>
        </div>
    <?php 
}
?>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>