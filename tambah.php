<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Transaksi</h1>
    <?<php 
        if(isset($_COOKIE)) {
            echo"<p style='color:red;'>Data berhasil disimpan</p>";
        }
    ?>
    <?php
        $tanggal = "";
        $nominal = "";
        if(isset($_POST['simpan'])) {
            $tanggal = $_POST['tanggal'];
            $nominal = $_POST['nominal'];
            
            $nama_cookies = "transaksi_".$tanggal;
            setcookie($nama_cookies, $nominal, time() + (3600*24*30));
        } 
        $tanggal = 
        $nominal =
    
    ?>
    <form method="post" action="tambah.php">
        <input type="date" name="tanggal" value="<?php echo $tanggal; ?>">
        <input type="number" name="nominal" value="<?php echo $nominal; ?>">
        <input type="submit" value="Simpan">
    </form>

    <a href="index.php">Kembali</a>
</body>
</html>