<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<meta name="keywords" content="UBL website responsive, Login form web, Sign up Web, Smartphone Compatible web template" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<link rel="shortcut icon" href="assets/img/iconn.png">
    	
    	<title>PMB - Universitas Bandar Lampung</title>
	
		<link rel="stylesheet" href="assets/css/bower_components/Font-Awesome/css/font-awesome.css"/>
    	<link rel="stylesheet" href="assets/css/checkbox/build.css"/>

    	<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet" />
		<link href="https://fonts.google.com/specimen/Dosis" rel="stylesheet">
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
			<a class="navbar-brand" href="index.html">Penerimaan <br/> Mahasiswa Baru</a>
        </div>
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></a>
				<ul class="dropdown-menu">
					<li><a href="#">Pendaftaran S1 Reguler</a></li>
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
					<li class="dropdown-item"><h6 class="dropdown-header">#User Login</h6></li>
					<br>
					<li class="dropdown-item"><a href="#">Logout</a></li>
				</ul>
			</li>
          </ul>
        </div>

      </div>
    </div>
	<!-- end navbar header -->

	<!-- form pengisian data -->
<div id="xx">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<form class="col-md-12">
				<div class="col-md-12">
					<h1 class="desc">Pendaftaran Strata 1</h1>
					<hr>
						<h1 class="desc">Syarat Pendaftaran</h1>
						<p class="sub">Sebelum anda melakukan pendaftaran, silahkan masukan lampiran dibawah dengan format .docx</p>
						<p>1. Hasil Scan STTB SMA/MA/SMK sederajat terlegalisir sebanyak 2 lembar</p>
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih File</span>
							<span class="fileupload-exists">Change</span><input type="file" /></span>
							<span class="fileupload-preview priview">Upload File</span>
							<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
						</div>

						<p>2. Hasil Scan SKHU/DANEM/DANUAS sederajat terlegalisir sebanyak 2 lembar</p>
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih File</span>
							<span class="fileupload-exists">Change</span><input type="file" /></span>
							<span class="fileupload-preview priview">Upload File</span>
							<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
						</div>

						<p>3. Hasil Scan KTP/Kartu Pelajar dan KTP orang tua masing-masing 2 lembar</p>
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih File</span>
							<span class="fileupload-exists">Change</span><input type="file" /></span>
							<span class="fileupload-preview priview">Upload File</span>
							<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
						</div>

						<p>4. Hasil Scan berwarna ukuran 3x4 cm dan 4x6 cm masing-masing sebanyak 2 lembar</p>
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih File</span>
							<span class="fileupload-exists">Change</span><input type="file" /></span>
							<span class="fileupload-preview priview">Upload File</span>
							<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
						</div>
						<hr>
						<button type="submit" name="btnsave" class="btn btn-success send">Kirim File</button>
						<hr>
				</div>
			</form>			
			</div>
		</div>
	</div>
</div>
	<!-- end form pengisian data -->

	<!-- pengisian data kedua-->
