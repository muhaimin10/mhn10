<?php
    //menangkap data
    if(isset($_POST['simpan'])){

        $id = $_SESSION['user']['id_user'];
        $nm_ayah = $_POST['nm_ayah'];
        $tmpt_lahir_ayah = $_POST['tmpt_lahir_ayah'];
        $tgl_lahir_ayah = $_POST['tgl_lahir_ayah'];
        $pend_terakhir_ayah = $_POST['pend_terakhir_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $nm_ibu = $_POST['nm_ibu'];
        $tmpt_lahir_ibu = $_POST['tmpt_lahir_ibu'];
        $tgl_lahir_ibu = $_POST['tgl_lahir_ibu'];
        $pend_terakhir_ibu = $_POST['pend_terakhir_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $no_telp = $_POST['telp'];

        // print_r($_POST);die;

        $cek = mysqli_query($koneksi, "SELECT * FROM orangtua WHERE id_user = '$id'");
        $rows = mysqli_num_rows($cek);

        if($rows>0){
            echo '<div class="alert alert-warning">
                           Data Orantua Sudah Diisi!
                          </div>';
        }else{
            $daftar = mysqli_query($koneksi, "INSERT INTO `orangtua`(`id_user`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_terakhir_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`,`pekerjaan_ibu`, `pendidikan_terakhir_ibu`, `telp`)
            VALUES ('$id','$nm_ayah','$tmpt_lahir_ayah','$tgl_lahir_ayah','$pekerjaan_ayah','$pend_terakhir_ayah','$nm_ibu','$tmpt_lahir_ibu','$tgl_lahir_ibu','$pekerjaan_ibu','$pend_terakhir_ibu','$no_telp')");

            // print_r ($daftar);die;

        if($daftar){
        echo "<script>alert('Data Udah Di Simpan'); </script>";
        echo "<script> location ='?page=orangtua';</script>";

        }
        else{
        echo "<script>alert('Data Gagal Simpan');  </script>";
        echo "<script>location ='index.php?page=orangtua';</script>"; 
        }
        }
        //input datanya
    
       
      
    }

    ?>