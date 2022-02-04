<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Perpustakaan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <!-- card header -->
            <div class="card-header bg-dark">
                <h4 class="text-white">Data Anggota Perpustakaan</h4>
            </div>
            <!-- card body -->
            <div class="card-body">
                <ul class="list-group">
                      <?php
                    include("connection.php");
                    $sql = "select * from anggota";

                    //eksekusi perintah SQL
                    $query = mysqli_query($connect, $sql);
                    while ($anggota = mysqli_fetch_array($query)) {?>
                        <li class="list-group-item">
                        <div class="row">
                            <!-- bagian data anggota -->
                            <div class="col-lg-8 col-md-10">
                                <h5>Nama Anggota: <?php echo $anggota["nama_anggota"];?></h5>
                                <h6>Alamat: <?php echo $anggota["alamat"];?></h6>
                                <h6>Telepon: <?php echo $anggota["telepon"];?></h6>
                                <h6>ID Anggota: <?php echo $anggota["id_anggota"];?></h6>
                            </div>

                            <!-- bagian tombol pilihan -->
                            <div class="col-lg-4 col-md-2">
                                <button class="btn btn-block btn-primary">
                                    Edit
                                </button>
                                <button class="btn btn-block btn-danger">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="card-footer">
                <a href="form-anggota.php"> 
                    <button class="btn btn-success">
                        Tambah Data Anggota
                    </button>
                </a>
            </div>
            <!-- card footer -->
        </div>
    </div>
</body>
</html>
