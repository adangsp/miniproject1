<?php
error_reporting(0);
$jumlah=0;
$kode='';
$nama='';
$harga=0;
$jumlah=$_POST['jumlah'];
$kode=$_POST['kode'];

if ($kode=="A01"){
	$nama="Speaker";
	$harga=50000;
}

if ($kode=="B02"){
	$nama="Mouse";
	$harga=25000;
}

if ($kode=="C03"){
	$nama="Hardisk";
	$harga=750000;
}

if ($kode=="D04"){
	$nama="Mouse Pad";
	$harga=5000;
}

$subtotal=$harga*$jumlah;
if ($subtotal>=100000){
	$diskon=0.15*$subtotal;
}
else
if ($subtotal>=50000){
	$diskon=0.1*$subtotal;
}
else
if ($subtotal>=25000){
	$diskon=0.05*$subtotal;
}
else
	$diskon=0;
$totalbayar=$subtotal-$diskon;
?>    
