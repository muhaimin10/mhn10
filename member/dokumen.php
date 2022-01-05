<?php
$idpendaftar = $_SESSION['user']['id_user'];
	$data = mysqli_query($koneksi, "SELECT* FROM pendaftaran WHERE id_user = '$idpendaftar'");
	$row = mysqli_fetch_array($data);
?>
<h1 class="mt-4">Dokumen</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dokumen</li>
</ol>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Dokumen</th>
                                <th>Upload</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>Pas Foto :</td>
                                <td>
                                    <form action="?page=upload-foto" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-3">
                                            <div>
                                                <input type="file" name="foto">
                                            </div>
                                            <button type="submit" name="simpanfoto"
                                                class="btn btn-primary btn-sm">Unggah</button>
                                    </form>
                                </td>
                                <td>
                                    <p><img class="img-fluid" width="80" height="100" alt="KK" title="Kartu Keluarga"
                                            src="images/foto/<?= $row['foto'] ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Kartu Keluarga :</td>
                                <td>
                                    <form action="?page=upload-kk" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-3">
                                            <div>
                                                <input type="file" name="kk">
                                            </div>
                                            <button type="submit" name="simpankk"
                                                class="btn btn-primary btn-sm">Unggah</button>
                                    </form>
                                </td>
                                <td>
                                    <p><img class="img-fluid" width="80" height="100" alt="KK" title="Kartu Keluarga"
                                            src="images/kk/<?= $row['kk'] ?>"></p>
                                </td>
                            </tr>

                            <tr>
                                <td>Akte:</td>
                                <td>
                                    <form action="?page=upload-akte" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-3">
                                            <div>
                                                <input type="file" name="akte">
                                            </div>
                                            <button type="submit" name="simpanakte"
                                                class="btn btn-primary btn-sm">Unggah</button>
                                    </form>
                                </td>
                                <td>
                                    <p><img class="img-fluid" width="80" height="100" alt="KK" title="Kartu Keluarga"
                                            src="images/akte/<?= $row['akte'] ?>"></p>
                                </td>
                            </tr>

                            <tr>
                                <td>Ijazah:</td>
                                <td>
                                    <form action="?page=upload-ijazah" method="post" enctype="multipart/form-data">
                                        <div class="input-group mb-3">
                                            <div>
                                                <input type="file" name="ijazah">
                                            </div>
                                            <button type="submit" name="simpanijazah"
                                                class="btn btn-primary btn-sm">Unggah</button>
                                    </form>
                                </td>
                                <td>
                                    <p><img class="img-fluid" width="80" height="100" alt="KK" title="Kartu Keluarga"
                                            src="images/ijazah/<?= $row['ijazah'] ?>"></p>
                                </td>
                            </tr>



                    </table>
                </div>

            </div>
        </div>



    </div>
</div>
</div>