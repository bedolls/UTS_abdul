<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data event</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php
include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">data event</h3>
                <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i> Tambah Data</a></span>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama event</th>
                        <th scope="col">lokasi</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">jumlah peserta</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #1. koneksikan file ini
                    include("../koneksi.php");

                    #2. menulis query
                    $tampil = "SELECT * FROM tbl_event";

                    #3. jalankan query
                    $proses = mysqli_query($koneksi, $tampil);

                    #4. looping data dari database
                    $nomor = 1;
                    foreach($proses as $data){
                    ?>
                    <tr>
                        <th scope="row"><?=$nomor++?></th>
                        <td><?=$data['nama_event']?></td>
                        <td><?=$data['lokasi']?></td>
                        <td><?=$data['tanggal']?></td>
                        <td><?=$data['jumlah_peserta']?></td>
                        <td>

                        <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id_event']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id_event']?>">
                            <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus<?=$data['id_event']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin data <b><?=$data['id_event']?></b> ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <a href="hapus.php?xyz=<?=$data['id_event']?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>