<?php

    $id_session = $_SESSION['user']['id_user'];
    $data = mysqli_query($koneksi, "SELECT* FROM pendaftaran WHERE id_user='$id_session'");
    $row = mysqli_fetch_array($data);

?>

<?php
    $id_session2 = $_SESSION['user']['id_user'];
    $dataortu = mysqli_query($koneksi, "SELECT* FROM orangtua WHERE id_user='$id_session2'");
    $rowortu = mysqli_fetch_array($dataortu);

?>

<h1 class="mt-4">Profil</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Profil</li>
</ol>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <img class="rounded-circle" src="images/foto/<?= $row['foto'] ?>" width="200" height="200" alt="">

                        <p class="mt-3"><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div>
                </div>

                <div class="col-sm-8">
                    <!-- heading -->
                    <h3 class="text-center">Data Diri</h3>
                    <table class="table table-hover">
                        <tbody class="text-capitalize">
                            <tr>
                                <td><b>NISN</b></td>
                                <td>: <?php echo $row['nisn']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Asal Sekolah</b></td>
                                <td>: <?php echo $row['asal_sekolah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td>: <?php echo $row['nama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat, Tanggal Lahir</b></td>
                                <td>:
                                    <?php echo $row['tempat_lahir'].", ".date('d M Y', strtotime($row['tgl_lahir']));; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>: <?php echo $row['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>: <?php echo $row['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>No Handphone</b></td>
                                <td>: <?php echo $row['no_hp']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>: <?php echo $row['alamat']; ?>

                                </td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Registrasi</b></td>
                                <td>: <?php echo date('d M Y', strtotime($row['tgl_daftar'])); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- heading -->
                    <h3 class="text-center">Data Orangtua</h3>
                    <table class="table table-hover">

                        <tbody class="text-capitalize">
                            <tr>
                                <td><b>Nama Ayah</b></td>
                                <td>: <?php echo $rowortu['nama_ayah'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat,Tanggal Lahir(Ayah)</b></td>
                                <td>:
                                    <?php echo $rowortu['tempat_lahir_ayah'].", ".date('d M Y', strtotime($rowortu['tgl_lahir_ayah']));; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>: <?php echo $rowortu['pekerjaan_ayah'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Pendidikan Terakhir</b></td>
                                <td>: <?php echo $rowortu['pendidikan_terakhir_ayah'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ibu</b></td>
                                <td>: <?php echo $rowortu['nama_ibu'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat, Tanggal Lahir (Ibu)</b></td>
                                <td>: <?php echo $rowortu['tempat_lahir_ibu'].", ".date('d M Y', strtotime($rowortu['tgl_lahir_ibu']));; ?>
                                </td>
                            </tr>

                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>: <?php echo $rowortu['pekerjaan_ibu'] ?></td>
                            </tr>

                            <tr>
                                <td><b>Pendidikan Terakhir</b></td>
                                <td>: <?php echo $rowortu['pendidikan_terakhir_ibu'] ?></td>
                            </tr>

                            <tr>
                                <td><b>Telp/HP</b></td>
                                <td>: <?php echo $rowortu['telp'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>