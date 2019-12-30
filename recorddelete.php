<?php
    include "koneksi.php";

    if (isset($_POST['submitdelete'])) {

    $sql=mysqli_query($koneksi,"DELETE FROM siswa;") or die($conn);
    $sql1=mysqli_query($koneksi,"DELETE FROM keterangansiswa;") or die($conn);
    $sql2=mysqli_query($koneksi,"DELETE FROM gapsiswa;") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasilsiswa;") or die($conn);
    if ($sql && $sql1) {

		echo "<script>window.location='proses.php'</script>";
    }
	}
?>
