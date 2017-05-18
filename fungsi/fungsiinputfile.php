<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'img.php';
	
	if(isset($_POST['btnsave']))
	{
		$userId = $_POST['userId'];// userID

		$sttbFile = $_FILES['file']['name'];
		$tmp_dir = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];

		$skhuFile = $_FILES['file1']['name'];
		$tmp_dir1 = $_FILES['file1']['tmp_name'];
		$fileSize1 = $_FILES['file1']['size'];

		$ktpFile = $_FILES['file2']['name'];
		$tmp_dir2 = $_FILES['file2']['tmp_name'];
		$fileSize2 = $_FILES['file2']['size'];

        $ktpFile2 = $_FILES['ktp']['name'];
        $tmp_dirktp = $_FILES['ktp']['tmp_name'];
        $fileSizektp = $_FILES['ktp']['size'];

		$fotoFile = $_FILES['file3']['name'];
		$tmp_dir3 = $_FILES['file3']['tmp_name'];
		$fileSize3 = $_FILES['file3']['size'];

        $fotoFile2 = $_FILES['foto']['name'];
        $tmp_dirfoto = $_FILES['foto']['tmp_name'];
        $fileSizefoto = $_FILES['foto']['size'];
		
		
		if(empty($userId)){
			$errMSG = "User Id is empty";
		}
		else
		{
			if($sttbFile){
				$upload_dir = 'file/STTB/'; // upload directory
		
				$imgExt = strtolower(pathinfo($sttbFile,PATHINFO_EXTENSION)); // get image extension
			
				// valid image extensions
				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			
				// rename uploading image
				$userpic = rand(1000,1000000).".".$imgExt;
					
				// allow valid image file formats
				if(in_array($imgExt, $valid_extensions)){			
					// Check file size '5MB'
					if($fileSize < 5000000)				{
						move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					}
					else{
						$errMSG = "File terlalu besar";
					}
				}
				else{
					$errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";		
				}
			}if ($skhuFile) {
				$upload_dir = 'file/SKHU/'; // upload directory
		
				$imgExt = strtolower(pathinfo($skhuFile,PATHINFO_EXTENSION)); // get image extension
			
				// valid image extensions
				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			
				// rename uploading image
				$userpic1 = rand(1000,1000000).".".$imgExt;
					
				// allow valid image file formats
				if(in_array($imgExt, $valid_extensions)){			
					// Check file size '5MB'
					if($fileSize1 < 5000000)				{
						move_uploaded_file($tmp_dir1,$upload_dir.$userpic);
					}
					else{
						$errMSG = "File terlalu besar";
					}
				}
				else{
					$errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";		
				}
			}if ($ktpFile) {
				$upload_dir = 'file/KTP/KTP MHS/'; // upload directory
		
				$imgExt = strtolower(pathinfo($ktpFile,PATHINFO_EXTENSION)); // get image extension
			
				// valid image extensions
				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			
				// rename uploading image
				$userpic2 = rand(1000,1000000).".".$imgExt;
					
				// allow valid image file formats
				if(in_array($imgExt, $valid_extensions)){			
					// Check file size '5MB'
					if($fileSize2 < 5000000)				{
						move_uploaded_file($tmp_dir2,$upload_dir.$userpic);
					}
					else{
						$errMSG = "File terlalu besar";
					}
				}
				else{
					$errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";		
				}
			}
            if ($ktpFile2) {
                $upload_dir = 'file/KTP/KTP ORTU MHS/'; // upload directory

                $imgExt = strtolower(pathinfo($ktpFile2,PATHINFO_EXTENSION)); // get image extension

                // valid image extensions
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

                // rename uploading image
                $userktp = rand(1000,1000000).".".$imgExt;

                // allow valid image file formats
                if(in_array($imgExt, $valid_extensions)){
                    // Check file size '5MB'
                    if($fileSizektp < 5000000)				{
                        move_uploaded_file($tmp_dirktp,$upload_dir.$userpic);
                    }
                    else{
                        $errMSG = "File terlalu besar";
                    }
                }
                else{
                    $errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";
                }
            }
			if ($fotoFile) {
				$upload_dir = 'file/FOTO/3x4/'; // upload directory
		
				$imgExt = strtolower(pathinfo($fotoFile,PATHINFO_EXTENSION)); // get image extension
			
				// valid image extensions
				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			
				// rename uploading image
				$userpic3 = rand(1000,1000000).".".$imgExt;
					
				// allow valid image file formats
				if(in_array($imgExt, $valid_extensions)){			
					// Check file size '5MB'
					if($fileSize3 < 50000000)				{
						move_uploaded_file($tmp_dir3,$upload_dir.$userpic);
					}
					else{
						$errMSG = "File terlalu besar";
					}
				}
				else{
					$errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";		
				}
			}
            if ($fotoFile2) {
                $upload_dir = 'file/FOTO/4x6/'; // upload directory

                $imgExt = strtolower(pathinfo($fotoFile2,PATHINFO_EXTENSION)); // get image extension

                // valid image extensions
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

                // rename uploading image
                $userpicfoto = rand(1000,1000000).".".$imgExt;

                // allow valid image file formats
                if(in_array($imgExt, $valid_extensions)){
                    // Check file size '5MB'
                    if($fileSizefoto < 50000000)				{
                        move_uploaded_file($tmp_dirfoto,$upload_dir.$userpic);
                    }
                    else{
                        $errMSG = "File terlalu besar";
                    }
                }
                else{
                    $errMSG = "Maaf , hanya file yang berformat JPG, JPEG, PNG & GIF";
                }
            }
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tb_syarat(userId,file_sttb,file_skhu,file_ktp,file_ktportu,foto_berwarna,foto_berwarnaa,time) VALUES(:uid, :ufilesttb, :ufileskhu, :ufilektp,:ufilektportu, :ufoto,:ufotoo, NOW())');
			$stmt->bindParam(':uid',$userId);
			$stmt->bindParam(':ufilesttb',$userpic);
			$stmt->bindParam(':ufileskhu',$userpic1);
			$stmt->bindParam(':ufilektp',$userpic2);
            $stmt->bindParam(':ufilektportu',$userktp);
			$stmt->bindParam(':ufoto',$userpic3);
            $stmt->bindParam(':ufotoo',$userpicfoto);
			
			if($stmt->execute())
			{
				$successMSG = "Berhasil Mengisi Persyaratan, silahkan isi form pendaftaran yang ada di bawah !!!";
				//header("refresh:5;pendaftaranS1.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>