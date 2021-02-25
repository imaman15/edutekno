<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('myfunction');
		$this->load->helper('enc_dec');
	}

	public function index(){
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$data['kunci']=$this->config->item('encryption_key');
		$data['kode']= $this->dosen_model->maxkode()->row();
		$data['kode_komen']= $this->dosen_model->maxkomen()->row();
		$data['tampil_kls2'] = $this->dosen_model->tampil_kls2()->result_array();
		$data['tampil_data'] = $this->dosen_model->tampil2();
		$data['beranda'] = 'active';
		$data['kelass'] = '';
		$data['content'] = 'dosen/beranda';

		$kdUser = $_SESSION['kd_user'];
		$result = $this->db->query("SELECT * FROM anggota WHERE kd_user ='".$kdUser."'");
		$pertamakali = $this->db->query("SELECT * FROM upload WHERE kd_user ='".$kdUser."'");
		$cekResult = $result->num_rows();
		$data['cek_myKelas'] = $cekResult;
		$this->load->view('dosen/blank',$data);
	}

	//-------------------------------------24/12/2017 | 23:55--
	public function cat_insert()
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->dosen_model->cat_upload();

      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->dosen_model->cat_insert($upload);

        redirect('dosen'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('dosen');
      }
    }
  }

  	public function cat_insert2()
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$kd_kelas = $this->input->post('kd_kelas');
			$kunci=$this->config->item('encryption_key');
			$kelas=encrypt_url($kd_kelas,$kunci);
			$upload = $this->dosen_model->cat_upload();

      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->dosen_model->cat_insert($upload);
        redirect('dosen/kelas/'.$kelas); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		redirect('dosen/kelas/'.$kelas);
      }
    }
  }
	//---------------------------------------------------------

	public function insert()
	{
		if($this->input->post('daftar')){ 
			//cek nomor induk
		$no_induk = $this->input->post('nid');
		$where = array('no_induk' => $no_induk);
		$cek = $this->dosen_model->cek_login("user",$where);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Info",
            text:  "NID sudah ada!",
            type: "info",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect("dosen/login");
			}else{
      $upload = $this->dosen_model->upload();

      if($upload['result'] == "success"){ 
        $this->dosen_model->insert($upload);
        
        redirect('dosen/login'); 
      }else{ 
        $data['message'] = $upload['error']; 
        
				redirect('dosen/login');
      		}
         }
  	   }
	}
	public function login(){
		$data['kode']= $this->dosen_model->maxuser()->row();
		$this->load->view('home/login-dsn',$data);
	}

	public function aksi_login(){
		$no_induk = $this->input->post('no_induk');
		$password = $this->input->post('password');
		//Enkripsi Password
		$key = $this->config->item('encryption_key');
		$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$en = $cipher->encrypt($password, $key);
		//Penutup
		$where = array(
			'no_induk' => $no_induk,
			'password' => $en,
			'status' => 'Pengajar',
			);
		$cek = $this->dosen_model->cek_login("user",$where);
    $data = $cek->row();
		if($cek->num_rows() > 0){
			$data_session = array(
				'kd_user' => $data->kd_user,
				'no_induk' => $no_induk,
				'nama_user' => $data->nama_user,
				'email' => $data->email,
				'password' => $data->password,
				'jenkel' => $data->jenkel,
				'agama' => $data->agama,
				'alamat' => $data->alamat,
				'tgl_daftar' => $data->tgl_daftar,
				'foto' => $data->foto,
				'pekerjaan' => $data->pekerjaan,
				'status' => $data->status,
				'status_login' => "login"
				);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "Anda berhasil login!",
            type: "success",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect(base_url("dosen"));

		}else{
			$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "Anda gagal login, NID atau password salah! ",
            type: "error",
            tiDer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');
			redirect('dosen/login');
		}
	}

	public function logout(){
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}

		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function buat_kelas()
	{
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}

		$data['content'] = 'dosen/buatkelas';
	}

	public function insert_kelas() {
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		
		if($this->input->post('buat')){ 
			$this->dosen_model->insert_kelas();
			$this->dosen_model->insert_anggota();
			$this->dosen_model->autofield();
			$kd_kls = $this->input->post('kd_kelas');
			$kunci=$this->config->item('encryption_key');
			$kd_kelas=encrypt_url($kd_kls,$kunci);
			redirect(base_url("dosen/kelas/".$kd_kelas));
    	}else{
    		$this->session->set_flashdata('popup','<div class="alert alert-danger fade in"><a href="#" class="fa ion-close-circled" data-dismiss="alert" aria-label="close" style="margin-left: -10.5px;"></a> 
    			<span style="font-size: 12px;">Gagal membuat kelas. Silahkan coba lagi</span></div>');
			redirect(base_url("dosen"));
    	}
	}

	public function kelas($kd_enc)
	{	
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}

		if($this->uri->segment(4) == 'kick'){
			$kd_kls = $this->uri->segment(3);
			$kunci=$this->config->item('encryption_key');
			$kdKelas=decrypt_url($kd_kls,$kunci);

			$kdUser  = $this->uri->segment(5);
			
			$keluar = $this->dosen_model->kick_anggota($kdKelas, $kdUser);

	      if($keluar['result'] == "success"){ // Jika proses upload sukses
	         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
	        redirect(base_url('dosen/kelas/'.$kd_kls)); // Redirect kembali ke halaman awal / halaman view data
	      }else{ // Jika proses upload gagal
	        $data['message'] = $keluar['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			redirect('dosen');
		  } 

		}


		// exit;
		// if ($this->uri->segment(5))
		$data['kode']= $this->dosen_model->maxkode()->row();
		$data['kode_komen']= $this->dosen_model->maxkomen()->row();
		$data['tampil_kls'] = $this->dosen_model->tampil_kls()->result_array();
		$data['kunci']=$this->config->item('encryption_key');
		$kunci=$this->config->item('encryption_key');
		$kd_kelas=decrypt_url($kd_enc,$kunci);
		$data['kelas'] = $this->dosen_model->kelas($kd_kelas);
		$data['anggota'] = $this->dosen_model->anggota($kd_kelas);
		$data['judul_kelas'] = $this->dosen_model->judul_kelas($kd_kelas)->row();
		$data['beranda'] = '';
		$data['kelass'] = 'active';
		$data['content'] = 'dosen/kelas';
		$this->load->view('dosen/blank',$data);
}

	//-----------------------------------------------
	public function komen_insert()
	{	
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$this->dosen_model->komen_insert();
		$url = $this->input->post('url');
		redirect($url);
	}

	function cari_cat()
	{
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$data['kunci']=$this->config->item('encryption_key');
		$data['kode']= $this->dosen_model->maxkode()->row();
		$data['kode_komen']= $this->dosen_model->maxkomen()->row();
		$cari=$this->input->get('cari');
 		$data['cari']=$this->dosen_model->cari_cat($cari);
		$data['content'] = 'dosen/hasil_cari';
		$data['beranda'] = '';
		$data['kelass'] = '';
		$this->load->view('dosen/blank',$data);
 	}

 	//--------------------------------------------------
 	
 	public function profil()
	{	
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$data['beranda'] = '';
		$data['kode']= $this->dosen_model->maxkode()->row();
		$data['kelass'] = '';
		$kd_user = $this->session->userdata('kd_user');
		$data['tampil_data'] = $this->dosen_model->tampil_profil('user',array('kd_user' => $kd_user))->row();
		$data['tampil_cat'] = $this->dosen_model->cat_saya();
		$data['dateindo'] = $this->dosen_model->dateindo();
		$data['content'] = 'dosen/profil';
		$this->load->view('dosen/blank',$data);
	}

	public function edit($kd_enc)
	{	
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$kunci=$this->config->item('encryption_key');
		$kd_user=decrypt_url($kd_enc,$kunci);
		$data['beranda'] = '';
		$data['kelass'] = '';
		if($this->input->post('submit'))
		{
			$nama_user = $this->input->post('nama_user');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$jenkel = $this->input->post('jenkel');
			$agama = $this->input->post('agama');
			$alamat = $this->input->post('alamat');
			$foto = $this->input->post('foto');
			$pekerjaan = $this->input->post('pekerjaan');
			$object = array (
			'nama_user' => $nama_user,
			'email' => $email,
			'password' => $password,
			'jenkel' => $jenkel,
			'agama' => $agama,
			'alamat' => $alamat,
			'foto' => $foto,
			'pekerjaan' => $pekerjaan
			);
			$this->db->where('kd_user',$kd_user);

			$this->db->update('user',$object);

			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "Anda berhasil mengedit profil!",
            type: "success",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');
				redirect('dosen/profil');
			}
			else
			{
				$this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "Anda gagal mengedit profil, silahkan coba lagi!",
            type: "error",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');
				redirect('dosen/profil');
			}
			}
			else
			{
			$data['content'] = 'dosen/edit_profil';
			$data['editdata'] = $this->db->get_where('user',array('kd_user' => $kd_user))->row();
			$this->load->view('dosen/blank',$data);
			}
	}

	public function lihat_profil($kd_profil)
	{

		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$kunci=$this->config->item('encryption_key');
		$kd_prof=decrypt_url($kd_profil,$kunci);
		$data['kelas'] = $this->dosen_model->kelas($kd_prof);

		$data['beranda'] = '';
		$data['kode']= $this->dosen_model->maxkode()->row();
		$data['kelass'] = 'active';
		$data['tampil_data'] = $this->dosen_model->tampil_profil('user',array('kd_user' => $kd_prof))->row();
		$data['dateindo'] = $this->dosen_model->dateindo();
		$data['content'] = 'dosen/lihat_profil';
		$this->load->view('dosen/blank',$data);
	}

	public function uploads($kd_user)
	{
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$kunci=$this->config->item('encryption_key');
		$kd_usr=decrypt_url($kd_user,$kunci);
		$data['kelas'] = $this->dosen_model->kelas($kd_usr);
		$data['tampil_data'] = $this->dosen_model->tampil_profil('user',array('kd_user' => $kd_usr))->row();
		$data['dateindo'] = $this->dosen_model->dateindo();
		$data['content'] = 'dosen/uploads';
		$this->load->view('dosen/blank',$data);
	}

	public function hapus_kelas($kd_kelas)
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      // 
			$keluar = $this->dosen_model->hapus_anggota($kd_kelas);

      if($keluar['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        redirect('dosen'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $keluar['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('dosen');
      }
    }
	}

	public function file_uploads($kd_usr)
	{	
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("dosen/login"));
		}
		$data['kunci']=$this->config->item('encryption_key');
		$kunci=$this->config->item('encryption_key');
		$kd_user=decrypt_url($kd_usr,$kunci);

		$config['join'] = array('kelas b'=>'b.kd_kelas=a.kd_kelas','user c'=>'c.kd_user=a.kd_user');
		$config['where'] = array('a.kd_user'=>$kd_user);
		$config['order'] = array('a.kd_upload'=>'desc');
        
        $data['uploads'] = $this->dosen_model->getDataDB2('upload a',$config);
        $data['kode']= $this->dosen_model->maxkode()->row();
        $data['beranda'] = '';
		$data['kelass'] = '';
		$data['content'] = 'dosen/uploads';
        $this->load->view('dosen/blank',$data);
	}
	
}
