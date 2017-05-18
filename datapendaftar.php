<?php
ob_start();
session_start();
require_once 'fungsi/dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$data=mysql_query("SELECT * FROM pendaftarans1_reguler WHERE userId=".$_SESSION['user']);
$userData=mysql_fetch_array($data);
?>
<?php
include "fungsi/fungsiinputfile.php"
?>
<?php
include "fungsi/fungsiInputPendaftaranS1.php"
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/iconn.png">

    <title>PMB - Universitas Bandar Lampung</title>

    <link rel="stylesheet" href="assets/css/bower_components/Font-Awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/css/checkbox/build.css"/>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Simple Footer Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet" />
    <link href="https://fonts.google.com/specimen/Dosis" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

</head>

<body>

<!-- navbar header -->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="img-responsive" src="assets/img/icon.png" alt="" />
            <a class="navbar-brand" href="index.php">Penerimaan <br/> Mahasiswa Baru</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="pendaftaranS1.php">Pendaftaran S1 Reguler</a></li>
                        <li><a href="#">Beasiswa S1</a></li>
                        <li><a href="#">Pendaftaran Pasca Sarjana</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ujian <span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mulai Ujian</a></li>
                        <li><a href="#">Lihat Hasil Ujian</a></li>
                    </ul>
                </li>
                <li><a href="#">Lihat Data Pendaftaran</a></li>
                <li class="dropdown login active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><h6 class="dropdown-header"><?php echo $userRow['userName']; ?></h6></li>
                        <br>
                        <li class="dropdown-item"><a href="logout.php?logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- end navbar header -->

<!-- form pertama pengisian data -->
<div id="ww">
    <div class="container">
        <center><?php
            if(isset($errMSG)){
                ?>
                <div class="alert alert-danger">
                    <strong><?php echo $errMSG; ?></strong>
                </div>
                <?php
            }
            else if(isset($successMSG)){
                ?>
                <div class="alert alert-success">
                    <strong><?php echo $successMSG; ?></strong>
                </div>
                <?php
            }
            ?>
        </center>
    </div>
</div>
<div class="row">
    <div class="col-md-12 input-data-awal">
        <h1 style="margin-top: -70px; color: #33ccff;" class="centered">Data Calon Mahasiswa</h1>
    </div>
