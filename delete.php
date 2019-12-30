<?php
    include "koneksi.php";

    $id = $_GET['id'];

    echo $id;

    $sql=mysqli_query($koneksi,"DELETE FROM siswa WHERE nama = '$id'") or die($conn);
    $sql1=mysqli_query($koneksi,"DELETE FROM keterangansiswa WHERE nama = '$id'") or die($conn);
    $sql2=mysqli_query($koneksi,"DELETE FROM gapsiswa WHERE nama = '$id'") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasilsiswa WHERE nama = '$id'") or die($conn);
    if ($sql && $sql1) {
	echo "<script>alert('Berhasil di Hapus!');window.location='proses.php'</script>";
    }
?>
