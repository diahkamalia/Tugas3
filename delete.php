<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM imunisasi_061 WHERE IDPasien=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus.";
}else{
    header("location:index.php");
}

?>