</div>
<!-- end form pertama pengisian data -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 input-data-kedua">
                <form method="post" class="col-md-12" enctype="multipart/form-data">
                    <input hidden class="form-control" type="hidden" name="userId" placeholder="Enter Username" value="<?php echo $userRow['userId']; ?>" />
                    <div class="col-md-4">
                        <h1 class="desc">Foto Mahasiswa</h1>
                        <div class="form-group" name="user_image">
                            <div class="fileupload fileupload-new" data-provides="fileupload" name="user_image">
                                <label class="label-data" name="user_image">Masukan Foto Anda</label>
                                <br>

                                <br>
                                <img src="user_images/<?php echo $userData['foto']; ?>" class="img-rounded" width="100px" height="100px" />
                                <span class="btn btn-primary btn-file" name="user_image"><span name="user_image" class="fileupload-new">Pilih File</span>
								<span class="fileupload-exists" name="user_image">Change</span><input type="file" name="user_image"/></span>
                                <span class="fileupload-preview priview" name="user_image">Upload File</span>
                                <a href="#" class="close fileupload-exists" name="user_image" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1 class="desc">Biodata Calon Mahasiswa</h1>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="label-data">Nama Calon Mahasiswa</label>
                            <input name="nama_pendaftar" value="<?php echo $userData['nama_pendaftar']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Type Here...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="label-data">Email Calon Mahasiswa</label>
                            <input name="email" type="email" value="<?php echo $userData['email']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Type Here...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputAlamatl1" class="label-data">Alamat Calon Mahasiswa</label>
                            <input type="text" value="<?php echo $userData['alamatRmh']; ?>" name="alamatRmh" class="form-control" id="exampleInputAlamat1" placeholder="Type Here...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputKota1" class="label-data">Kota / Kabupaten</label>
                            <input type="text" value="<?php echo $userData['kotaRmh']; ?>" name="kotaRmh" class="form-control" id="exampleInputKota1" placeholder="Type Here...">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1" class="label-data">Provinsi</label>
                            <select class="form-control" value="<?php echo $userData['provinsiRmh']; ?>" name="provinsiRmh" id="exampleSelect1">
                                <option name="provinsiRmh" value="<?php echo $userData['provinsiRmh']; ?>">-Pilih Provinsi-</option>
                                <option value="Nanggroe Aceh Darussalam"> Nanggroe Aceh Darussalam </option>
                                <option value="Sumatra Utara"> Sumatra Utara </option>
                                <option value="Sumatra Selatan"> Sumatra Selatan </option>
                                <option value="Sumatra Barat"> Sumatra Barat </option>
                                <option value="Bengkulu"> Bengkulu </option>
                                <option value="Riau"> Riau </option>
                                <option value="Kepulauan Riau"> Kepulauan Riau </option>
                                <option value="Jambi"> Jambi </option>
                                <option value="Lampung"> Lampung </option>
                                <option value="Bangka Belitung"> Bangka Belitung </option>
                                <option value="Banten"> Banten </option>
                                <option value="DKI Jakarta"> DKI Jakarta </option>
                                <option value="Jawa Barat"> Jawa Barat </option>
                                <option value="Jawa Tengah"> Jawa Tengah </option>
                                <option value="D.I. Yogyakarta"> D.I. Yogyakarta </option>
                                <option value="Jawa Timur"> Jawa Timur </option>
                                <option value="Kalimantan Barat"> Kalimantan Barat </option>
                                <option value="Kalimantan Timur"> Kalimantan Timur </option>
                                <option value="Kalimantan Selatan"> Kalimantan Selatan </option>
                                <option value="Kalimantan Tengah"> Kalimantan Tengah </option>
                                <option value="Kalimantan Utara"> Kalimantan Utara </option>
                                <option value="Bali"> Bali </option>
                                <option value="Nusa Tenggara Timur"> Nusa Tenggara Timur </option>
                                <option value="Nusa Tenggara Barat"> Nusa Tenggara Barat </option>
                                <option value="Gorontalo"> Gorontalo </option>
                                <option value="Sulawesi Barat"> Sulawesi Barat </option>
                                <option value="Sulawesi Tengah"> Sulawesi Tengah </option>
                                <option value="Sulawesi Utara"> Sulawesi Utara </option>
                                <option value="Sulawesi Tenggara"> Sulawesi Tenggara </option>
                                <option value="Sulawesi Selatan"> Sulawesi Selatan </option>
                                <option value="Maluku Utara"> Maluku Utara </option>
                                <option value="Maluku "> Maluku </option>
                                <option value="Papua Barat"> Papua Barat </option>
                                <option value="Papua"> Papua </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1 class="desc">Sekolah Asal</h1>
                        <div class="form-group">
                            <label for="exampleInputSekolah1" class="label-data">Sekolah Asal</label>
                            <input type="text" value="<?php echo $userData['asalSekolah']; ?>" name="asalSekolah" class="form-control" id="exampleInputSekolah1" placeholder="Type Here...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputKota1" class="label-data">Kota / Kabupaten</label>
                            <input type="text" value="<?php echo $userData['kotaSekolah']; ?>" class="form-control" name="kotaSekolah" id="exampleInputKota1" placeholder="Type Here...">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1" class="label-data">Provinsi</label>
                            <select class="form-control" name="provinsiSekolah" id="exampleSelect1">
                                <option name="provinsiSekolah">-Pilih Provinsi-</option>
                                <option value="Nanggroe Aceh Darussalam"> Nanggroe Aceh Darussalam </option>
                                <option value="Sumatra Utara"> Sumatra Utara </option>
                                <option value="Sumatra Selatan"> Sumatra Selatan </option>
                                <option value="Sumatra Barat"> Sumatra Barat </option>
                                <option value="Bengkulu"> Bengkulu </option>
                                <option value="Riau"> Riau </option>
                                <option value="Kepulauan Riau"> Kepulauan Riau </option>
                                <option value="Jambi"> Jambi </option>
                                <option value="Lampung"> Lampung </option>
                                <option value="Bangka Belitung"> Bangka Belitung </option>
                                <option value="Banten"> Banten </option>
                                <option value="DKI Jakarta"> DKI Jakarta </option>
                                <option value="Jawa Barat"> Jawa Barat </option>
                                <option value="Jawa Tengah"> Jawa Tengah </option>
                                <option value="D.I. Yogyakarta"> D.I. Yogyakarta </option>
                                <option value="Jawa Timur"> Jawa Timur </option>
                                <option value="Kalimantan Barat"> Kalimantan Barat </option>
                                <option value="Kalimantan Timur"> Kalimantan Timur </option>
                                <option value="Kalimantan Selatan"> Kalimantan Selatan </option>
                                <option value="Kalimantan Tengah"> Kalimantan Tengah </option>
                                <option value="Kalimantan Utara"> Kalimantan Utara </option>
                                <option value="Bali"> Bali </option>
                                <option value="Nusa Tenggara Timur"> Nusa Tenggara Timur </option>
                                <option value="Nusa Tenggara Barat"> Nusa Tenggara Barat </option>
                                <option value="Gorontalo"> Gorontalo </option>
                                <option value="Sulawesi Barat"> Sulawesi Barat </option>
                                <option value="Sulawesi Tengah"> Sulawesi Tengah </option>
                                <option value="Sulawesi Utara"> Sulawesi Utara </option>
                                <option value="Sulawesi Tenggara"> Sulawesi Tenggara </option>
                                <option value="Sulawesi Selatan"> Sulawesi Selatan </option>
                                <option value="Maluku Utara"> Maluku Utara </option>
                                <option value="Maluku "> Maluku </option>
                                <option value="Papua Barat"> Papua Barat </option>
                                <option value="Papua"> Papua </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 bottom">
                            <div class="col-md-4">
                                <h1 class="desc">Nama Orang Tua</h1>
                                <div class="form-group">
                                    <label for="exampleInputAyah1" class="label-data">Nama Ayah</label>
                                    <input type="text" value="<?php echo $userData['namaAyah']; ?>" name="namaAyah" class="form-control" id="exampleInputAyah1" placeholder="Type Here...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIbu1" class="label-data">Nama Ibu</label>
                                    <input name="namaIbu" value="<?php echo $userData['namaIbu']; ?>" type="text" class="form-control" id="exampleInputIbu1" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h1 class="desc">Kontak Aktif</h1>
                                <div class="form-group">
                                    <label for="exampleInputTelp1" class="label-data">Nomor Telp. Rumah</label>
                                    <input name="noTelpRmh" value="<?php echo $userData['noTelpRmh']; ?>" type="text" class="form-control" id="exampleInputTelp1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputHand1" class="label-data">Nomor Handphone Aktif</label>
                                    <input name="noHp" type="text" value="<?php echo $userData['noHp']; ?>" class="form-control" id="exampleInputHand1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputWA1" class="label-data">Nomor WhatsApp Aktif</label>
                                    <input type="text" name="noHpWA" value="<?php echo $userData['noHpWA']; ?>" class="form-control" id="exampleInputWA1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKeluarga1" class="label-data">Nomor Keluarga Terdekat</label>
                                    <input type="text" value="<?php echo $userData['noTelpKelTerdekat']; ?>" name="noTelpKelTerdekat" class="form-control" id="exampleInputKeluarga1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputBBM1" class="label-data">Pin BBM</label>
                                    <input type="text" value="<?php echo $userData['pinBbm']; ?>" class="form-control" name="pinBbm" id="exampleInputBBM1" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h1 class="desc">Program Studi Pilihan</h1>
                                <div class="form-group">
                                    <label for="exampleSelect1" class="label-data">Program Studi</label>
                                    <select class="form-control" name="progStudi" id="exampleSelect1">
                                        <option name="progStudi">-Program Studi-</option>
                                        <option value="Ekonomi-Manajemen"> Ekonomi-Manajemen </option>
                                        <option value="Ekonomi-Akuntansi"> Ekonomi-Akuntansi </option>
                                        <option value="Ilmu Administrasi Publik"> Ilmu Administrasi Publik </option>
                                        <option value="Ilmu Administrasi Bisnis"> Ilmu Administrasi Bisnis </option>
                                        <option value="Ilmu Komunikasi"> Ilmu Komunikasi </option>
                                        <option value="Hukum"> Hukum </option>
                                        <option value="Teknik Sipil"> Teknik Sipil </option>
                                        <option value="Teknik Mesin"> Teknik Mesin </option>
                                        <option value="Arsitektur"> Arsitektur </option>
                                        <option value="Sistem Informasi"> Sistem Informasi </option>
                                        <option value="Teknik Informatika"> Teknik Informatika </option>
                                        <option value="Pendidikan Bahasa Inggris"> Pendidikan Bahasa Inggris </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect1" class="label-data">Jalur Pilihan</label>
                                    <select class="form-control" name="jalurPilihan" id="exampleSelect1">
                                        <option name="jalurPilihan">-Pilihan-</option>
                                        <option value="Beasiswa"> Beasiswa </option>
                                        <option value="Non-Beasiswa"> Non-Beasiswa </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 bottom">

                            <div class="col-md-4">
                                <h1 class="desc">Nilai Mata Pelajaran</h1>
                                <div class="form-group">
                                    <label for="exampleInputBindo1" class="label-data">Nilai Bahasa Indonesia</label>
                                    <input type="text" value="<?php echo $userData['nilBindo']; ?>" name="nilBindo" class="form-control" id="exampleInputBindo1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputBingris1" class="label-data">Nilai Bahasa Inggris</label>
                                    <input type="text" value="<?php echo $userData['nilBing']; ?>" name="nilBing" class="form-control" id="exampleInputBingris1" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMatematika1" class="label-data">Nilai Matematika</label>
                                    <input type="text" value="<?php echo $userData['nilMtk']; ?>" name="nilMtk" class="form-control" id="exampleInputMatematika1" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h1 class="desc">Prestasi Akademik</h1>
                                <div class="form-group">
                                    <label for="exampleInputSekolah" class="label-data">Prestasi Akademik Sekolah</label>
                                    <input type="text" name="presAkademikSekolah" class="form-control" id="exampleInputSekolah" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLuarSekolah" class="label-data">Prestasi Akademik Luar Sekolah</label>
                                    <input type="text" class="form-control" name="presAkademikLuarSekolah" id="exampleInputLuarSekolah" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNonSekolah" class="label-data">Prestasi Non-Akademik Sekolah</label>
                                    <input type="text" class="form-control" name="presNonAkademikSekolah" id="exampleInputNonSekolah" placeholder="Type Here...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNonLuarSekolah" class="label-data">Prestasi Non-Akademik Luar Sekolah</label>
                                    <input type="text" name="presNonAkademikLuarSekolah" class="form-control" id="exampleInputNonLuarSekolah" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h1 class="desc">Organisasi Sekolah</h1>
                                <div class="form-group select-form">
                                    <label for="exampleInputSekolah" class="label-data">Organisasi Sekolah</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <fieldset>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Osis" name="orgIntraSekolah" id="checkbox1" class="styled" type="checkbox">
                                                    <label value="Osis" for="checkbox1">
                                                        Osis
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Rohis" id="checkbox2" name="orgIntraSekolah" class="styled" type="checkbox">
                                                    <label for="checkbox2">
                                                        Rohis
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="MPK" id="checkbox3" name="orgIntraSekolah" class="styled" type="checkbox">
                                                    <label for="checkbox3">
                                                        MPK
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Pramuka" name="orgIntraSekolah" id="checkbox4" class="styled" type="checkbox">
                                                    <label for="checkbox4">
                                                        Pramuka
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Paskibraka" id="checkbox5" name="orgIntraSekolah" class="styled" type="checkbox">
                                                    <label for="checkbox5">
                                                        Paskibraka
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="PMR" name="orgIntraSekolah" id="checkbox6" class="styled" type="checkbox">
                                                    <label for="checkbox6">
                                                        PMR
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputLainnyaOrgSekolah" class="label-data">Lainnya</label>
                                    <input name="orgIntraSekolah" type="text" class="form-control" id="exampleInputLainnyaOrgSekolah" placeholder="Type Here...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 bottom">
                            <div class="col-md-4">
                                <h1 class="desc">Organisasi Luar Sekolah</h1>
                                <div class="form-group select-form">
                                    <label for="exampleInputOrgLuarSekolah" class="label-data">Organisasi Luar Sekolah</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Karang Taruna" name="orgLuarSekolah" id="checkbox7" class="styled" type="checkbox">
                                                    <label for="checkbox7">
                                                        Karang Taruna
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Risma" name="orgLuarSekolah" id="checkbox8" class="styled" type="checkbox">
                                                    <label for="checkbox8">
                                                        Risma
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Sanggar" name="orgLuarSekolah" id="checkbox9" class="styled" type="checkbox">
                                                    <label for="checkbox9">
                                                        Sanggar
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Klub Olahraga" name="orgLuarSekolah" id="checkbox10" class="styled" type="checkbox">
                                                    <label for="checkbox10">
                                                        Klub Olahraga
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Organisasi Pemuda" id="checkbox11" name="orgLuarSekolah" class="styled" type="checkbox">
                                                    <label for="checkbox11">
                                                        Organisasi Pemuda
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputLainnyaOrgSekolah" class="label-data">Lainnya</label>
                                    <input name="orgLuarSekolah" type="text" class="form-control" id="exampleInputLainnyaOrgSekolah" placeholder="Type Here...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h1 class="desc">Pengetahuan Tentang UBL</h1>
                                <div class="form-group select-form">
                                    <label for="exampleInputUbl"  class="label-data">Tentang UBL</label>
                                    <div class="row">
                                        <div class="col-md-12" name="pengetahuanUniv">
                                            <fieldset name="pengetahuanUniv">
                                                <div class="checkbox checkbox-success" name="pengetahuanUniv">
                                                    <input value="Website UBL" name="pengetahuanUniv" id="checkbox12" class="styled" type="checkbox">
                                                    <label for="checkbox12">
                                                        Website UBL
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Browsing" name="pengetahuanUniv" id="checkbox13" class="styled" type="checkbox">
                                                    <label for="checkbox13">
                                                        Browsing
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input value="Sosial Media" id="checkbox14" name="pengetahuanUniv" class="styled" type="checkbox">
                                                    <label for="checkbox14">
                                                        Sosial Media
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input name="pengetahuanUniv" value="Media Cetak" id="checkbox15" class="styled" type="checkbox">
                                                    <label for="checkbox15">
                                                        Media Cetak
                                                    </label>
                                                </div>
                                                <div value="Media Online" class="checkbox checkbox-success">
                                                    <input value="Media Online" id="checkbox16" name="pengetahuanUniv" class="styled" type="checkbox">
                                                    <label for="checkbox16" value="Media Online">
                                                        Media Online
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success" value="Media Siar">
                                                    <input id="checkbox17" value="Media Siar" name="pengetahuanUniv" class="styled" type="checkbox">
                                                    <label for="checkbox17" value="Media Siar">
                                                        Media Siar
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success" value="Spanduk / Baliho UBL">
                                                    <input value="Spanduk / Baliho UBL" id="checkbox18" name="pengetahuanUniv" class="styled" type="checkbox">
                                                    <label value="Spanduk / Baliho UBL" for="checkbox18">
                                                        Spanduk / Baliho UBL
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-success" value="Mading Sekolah">
                                                    <input value="Mading Sekolah" id="checkbox19" name="pengetahuanUniv" class="styled" type="checkbox">
                                                    <label for="checkbox19" value="Mading Sekolah">
                                                        Mading Sekolah
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputLainnyaOrgLuar" class="label-data">Lainnya</label>
                                    <br>
                                    <br>
                                    <input name="pengetahuanUniv" type="text" class="form-control" id="exampleInputLainnyaOrgLuar" placeholder="Type Here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="btnsimpan" class="btn btn-success">Edit Data</button>
            </div>
            </form>
        </div>
    </div>
    </div>

