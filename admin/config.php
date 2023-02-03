<?php
error_reporting(0);
session_start();
//configurasi database, rubah sesuai komputer
$host = "localhost"; //default localhost.
$user = "root"; //default username phpmyadamin.
$pass = ""; //password phpmyadmin, silahkan disesuaikan.
$data = "inventory"; //nama database.

$konek = mysqli_connect($host, $user, $pass, $data)  or die(mysqli_connect_error());

//select data by id
/*$dataID = $_GET['inventory'];
$idData = mysqli_query($konek, "SELECT * FROM data WHERE id='$dataID'");
$rowData = mysqli_fetch_array($idData);*/

//select admin
$tblAdmin = mysqli_query($konek, "SELECT * FROM users WHERE id_user=1");
$admin = mysqli_fetch_array($tblAdmin);

//select all data
$d = mysqli_query($konek, "SELECT * FROM barang");
$jml = mysqli_num_rows($d);

//select barang baik
$b = mysqli_query($konek, "SELECT * FROM barang WHERE kondisi=1");
$baik = mysqli_num_rows($b);

//select barang kurang baik
$kb = mysqli_query($konek, "SELECT * FROM barang WHERE kondisi=2");
$kurang = mysqli_num_rows($kb);

//select barang rusak
$br = mysqli_query($konek, "SELECT * FROM barang WHERE kondisi=3");
$rusak = mysqli_num_rows($br);

//select barang aset
$a = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=1");
$aset = mysqli_num_rows($a);

//select barang transportasi
$bt = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=2");
$trans = mysqli_num_rows($bt);

//select barang kantor
$bk = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=3");
$kantor = mysqli_num_rows($bk);

//alat kantor baik
$bkb = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=3 AND kondisi=1");
$jbkb = mysqli_num_rows($bkb);

//alat kantor kurang baik
$bkkb = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=3 AND kondisi=2");
$jbkkb = mysqli_num_rows($bkkb);

//alat kantor rusak
$bkr = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=3 AND kondisi=3");
$jbkr = mysqli_num_rows($bkr);

//alat aset baik
$bab = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=1 AND kondisi=1");
$jbab = mysqli_num_rows($bab);

//alat aset kurang baik
$bakb = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=1 AND kondisi=2");
$jbakb = mysqli_num_rows($bakb);

//alat aset kurang rusak
$bar = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=1 AND kondisi=3");
$jbar = mysqli_num_rows($bar);

//alat transportasi baik
$btb = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=2 AND kondisi=1");
$jbtb = mysqli_num_rows($btb);

//alat transportasi kurang baik
$btkb = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=2 AND kondisi=2");
$jbtkb = mysqli_num_rows($btkb);

//alat transportasi Rusak
$btr = mysqli_query($konek, "SELECT * FROM barang WHERE jenis=2 AND kondisi=3");
$jbtr = mysqli_num_rows($btr);
?>