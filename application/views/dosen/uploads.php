<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        File Uploads
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>dosen"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Uploads</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Nama File</th>
                          <th>Deskripsi</th>
                          <th>Nama Kelas</th>
                          <th>Tanggal di posting</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                  <?php foreach ($uploads->result() as $d) :
                    $tgl = date('d F Y', strtotime($d->tgl_post));
                    ?>
                  <tr>
                    <td><?php echo $d->namafile; ?></td>
                    <td><?php echo $d->deskripsi; ?></td>
                    <td><?php echo $d->nama_kelas; ?></td>
                    <td><?php echo $tgl.substr($d->tgl_post,10,6); ?></td>
                    <td align='center'><a href="<?php echo base_url('assets/files/'.$d->namafile)?>"><button class="btn btn-success btn-xs"> Unduh File </button></a></td>
                  </tr>
                   <?php endforeach; ?>
                </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->