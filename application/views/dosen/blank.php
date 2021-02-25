<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EDUTEKNO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- CSS buatan sendiri -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/mycss.css')?>">
   <!--Data Tables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/dataTables.bootstrap.css">
    <!-- sweet alert -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/sw/sweetalert2.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green  sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>dosen" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>EDU</b>TEKNO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" class="user-image" alt="<?php echo $this->session->userdata("nama_user"); ?>" title="<?php echo $this->session->userdata("nama_user"); ?>">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama_user"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" class="img-circle" alt="<?php echo $this->session->userdata("nama_user"); ?>" title="<?php echo $this->session->userdata("nama_user"); ?>">

                <p>
                  <strong><?php echo $this->session->userdata("nama_user"); ?></strong>
                  <small style="font-size: 13px;"><b><?php echo $this->session->userdata("pekerjaan"); ?></b></small>
                  <small style="font-size: 11px;">Anggota sejak <?php echo $this->mhs_model->dateindo(); ?></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('dosen/profil')?>" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('dosen/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/foto/'.$this->session->userdata("foto"))?>" class="img-circle" alt="<?php echo $this->session->userdata("nama_user"); ?>" title="<?php echo $this->session->userdata("nama_user"); ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama_user"); ?></p>
          <a href="#"><i class="fa fa-suitcase"></i><?php echo $this->session->userdata("status"); ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="<?php echo base_url(); ?>dosen/cari_cat" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="cari" class="form-control" placeholder="Cari catatan...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU NAVIGASI </li>
      <li class="<?php echo $beranda ?>">
        <a href="<?php echo base_url('dosen')?>">
          <i class="fa fa-dashboard"></i> <span>Beranda</span>
        </a>
      </li>

      <li>
        <a href="#" data-toggle="modal" data-target="#modal-success">
          <i class="fa fa-user-plus"></i> <span>Buat Kelas</span>
        </a>
      </li>

      <li class="treeview <?php echo $kelass; ?>">
        <a href="#">
          <i class="fa fa-graduation-cap"></i> <span>Kelas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

        <!-- sub menu nya disini -->

        <?php 
        $kunci=$this->config->item('encryption_key');
        $kd_user = $this->session->userdata('kd_user');
        $query = $this->db->query("select a.nama_kelas,a.warna,b.kd_kelas,b.kd_user from kelas a join anggota b using (kd_kelas) where b.kd_user ='$kd_user'");

        echo "<ul class='treeview-menu'>";
        foreach ($query->result() as $sub) {
          $kd_kls=$sub->kd_kelas;
              $kd_enc=encrypt_url($kd_kls,$kunci);
         echo '<li style="background: '.$sub->warna.';"><a href="'.base_url().'dosen/kelas/'.$kd_enc.'"><i class="fa fa-group"></i>'.$sub->nama_kelas.'</a></li>';
        }
        echo"</ul>";

        ?>

      </li>
     
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Buat Kelas</h4>
              </div>

              <form role="form" action="<?php echo base_url(); ?>dosen/insert_kelas" method="post">
              <div class="modal-body">
                <div style="padding-top: 10px;"></div>
                
               <?php 
                  $this->load->helper('myfunction');
                  $kd_kelas=randcode('6');
                  $kd_user=$this->session->userdata("kd_user");
                
                $kd = $kode->maxKode;
                $noUrut = (int) substr($kd, 3, 3);
                $noUrut++;
                $char = "FUP";
        $kd_upload = $char.sprintf("%03s", $noUrut);
                ?> 
                  
                  <input name="kd_upload" type="hidden" class="form-control popin" value="<?php echo $kd_upload ?>">
                  <input name="kd_user" type="hidden" class="form-control popin" value="<?php echo $this->session->userdata("kd_user"); ?>">
                  <input name="kd_kelas" type="hidden" class="form-control popin" value="<?php echo $kd_kelas; ?>">
         
                  
                <div class="form-group pd-rlt">
                  <input name="nama_kelas" type="text" class="form-control popin" placeholder="Nama Kelas">
                </div>
                <div class="form-group pd-rlt">
                  <input name="jurusan" type="text" class="form-control popin" placeholder="Jurusan">
                </div>
                <!-- Color Picker -->
              <div class="form-group pd-rlt">
                <div class="input-group my-colorpicker2 gantiwarna">
                  <input name="warna" type="hidden" class="form-control">
                    <i class=" btn input-group-addon"></i>
                </div>
                 <label class="pd-rl">Ganti Warna</label>
                <!-- /.input group -->

              </div>

              </div>
              <div class="modal-footer">
                <input type="submit" name="buat" class="btn btn-outline" value="Buat" data-toggle="modal" data-target=".bs-example-modal-sm">
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  <?php $this->load->view($content); ?>
  <!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Versi</b> 1.0
  </div>
  <strong>Copyright &copy; 2018 <a href="#">EDUTEKNO</a>.</strong> All rights
  reserved.
</footer>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/sw/sweetalert2.min.js"></script>


</body>
</html>
