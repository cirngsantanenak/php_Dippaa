<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pendaftaran Siswa</title>
</head>
<body>
    <h1>Form Pendaftaran Siswa</h1>

    <form method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required><br><br>

        <label for="email">E-Mail :</label>
        <input type="email" name="email" required><br><br>

        <label for="kelas">Kelas :</label>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br><br>

        <button type="submit">Daftar</button>
    </form>

    <?php
    if (isset($_POST['nama'], $_POST['email'], $_POST['kelas'])) {

        echo "<h2>Data Pendaftaran</h2>";
        echo "<p>Nama :" . $_POST['nama'] . "</p>";
        echo "<p>E-Mail :" . $_POST['email'] . "</p>";
        echo "<p>Kelas :" . $_POST['kelas'] . "</p>";
    }
    ?>
</body>
</html>