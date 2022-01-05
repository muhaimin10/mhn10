<script> </script>
<?php 
       include "../koneksi.php";
    ?>

<tr align="center">
    <table style="width:98%" border="0">
        <th><img src="../images/logo.jpg" width="150px" height="150px" align="left"> </th>
        <td align="center" colspan="3">
            <h3>MA Nurusaadah</h3>
            Desa Arisan Musi,Kecamatan Muara Belida, Kabupaten Muara Enim, Sumatera Selatan 30759
        </td>
        <th></th>
    </table>
    <hr>
    </br>
    <center>
        <h3>Kartu Bukti Pendaftaran</h3>
    </center>

    <table style="text-transform:capitalize;" class="table-bordered table table-striped" border="0" cellspacing="0"
        cellpadding="8" align="center" width="60%">
        <?php
            $id = $_GET['id'];  
            $sql= mysqli_query($koneksi,"SELECT * From pendaftaran  WHERE id_user='$id'" );
            $no=1;
                    while ($data = mysqli_fetch_array($sql)){	
         ?>
        <tr>
            <td>Nomor Pendaftaran</td>
            <td>:</td>
            <td><?= preg_replace('/[^a-zA-Z0-9 ]/','',$data['tgl_daftar']."000".$data['id_pendaftaran']);?></td>
            <td rowspan="6" align="right"><img src="images/foto/<?= $data['foto'];?>" width="150px" height="150px"
                    alt=""></td>
        </tr>

        <tr>
            <td>Nama Pendaftar</td>
            <td>:</td>
            <td><?= $data['nama'];?></td>
        </tr>

        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?= $data['tempat_lahir'].", ".date('d M Y', strtotime($data['tgl_lahir']));;?></td>
        </tr>

        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?= $data['asal_sekolah'];?></td>
        </tr>

        <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td><?= $data['alamat'];?></td>
        </tr>

        <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?= $data['no_hp'];?></td>
        </tr>

        <tr>
            <td>Dinyatakan</td>
            <td>:</td>
            <td><?= $data['konfirmasi'];?></td>
        </tr>
    </table>
    <table style="width: 60%" align="center">
        <!-- Tr atau TABLE ROW, untuk membuat baris di dalam kolom -->



        <tr align="center">
            <!-- td atau TABEL DATA, untuk membuat kolom table -->

            </br>
            <td rowspan="4"><b></br>Pendaftar </b>
                </br>
                </br>
                </br>
                </br>
                <hr style="width: 60%" />
                <p style="text-transform:capitalize;"><?= $data['nama'];?></p>

                <?php } ?>
            </td>
            <td width="200px"></td>
            <td width="200px"></td>

            <td rowspan="3" align="center">Muara Enim, <?php echo date('d-M-Y');?> </br> <b>Administrasi</b>
                </br>
                </br>
                </br>
                </br>
                <hr style="width: 60%" />
                ........................
            </td>
        </tr>
        </body>