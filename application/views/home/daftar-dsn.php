<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>EDUTEKNO</title>
	<!-- Custom Theme files -->
	<link href="<?php echo base_url ('assets/home/css/style3.css')?>" rel="stylesheet" type="text/css" media="all"/>
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E-com Login & signup Forms Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //for-mobile-apps -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/bootstrap.js"></script>
	<!-- font-awesome icons -->
	<link href="<?php echo base_url ('assets/home/css/font-awesome.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/sw/sweetalert2.css">
	<!-- //font-awesome icons -->
	<!--Google Fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>
<div class="wthree-dot">
	<h1 style="color: black;font-size: 40px;font-weight: 700; ">EDUTEKNO</h1>
	<h4 style="color: black;font-size: 20px;text-align: center;font-weight: 700;">UNTUK PENGAJAR</h4>
	<div class="profile">
		<div class="wrap">
			<!--
			<div class="content-main">
				<div class="w3ls-subscribe w3ls-subscribe1">
					
			<?php echo $this->session->flashdata('welcome'); ?>

					<h4>Sudah Punya Akun ?</h4>
					<form action="aksi_login" method="post">
						<input type="text" name="no_induk" placeholder="No Induk (ex : NIP,NID,NIM,NIK,NIS)" required="" maxlength="10">
						<input maxlength="100" type="password" name="password" placeholder="Password" required="">
						<input type="submit" value="Login">
					</form>
				</div>
			</div>
			-->

			<div class="content-main content-main1">
				<div class="w3ls-subscribe">

			<?php echo $this->session->flashdata('info');; ?>	
					<h4>Buat Akun Baru ?</h4>
			<?php
            $kd = $kode->maxUser;
            $noUrut = (int) substr($kd, 3, 3);
            $noUrut++;
            $char = "USR";
            $kd_user = $char.sprintf("%03s", $noUrut);

            ?>
					<form action="insert" method="post" enctype="multipart/form-data">
						<input type="hidden" name="kd_dosen" placeholder="Kode Dosen" value="<?php echo $kd_user; ?>">
						<input type="text" name="nid" placeholder="No Induk (ex : NIP,NID,NIM,NIK,NIS)" required="" maxlength="10">
						<input type="text" name="nama" placeholder="Nama Lengkap" required="">
						<input type="email" name="email" placeholder="mail@example.com" required="">
						<input type="password" name="password" placeholder="Password" required="" maxlength="100">

						<select name="agama" required>
                		<option value="">Pilih Agama</option>
                		<option value="Islam" style="color: black;">Islam</option>
                		<option value="Kristen" style="color: black;">Kristen</option>
                		<option value="Hindu" style="color: black;">Hindu</option>
                		<option value="Budha" style="color: black;">Budha</option>
               		 	<option value="Konghucu" style="color: black;">Konghucu</option>
              			</select>
             
            <div class="form-group">  			
			<label style="color: white; margin-right: 25px;" >
			<input type="radio" name="jenkel" required="" value="Laki-laki">
			Laki - Laki
			</label>

			<label style="color: white;">
			<input type="radio" name="jenkel" required="" value="Perempuan">
			Perempuan
			</label>
			</div>

        	<input type="text" name="alamat" placeholder="Alamat" required>
        	<input type="text" name="pekerjaan" placeholder="Pekerjaan" required>

        	<input type="hidden" name="tgl_daftar" placeholder="Tanggal daftar" value="<?php echo date("Y-m-d H:i:s"); ?>" >

			<div class="form-group" style="color: white;">
            <label for="exampleInputFile">Upload Foto<br>
            <input type="file" id="exampleInputFile" name="foto" style="border-style: box;" required>
            </label>
            </div>
			<br>

		<input type="submit" name="daftar" value="Daftar">
		</form>
				</div>
			</div>


			<div class="wthree_footer_copy">
				<p>© 2018 EDUTEKNO. All rights reserved </p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/sw/sweetalert2.min.js"></script> 
</body>
	</html>
