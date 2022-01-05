<?php
	if(isset($_POST['simpankk'])){

	$id_pendaftar =	$_SESSION['user']['id_user'];

	$namafile = $_FILES ['kk']['name'];
	$asal = $_FILES['kk']['tmp_name'];
	$tujuan = 'images/kk/';

	if($_FILES['kk']['error']== 0){
		if($_FILES['kk']['size'] < 1000000) {
			if(file_exists('images/kk/'. $namafile)) unlink('images/kk/'. $namafile);
			
			move_uploaded_file($asal, $tujuan . $namafile);
			$query2 = $koneksi->query("UPDATE pendaftaran SET kk='$namafile' WHERE id_user='$id_pendaftar'");
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