
<?php
    

    if(isset($_POST['kirim'])){

        $nm = $_POST['nama'];
        $email = $_POST['email'];
        $isi = $_POST['isi'];

        $insert = mysqli_query($koneksi, "INSERT INTO kontak (nama, email, isi) VALUES ('$nm', '$email', '$isi')");

        if($insert){

            echo "<script>alert('masukkan anda diterima');</script>";
        }
        
    }
    
    
   


?>
<div class="row">
    <div class="col-md-10">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="area-title text-left mt-2">
                <h2>Hubungi Kami</h2>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off"
                        required="required" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off"
                        required="required" name="email">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea name="isi" class="form-control" rows="5" maxlength="250"
                        placeholder="maksimal 250 karakter" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
                    <button type="reset" class="btn btn-sm btn-danger"
                        onclick="return confirm('apakah anda yakin?')">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>