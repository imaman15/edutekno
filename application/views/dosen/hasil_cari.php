<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
          Pencarian
        </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>dosen"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Hasil Pencarian</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <div class="row">

      <div class="col-md-9">
        <!-- Default box -->
        
    <!-- /.box utama -->
    <div class="box box-widget" style="padding-left: 6px; padding-right: 6px;">
      <!-- /.box utama -->
      <div class="box-header with-border">
        <h3 class="box-title">Hasil Pencarian </h3>
      </div>
      <?php
      foreach($cari as $v) :
        $tgl = $v->tgl_post;
        $waktu = ket_waktu($tgl);
        $kd_usr=$v->kd_user;
        $kd_enc=encrypt_url($kd_usr,$kunci);
        $kd_kls=$v->kd_kelas;
        $kd_enc2=encrypt_url($kd_kls,$kunci);
        ?>
        <div style="padding-top: 2px;"></div>
        <div class="box-succses box-body">
          <div class="box-header with-border">
            <div class="user-block">
              <img class="img-circle" src="<?php echo base_url('assets/foto/'.$v->foto); ?>" alt="<?php echo $v->nama_user; ?>" title="<?php echo $v->nama_user; ?>">
              <span class="username"><a href="<?php echo base_url() ?>dosen/lihat_profil/<?php echo $kd_enc; ?>"><?php echo $v->nama_user; ?></a> <i class="fa fa-chevron-circle-right"></i> <a href="<?php echo base_url() ?>dosen/kelas/<?php echo $kd_enc2; ?>"><?php echo "  ".$v->nama_kelas."  ".$v->jurusan; ?></a></span>
              <span class="description">Diposting <?php echo $waktu; ?></span>
            </div>
            <!-- /.user-block -->
          </div>
        </div>
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
          <div>
            <span class="pull-right text-muted"><?php echo " (".$jmlh_kom.") orang berkomentar";  ?></span>
          </div>
        </div>
        <!-- /.box utama -->
        <?php
        foreach($query->result() as $x) :
          $tgl1 = $x->tgl_komen;
          $waktu1 = ket_waktu($tgl1);
          ?>
          <div class="box-footer box-comments">
            <!-- /.box-comment -->
            <div class="box-comment">
              <!-- User image -->
              <img class="img-circle img-sm" src="<?php echo base_url('assets/foto/'.$x->foto) ?>" alt="<?php echo $x->nama_user; ?>" title="<?php echo $x->nama_user; ?>">

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
          $kd = $kode_komen->maxKomen;
          $noUrut = (int) substr($kd, 3, 3);
          $noUrut++;
          $char = "KOM";
          $kd_komen = $char.sprintf("%03s", $noUrut);
          ?>

          <form action="<?php echo base_url();?>dosen/komen_insert" method="post">
            <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" alt="<?php echo $this->session->userdata("nama_user")?>" title="<?php echo $this->session->userdata("nama_user");?>">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
              <input type="text" class="form-control input-sm" placeholder="Tekan enter untuk memasukkan komentar" name="isi_komen">
              <input type="hidden" name="kd_komen" value="<?php echo $kd_komen; ?>;">
              <input type="hidden" name="url" value="<?php echo uri_string();?>">
              <input type="hidden" name="tgl_komen" value="<?php echo date("Y-m-d H:i:s"); ?>">
              <input type="hidden" name="kd_upload" value="<?php echo $v->kd_upload; ?>">
              <input type="hidden" name="kd_user" value="<?php echo $this->session->userdata("kd_user"); ?>">
            </div>
          </form>
        </div>
        <hr style="border-top: 1px solid #afbcc6; border-bottom: 1px solid #eff2f6; height: 0px; margin-bottom: 20px;">
        <div style="padding-bottom: 30px;"></div>
        
      <?php endforeach; ?>
      <!-- /.box-footer -->
    </div>
    <!-- /.box utama -->
    <!-- /.box catatan -->
  </div>      

  <div class="col-lg-3">
    <div class="box box-widget ">
     <!-- small box -->
     <div class="small-box bg-green">
      <div class="inner">
        <h3>13648</h3>
        <p>Uploads</p>
      </div>
      <div class="icon">
        <i class="ion ion-document"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="box box-widget ">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>5</h3>

        <p>Kelas</p>
      </div>
      <div class="icon">
        <i class="ion ion-easel"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- USERS LIST -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <p>Anggota Terbaru</p>

      <div class="box-tools">
        <span class="label label-danger">4 Anggota Baru</span>
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <ul class="users-list clearfix">
        <li><a href="#">
          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image"></a>
          <a class="users-list-name" href="#" title="Alexander Pierce">Alexander Pierce</a>
          <a class="users-list-name" href="#" title="Komputasi Numerik" style="font-size: 10px;">Komputasi Numerik</a>
          <span class="users-list-date">Today</span>
        </li>
        <li><a href="#">
          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image"></a>
          <a class="users-list-name" href="#" title="Alexander Pierce">Alexander Pierce</a>
          <a class="users-list-name" href="#" title="Komputasi Numerik" style="font-size: 10px;">Komputasi Numerik</a>
          <span class="users-list-date">Today</span>
        </li>
        <li><a href="#">
          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image"></a>
          <a class="users-list-name" href="#" title="Alexander Pierce">Alexander Pierce</a>
          <a class="users-list-name" href="#" title="Komputasi Numerik" style="font-size: 10px;">Komputasi Numerik</a>
          <span class="users-list-date">Today</span>
        </li>
        <li><a href="#">
          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image"></a>
          <a class="users-list-name" href="#" title="Alexander Pierce">Alexander Pierce</a>
          <a class="users-list-name" href="#" title="Komputasi Numerik" style="font-size: 10px;">Komputasi Numerik</a>
          <span class="users-list-date">Today</span>
        </li>

      </ul>
      <!-- /.users-list -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
      <a href="javascript:void(0)" class="uppercase">View All Users</a>
    </div>
    <!-- /.box-footer -->
  </div>

</div>

</section>
<!-- /.content -->
</div>

<script src='<?php echo base_url();?>assets/dist/js/autosize.js'></script>
<script>
  autosize(document.querySelectorAll('textarea'));
</script>
