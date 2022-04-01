<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit / Update Data</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM imunisasi_061 where IDPasien=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <h1><span class="badge bg-secondary">Edit / Update Data</span></h1>
    <form class="form-horizontal" method="post" action="update.php">
        <input type="hidden" name="IDPasien" value="<?php echo $row['IDPasien']?>">
            <div class="form-group">
                <label class="control-label col-sm-2" for="NIKOrtu">NIK Orang Tua :</label>
                <div class="col-sm-10">
                    <input type="text" name="NIKOrtu" value="<?php echo $row['NIKOrtu']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="NamaOrtu">Nama Orang Tua :</label>
                <div class="col-sm-10">
                    <input type="text" name="NamaOrtu" value="<?php echo $row['NamaOrtu']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="NamaAnak">Nama Anak :</label>
                <div class="col-sm-10">
                    <input type="text" name="NamaAnak" value="<?php echo $row['NamaAnak']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="UsiaAnak">Usia Anak :</label>
                <div class="col-sm-10">
                    <input type="text" name="UsiaAnak" value="<?php echo $row['UsiaAnak']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisImun">Jenis Imunisasi :</label>
                <div class="col-sm-10">
                    <input type="text" name="JenisImun" value="<?php echo $row['JenisImun']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisKelamin">Jenis Kelamin :</label>
                <div class="col-sm-10">
                    <input type="text" name="JenisKelamin" value="<?php echo $row['JenisKelamin']?>">
                </div>
            </div>
        <button class="btn btn-danger" type="submit">Update</button>
    </form>
<?php }?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>