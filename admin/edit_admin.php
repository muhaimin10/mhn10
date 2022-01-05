<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Admin</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                    <div class="item form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="ida" class="form-control" value="<?= $data['id_admin']; ?>">
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="<?= $data['nama_admin']; ?>" placeholder="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user" name="user"
                                value="<?= $data['username']; ?>" placeholder="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" name="pass"
                                value="<?= $data['password']; ?>" placeholder="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Level </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="level" name="level"
                                value="<?= $data['level']; ?>">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="">
                            <a href="?page=data_admin" class="btn btn-primary btn-sm">Cancel</a>
                            <button type="submit" name="editadmin" class="btn btn-success btn-sm">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>