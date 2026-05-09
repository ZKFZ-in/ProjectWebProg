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

    <?php
    <?php
        $urut = isset($_COOKIE['cookie_urut']) ? $_COOKIE['cookie_urut'] : 'tanggal';
        $arah = isset($_COOKIE['cookie_arah']) ? $_COOKIE['cookie_arah'] : 'asc';

        $data = [];
        foreach ($_COOKIE as $key => $value) {
            if (strpos($key, 'transaksi_') === 0) {
                $tanggal = str_replace('transaksi_', '', $key);
                $data[] = ['tanggal' => $tanggal, 'nominal' => $value];
            }
        }

        if (empty($data)) {
            echo "<i>Belum ada Data</i>";
        } else {
            usort($data, function($x, $y) use ($urut, $arah) {
                if ($urut === 'nominal') {
                    $hasil = $x['nominal'] - $y['nominal'];
                } else {
                    $hasil = strtotime($x['tanggal']) - strtotime($y['tanggal']);
                }
                return $arah === 'desc' ? -$hasil : $hasil;
            });

            echo "<ul>";
            foreach ($data as $item) {
                $nominal = number_format($item['nominal'], 0, ',', ',');
                echo "<li>" . $item['tanggal'] . " - Rp. " . $nominal . "</li>";
            }
            echo "</ul>";
        }
    ?>

</body>
</html>