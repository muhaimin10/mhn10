<?php
    //menangkap data
    if(isset($_POST['simpan'])){

        $id_register = $_POST['id_user'];
        $nisn = $_POST['nisn'];
        $asl = $_POST['asl_sk'];
        $nm = $_POST['nm_lengkap'];
        $tmpt = $_POST['tmpt_lahir'];
        $tgl_l = $_POST['tgl_lahir'];
        $jk = $_POST['jenis'];
        $agama = $_POST['agama'];
        $telp = $_POST['telp'];
        $almt = $_POST['almt_lkp'];
        $tgl = date('Y-m-d');

        // print_r($_POST);die;

            $daftar = mysqli_query($koneksi, "INSERT INTO `pendaftaran`(`id_user`, `nisn`, `nama`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `tgl_daftar`)
            VALUES ('$id_register','$nisn','$nm','$asl','$tmpt','$tgl_l','$jk','$agama','$telp','$almt','$tgl')");

        if($daftar){
        echo "<script>alert('Data Udah Di Simpan'); </script>";
        echo "<script> location ='index.php?page=pendaftaran';</script>";

        }
        else{
        echo "<script>alert('Data Gagal Simpan');  </script>";
        echo "<script>location ='index.php?page=homeMember';</script>"; 
        }
        //input datanya
    
       
      
    }

    ?>