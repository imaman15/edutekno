<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pencarian
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('mhs_con/index')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <li class="active">Hasil Pencarian</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-body">

              <div class="box-header with-border">
                <?php echo $this->session->flashdata('info'); ?>
                <h3 class="box-title">Hasil Pencarian </h3>
                <?php foreach($cari as $v) : ?>
              </div>
              <?php
              $tgl = $v->tgl_post;
              $kd_usr=$v->kd_user;
              $kd_enc=encrypt_url($kd_usr,$kunci);
              $kd_kls=$v->kd_kelas;
              $kd_enc2=encrypt_url($kd_kls,$kunci);
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


              ?>

                <div class="box box-widget">

                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="<?php echo base_url('assets/foto/'.$v->foto) ?>" alt="User Image">
                      <span class="username"><a href="<?php echo base_url() ?>mhs_con/lihat_profil/<?php echo $kd_enc; ?>"><?php echo $v->nama_user; ?>  </a><i class="fa fa-chevron-circle-right"></i><a href="<?php echo base_url() ?>mhs_con/tampil_kelas/<?php echo $kd_enc2; ?>"><?php echo "  ".$v->nama_kelas."  ".$v->jurusan; ?></a></span>
                      <span class="description">Diposting pada <?php echo $waktu; ?></span>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <!-- post text -->
                    <p><?php echo $v->deskripsi; ?></p>
                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
            <a href="<?php echo base_url('assets/files/'.$v->namafile);?>"><img style="float: left;" src="<?php echo base_url()?>assets/foto/file.png" alt="" height="50" data-toggle="tooltip" data-placement="bottom" title="Unduh file"></a>

            <div style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px;">
              <h4 class="attachment-heading"><a href="<?php echo base_url('assets/files/'.$v->namafile);?>"><?php echo $v->namafile; ?></a></h4>

              <div class="attachment-text">
                Untuk mengunduh file ini silahkan <a href="<?php echo base_url('assets/files/'.$v->namafile);?>">klik disini!</a>
              </div>
              <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->
          </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
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
                  <!-- /.box-footer -->
                  <div class="box-footer">
                    <?php
                    $kd_user=$this->session->userdata("kd_user");
                		$kd = $kode->maxKomen;
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
                          <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                      </div>
                    </form>
                  </div>
                  <?php endforeach; ?>
                  <!-- /.box-footer -->
                </div>

              <!-- /.box-footer-->
            </div>
            <!-- /.box -->

          </section>
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
