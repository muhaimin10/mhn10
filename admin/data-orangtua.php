<?php 

$query = mysqli_query($koneksi, "SELECT * FROM orangtua join user on orangtua.id_user=user.id_user join pendaftaran on user.id_user=pendaftaran.id_user");

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
                                <th>Nama Ayah</th>
                                <th>TTL Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Pendidikan Terakhir Ayah</th>
                                <th>Nama Ibu</th>
                                <th>TTL Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Pendidikan Terakhir Ibu</th>
                                <th>Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php while($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class="text-capitalize">
                                <td><?= $no++ ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nama_ayah'] ?></td>
                                <td><?= $row['tempat_lahir_ayah'].", ".date('d M Y', strtotime($row['tgl_lahir_ayah']));; ?></td>
                                <td><?= $row['pekerjaan_ayah'] ?></td>
                                <td><?= $row['pendidikan_terakhir_ayah'] ?></td>
                                <td><?= $row['nama_ibu'] ?></td>
                                <td><?= $row['tempat_lahir_ibu'].", ".date('d M Y', strtotime($row['tgl_lahir_ibu']));; ?></td>
                                <td><?= $row['pekerjaan_ibu'] ?></td>
                                <td><?= $row['pendidikan_terakhir_ibu'] ?></td>
                                <td><?= $row['telp'] ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>