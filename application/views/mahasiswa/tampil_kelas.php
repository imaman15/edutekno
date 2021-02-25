<!-- Content Header (Page header) -->
<?php $data = $kelas->row(); ?>
      <section class="content-header">
        <h1>
          Semua Kelas
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('mhs_con/index')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <li class="active"><?php echo $data->nama_kelas; ?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-body">

            <div class="bg-aqua-active kelass">
              <h2 align='center'><?php echo $judul_kelas->nama_kelas; ?></h2>
              <h4 align='center'><?php echo $judul_kelas->nama_user; ?> •  <?php echo $judul_kelas->jurusan; ?></h4>
            </div>

            <section class="content">
      <div class="row">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Kiriman</a></li>
              <li><a href="#tab_2" data-toggle="tab">Berkas</a></li>
              <li><a href="#tab_3" data-toggle="tab">Anggota</a></li>
              <li class="pull-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">Keluar Kelas
    			      <img src="<?php echo base_url();?>assets/dist/img/icon/z.png"></img></button>
    			  <div class="modal modal-info fade " id="modal-info">
             <div class="modal-dialog ">
               <div class="modal-content q1">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title"><b>Keluar Kelas</b></h4>
                 </div>
                 <div class="modal-body">
                   <p align='center'>Apakah anda yakin keluar dari kelas ini?</p>
                 </div>
                 <div class="modal-footer">
                   <form action="../keluar_kelas/<?php echo $data->kd_kelas; ?>" method="post">
                     <input type="submit" name="submit" class="btn btn-outline pull-left"  value="Iya"></button>
                   </form>
                   <input type="submit" class="btn btn-outline" data-dismiss="modal" value="Tidak"></button>
                 </div>
            </div>
         <!-- /.modal-content -->
       </div>
       <!-- /.modal-dialog -->
     </div></li>
            </ul>
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                TEST
              </div>
            </div>
          </div>
          </div>
            <!-- /.tab-pane 1-->
            <div class="tab-content">
            <div class="tab-pane active " id="tab_1">

        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-body">
            <?php echo $this->session->flashdata('info'); ?>
            <?php
            $kd_user=$this->session->userdata("kd_user");
            $kd = $kode->maxKode;
            $noUrut = (int) substr($kd, 3, 3);
            $noUrut++;
            $char = "FUP";
            $kd_upload = $char.sprintf("%03s", $noUrut);
            ?>
            <form action="../cat_insert2" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  <input type="hidden" name="kd_upload" class="form-control" placeholder="Kode Catatan" value="<?php echo $kd_upload; ?>">
                  <input type="hidden" name="kd_user" class="form-control" placeholder="Kode Catatan" value="<?php echo $kd_user; ?>">
                  <input type="hidden" name="judul" class="form-control" placeholder="Kode Catatan">
                  <input type="hidden" name="keterangan" class="form-control" placeholder="Kode Catatan" value="Catatan">
                  <input type="hidden" name="tgl_post" class="form-control" placeholder="Kode Catatan" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Masukan Deskripsi" name="deskripsi" required></textarea>
                </div>
                  <div class="form-group">
                    <select class="form-control tes" name="kd_kelas" required>
                      <option value="<?php echo $data->kd_kelas; ?>"><?php echo $data->nama_kelas." ".$data->jurusan; ?></option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload File</label>
                  <input type="file" id="exampleInputFile" name="namafile" required>
                  <span>file harus berformat (doc, docx, xls, xlsx, ppt, pptx, pdf)</span><br><br>
                  <div class='butt'>
                  <input type="reset" class="btn btn-danger" value="Batal">
                  <span>atau</span>
                  <input type="submit" name="submit" class="btn btn-primary " value="Kirim">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>

            </div>
            </div>
            <div class="box box-primary">
              <div class="box-body">
                <div class="box-header with-border">
                <h3 class="box-title"><b>Diskusi</b></h3>
                </div>
                  <?php foreach($kelas->result() as $v) :
                $tgl = $v->tgl_post;
                $selisih = time() - strtotime($tgl) ;
            		date_default_timezone_set('Asia/Jakarta');
                $detik = $selisih ;
                $menit = round($selisih / 60 );
                $jam = round($selisih / 3600 );
                $hari = round($selisih / 86400 );
                $minggu = round($selisih / 604800 );
                $bulan = round($selisih / 2419200 );
                $tahun = round($selisih / 29030400 );

                if ($detik <= 60) {
                    $waktu = $detik.' detik yang lalu';
                } else if ($menit <= 60) {
                    $waktu = $menit.' menit yang lalu';
                } else if ($jam <= 24) {
                    $waktu = $jam.' jam yang lalu';
                } else if ($hari <= 7) {
                    $waktu = $hari.' hari yang lalu';
                } else if ($minggu <= 4) {
                    $waktu = $minggu.' minggu yang lalu';
                } else if ($bulan <= 12) {
                    $waktu = $bulan.' bulan yang lalu';
                } else {
                    $waktu = $tahun.' tahun yang lalu';
                }

                $kd_kls=$v->kd_kelas;
                $kd_enc2=encrypt_url($kd_kls,$kunci);
                $kd_usr=$v->kd_user;
                $kd_profil=encrypt_url($kd_usr,$kunci);
                ?>
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                      <img class="img-circle" src="<?php echo base_url('assets/foto/'.$v->foto) ?>" alt="User Image">
                        <span class="username"><a href='<?php echo base_url() ?>mhs_con/lihat_profil/<?php echo $kd_profil; ?>'><?php echo $v->nama_user; ?>  </a><i class="fa fa-chevron-circle-right"></i>
                          <a href="<?php echo base_url() ?>mhs_con/tampil_kelas/<?php echo $kd_enc2; ?>"><?php echo "  ".$v->nama_kelas."  ".$v->jurusan; ?></a></span>
                        <span class="description">Diposting <?php echo $waktu; ?></span>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <div class="box-body">
                      <!-- post text -->
                      <p><?php echo $v->deskripsi; ?></p>
                      <!-- Attachment -->
                      <div class="attachment-block clearfix">

                          <h4 class="attachment-heading"><?php echo $v->namafile; ?></h4>

                          <div class="attachment-text">
                            Untuk mengunduh file ini silahkan <a href="<?php echo base_url('assets/files/'.$v->namafile)?>">klik disini!</a>
                          </div>
                          <!-- /.attachment-text -->

                        <!-- /.attachment-pushed -->
                      </div>
                      <!-- /.attachment-block -->

                      <!-- Social sharing buttons -->
                    </div>
                    <?php
                    $query = $this->db->query("select * from komentar a join upload b using (kd_upload) join user c on a.kd_user=c.kd_user where a.kd_upload='$v->kd_upload' order by a.kd_komen ASC");
                    $jmlh_kom = $query->num_rows();
                    ?>
                    <div class="box-footer box-comments">
                      <div class="box-comment">
                      <span><?php echo " (".$jmlh_kom.") orang berkomentar";  ?></span>
                      </div>
                      <div> </div>
                      </div>
                      <?php
                     foreach($query->result() as $x) :
                       $tgl1 = $x->tgl_komen;
                       $selisih = time() - strtotime($tgl1) ;
                       date_default_timezone_set('Asia/Jakarta');
                       $detik = $selisih ;
                       $menit = round($selisih / 60 );
                       $jam = round($selisih / 3600 );
                       $hari = round($selisih / 86400 );
                       $minggu = round($selisih / 604800 );
                       $bulan = round($selisih / 2419200 );
                       $tahun = round($selisih / 29030400 );

                       if ($detik <= 60) {
                           $waktu1 = $detik.' detik yang lalu';
                       } else if ($menit <= 60) {
                           $waktu1 = $menit.' menit yang lalu';
                       } else if ($jam <= 24) {
                           $waktu1 = $jam.' jam yang lalu';
                       } else if ($hari <= 7) {
                           $waktu1 = $hari.' hari yang lalu';
                       } else if ($minggu <= 4) {
                           $waktu1 = $minggu.' minggu yang lalu';
                       } else if ($bulan <= 12) {
                           $waktu1 = $bulan.' bulan yang lalu';
                       } else {
                           $waktu1 = $tahun.' tahun yang lalu';
                       }
                     ?>
                   <div class="box-footer box-comments">
                   <div class="box-comment">
                   <!-- User image -->
                       <img class="img-circle img-sm" src="<?php echo base_url('assets/foto/'.$x->foto) ?>" alt="User Image">
                       <div class="comment-text">
                             <span class="username">
                               <?php echo $x->nama_user; ?>
                               <span class="text-muted pull-right"><?php echo $waktu1; ?></span>
                             </span><!-- /.username -->
                         <?php echo $x->isi_komen; ?>
                       </div>

                       <!-- /.comment-text -->
                     </div>
                     <!-- /.box-comment -->
                   </div>
                   <?php endforeach; ?>
                   <div class="box-footer">
                      <?php
                      $kd_user=$this->session->userdata("kd_user");
                  		$kd = $kode_komen->maxKomen;
                  		$noUrut = (int) substr($kd, 3, 3);
                  		$noUrut++;
                  		$char = "KOM";
                  		$kd_komen = $char.sprintf("%03s", $noUrut);
                      ?>
                      <form action="<?php echo base_url();?>mhs_con/komen_insert" method="post">
                        <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                          <input type="hidden" class="form-control input-sm" placeholder="Masukan Komentar" name="kd_komen" value="<?php echo $kd_komen; ?>">
                          <input type="text" class="form-control input-sm" placeholder="Masukan Komentar" name="isi_komen">
                          <input type="hidden" class="form-control input-sm" placeholder="Masukan Komentar" name="url" value="<?php echo uri_string();?>">
                          <input type="hidden" class="form-control input-sm" placeholder="Masukan Komentar" name="tgl_komen" value="<?php echo date("Y-m-d H:i:s"); ?>">
                          <input type="hidden" class="form-control input-sm" placeholder="Masukan Komentar" name="kd_upload" value="<?php echo $v->kd_upload; ?>">
                          <input type="hidden" class="form-control input-sm" placeholder="Masukan Komentar" name="kd_user" value="<?php echo $this->session->userdata("kd_user"); ?>">
                          <div class="box-footer pull-right">                            
                          </div>
                        </div>
                      </form>
                    </div>
                    </div>
                <?php endforeach; ?>
              </div>
              </div>
              </div>

              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box box-primary">
            <div class="box-body">
              <div class="row">
        <div class="col-xs-12">
            <h4 class="box-title">Berkas Upload</h4>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Nama File</th>
                          <th>Penulis</th>
                          <th>Keterangan</th>
                          <th>Tanggal di posting</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                  <?php foreach ($kelas->result() as $d) :
                    $tgl = date('d F Y', strtotime($d->tgl_post));
                    ?>
                  <tr>
                    <td><?php echo $d->namafile; ?></td>
                    <td><?php echo $d->nama_user; ?></td>
                    <td><?php echo $d->keterangan; ?></td>
                    <td><?php echo $tgl.substr($d->tgl_post,10,6); ?></td>
                    <td align='center'><a href="<?php echo base_url('assets/files/'.$d->namafile)?>"><button class="btn btn-primary btn-xs"> Unduh File </button></a></td>
                  </tr>
                   <?php endforeach; ?>
                </tbody>
                </table>
            </div><!-- /.box-body -->
          </div>
          </div>
          </div>
          </div>
          </div>
              <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
            <div class="box box-primary">
            <div class="box-body">
              <div class="box-header with-border">
              <h2 class="box-title"><b><?php echo $anggota->num_rows()." "; ?>Anggota</b></h2>
              </div>
              <?php foreach ($anggota->result() as $x) : ?>
              <div class="attachment-block clearfix">
                 <img class="attachment-img" src=<?php echo base_url('assets/foto/'.$x->foto)?> alt="Attachment Image">

                 <div class="attachment-pushed">
                   <h4 class="attachment-heading"><?php echo $x->nama_user; ?></a></h4>
                   <div class="attachment-text">
                     <?php echo $x->status; ?>
                   </div>
                   <!-- /.attachment-text -->
                 </div>
                 <!-- /.attachment-pushed -->
               </div>
             <?php endforeach; ?>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
</section>
          
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
