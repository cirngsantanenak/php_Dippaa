<?php
$judul = "Belajar PHP";
$salam = "Hallo dari PHP";

$nama = "Dipa";
$umur = 18;
$tentang = "Suka Musik";
$sekolah = "SMK N 1 Pacitan";
$hobi = "Melukis";
$cita_cita = "Orang Sukses";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title><?= $judul ?></title>
</head>
<body>
    <h1><?= $salam ?></h1> 

    <h2>Data Diri</h2>

    Nama : <?= $nama ?><br>
    Umur : <?= $umur ?> Tahun<br>
    Tentang : <?= htmlspecialchars($tentang) ?><br>
    Sekolah : <?= $sekolah ?><br>
    Hobi : <?= $hobi ?><br>
    Cita-cita : <?= $cita_cita ?><br>

    <h2>Form GET</h2>

    <form method="get">
        Nama :
        <input type="text" name="nama"><br><br>
        Kelas : 
        <input type="text" name="kelas"><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if (isset($_GET['nama'])) { 
        echo "<p>Halo, " . $_GET['nama'] . "!</p>"; 
    }    
    ?>
</body>
</html>