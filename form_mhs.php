<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1><span class="badge bg-secondary">Form Tambah Data</span></h1>
        <form class="form-horizontal"  method="post" action="action.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="NIKOrtu">NIK Orang Tua :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIKOrtu" placeholder="Masukkan NIK Orang Tua" name="NIKOrtu">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="NamaOrtu">Nama Orang Tua :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NamaOrtu" placeholder="Masukkan Nama Orang Tua" name="NamaOrtu">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="NamaAnak">Nama Anak :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NamaAnak" placeholder="Masukkan Nama Anak" name="NamaAnak">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="UsiaAnak">Usia Anak :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="UsiaAnak" placeholder="Masukkan Usia Anak" name="UsiaAnak">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisImun">Jenis Imunisasi :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="JenisImun" placeholder="Pilih Jenis Imunisasi" name="JenisImun">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="JenisKelamin">Jenis Kelamin :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="JenisKelamin" placeholder="Pilih Jenis Kelamin" name="JenisKelamin">
                </div>
            </div>
            <button class="btn btn-danger" type="submit">Kirim</button>
        </form>

</body>
</html>