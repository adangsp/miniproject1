<?php
$TokoBuahSegar= $_POST; //simpan POST hasil inputan kedalam variable
?>
<html>

<head>
    <title>Toko Buah Segar</title>
</head>

<body>
    <table border="1" width="300">
        <caption>Daftar Buah</caption>
        <thead>
            <tr>
                <td>Apel</td>
                <td>Melon</td>
                <td>Semangka</td>
                <td>Anggur</td>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="index.php">
                <tr>
                    <td>1</td>
                    <td>Apel</td>
                    <td>15000</td>
                    <td><input type="checkbox" name="Apel" value="15000"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Melon</td>
                    <td>60000</td>
                    <td><input type="checkbox" name="Melon" value="60000"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Semangka</td>
                    <td>25000</td>
                    <td><input type="checkbox" name="Semangka" value="25000"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Anggur</td>
                    <td>80000</td>
                    <td><input type="checkbox" name="Anggur" value="80000"></td>
                </tr>
        </tbody>
    </table>
    <br>
    <button type="submit">Masukan</button>
    </form>
    <?php if ($TokoBuahSegar) : //beri kondisi, ini akan di cetak jika ada inputan yang dikirim ?> 
        <table border="1" width="300">
            <thead>
                <tr>
                    <td>Nama Buah</td>
                    <td>Buah Segar</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php $jmlh = 0; $i = 1; // untuk mendeklarasikan variable penampung hitung harga dan untuk nomor urut ?>
                <?php foreach ($TokoBuahSegar as $TokoBuahSegar => $harga) : // lakukan hasil inputang dgn perulangan beserta valuenya ?>
                    <?php $jmlh += $harga; // tambahakn harga ke dalam variable yang tdi di deklarasikan agar dihitung scra otomatis ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $TokoBuahSegar; ?></td>
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