<?php
$sqlt = mysqli_query($koneksi, "select * from admin");
$no=1;
?>

<?php
    if(isset($_POST['save'])){

        $admin = $_POST['nm'];
        $user = $_POST['uname'];
        $pass = $_POST['pass'];

        $insert = mysqli_query($koneksi, "INSERT INTO admin (nama_admin, username, password) VALUES ('$admin', '$user', '$pass')");

        if($insert){
            echo "<script>alert('tambah admin berhasil')</script>";
        }

    }
?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Admin</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <button class="btn btn-primary btn-sm mb-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#tambah">Tambah Data</button>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="table_id" class="display table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Admin </th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>

                                <?php
       
                                while($dat = mysqli_fetch_array($sqlt)){

                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dat['nama_admin']; ?></td>
                                    <td><?= $dat['username']; ?></td>
                                    <td><?=  $dat['password']; ?></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="tambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input class="form-control" name="nm" type="text">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="uname" type="text">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="pass" type="text">
                    </div>
    
                    <div class="footer mt-2">
                        <button class="btn btn-primary btn-sm" name="save">Tambah</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>