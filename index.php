<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <title>Home</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body id="page-top">
    <!-- Profile-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Diah Kamalia</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/trunojoyo.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">User Data</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">About Us</a></li>
                    
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid p-0">
          
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <b>Diah</b>
                        <span class="text-danger"><b>Kamalia</b></span>
                    </h1>
                    <div class="subheading mb-5">
                        Pengembangan Aplikasi Web A ·
                        <a href="00411100061@student.trunojoyo.ac.id" class="text-danger">200411100061@student.trunojoyo.ac.id</a>
                    </div>
                    <p class="lead mb-5">Web ini didedikasikan kepada Bapak Ach. Khozaimi, S.Kom., M.Kom. untuk memenuhi Tugas 3.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/diahkamalia"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- User Data-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h1 class="mb-5">Data Imunisasi</h1>
                    <a href="form_mhs.php" class="btn btn-danger"><b>Tambah Data<b></a>
                    <div class="container mt-5">
                        <table class="table" border="1" >
                            <tr>
                                <td><b>ID</b></td>
                                <td><b>NIK Orang Tua</td></td>
                                <td><b>Nama Orang Tua</b></td>
                                <td><b>Nama Anak</b></td>
                                <td><b>Usia Anak</b></td>
                                <td><b>Jenis Imunisasi</b></td>
                                <td><b>Jenis Kelamin</b></td>
                                <td><b>Action</b></td>
                            </tr>
                                <?php
                                include 'koneksi.php';
                                $sql="SELECT * FROM imunisasi_061";
                                $hasil = mysqli_query($koneksi, $sql);
                                while($row = mysqli_fetch_array($hasil))
                                {
                                ?>
                                <tr>
                                    <td><?=$row['IDPasien'];?></td>
                                    <td><?=$row['NIKOrtu'];?></td>
                                    <td><?=$row['NamaOrtu'];?></td>
                                    <td><?=$row['NamaAnak'];?></td>
                                    <td><?=$row['UsiaAnak'];?></td>
                                    <td><?=$row['JenisImun'];?></td>
                                    <td><?=$row['JenisKelamin'];?></td>
                                    <td><a href="form_edit.php?id=<?=$row['IDPasien']?>" class="btn btn-danger" > &nbsp;&nbsp;Edit&nbsp;&nbsp;</a> <a href="delete.php?id=<?=$row['IDPasien']?>" class="btn btn-dark"> Delete</a>
                                    </td>
                                </tr>
                                <?php }
                                ?> 
                        </table>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
                <!-- About Us-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">About Our University</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h1  class="text-danger"><b>University of Trunojoyo Madura</b></h1>
                            <div class="subheading mb-5" >-Technical Information-</div>
                            <p class="lead mb-5">Trunojoyo University is a public university in the Bangkalan Regency, in East Java province, Indonesia. Unijoyo was redesignated as a public university under the Presidential Decree dated July 5, 2001. The college was inaugurated on 23 July 2001 by President Abdurrahman Wahid.</p>  
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
