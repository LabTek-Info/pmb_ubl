<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'img.php';
	
	if(isset($_POST['btnsimpan']))
	{
        $userId 			= $_POST['userId'];
		//image
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		$nama_pendaftar 			= $_POST['nama_pendaftar'];
		$email 						= $_POST['email'];
		$alamatRmh 					= $_POST['alamatRmh'];
		$kotaRmh 					= $_POST['kotaRmh'];
		$provinsiRmh 				= $_POST['provinsiRmh'];
		$asalSekolah 				= $_POST['asalSekolah'];
		$kotaSekolah 				= $_POST['kotaSekolah'];
		$provinsiSekolah 			= $_POST['provinsiSekolah'];
		$namaAyah 					= $_POST['namaAyah'];
		$namaIbu 					= $_POST['namaIbu'];
		$noTelpRmh 					= $_POST['noTelpRmh'];
		$noHp 						= $_POST['noHp'];
		$noHpWA 					= $_POST['noHpWA'];
		$noTelpKelTerdekat 			= $_POST['noTelpKelTerdekat'];
		$pinBbm 					= $_POST['pinBbm'];
		$progStudi 					= $_POST['progStudi'];
		$jalurPilihan 				= $_POST['jalurPilihan'];
		$nilBindo 					= $_POST['nilBindo'];
		$nilBing 					= $_POST['nilBing'];
		$nilMtk 					= $_POST['nilMtk'];
		$presAkademikSekolah 		= $_POST['presAkademikSekolah'];
		$presAkademikLuarSekolah 	= $_POST['presAkademikLuarSekolah'];
		$presNonAkademikSekolah 	= $_POST['presNonAkademikSekolah'];
		$presNonAkademikLuarSekolah = $_POST['presNonAkademikLuarSekolah'];
		$orgIntraSekolah 			= $_POST['orgIntraSekolah'];
		$orgLuarSekolah 			= $_POST['orgLuarSekolah'];
		$pengetahuanUniv 			= $_POST['pengetahuanUniv'];


		if(empty($nama_pendaftar)){
			$errMSG = "Masukan Nama Pendaftar";
		}
		else if(empty($email)){
			$errMSG = "masukan Email";
		}
		else if(empty($alamatRmh)){
			$errMSG = "Masukan Alamat Rumah";
		}
		else if(empty($kotaRmh)){
			$errMSG = "Masukan Kota";
		}
		else if(empty($provinsiRmh)){
			$errMSG = "Pilih Provinsi";
		}
		else if(empty($asalSekolah)){
			$errMSG = "Masukan Asal Sekolah";
		}
		else if(empty($kotaSekolah)){
			$errMSG = "Masukan Kota";
		}
		else if(empty($provinsiSekolah)){
			$errMSG = "Pilih Provinsi";
		}
		else if(empty($namaAyah)){
			$errMSG = "Masukan Nama Ayah";
		}
		else if(empty($namaIbu)){
			$errMSG = "Masukan Nama Ibu";
		}
		else if(empty($progStudi)){
			$errMSG = "Pilih Program Studi";
		}
		else if(empty($jalurPilihan)){
			$errMSG = "Masukan Jalur Pilihan";
		}
		else if(empty($nilBindo)){
			$errMSG = "Masukan Nilai Bahasa Indonesia";
		}
		else if(empty($nilBing)){
			$errMSG = "Masukan Nilai Bahasa Inggris";
		}
		else if(empty($nilMtk)){
			$errMSG = "Masukan Nilai Matematika";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 10000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Maaf, hanya JPG, JPEG, PNG & GIF file";
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO `pendaftarans1_reguler`(`userId`, `foto`, `nama_pendaftar`, `email`, `alamatRmh`, `kotaRmh`, `provinsiRmh`, `asalSekolah`, `kotaSekolah`, `provinsiSekolah`,`namaAyah`, `namaIbu`, `noTelpRmh`, `noHp`, `noHpWA`, `noTelpKelTerdekat`, `pinBbm`, `progStudi`, `jalurPilihan`, `nilBindo`, `nilBing`, `nilMtk`, presAkademikSekolah, `presAkademikLuarSekolah`, `presNonAkademikSekolah`, `presNonAkademikLuarSekolah`, `orgIntraSekolah`, `orgLuarSekolah`, `pengetahuanUniv`) VALUES (:uuserId, :ufoto,:unama_pendaftar,:uemail,:ualamatRmh,:ukotaRmh,:uprovinsiRmh,:uasalSekolah,:ukotaSekolah,:uprovinsiSekolah,:unamaAyah,:unamaIbu,:unoTelpRmh,:unoHp,:unoHpWA,:unoTelpKelTerdekat,:upinBbm,:uprogStudi,:ujalurPilihan,:unilBindo,:unilBing,:unilMtk,:upresAkademikSekolah,:upresAkademikLuarSekolah,:upresNonAkademikSekolah,:upresNonAkademikLuarSekolah,:uorgIntraSekolah,:uorgLuarSekolah,:upengetahuanUniv)');

            $stmt->bindParam(':uuserId',$userId);
            $stmt->bindParam(':ufoto',$userpic);
			$stmt->bindParam(':unama_pendaftar',$nama_pendaftar);
			$stmt->bindParam(':uemail',$email);
			$stmt->bindParam(':ualamatRmh',$alamatRmh);
			$stmt->bindParam(':ukotaRmh',$kotaRmh);
			$stmt->bindParam(':uprovinsiRmh',$provinsiRmh);
			$stmt->bindParam(':uasalSekolah',$asalSekolah);
			$stmt->bindParam(':ukotaSekolah',$kotaSekolah);
			$stmt->bindParam(':uprovinsiSekolah',$provinsiSekolah);
			$stmt->bindParam(':unamaAyah',$namaAyah);
			$stmt->bindParam(':unamaIbu',$namaIbu);
			$stmt->bindParam(':unoTelpRmh',$noTelpRmh);
			$stmt->bindParam(':unoHp',$noHp);
			$stmt->bindParam(':unoHpWA',$noHpWA);
			$stmt->bindParam(':unoTelpKelTerdekat',$noTelpKelTerdekat);
			$stmt->bindParam(':upinBbm',$pinBbm);
			$stmt->bindParam(':uprogStudi',$progStudi);
			$stmt->bindParam(':ujalurPilihan',$jalurPilihan);
			$stmt->bindParam(':unilBindo',$nilBindo);
			$stmt->bindParam(':unilBing',$nilBing);
			$stmt->bindParam(':unilMtk',$nilMtk);
			$stmt->bindParam(':upresAkademikSekolah',$presAkademikSekolah);
			$stmt->bindParam(':upresAkademikLuarSekolah',$presAkademikLuarSekolah);
			$stmt->bindParam(':upresNonAkademikSekolah',$presNonAkademikSekolah);
			$stmt->bindParam(':upresNonAkademikLuarSekolah',$presNonAkademikLuarSekolah);
			$stmt->bindParam(':uorgIntraSekolah',$orgIntraSekolah);
			$stmt->bindParam(':uorgLuarSekolah',$orgLuarSekolah);
			$stmt->bindParam(':upengetahuanUniv',$pengetahuanUniv);
			
			if($stmt->execute())
			{
				$successMSG = "Berhasil Mendaftar ...";
				header("refresh:5;pendaftaranS1.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "Gagal Mendaftar....";
			}
		}
	}
?>