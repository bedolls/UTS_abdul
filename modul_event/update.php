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
$sunting = "UPDATE tbl_event SET nama_event='$ne', lokasi='$lk', tanggal='$tgl', jumlah_peserta='$jml'  WHERE id_event='$id'";
#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);
#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>