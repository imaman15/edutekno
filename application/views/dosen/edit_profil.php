<div class="content-wrapper">
<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Form Daftar
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('dosen')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <li class="active">Edit Profil</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box-success">
          <div class="box-body">

              <!-- /.box-header -->
              <!-- form start -->
              <?php echo form_open(); ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" name="no_induk" class="form-control" placeholder="NIM" value="<?php echo $editdata->no_induk; ?>" disabled>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                <input type="text" name="nama_user" class="form-control" placeholder="Nama Lengkap" value="<?php echo $editdata->nama_user; ?>" required>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $editdata->email; ?>" required>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $editdata->password; ?>" required>
              </div>
              <br>

              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" name="jenkel" value="Laki-laki" >
                        </span>
                    <input type="text" class="form-control" value="Laki-laki" disabled/>
                    <span class="input-group-addon"><i class="fa fa-mars"></i></span>
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-3">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" name="jenkel" value="Perempuan" >
                        </span>
                    <input type="text" class="form-control" value="Perempuan" disabled/>
                    <span class="input-group-addon"><i class="fa fa-venus"></i></span>
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="form-group">
            </div>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-arrows"></i></span>
              <select class="form-control" name="agama" required>
                <option value="<?php echo $editdata->agama; ?>"><?php echo $editdata->agama; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" required><?php echo $editdata->alamat; ?></textarea>
            </div>
            <div class="form-group">
              <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $editdata->pekerjaan; ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Upload Foto</label>
                <input type="file" id="exampleInputFile" disabled>
                <input type="hidden" name="foto" class="form-control" placeholder="NIM" value="<?php echo $editdata->foto; ?>">
            </div>
            <div class="box-footer">
              <a href="<?php echo base_url() ?>dosen/profil"><button type="button" class="btn btn-danger" name="button">Batal</button></a>
              <span>atau</span>
              <input type="submit" name="submit" class="btn btn-success" value="Simpan"></input> <!--harus pake input type submit-->
              <?php echo form_close(); ?>
            </div>


          </section>
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
</div>