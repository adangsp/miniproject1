</p>
<center>
<table width="300" border="1">
  <tr>
    <td width="109" align="left">Nama Barang</td>
    <td width="175"><?php echo $nama;?></td>
  </tr>
  <tr>
    <td align="left">Harga Satuan</td>
    <td><div align="right">Rp. <?php echo number_format($harga,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Jumlah Beli</td>
    <td><div align="right"><?php echo number_format($jumlah,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Sub Total</td>
    <td><div align="right">Rp. <?php echo number_format($subtotal,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Diskon</td>
    <td><div align="right">Rp. <?php echo number_format($diskon,0,",",".");?>;</div></td>
  </tr>
  <tr>
    <td align="left">Total Bayar</td>
    <td><div align="right">Rp. <?php echo number_format($totalbayar,0,",",".");?>;</div></td>
  </tr>
</table>
</center>
<p>&nbsp;</p>
</body>
</html>
