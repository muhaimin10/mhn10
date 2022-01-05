<?php 

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran");

?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <div class="clearfix">
                        <div class="float-left">
                            Daftar Orangtua
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['sukses'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php unset($_SESSION['sukses']) ?>
                    <?php elseif(isset($_SESSION['gagal'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php unset($_SESSION['gagal']) ?>
                    <?php endif; ?>
                    <table id="table-1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nisn</th>
                                <th>Nama Siswa</th>
                                <th>Foto</th>
                                <th>KK</th>
                                <th>Akte</th>
                                <th>Ijazah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php while($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class="text-capitalize">
                                <td><?= $no++ ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><img src="../member/images/foto/<?= $row['foto'] ?>" alt="<?= $row['judul'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img src="../member/images/kk/<?= $row['kk'] ?>" alt="<?= $row['judul'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img src="../member/images/akte/<?= $row['akte'] ?>" alt="<?= $row['judul'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img src="../member/images/ijazah/<?= $row['ijazah'] ?>" alt="<?= $row['judul'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                             
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>