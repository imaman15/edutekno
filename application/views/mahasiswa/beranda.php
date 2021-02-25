
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Beranda      
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>mhs_con"><i class="fa fa-dashboard"></i> Beranda</a></li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <div class="row">

      <div class="col-md-9">
        <!-- Default box -->
        <div class="box box-primary">

          
          <?php echo $this->session->flashdata('info'); ?>
                <?php
                $kd_user=$this->session->userdata("kd_user");
                $kd = $kode->maxKode;
                $noUrut = (int) substr($kd, 3, 3);
                $noUrut++;
                $char = "FUP";
                $kd_upload = $char.sprintf("%03s", $noUrut);
                ?>
          <form action="<?php echo base_url(); ?>mhs_con/cat_insert" method="post" enctype="multipart/form-data">
            <div class="box-body boxpad">

              <input type="hidden" name="kd_upload" class="form-control" value="<?php echo $kd_upload; ?>">
              <input type="hidden" name="kd_user" class="form-control" value="<?php echo $kd_user; ?>">
              <input type="hidden" name="keterangan" class="form-control" placeholder="Kode Catatan" value="Catatan">
              <input type="hidden" name="judul" class="form-control" placeholder="Kode Catatan">
              <input type="hidden" name="tgl_post" class="form-control" placeholder="Kode Catatan" value="<?php echo date("Y-m-d H:i:s"); ?>">

              <div class="user-block left">
                <img style="margin-top: 10px;" class="img-circle img-responsive" src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" alt="<?php echo $this->session->userdata("nama_user"); ?>" title="<?php echo $this->session->userdata("nama_user"); ?>">
              </div> 

             <div class="ta-control" >
               <textarea name="deskripsi" class="form-control autoresize" rows='1' placeholder='Ketik catatanmu disini'></textarea>
             </div>
             <div class="form-group ta-control">
                
                        <select class="form-control tes" name="kd_kelas" required>
                          <option>Pilih Kelas</option>
                          <?php foreach($tampil_kls2 as $v) : ?>
                          <option value="<?php echo $v['kd_kelas']; ?>"><?php echo $v['nama_kelas']." ".$v['jurusan']; ?></option>
                        <?php endforeach; ?>
                        </select>
                
              </div>
              <div class="form-group" style="margin-bottom: -20px; margin-left: 55px;">
                        <label for="exampleInputFile">Upload File</label>
                        <input type="file" id="exampleInputFile" name="namafile" required>
                        <span>file harus berformat (doc, docx, xls, xlsx, ppt, pptx, pdf)</span><br><br>
              </div>

           </div>

           <!-- /.box-body -->
           <div class="box-footer cat-control">

            <div class="section-left-cat">
            </div>

            <div class="section-right-cat">
              <div class='button'>
                        <input type="reset" class="btn btn-danger" value="Batal">
                        <span>atau</span>
                        <input type="submit" name="submit" class="btn btn-primary " value="Kirim">
                        </div>
            </div>

          </div>
          <!-- /.box-footer-->
        </form> 
         
      </div>
      <!-- /.box utama -->
      <div class="box box-primary" style="padding-left: 6px; padding-right: 6px;: ">
        <!-- /.box utama -->
        <div class="box-header with-border">
        <h3 class="box-title">Postingan Terakhir </h3>
        </div>
        <?php
              foreach($tampil_data->result() as $v) :
              $tgl = $v->tgl_post;
              $waktu = ket_waktu($tgl);
              $kd_kls=$v->kd_kelas;              
              $kd_usr=$v->kd_user; 
              $kd_enc2=encrypt_url($kd_kls,$kunci);
              $kd_profil=encrypt_url($kd_usr,$kunci);             
        ?>
        <div style="padding-top: 2px;"></div>
        <div class="box-success box-body">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="<?php echo base_url('assets/foto/'.$v->foto) ?>" alt="<?php echo $v->nama_user; ?>" title="<?php echo $v->nama_user; ?>">
                <span class="username"><a href="<?php echo base_url() ?>mhs_con/lihat_profil/<?php echo $kd_profil; ?>"><?php echo $v->nama_user; ?></a> <i class="fa fa-chevron-circle-right"></i> <a href="<?php echo base_url()?>mhs_con/tampil_kelas/<?php echo $kd_enc2; ?>"><?php echo "  ".$v->nama_kelas."  ".$v->jurusan; ?></a></span>
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
                <a href="<?php echo base_url('assets/files/'.$v->namafile)?>"><img style="float: left;" src="<?php echo base_url()?>assets/foto/file.png" alt="" height="50" data-toggle="tooltip" data-placement="bottom" title="Unduh file"></a>

                <div style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px;">
                  <h4 class="attachment-heading"><a href="<?php echo base_url('assets/files/'.$v->namafile)?>"><?php echo $v->namafile; ?></a></h4>

                  <div class="attachment-text">
                    Untuk mengunduh file ini silahkan <a href="<?php echo base_url('assets/files/'.$v->namafile)?>">klik disini!</a>
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
                    $kd = $kode_komen->maxKomen;
                    $noUrut = (int) substr($kd, 3, 3);
                    $noUrut++;
                    $char = "KOM";
                    $kd_komen = $char.sprintf("%03s", $noUrut);
                    ?>

              <form action="<?php echo base_url();?>mhs_con/komen_insert" method="post">
                <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" alt="<?php echo $this->session->userdata("nama_user")?>" title="<?php echo $this->session->userdata("nama_user")?>">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Tekan enter untuk memasukkan komentar" name="isi_komen">
                  <input type="hidden" name="url" value="<?php echo uri_string();?>">
                  <input type="hidden" name="kd_komen" value="<?php echo $kd_komen; ?>">
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
       <?php 
       $kd_user = $this->session->userdata("kd_user");   
       $kd_usr = encrypt_url($kd_user,$kunci);    
       $query = $this->db->query("select * from upload where kd_user='$kd_user'");
       $jmlh_cat = $query->num_rows();
       $query2 = $this->db->query("select * from anggota where kd_user='$kd_user'");
       $jmlh_kls = $query2->num_rows();
       ?>
       <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $jmlh_cat; ?></h3>
          <p>Kiriman</p>
        </div>
        <div class="icon">
          <i class="ion ion-document"></i>
        </div>
        <a href="<?php echo base_url()?>mhs_con/file_uploads/<?php echo $kd_usr?>" class="small-box-footer">
          Info selengkapnya <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
     <div class="box box-widget ">
       <!-- small box -->     
       <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo $jmlh_kls; ?></h3>
          <p>Kelas</p>
        </div>
        <div class="icon">
          <i class="ion ion-easel"></i>
        </div>
        
      </div>
    </div>
  

</div>

</section>
<!-- /.content -->


<script src='<?php echo base_url();?>assets/dist/js/autosize.js'></script>
<script>
  autosize(document.querySelectorAll('textarea'));
</script>
