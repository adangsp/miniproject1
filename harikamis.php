<?php
$bPemesananPedesanSeafoodOnline = $_POST; //simpan POST hasil inputan kedalam variable
?>
<html>

<head>
    <title>Pemesanan Pedesaan Seafood online</title>
</head>

<body>
    <table border="1" width="300">
        <caption>Menu pedesan</caption>
        <thead>
            <tr>
                <td>Seafood komplit</td>
                <td>Seafood biasa</td>
                <td>Seafood+baso</td>
                <td>Seblak original</td>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="index.php">
                <tr>
                    <td>1</td>
                    <td>Seafood komplit</td>
                    <td>20000</td>
                    <td><input type="checkbox" name="Seafood komplit" value="20000"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Seafood biasa</td>
                    <td>15000</td>
                    <td><input type="checkbox" name="Seafood biasa" value="15000"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Seafood+baso</td>
                    <td>12000</td>
                    <td><input type="checkbox" name="Seafood+baso" value="12000"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Seblak original</td>
                    <td>10000</td>
                    <td><input type="checkbox" name="Seblak original" value="10000"></td>
                </tr>
        </tbody>
    </table>
    <br>
    <button type="submit">Masukan</button>
    </form>
    <?php if ($PedesanSeafoodOnline) : //beri kondisi, ini akan di cetak jika ada inputan yang dikirim ?> 
        <table border="1" width="300">
            <thead>
                <tr>
                    <td>menu</td>
                    <td>Level pedas</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php $jmlh = 0; $i = 1; // untuk mendeklarasikan variable penampung hitung harga dan untuk nomor urut ?>
                <?php foreach ($PedesanseafoodOnline as $PedesanSeafoodOnline => $harga) : // lakukan hasil inputang dgn perulangan beserta valuenya ?>
                    <?php $jmlh += $harga; // tambahakn harga ke dalam variable yang tdi di deklarasikan agar dihitung scra otomatis ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $PedesnSeafoodOnline; ?></td>
                        <td><?= $harga; ?></td>
                    </tr>
                <?php $i++; endforeach; //increment $i agar bertambah satu setiap perulangan untuk nomor urutnya?>
                <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td><?= $jmlh; //tampilakn jumlah harganya ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>