<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<form class="col-md-12">
				<div class="col-md-4">
					<h1 class="desc">Foto Mahasiswa</h1>
					<div class="form-group">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<label class="label-data">Masukan Foto Anda</label>
							<br>
							<span class="btn btn-primary btn-file"><span class="fileupload-new">Pilih File</span>
							<span class="fileupload-exists">Change</span><input type="file" /></span>
							<span class="fileupload-preview priview">Upload File</span>
							<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<h1 class="desc">Biodata Calon Mahasiswa</h1>					
					<div class="form-group">
						<label for="exampleInputPassword1" class="label-data">Nama Calon Mahasiswa</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type Here...">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1" class="label-data">Email Calon Mahasiswa</label>						
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Type Here...">
					</div>
					
					<div class="form-group">
						<label for="exampleInputAlamatl1" class="label-data">Alamat Calon Mahasiswa</label>						
						<input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Type Here...">
					</div>
					
					<div class="form-group">
						<label for="exampleInputKota1" class="label-data">Kota / Kabupaten</label>						
						<input type="text" class="form-control" id="exampleInputKota1" placeholder="Type Here...">
					</div>
			
					 <div class="form-group">
						<label for="exampleSelect1" class="label-data">Provinsi</label>						
						<select class="form-control" id="exampleSelect1">
							<option>-Pilih Provinsi-</option>
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
						<input type="text" class="form-control" id="exampleInputSekolah1" placeholder="Type Here...">
					</div>
					
					<div class="form-group">
						<label for="exampleInputKota1" class="label-data">Kota / Kabupaten</label>
						<input type="text" class="form-control" id="exampleInputKota1" placeholder="Type Here...">
					</div>
					
					<div class="form-group">
						<label for="exampleSelect1" class="label-data">Provinsi</label>						
						<select class="form-control" id="exampleSelect1">
							<option>-Pilih Provinsi-</option>
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
					<div class="col-md-12">
							
						<div class="col-md-4">
							<h1 class="desc">Nama Orang Tua</h1>
								<div class="form-group">
									<label for="exampleInputAyah1" class="label-data">Nama Ayah</label>										
									<input type="text" class="form-control" id="exampleInputAyah1" placeholder="Type Here...">
								</div>
									
								<div class="form-group">
									<label for="exampleInputIbu1" class="label-data">Nama Ibu</label>				
									<input type="text" class="form-control" id="exampleInputIbu1" placeholder="Type Here...">
								</div>
						</div>

						<div class="col-md-4">
							<h1 class="desc">Kontak Aktif</h1>
								<div class="form-group">
									<label for="exampleInputTelp1" class="label-data">Nomor Telp. Rumah</label>
									<input type="text" class="form-control" id="exampleInputTelp1" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputHand1" class="label-data">Nomor Handphone Aktif</label>
									<input type="text" class="form-control" id="exampleInputHand1" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputWA1" class="label-data">Nomor WhatsApp Aktif</label>
									<input type="text" class="form-control" id="exampleInputWA1" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputKeluarga1" class="label-data">Nomor Keluarga Terdekat</label>
									<input type="text" class="form-control" id="exampleInputKeluarga1" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputBBM1" class="label-data">Pin BBM</label>
									<input type="text" class="form-control" id="exampleInputBBM1" placeholder="Type Here...">
								</div>
						</div>

						<div class="col-md-4">
							<h1 class="desc">Program Studi Pilihan</h1>
								<div class="form-group">
									<label for="exampleSelect1" class="label-data">Program Studi</label>										
									<select class="form-control" id="exampleSelect1">
										<option>-Program Studi-</option>
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
									<select class="form-control" id="exampleSelect1">
										<option>-Pilihan-</option>
										<option value="Beasiswa"> Beasiswa </option>
										<option value="Non-Beasiswa"> Non-Beasiswa </option>
									</select>						
								</div>
						</div>

					</div>					
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<h1 class="desc">Nilai Mata Pelajaran</h1>
							<div class="form-group">
								<label for="exampleInputBindo1" class="label-data">Nilai Bahasa Indonesia</label>
								<input type="text" class="form-control" id="exampleInputBindo1" placeholder="Type Here...">
							</div>
							<div class="form-group">
								<label for="exampleInputBingris1" class="label-data">Nilai Bahasa Inggris</label>
								<input type="text" class="form-control" id="exampleInputBingris1" placeholder="Type Here...">
							</div>
							<div class="form-group">
								<label for="exampleInputMatematika1" class="label-data">Nilai Matematika</label>
								<input type="text" class="form-control" id="exampleInputMatematika1" placeholder="Type Here...">
							</div>
						</div>

						<div class="col-md-4">
							<h1 class="desc">Prestasi Akademik</h1>
								<div class="form-group">
									<label for="exampleInputSekolah" class="label-data">Prestasi Akademik Sekolah</label>
									<input type="text" class="form-control" id="exampleInputSekolah" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputLuarSekolah" class="label-data">Prestasi Akademik Luar Sekolah</label>
									<input type="text" class="form-control" id="exampleInputLuarSekolah" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputNonSekolah" class="label-data">Prestasi Non-Akademik Sekolah</label>
									<input type="text" class="form-control" id="exampleInputNonSekolah" placeholder="Type Here...">
								</div>
								<div class="form-group">
									<label for="exampleInputNonLuarSekolah" class="label-data">Prestasi Non-Akademik Luar Sekolah</label>
									<input type="text" class="form-control" id="exampleInputNonLuarSekolah" placeholder="Type Here...">
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
							                    <input id="checkbox1" class="styled" type="checkbox">
							                    <label for="checkbox1">
							                        Osis
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox2" class="styled" type="checkbox">
							                    <label for="checkbox2">
							                        Rohis
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox3" class="styled" type="checkbox">
							                    <label for="checkbox3">
							                        MPK
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox4" class="styled" type="checkbox">
							                    <label for="checkbox4">
							                        Pramuka
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox5" class="styled" type="checkbox">
							                    <label for="checkbox5">
							                        Paskibraka
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox6" class="styled" type="checkbox">
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
								<input type="text" class="form-control" id="exampleInputLainnyaOrgSekolah" placeholder="Type Here...">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<h1 class="desc">Organisasi Luar Sekolah</h1>
							<div class="form-group select-form">
								<label for="exampleInputOrgLuarSekolah" class="label-data">Organisasi Luar Sekolah</label>
							    <div class="row">
							        <div class="col-md-12">
							            <fieldset>                    
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox7" class="styled" type="checkbox">
							                    <label for="checkbox7">
							                        Karang Taruna
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox8" class="styled" type="checkbox">
							                    <label for="checkbox8">
							                        Risma
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox9" class="styled" type="checkbox">
							                    <label for="checkbox9">
							                        Sanggar
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox10" class="styled" type="checkbox">
							                    <label for="checkbox10">
							                        Klub Olahraga
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox11" class="styled" type="checkbox">
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
								<input type="text" class="form-control" id="exampleInputLainnyaOrgSekolah" placeholder="Type Here...">
							</div>
						</div>

						<div class="col-md-4">
							<h1 class="desc">Pengetahuan Tentang UBL</h1>
							<div class="form-group select-form">
								<label for="exampleInputUbl" class="label-data">Tentang UBL</label>
							    <div class="row">
							        <div class="col-md-12">
							            <fieldset>                    
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox12" class="styled" type="checkbox">
							                    <label for="checkbox12">
							                        Website UBL
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox13" class="styled" type="checkbox">
							                    <label for="checkbox13">
							                        Browsing
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox14" class="styled" type="checkbox">
							                    <label for="checkbox14">
							                        Sosial Media
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox15" class="styled" type="checkbox">
							                    <label for="checkbox15">
							                        Media Cetak
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox16" class="styled" type="checkbox">
							                    <label for="checkbox16">
							                        Media Online
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox17" class="styled" type="checkbox">
							                    <label for="checkbox17">
							                        Media Siar
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox18" class="styled" type="checkbox">
							                    <label for="checkbox18">
							                        Spanduk / Baliho UBL
							                    </label>
							                </div>
							                <div class="checkbox checkbox-success">
							                    <input id="checkbox19" class="styled" type="checkbox">
							                    <label for="checkbox19">
							                        Mading Sekolah
							                    </label>
							                </div>
							            </fieldset>					                
							        </div>                        
							    </div>
							</div>

							<div class="form-group">
								<label for="exampleInputLainnyaOrgLuar" class="label-data">Lainnya</label>
								<input type="text" class="form-control" id="exampleInputLainnyaOrgLuar" placeholder="Type Here...">
							</div>
						</div>
					</div>
				</div>
			</form>
			<hr>
			<button type="submit" name="btnsave" class="btn btn-success send-data">Kirim File</button>
		</div>
	</div>
</div>
	<!-- akhir pengisian data kedua -->

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

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/hover.zoom.js"></script>
<script src="assets/js/hover.zoom.conf.js"></script>

</body>
</html>