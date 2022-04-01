<?php
include "koneksi.php";
$id = $_POST['IDPasien'];
$nik = $_POST['NIKOrtu'];
$namao = $_POST['NamaOrtu'];
$namaa = $_POST['NamaAnak'];
$usia = $_POST['UsiaAnak'];
$jimun = $_POST['JenisImun'];
$jkel = $_POST['JenisKelamin'];

$sql = "UPDATE imunisasi_061 set NIKOrtu = '$nik', NamaOrtu='$namao', NamaAnak='$namaa', UsiaAnak='$usia', JenisImun='$jimun', JenisKelamin='$jkel' where IDPasien=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Update gagal.";
}else{
    header("location:index.php");
}

?>