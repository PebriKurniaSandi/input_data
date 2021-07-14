<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    //Memanggil file config.php
    include 'koneksi.php';
    //Menangkap query id yang dikirim melalui button detail di index.php
    $id = $_GET['id'];
    //Melakukan query untuk mendapatkan data mahasiswa berdasarkan $id
    $mahasiswa = mysqli_query($koneksi, "select * from data_karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($mahasiswa)){
    ?>
        <div class="container my-5">
            <p><a href="index.php">Home</a> / Edit Data Karyawan / <?php echo $data['Nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">
                    <!-- Kita membuat form dengan memanggil file store.php-->
                    <form id="formcreate" method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Karyawan" name="Nama" value="<?php echo $data['Nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="No_KTP" class="form-label">No.KTP</label>
                            <input type="text" class="form-control" id="No_KTP" placeholder="Masukkan No_KTP Karyawan" name="No_KTP" value="<?php echo $data['No_KTP']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="No_Telp" class="form-label">No.Telpon</label>
                            <input type="text" class="form-control" id="No_Telp" placeholder="Masukkan No_Telp Karyawan" name="No_Telp" value="<?php echo $data['No_Telp']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Tahun_Masuk" class="form-label">Tahun Masuk</label>
                            <input type="text" class="form-control" id="Tahun_Masuk" placeholder="Masukkan Tahun Masuk Karyawan" name="Tahun_Masuk" value="<?php echo $data['Tahun_Masuk']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Masa_Kerja" class="Masa_Kerjal">Masa Kerja</label>
                            <input type="text" class="form-control" id="Masa_Kerja" placeholder="Masukkan Masa Kerja Karyawan" name="Masa_Kerja" value="<?php echo $data['Masa_Kerja']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" form="formcreate" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>