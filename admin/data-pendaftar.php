<?php 

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
$no = 1;
?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <div class="clearfix">
                        <div class="float-left">
                            Daftar Bukutamu
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
                                <th>No-Pendaftaran</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>TTL</th>
                                <th>Tanggal Registrasi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class="text-capitalize">
                                <td><?= $no++ ?></td>
                                <td><?= preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id_pendaftaran']); ?>
                                </td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['tempat_lahir'].", ".date('d M Y', strtotime($row['tgl_lahir']));; ?></td>
                                <td><?= $row['tgl_daftar'] ?></td>
                                <td><?= $row['konfirmasi'] ?></td>
                                <td>
                                    <a href="index.php?page=detail-pendaftar&id=<?= $row['id_pendaftaran']; ?>"
                                        class="btn btn-info btn-sm ">Lihat</a>
                                    <a href="?page=hapus-pendaftar&id=<?= $row['id_pendaftaran'] ?>" class="btn btn-sm btn-danger"
                                        onclick="return confirm('apakah anda yakin?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>