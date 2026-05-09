<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $urut = $_POST['urut'];
        $arah = $_POST['arah'];

        setcookie('cookie_urut', $urut, time() + (3600 * 24 * 30));
        setcookie('cookie_arah', $arah, time() + (3600 * 24 * 30));

        header('Location: setting.php?sukses=1');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WEBPROG</title>
</head>
<body>
    <h1>Setting</h1>

    <?php
        if (isset($_GET['sukses']) && $_GET['sukses'] == '1'){
            echo "<p style='color: red;'>Data berhasil disimpan</p>";
        }
    ?>

    <form method="post" action="setting.php">
        <p>
            Urut Berdasarkan:
            <input type="radio" name="urut" value="tanggal">Tanggal
            <input type="radio" name="urut" value="nominal">Nominal
        </p>

        <p>
            Arah:
            <input type="radio" name="arah" value="asc">Ascending
            <input type="radio" name="arah" value="desc">Descendiing
        </p>
        <input type="submit" value="Simpan">
    </form>
        
    <p><a href="index.php">Kembali</a></p>
            

</body>
</html>