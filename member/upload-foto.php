<?php
	if(isset($_POST['simpanfoto'])){

	$id_pendaftar =	$_SESSION['user']['id_user'];

	$namafile = $_FILES ['foto']['name'];
	$asal = $_FILES['foto']['tmp_name'];
	$tujuan = 'images/foto/';

	if($_FILES['foto']['error']== 0){
		if($_FILES['foto']['size'] < 1000000) {
			if(file_exists('images/foto/'. $namafile)) unlink('images/foto/'. $namafile);
			
			move_uploaded_file($asal, $tujuan . $namafile);
			$query2 = $koneksi->query("UPDATE pendaftaran SET foto='$namafile' WHERE id_user='$id_pendaftar'");
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