<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Form Daftar
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('mhs_con/index')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <li class="active">Edit Profil</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-body">
            <?php
            $kd = $kode->maxUser;
            $noUrut = (int) substr($kd, 3, 3);
            $noUrut++;
            $char = "MHS";
            $kd_user = $char.sprintf("%03s", $noUrut);
            ?>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="insert" method="post" enctype="multipart/form-data">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="hidden" name="kd_user" class="form-control" value="<?php echo $kd_user; ?>">
                <input type="text" name="no_induk" class="form-control" placeholder="NIM">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                <input type="text" name="nama_user" class="form-control" placeholder="Nama Lengkap">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <br>

              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" name="jenkel" value="Laki-laki">
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
                          <input type="checkbox" name="jenkel" value="Perempuan">
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
              <select class="form-control" name="agama">
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </div>
            <br>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-arrows"></i></span>
              <select class="form-control" name="status">
                <option value="">Pilih Status</option>
                <option value="Dosen">Dosen</option>
                <option value="Mahasiswa">Mahasiswa</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
              <input type="hidden" name="tgl_daftar" class="form-control" placeholder="Tanggal daftar" value="<?php echo date("Y-m-d H:i:s"); ?>" >
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-font"></i></span>
              <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputFile">Upload Foto</label>
              <input type="file" id="exampleInputFile" name="foto">
            </div>
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan"></input>
            </div>
          </form>
          </section>
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
