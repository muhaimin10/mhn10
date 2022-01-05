<?php
    
    if(isset($_POST['login'])) {

        $nisn = $_POST['nisn'];

        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE nisn = '$nisn'");

        if(mysqli_num_rows($data)==1){
            $akun = mysqli_fetch_assoc($data);
            $_SESSION['user'] = $akun;
            $_SESSION['status'] = "login";

            echo "<script>alert('anda berhasil login')</script>";
            echo "<script>location='member'</script>";
        }else {
            echo "<script>alert('nisn yang anda masukkan salah')</script>";
            echo "<script>location='?page=login'</script>";
        }
    }


?>

<div class="container mt-2 mb-2">
    <div class="card card-secondary">
        <div class="card-header">
            <h4 class="card-title">Login</h4>
        </div>
        <form action="" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Nisn</label>
                    <input class="form-control" type="text" name="nisn" placeholder="Masukkan NISN" required="">
                </div>
                <!-- /.card-body -->
                <button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
        </form>
    </div>
</div>
</div>