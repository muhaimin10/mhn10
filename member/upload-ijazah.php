<?php
	if(isset($_POST['simpanijazah'])){

	$id_pendaftar =	$_SESSION['user']['id_user'];

	$namafile = $_FILES ['ijazah']['name'];
	$asal = $_FILES['ijazah']['tmp_name'];
	$tujuan = 'images/ijazah/';

	if($_FILES['ijazah']['error']== 0){
		if($_FILES['ijazah']['size'] < 1000000) {
			if(file_exists('images/ijazah/'. $namafile)) unlink('images/ijazah/'. $namafile);
			
			move_uploaded_file($asal, $tujuan . $namafile);
			$query2 = $koneksi->query("UPDATE pendaftaran SET ijazah='$namafile' WHERE id_user='$id_pendaftar'");
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