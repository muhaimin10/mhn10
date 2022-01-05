<?php
	if(isset($_POST['simpanakte'])){

	$id_pendaftar =	$_SESSION['user']['id_user'];

	$namafile = $_FILES ['akte']['name'];
	$asal = $_FILES['akte']['tmp_name'];
	$tujuan = 'images/akte/';

	if($_FILES['akte']['error']== 0){
		if($_FILES['akte']['size'] < 1000000) {
			if(file_exists('images/akte/'. $namafile)) unlink('images/akte/'. $namafile);
			
			move_uploaded_file($asal, $tujuan . $namafile);
			$query2 = $koneksi->query("UPDATE pendaftaran SET akte='$namafile' WHERE id_user='$id_pendaftar'");
			if($query2){
				echo "<script>alert('Foto berhasil ditambah');</script>";
				echo "<script>window.location='?page=dokumen'</script>";
				
			} else {
				echo "<script>alert('Artikel Gagal Ditambahkan'); </script>";			
			}
		}
	}

	}
?>