<?php 

$conn = mysqli_connect('localhost','root','','mugen');
$query = "SELECT * FROM general_ledger";

// Lihat berapa banyak data yang ada
$totalData = mysqli_num_rows(mysqli_query($conn,$query));
// tentukan berapa banyak data yang akan di tampilkan
$dataPerHalaman = 10;
// jumlah halaman = totalData / dataPerhalaman (ceil() pembulatan ke atas)
$jumlahHalaman = ceil($totalData / $dataPerHalaman);
// halaman yang aktif ambil dari url
$halamanAktif = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
// Awal Data yang akan di tampilkan 
$awalData = ($dataPerHalaman*$halamanAktif)-$dataPerHalaman;



$result = mysqli_query($conn,$query . " LIMIT $awalData , $dataPerHalaman");
var_dump($result);
?>