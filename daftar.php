<?php

    if(isset($_POST['submit'])){

        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $data = $koneksi->query("SELECT * FROM user WHERE nisn = '$nisn'");
        $cek = mysqli_num_rows($data);
    
        if($cek>0){
            echo '<div class="alert alert-warning">
                             Nisn sudah pernah terdaftar!
                    </div>';
        }else{
    
            $kueri = $koneksi->query("INSERT INTO user (nisn, username, password) VALUES ('$nisn','$nama','$pass')");
            if($kueri){
              echo "<script>alert('Pendaftaran Berhasil, Silahkan Login')</script>";
              echo "<script>location='?page=login'</script>";
            }else{
              echo "<script>alert('Pendaftaran Gagal')</script>";
            }
      
    }
    }
?>

<div class="container mt-2 mb-2">
    <div class="card card-secondary">
        <div class="card-header">
            <h4 class="card-title">Form Pendaftaran</h4>
        </div>
        <form action="" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nisn</label>
                    <input class="form-control" type="text" name="nisn" placeholder="Masukkan NISN" required="">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="user" placeholder="Masukan Username" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="pass" placeholder="Masukan Password" required="">
                </div>
                <!-- /.card-body -->
                <button type="submit" name="submit" class="btn btn-primary pull-right"><i
                        class="fa fa-user-plus mr-2"></i>Daftar</button>
        </form>
    </div>
</div>
</div>