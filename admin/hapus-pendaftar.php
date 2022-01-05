<?php

   $id = $_GET['id'];

   $query = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id_pendaftaran = '$id'");

   if($query){
      echo "<script>alert('data berhasil dihapus')</script>";
      echo "<script>location='?page=data-pendaftar';</script>";
   }


?>