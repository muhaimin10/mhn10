<?php
    //menangkap data
    if(isset($_POST['edit'])){

        $id_register = $_SESSION['user']['id_user'];
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

            $daftar = mysqli_query($koneksi, "UPDATE pendaftaran SET nisn='$nisn',nama='$nm',asal_sekolah='$asl',tempat_lahir='$tmpt' ,tgl_lahir='$tgl_l',jenis_kelamin='$jk',agama='$agama',no_hp='$telp',alamat='$almt',tgl_daftar='$tgl_l' WHERE id_user='$id_register'");

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