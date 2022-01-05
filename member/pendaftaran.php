<?php
    
    $id_akun = $_SESSION['user']['id_user'];

    $data = mysqli_query($koneksi,"SELECT* FROM `user` WHERE id_user = '$id_akun'");
    $row = mysqli_fetch_array($data);
?>

<?php
    $id = $_SESSION['user']['id_user'];

    $data_pendaftar = mysqli_query($koneksi, "SELECT* FROM pendaftaran WHERE id_user = '$id'");
    $rowdaftar = mysqli_fetch_array($data_pendaftar);
?>


<h1 class="mt-4">Pendaftaran</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Pendaftaran</li>
</ol>

<div class="card">
    <div class="card-header">
        <h4 class="text-center"><i class="bg-warning"><strong>Edit Data Dapat Dilakukan Sebelum Admin Verifikasi!!!</strong></i></h4>
    </div>
    <div class="card-body">
    <?php if(empty($rowdaftar['id_user'])): ?>
                    <form action="?page=proses-pendaftaran" method="POST">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input class="form-control" type="text" name="nisn" placeholder=""
                                value="<?= $row['nisn']?>" readonly>
                            <input type="hidden" value="<?=$id_akun?>" name="id_user">
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input class="form-control" type="text" name="asl_sk" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nm_lengkap" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tmpt_lahir" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="inputError1">Jenis Kelamin </label>
                            <select name="jenis" class="form-control" required>
                                <option value=""> ----Pilih----</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan"> Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputError1">Agama </label>
                            <select name="agama" class="form-control" required>
                                <option value=""> ----Pilih----</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen"> Kristen</option>
                                <option value="Hindu"> Hindu</option>
                                <option value="Budha"> Budha</option>
                                <option value="Khong Wu Chu"> Khong Wu Chu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">No Handphone (Whatsapp)</label>
                            <input class="form-control" type="text" name="telp" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <textarea id="input" class="form-control" rows="3" name="almt_lkp"
                                required="required"></textarea>
                        </div>

                        <div class="input-group1 text-right">
                            <button class="btn btn-primary" name="simpan" type="submit" id="simpan">Daftar</button>
                        </div>
                    </form>
                    <?php else: ?>
                        <form action="?page=proses-edit-pendaftaran" method="POST">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input class="form-control" type="text" name="nisn" placeholder=""
                                value="<?= $row['nisn']?>" readonly>
                            <input type="hidden" value="<?=$id_akun?>" name="id_akun">
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input class="form-control" type="text" value="<?= $rowdaftar['asal_sekolah'] ?>" name="asl_sk" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input class="form-control" type="text" value="<?= $rowdaftar['nama'] ?>" name="nm_lengkap" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input class="form-control" type="text" value="<?= $rowdaftar['tempat_lahir'] ?>" name="tmpt_lahir" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir : <?= $rowdaftar['tgl_lahir'] ?></label>
                            <input class="form-control" type="date"  name="tgl_lahir" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="inputError1">Jenis Kelamin : <?= $rowdaftar['jenis_kelamin'] ?> </label>
                            <select name="jenis" class="form-control" required>
                                <option value=""> ----Pilih----</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan"> Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputError1">Agama :<?= $rowdaftar['agama'] ?> </label>
                            <select name="agama"  class="form-control" required>
                                <option value=""> ----Pilih----</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen"> Kristen</option>
                                <option value="Hindu"> Hindu</option>
                                <option value="Budha"> Budha</option>
                                <option value="Khong Wu Chu"> Khong Wu Chu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">No Handphone (Whatsapp)</label>
                            <input class="form-control" type="text" value="<?= $rowdaftar['no_hp'] ?>" name="telp" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <textarea id="input" class="form-control" rows="3" name="almt_lkp"
                                required="required">
                                <?= $rowdaftar['alamat'] ?>
                                </textarea>
                        </div>

                        <div class="input-group1 text-right">
                            <button class="btn btn-primary" name="edit">Edit</button>
                        </div>


                    </form>
                    <?php endif; ?>
    </div>
</div>