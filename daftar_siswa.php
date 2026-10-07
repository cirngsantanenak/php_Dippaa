<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Siswa</title>
</head>
<body>
   <h1>Daftar Siswa</h1>

   <?php 
    $siswa = [
        ["nama"=>"Andi","kelas"=>"X","nilai"=>85], 
        ["nama"=>"Budi","kelas"=>"XI","nilai"=>78], 
        ["nama"=>"Citra","kelas"=>"XII","nilai"=>92], 
    ]; 
    ?>
    
    <table border='1' cellpadding='6'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Status</th>
    </tr> 

    <?php foreach ($siswa as $i => $s): ?> 

        <tr> 
        <td><?= $i+1 ?></td> 
        <td><?= $s['nama'] ?></td> 
        <td><?= $s['kelas'] ?></td> 
        <td><?= $s['nilai'] ?></td> 
        <td>
            <?php
            if ($s['nilai'] >=75) {
                echo "Lulus";
            } else {
                echo "Tidak Lulus";
            }
            ?>
        </td>
        </tr> 

        <?php endforeach; ?>
    </table>

</body>
</html>