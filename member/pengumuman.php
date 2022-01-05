<h1 class="mt-4">Pengumuman</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Pengumuman</li>
</ol>

<div class="container">
    <div align="center">
        <?php 
            $id = $_SESSION['user']['id_user'];
                $pilih = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_user='$id'");
                while($data = mysqli_fetch_array($pilih)){ 
            // SELECT * FROM `tbl_pendaftaran` WHERE konfirmasi = 'lulus | tidak lulus | proses'|
      ?>
        <h2 class="text-capitalize">Hasil PPDB : <?= $data['nama'] ?></h2>
    </div>

    <div class="pull-left">
        <a href="cetak_bukti.php?id=<?= $id ?>" class="btn btn-danger btn-sm"><i class="fa fa-print">Cetak</i></a>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No Pendaftaran</th>
                        <th class="text-capitalize">:
                            <?=  preg_replace('/[^a-zA-Z0-9 ]/','',$data['tgl_daftar']."000".$data['id_pendaftaran']);?>
                        </th>
                    </tr>
                    <tr>
                        <th>Nama Peserta</th>
                        <th class="text-capitalize">: <?= $data['nama']?></th>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <th>: <?= date('d F Y', strtotime($data['tgl_lahir'])) ;?></th>
                    </tr>
                    <tr>
                        <th>Tanggal Registrasi</th>
                        <th>: <?= date('d F Y', strtotime($data['tgl_daftar'])) ;?></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-4">
            <img src="images/foto/<?=$data['foto'] ?>" width="250" height="210" alt="">
        </div>
    </div>


    <div align="center">
        <h3>Anda Dinyatakan: <strong class="text-capitalize"><?= $data['konfirmasi']?></strong> </h3>
    </div>
    <?php } ?>



    <br><br>
    <div align="center">
        <td>Informasi Selengkapnya Silahkan Cetak Bukti Kelulusan Untuk Melakukan Pendaftaran Ulang <br>
            Untuk Jadwal Pendaftaran Ulang Bisa Di lihat Pada Halaman Utama Website Ini.</td>
    </div>