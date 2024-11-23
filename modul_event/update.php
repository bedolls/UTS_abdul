<?php
#1. koneksikan file ini
include("../koneksi.php");
#2. mengambil value dari form
$id = $_POST['id'];
$ne = $_POST['nama_event'];
$lk = $_POST['lokasi'];
$tgl = $_POST['tanggal'];
$jml = $_POST['jumlah_peserta'];
#3. menulis query
$sunting = "UPDATE jurusans SET kode='$kd', jurusan='$jrs' WHERE id='$id'";
#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);
#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>