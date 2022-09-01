<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hitung Penjualan Barang</title>
</head>
<body>
	<div align="center"><br />PERHITUNGAN PENJUALAN BARANG 2a.php</div> <br /><br />
<form id="form1" name="form1" method="post" action="2a.php">
  <table width="300" border="1" align="center">
        <tr>
          <td>Kode Barang</td>
          <td>
              <select name="kode" id="kode">
                <option>---Silahkan Pilih--</option>
                <option value="A01">A01 - Speaker</option>
                <option value="B02">B02 - Mouse</option>
                <option value="C03">C03 - Harddisk</option>
                <option value="D04">D04 - Mouse Pad</option>
                </select>          </td>
        </tr>
        <tr>
          <td>Jumlah Beli</td>
          <td><input type="text" name="jumlah" id="jumlah"></td>
        </tr>
      </table>
        <p>
          <center><input type="submit" name="Hitung" id="Hitung" value="Hitung" />
          <input type="reset" name="Reset" id="Reset" value="Reset" /></center>
        </p>
</form>
