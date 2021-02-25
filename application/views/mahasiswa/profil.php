<!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Profil Saya
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('mhs_con/index')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <li class="active">Profil Saya</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-body">
            <?php echo $this->session->flashdata('info'); ?>
              <!-- /.box-header -->
              <div class="col-md-12 ">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user ">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active headprof hp0">
              <p><b><?php echo $tampil_data->nama_user; ?></b><span class="pull-right as"><?php echo $tampil_data->pekerjaan; ?></span></p>



            </div>
            <div class="widget-user-image hp4">
              <img class="img-circle" src="<?php echo base_url('assets/foto/'.$tampil_data->foto)?>" alt="User Avatar">
            </div>

          </div>
          <!-- /.widget-user -->
          <div class="box box-primary">
            <div class="box-body">
              <div class="row">
            <div class="col-md-7">
                <div class="box-header with-border">
                  <i class="fa fa-user"></i>

                  <h3 class="box-title">Tentang Saya</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
             <strong><img src="<?php echo base_url();?>assets/dist/img/icon/1.png"></img> Nomor Induk</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->no_induk; ?>
             </p>

             <hr>
             <strong><img src="<?php echo base_url();?>assets/dist/img/icon/6.png"></img> Nama Lengkap</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->nama_user; ?>
             </p>

             <hr>
             <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->email; ?>
             </p>

             <hr>
             <strong><i class="fa fa-venus-mars margin-r-5"></i> Jenis Kelamin</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->jenkel; ?>
             </p>

             <hr>
             <strong><img src="<?php echo base_url();?>assets/dist/img/icon/5.png"></img> Agama</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->agama; ?>
             </p>

             <hr>
             <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->alamat; ?>
             </p>

             <hr>
             <strong><img src="<?php echo base_url();?>assets/dist/img/icon/3.png"></img> Pekerjaan</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->pekerjaan; ?>
             </p>

             <hr>
             <strong><img src="<?php echo base_url();?>assets/dist/img/icon/4.png"></img> Status</strong>
             <p class="text-muted z1">
               <?php echo $tampil_data->status; ?>
             </p>

             <hr>
             <strong><i class="fa fa-calendar-check-o  margin-r-5"></i> Terdaftar</strong>
             <p class="text-muted z1">
               <?php echo $dateindo; 
                $kunci=$this->config->item('encryption_key');
             $kode=$tampil_data->kd_user;
             $kd_enc=encrypt_url($kode,$kunci);
               ?>
             </p><br>
             <a href="edit/<?php echo $kd_enc; ?>"><button class="btn btn-primary btn-edit">Edit Profil</button></a>
           </div>
                <!-- /.box-body -->

              <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-5">
                <!-- /.box-header -->
                <?php
                $kd_user = $this->session->userdata("kd_user");
                $query = $this->db->query("select * from upload where kd_user='$kd_user'");
                $jmlh_cat = $query->num_rows();
                $query2 = $this->db->query("select * from anggota where kd_user='$kd_user'");
                $jmlh_kls = $query2->num_rows();
                ?>
                <div class="box-body">
                  <div class="small-box bg-green">
                  <div class="inner">
                    <h3><?php echo $jmlh_cat; ?></h3>
                    <p><b>Kiriman</b></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-document"></i>
                  </div>
                </div>
                  <div class="small-box bg-red">
                  <div class="inner">
                    <h3><?php echo $jmlh_kls; ?></h3>
                    <p><b>Kelas</b></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-easel"></i>
                  </div>
                </div>
          <div class="box box-primary">

          <div class="box-header with-border">
      <h3 class="box-title">Postingan Terakhir</h3>
    </div>
    <!-- /.box-header -->
    <?php
    $query3 = $this->db->query("select * from upload a join kelas b using (kd_kelas) join user c on a.kd_user=c.kd_user where a.kd_user='$kd_user' order by a.kd_upload DESC LIMIT 0,3");
    foreach ($query3->result() as $c) :
    $tgl = $c->tgl_post;
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
    $kunci=$this->config->item('encryption_key');
    $kd_profil=$c->kd_user;
    $kd_enc=encrypt_url($kd_profil,$kunci);
    $kd_kelas=$c->kd_kelas;
    $kd_enc2=encrypt_url($kd_kelas,$kunci);
    ?>
    <div class="box-body">
      <ul class="products-list product-list-in-box">
        <div class="box-header with-border">
        <li class="item">
          <div class="product-img">
            <img src="<?php echo base_url('assets/foto/'.$c->foto)?>" alt="Product Image">
          </div>
          <div class="product-info">
            <span class="username"><a href='<?php echo base_url() ?>mhs_con/lihat_profil/<?php echo $kd_enc; ?>'><?php echo $c->nama_user; ?>  </a><i class="fa fa-chevron-circle-right"></i><a href="<?php echo base_url() ?>mhs_con/tampil_kelas/<?php echo $kd_enc2; ?>"><?php echo "  ".$c->nama_kelas."  ".$c->jurusan; ?> </a></span><br>
            <span class="text-muted">Diposting <?php echo $waktu; ?></span><br>
            <span> <?php echo $c->deskripsi; ?></span><br>
            <div class="attachment-block clearfix">
              <h4 class="attachment-heading"><?php echo $c->namafile; ?></h4>
              <div class="attachment-text">
                Untuk mengunduh file ini silahkan <a href="<?php echo base_url('assets/files/'.$c->namafile)?>">klik disini!</a>
              </div>
          </div>
          </div>
        </li>
      </div>
      </ul>
    </div>
  <?php endforeach; ?>

                </div>
                <!-- /.box-body -->
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
        </div>
        </div>




          </section>
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
