<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inputdata.php">Input Data</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rangking.php">Ranking</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container"><br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah Mahasiswa">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Hapus Record -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
        session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahsiswa'])){

                $jumlah = $_SESSION['jumlahsiswa'];
                $nama = array();

                $nilaiipk = array();
                $textipk = array();
                $gapipk = array();
                $bobotipk = array();

                $nilaipenghasilan = array();
                $textpenghasilan = array();
                $gappenghasilan = array();
                $bobotpenghasilan = array();

                $nilaitanggungan = array();
                $texttanggungan = array();
                $gaptanggungan = array();
                $bobottanggungan = array();

                $nilaismt = array();
                $textsmt = array();
                $gapsmt = array();
                $bobotsmt = array();

                $ncfsiswa = array();
                $nsfsiswa = array();
                $hasilsiswa = array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaiipk[$a] = $_POST['ipk'.$a];
                   $nilaipenghasilan[$a] = $_POST['penghasilan'.$a];
                   $nilaitanggungan[$a] = $_POST['tanggungan'.$a];
                   $nilaismt[$a] = $_POST['smt'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO siswa (nama, ipk, penghasilan, tanggungan, semester) VALUES('$nama[$a]','$nilaiipk[$a]','$nilaipenghasilan[$a]','$nilaitanggungan[$a]','$nilaismt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($nilaiipk[$a] == "1"){
                        $textipk[$a] = "< 2,5 ";
                    } elseif ($nilaiipk[$a] == "2") {
                        $textipk[$a] = ">2,5 dan <= 3";
                    } elseif ($nilaiipk[$a] == "3") {
                        $textipk[$a] = ">3 dan <= 3,5";
                    } else {
                        $textipk[$a] = "> 3,5";
                    }

                    if ($nilaipenghasilan[$a] == "4"){
                        $textpenghasilan[$a] = "<=1.000.000";
                    } elseif ($nilaipenghasilan[$a] == "3") {
                        $textpenghasilan[$a] = ">1.000.000 - <=3.000.000";
                    } elseif ($nilaipenghasilan[$a] == "2") {
                        $textpenghasilan[$a] = ">3.000.000 - <=5.000.000";
                    } else {
                        $textpenghasilan[$a] = ">=5.000.000";
                    }

                    if ($nilaitanggungan[$a] == "1"){
                        $texttanggungan[$a] = "Jumlah 1";
                    } elseif ($nilaitanggungan[$a] == "2") {
                        $texttanggungan[$a] = "Jumlah 2";
                    } elseif ($nilaitanggungan[$a] == "3") {
                        $texttanggungan[$a] = "Jumlah 3";
                    } else {
                        $texttanggungan[$a] = "Jumlah >3";
                    }

                    if ($nilaismt[$a] == "0"){
                        $textsmt[$a] = "<=2 / >8";
                    } elseif ($nilaismt[$a] == "1") {
                        $textsmt[$a] = "3";
                    } elseif ($nilaismt[$a] == "2") {
                        $textsmt[$a] = "4";
                    } elseif ($nilaismt[$a] == "3") {
                        $textsmt[$a] = "5, 6";
                    } else {
                        $textsmt[$a] = "7, 8";
                    }

                    $sql = mysqli_query($koneksi,"INSERT INTO keterangansiswa (nama, ket_ipk, ket_penghasilan, ket_tanggungan, ket_smt) VALUES('$nama[$a]','$textipk[$a]','$textpenghasilan[$a]','$texttanggungan[$a]','$textsmt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapipk[$a] = $nilaiipk[$a] - 3;
                    $gappenghasilan[$a] = $nilaipenghasilan[$a] - 3;
                    $gaptanggungan[$a] = $nilaitanggungan[$a] - 3;
                    $gapsmt[$a] = $nilaismt[$a] - 2;

                    $sql = mysqli_query($koneksi,"INSERT INTO gapsiswa (nama, gapipk, gappenghasilan, gaptanggungan, gapsmt) VALUES('$nama[$a]','$gapipk[$a]','$gappenghasilan[$a]','$gaptanggungan[$a]','$gapsmt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gapipk[$a] == "0"){
                        $bobotipk[$a] = "5";
                    } elseif ($gapipk[$a] == "1") {
                        $bobotipk[$a] = "4.5";
                    } elseif ($gapipk[$a] == "-1") {
                        $bobotipk[$a] = "4";
                    } elseif ($gapipk[$a] == "2") {
                        $bobotipk[$a] = "3.5";
                    } elseif ($gapipk[$a] == "-2") {
                        $bobotipk[$a] = "3";
                    } elseif ($gapipk[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapipk[$a] == "-3") {
                        $bobotipk[$a] = "2";
                    } elseif ($gapipk[$a] == "4") {
                        $bobotipk[$a] = "1.5";
                    } else {
                        $bobotipk[$a] = "1";
                    }

                    if ($gappenghasilan[$a] == "0"){
                        $bobotpenghasilan[$a] = "5";
                    } elseif ($gappenghasilan[$a] == "1") {
                        $bobotpenghasilan[$a] = "4.5";
                    } elseif ($gappenghasilan[$a] == "-1") {
                        $bobotpenghasilan[$a] = "4";
                    } elseif ($gappenghasilan[$a] == "2") {
                        $bobotpenghasilan[$a] = "3.5";
                    } elseif ($gappenghasilan[$a] == "-2") {
                        $bobotpenghasilan[$a] = "3";
                    } elseif ($gappenghasilan[$a] == "3") {
                        $bobotpenghasilan[$a] = "2.5";
                    } elseif ($gappenghasilan[$a] == "-3") {
                        $bobotpenghasilan[$a] = "2";
                    } elseif ($gappenghasilan[$a] == "4") {
                        $bobotpenghasilan[$a] = "1.5";
                    } else {
                        $bobotpenghasilan[$a] = "1";
                    }

                    if ($gaptanggungan[$a] == "0"){
                        $bobottanggungan[$a] = "5";
                    } elseif ($gaptanggungan[$a] == "1") {
                        $bobottanggungan[$a] = "4.5";
                    } elseif ($gaptanggungan[$a] == "-1") {
                        $bobottanggungan[$a] = "4";
                    } elseif ($gaptanggungan[$a] == "2") {
                        $bobottanggungan[$a] = "3.5";
                    } elseif ($gaptanggungan[$a] == "-2") {
                        $bobottanggungan[$a] = "3";
                    } elseif ($gaptanggungan[$a] == "3") {
                        $bobottanggungan[$a] = "2.5";
                    } elseif ($gaptanggungan[$a] == "-3") {
                        $bobottanggungan[$a] = "2";
                    } elseif ($gaptanggungank[$a] == "4") {
                        $bobottanggungan[$a] = "1.5";
                    } else {
                        $bobottanggungan[$a] = "1";
                    }

                    if ($gapsmt[$a] == "0"){
                        $bobotsmt[$a] = "5";
                    } elseif ($gapsmt[$a] == "1") {
                        $bobotsmt[$a] = "4.5";
                    } elseif ($gapsmt[$a] == "-1") {
                        $bobotsmt[$a] = "4";
                    } elseif ($gapsmt[$a] == "2") {
                        $bobotsmt[$a] = "3.5";
                    } elseif ($gapsmt[$a] == "-2") {
                        $bobotsmt[$a] = "3";
                    } elseif ($gapsmt[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapsmt[$a] == "-3") {
                        $bobotsmt[$a] = "2";
                    } elseif ($gapsmt[$a] == "4") {
                        $bobotsmt[$a] = "1.5";
                    } else {
                        $bobotsmt[$a] = "1";
                    }

                    $ncfsiswa[$a] = (($bobotipk[$a]) + ($bobotpenghasilan[$a]))/2;
                    $nsfsiswa[$a] = (($bobottanggungan[$a]) + ($bobotsmt[$a]))/2;
                    $hasilsiswa[$a] = (0.6 * $ncfsiswa[$a]) + (0.4 * $nsfsiswa[$a]);

                    $sql = mysqli_query($koneksi,"INSERT INTO hasilsiswa (nama, bobotipk, bobotpenghasilan, bobottanggungan, bobotsmt, ncf, nsf, hasil) VALUES('$nama[$a]','$bobotipk[$a]','$bobotpenghasilan[$a]','$bobottanggungan[$a]','$bobotsmt[$a]','$ncfsiswa[$a]','$nsfsiswa[$a]','$hasilsiswa[$a]')") or die (mysqli_error($koneksi));

                }

    ?>

    <!-- TUTUP -->
    <?php
            }
        }
    ?>
    <!-- /TUTUP -->
    <br><br>
    <!-- Table -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">IPK</th>
              <th scope="col">Penghasilan Orang tua</th>
              <th scope="col">Tanggungan Orang tua</th>
              <th scope="col">Semester</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keterangansiswa");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_ipk"];?></td>
                <td><?php echo $data["ket_penghasilan"];?></td>
                <td><?php echo $data["ket_tanggungan"];?></td>
                <td><?php echo $data["ket_smt"];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>
                    </div>
                </td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->


    <br><br>


    <!-- Table -->
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">IPK</th>
                  <th scope="col">Penghasilan Orang tua</th>
                  <th scope="col">Tanggungan Orang tua</th>
                  <th scope="col">Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["ipk"];?></td>
                  <td><?php echo $data["penghasilan"];?></td>
                  <td><?php echo $data["tanggungan"];?></td>
                  <td><?php echo $data["semester"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">2</th>
                </tr>
            </thead>
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>
    <!-- /Tabel -->

    </div>

</body>
</html>