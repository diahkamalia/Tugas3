<?php
include "koneksi.php";

$nik = $_POST['NIKOrtu'];
$namao = $_POST['NamaOrtu'];
$namaa = $_POST['NamaAnak'];
$usia = $_POST['UsiaAnak'];
$jimun = $_POST['JenisImun'];
$jkel = $_POST['JenisKelamin'];

$sql = "INSERT INTO imunisasi_061 VALUES(null,'$nik','$namao','$namaa','$usia','$jimun','$jkel')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Gagal tambah data.";
}else{
    header("location:index.php");
}

?>