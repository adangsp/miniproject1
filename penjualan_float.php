<?php
$Minuman = $_POST; //simpan POST hasil inputan kedalam variable
?>
<html>

<head>
    <titl>Menu Minuman</title>
</head>

<body>
    <table border="1" width="300">
        <caption>Menu Minuman</caption>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Minuman</td>
                <td>Harga</td>
                <td>Pesan</td>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="index.php">
                <tr>
                    <td>1</td>
                    <td>Es Boba</td>
                    <td>10000</td>
                    <td><input type="checkbox" name="Es Boba" value="10000"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cappucino Cincau</td>
                    <td>6000</td>
                    <td><input type="checkbox" name="Cappucino Cincau" value="6000"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pop Ice </td>
                    <td>5000</td>
                    <td><input type="checkbox" name="Pop Ice" value="5000"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Teh Poci</td>
                    <td>5000</td>
                    <td><input type="checkbox" name="Teh Poci" value="5000"></td>
                </tr>
        </tbody>
    </table>
    <br>
    <button type="submit">Masukan</button>
    </form>
    <?php if ($Minuman) : //beri kondisi, ini akan di cetak jika ada inputan yang dikirim ?> 
        <table border="1" width="300">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Minuman</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php $jmlh = 0; $i = 1; // untuk mendeklarasikan variable penampung hitung harga dan untuk nomor urut ?>
                <?php foreach ($Minuman as $Minuman => $harga) : // lakukan hasil inputang dgn perulangan beserta valuenya ?>
                    <?php $jmlh += $harga; // tambahakn harga ke dalam variable yang tdi di deklarasikan agar dihitung scra otomatis ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $Minuman; ?></td>
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