<!-- Link ke Website Lain bagian footer-->
<div class="content">
    <div class="footer-grids">
        <div class="footer one">
            <img class="logo-footer adam" src="assets/img/ubl_icon.png" alt="" />
            <div class="clear"></div>
        </div>
        <div class="footer two">
            <h3>Quick Link</h3>
            <ul>
                <li><a target="_blank" href="ubl.ac.id"><i></i>Universitas Bandar Lampung</a></li>
                <li><a target="_blank" href="#"><i></i>Portal LPPM UBL</a></li>
                <li><a target="_blank" href="#"><i></i>Portal LPIK UBL</a></li>
                <li><a target="_blank" href="#"><i></i>Siater UBL</a></li>
            </ul>
        </div>

        <div class="footer three">
            <h3>Contact Information</h3>
            <ul>
                <li>Kampus B : Jl. Zainal Abidin Pagar Alam No. 89, Labuhan Ratu Bandar Lampung 35142
                    Lampung
                    Indonesia</li>
                <li>0721-789825 (Kampus B)</li>
                <li><a href="mailto:info@ubl.ac.id">info@ubl.ac.id</a> </li>
            </ul>
        </div>

        <div class="clear"></div>

    </div>

    <div class="copy-right-grids">
        <div class="copy-left">
            <p class="footer-gd">© 2017 Universitas Bandar Lampung. All Rights Reserved</p>
        </div>
        <div class="copy-right">
            <ul>
                <li><a target="_blank" href="ubl.ac.id">Universitas Bandar Lampung</a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
</div>

<!-- akhir link ke website -->

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/upload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script>
    $(document).ready(function(){
        $('#show_hide_regist').on('click', function(){
            var passwordField = $('#passwordRegist');
            var passwordFieldType = passwordField.attr('type');
            if(passwordFieldType == 'password'){
                passwordField.attr('type', 'text');
                $(this).text('Hide');
            }else{
                passwordField.attr('type', 'password');
                $(this).text('Show');
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('#show_hide_login').on('click', function(){
            var passwordField = $('#passwordLogin');
            var passwordFieldType = passwordField.attr('type');
            if(passwordFieldType == 'password'){
                passwordField.attr('type', 'text');
                $(this).text('Hide');
            }else{
                passwordField.attr('type', 'password');
                $(this).text('Show');
            }
        });
    });
</script>

<script type="text/javascript">
    function changeState(el) {
        if (el.readOnly) el.checked=el.readOnly=false;
        else if (!el.checked) el.readOnly=el.indeterminate=true;
    }
</script>

</body>
</html>