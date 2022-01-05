<?php

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT* FROM pendaftaran WHERE id_pendaftaran='$id'");
    $row = mysqli_fetch_array($data);

?>

<?php
if (isset($_POST["update"])) 
{
    $idpendaftaran = $_GET['id'];
    $status = $_POST["status"];
      
      $koneksi->query("UPDATE pendaftaran SET konfirmasi='$status' WHERE id_pendaftaran='$idpendaftaran'");
      echo "<script>alert('data transaksi terupdate')</script>";
      echo "<script>location='?page=data-pendaftar';</script>"; 
      
  }   

?>
<h1 class="section-header">
    <div>Detail Pendaftar</div>
</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover text-capitalize">
                <tr>
                    <th><b>NISN</b></th>
                    <td>: <?php echo $row['nisn']; ?> </td>
                </tr>
                <tr>
                    <th><b>Asal Sekolah</b></th>
                    <td>: <?php echo $row['asal_sekolah']; ?></td>
                </tr>
                <tr>
                    <th><b>Nama Lengkap</b></th>
                    <td>: <?php echo $row['nama']; ?></td>
                </tr>
                <tr>
                    <th><b>Tempat, Tanggal Lahir</b></th>
                    <td>: <?php echo $row['tempat_lahir'].", ".date('d M Y', strtotime($row['tgl_lahir']));; ?>
                    </td>
                </tr>
                <tr>
                    <th><b>Jenis Kelamin</b></th>
                    <td>: <?php echo $row['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th><b>Agama</b></th>
                    <td>: <?php echo $row['agama']; ?></td>
                </tr>
                <tr>
                    <th><b>No Handphone</b></th>
                    <td>: <?php echo $row['no_hp']; ?> </td>
                </tr>
                <tr>
                    <th><b>Alamat</b></th>
                    <td>: <?php echo $row['alamat']; ?>

                    </td>
                </tr>
                <tr>
                    <th><b>Tanggal Registrasi</b></th>
                    <td>: <?php echo date('d M Y', strtotime($row['tgl_daftar'])); ?></td>
                </tr>
                <tr>
                    <th><b>Status Kelulusan</b></th>
                    <td>: <?php echo $row['konfirmasi']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <img src="../member/images/foto/<?php echo $row["foto"]; ?>" width="300" height="400" alt="" class="img-responsive">
        </div>
        <div class="col">
        <div class="card shadow">
                <div class="card-header">
                    <div class="clearfix">
                        <div class="float-left">
                            Data Dokumen
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                            <tr class="text-capitalize">
                                <td><?= $no++ ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><img style="height:374px;width: 512px;" src="../member/images/foto/<?= $row['foto'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img style="height:374px;width: 512px;"  src="../member/images/kk/<?= $row['kk'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img style="height:374px;width: 512px;" src="../member/images/akte/<?= $row['akte'] ?>" width="100%"
                                    class="img-thumbnail"></td>
                                <td><img style="height:374px;width: 512px;" src="../member/images/ijazah/<?= $row['ijazah'] ?>"width="100%"
                                    class="img-thumbnail"></td>
                             
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="">Pilih Status</option>
                    <option value="lulus">Lulus</option>
                    <option value="tidak lulus">Tidak Lulus</option>
                </select>
            </div>
            <button class="btn btn-primary btn-sm" name="update">Update</button>

        </form>

    </div>
    <!-- /.row -->
</div>