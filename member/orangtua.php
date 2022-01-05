<?php
    $id = $_SESSION['user']['id_user'];
   
    $dataortu = mysqli_query($koneksi,"SELECT* FROM `orangtua` WHERE id_user = '$id'");
    $rowortu = mysqli_fetch_array($dataortu);

?>
<h1 class="mt-4">Orangtua</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Orangtua</li>
</ol>

<?php if(empty($rowortu['id_user'])):  ?>
<form action="?page=proses-orangtua" method="POST">
    <div class="form-group">
        <label for="">Nama Ayah</label>
        <input class="form-control" type="text" name="nm_ayah" placeholder="">

    </div>
    <div class="form-group">
        <label for="">Tempat Lahir Ayah</label>
        <input class="form-control" type="text" name="tmpt_lahir_ayah" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Ayah</label>
        <input class="form-control" type="date" name="tgl_lahir_ayah" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ayah</label>
        <input class="form-control" type="text" name="pend_terakhir_ayah" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input class="form-control" type="text" name="pekerjaan_ayah" placeholder="">
    </div>

    <!-- ibu -->

    <div class="form-group">
        <label for="">Nama Ibu</label>
        <input class="form-control" type="text" name="nm_ibu" placeholder="">

    </div>
    <div class="form-group">
        <label for="">Tempat Lahir Ibu</label>
        <input class="form-control" type="text" name="tmpt_lahir_ibu" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Ibu</label>
        <input class="form-control" type="date" name="tgl_lahir_ibu" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ibu</label>
        <input class="form-control" type="text" name="pend_terakhir_ibu" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input class="form-control" type="text" name="pekerjaan_ibu" placeholder="">
    </div>

    <div class="form-group">
        <label for="">No Telp / HP</label>
        <input class="form-control" type="text" name="telp" placeholder="">
    </div>



    <div class="input-group1 text-right">
        <button class="btn btn-primary" name="simpan" type="submit" id="simpan">Daftar</button>
    </div>
</form>
<?php else: ?>
    <form action="?page=proses-edit-orangtua" method="POST">
    <div class="form-group">
        <label for="">Nama Ayah</label>
        <input class="form-control" type="text" name="nm_ayah" value="<?= $rowortu['nama_ayah'] ?>" placeholder="">

    </div>
    <div class="form-group">
        <label for="">Tempat Lahir Ayah</label>
        <input class="form-control" type="text" name="tmpt_lahir_ayah" value="<?= $rowortu['tempat_lahir_ayah'] ?>" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Ayah</label>
        <input class="form-control" type="date" name="tgl_lahir_ayah" value="<?= $rowortu['tgl_lahir_ayah'] ?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ayah</label>
        <input class="form-control" type="text" name="pend_terakhir_ayah" value="<?= $rowortu['pendidikan_terakhir_ayah'] ?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input class="form-control" type="text" name="pekerjaan_ayah" value="<?= $rowortu['pekerjaan_ayah'] ?>" placeholder="">
    </div>

    <!-- ibu -->

    <div class="form-group">
        <label for="">Nama Ibu</label>
        <input class="form-control" type="text" name="nm_ibu" value="<?= $rowortu['nama_ibu'] ?>" placeholder="">

    </div>
    <div class="form-group">
        <label for="">Tempat Lahir Ibu</label>
        <input class="form-control" type="text" name="tmpt_lahir_ibu" value="<?= $rowortu['tempat_lahir_ibu'] ?>" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Ibu</label>
        <input class="form-control" type="date" name="tgl_lahir_ibu" value="<?= $rowortu['tgl_lahir_ibu'] ?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ibu</label>
        <input class="form-control" type="text" name="pend_terakhir_ibu" value="<?= $rowortu['pendidikan_terakhir_ibu'] ?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input class="form-control" type="text" name="pekerjaan_ibu" value="<?= $rowortu['pekerjaan_ibu'] ?>" placeholder="">
    </div>

    <div class="form-group">
        <label for="">No Telp / HP</label>
        <input class="form-control" type="text" name="telp" value="<?= $rowortu['telp'] ?>" placeholder="">
    </div>



    <div class="input-group1 text-right mt-2">
        <button class="btn btn-primary btn-sm" name="edit" type="submit" id="edit">Edit</button>
    </div>
</form>
<?php endif; ?>