
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        a {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <a href="tambah.php">[Tambah Transaksi]</a>
    <a href="setting.php">[Setting]</a>
    <hr>

    <div class="content">
    <?php
    $ada_data = false;

    foreach ($_COOKIE as $key => $value) {
        $ada_data = true;
            
        $tanggal = str_replace('transaksi_', '', $key);
        $nominal = number_format($value, 0, ',', ',');

        if ($ada_data && !isset($ul_opened)) {
            echo "<ul>";
            $ul_opened = true;
        }

        echo "<li>" . $tanggal . " - Rp. " . $nominal . "</li>";
    }

    if ($ada_data) {
        echo "</ul>";
    } else {
        echo "<i>Belum ada Data</i>";
    }
    ?>
    </div>
</body>
</html>