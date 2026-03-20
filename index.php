<?php
$nama = "";
$nim = "";
$alamat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $alamat = htmlspecialchars($_POST['alamat']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>

    <h2>Form Input Data</h2>

    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>

    <hr>

    <?php if (!empty($nama) && !empty($nim) && !empty($alamat)): ?>
        <h2>Hasil Input:</h2>
        <p>Nama: <?= $nama; ?></p>
        <p>NIM: <?= $nim; ?></p>
        <p>Alamat: <?= $alamat; ?></p>
    <?php endif; ?>

</body>
</html>
