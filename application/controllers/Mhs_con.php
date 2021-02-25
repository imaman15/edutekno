<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_con extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('myfunction');
		$this->load->helper('enc_dec');
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{	
		$data['kunci']=$this->config->item('encryption_key');
		$data['kode']= $this->mhs_model->maxkode()->row();
		$data['kode_komen']= $this->mhs_model->maxkomen()->row();
		$data['tampil_kls2'] = $this->mhs_model->tampil_kls2()->result_array();
		$data['tampil_data'] = $this->mhs_model->tampil2();
		$data['content'] = 'mahasiswa/beranda';

		$kdUser = $_SESSION['kd_user'];
		$result = $this->db->query("SELECT * FROM anggota WHERE kd_user ='".$kdUser."'");
		$pertamakali = $this->db->query("SELECT * FROM upload WHERE kd_user ='".$kdUser."'");
		$cekResult = $result->num_rows();
		$data['cek_myKelas'] = $cekResult;


		$this->load->view('mahasiswa/blank',$data);
	}

	public function tes()
	{
		$data['content'] = 'mahasiswa/tes';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function cat_saya()
	{
		$data['kode']= $this->mhs_model->maxkomen()->row();
		$data['tampil_data'] = $this->mhs_model->cat_saya();
		$data['content'] = 'mahasiswa/cat_saya';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function gabung_kelas()
	{
		$data['content'] = 'mahasiswa/gabung_kelas';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function tes_cari()
	{
		$data['content'] = 'mahasiswa/tes_cari';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function tampil_kelas($kd_enc)
	{
		$data['kode']= $this->mhs_model->maxkode()->row();
		$data['kode_komen']= $this->mhs_model->maxkomen()->row();
		$data['tampil_kls'] = $this->mhs_model->tampil_kls()->result_array();
		$data['kunci']=$this->config->item('encryption_key');
		$kunci=$this->config->item('encryption_key');
		$kd_kelas=decrypt_url($kd_enc,$kunci);
		$data['kelas'] = $this->mhs_model->kelas($kd_kelas);
		$data['anggota'] = $this->mhs_model->anggota($kd_kelas);
		$data['judul_kelas'] = $this->dosen_model->judul_kelas($kd_kelas)->row();
		$data['content'] = 'mahasiswa/tampil_kelas';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function profil()
	{
		$kd_user = $this->session->userdata('kd_user');
		$data['tampil_data'] = $this->mhs_model->tampil_profil('user',array('kd_user' => $kd_user))->row();
		$data['tampil_cat'] = $this->mhs_model->cat_saya();
		$data['dateindo'] = $this->mhs_model->dateindo();
		$data['content'] = 'mahasiswa/profil';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function lihat_profil($kd_user)
	{	
		$kunci=$this->config->item('encryption_key');
		$kd_prof=decrypt_url($kd_user,$kunci);
		$data['kelas'] = $this->mhs_model->kelas($kd_prof);

		$data['tampil_data'] = $this->mhs_model->tampil_profil('user',array('kd_user' => $kd_prof))->row();
		$data['dateindo'] = $this->mhs_model->dateindo();
		$data['content'] = 'mahasiswa/lihat_profil';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function daftar()
	{
		$data['kode']= $this->mhs_model->maxuser()->row();
		$data['content'] = 'mahasiswa/form_daftar';
		$this->load->view('mahasiswa/blank',$data);
	}

	public function insert()
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->mhs_model->upload();

      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->mhs_model->insert($upload);

        redirect('login'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('login');
      }
    }
  }

	public function edit($kd_enc)
	{			
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
				redirect('mhs_con/profil');
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
				redirect('mhs_con/profil');
			}
			}
			else
			{
			$data['content'] = 'mahasiswa/edit_profil';
			$data['editdata'] = $this->db->get_where('user',array('kd_user' => $kd_user))->row();
			$this->load->view('mahasiswa/blank',$data);
			}
	}

	public function cat_insert()
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->mhs_model->cat_upload();

      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->mhs_model->cat_insert($upload);

        redirect('mhs_con/index'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('mhs_con/index');
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
			$upload = $this->mhs_model->cat_upload();

      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->mhs_model->cat_insert($upload);

        redirect('mhs_con/tampil_kelas/'.$kelas); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('mhs_con/tampil_kelas/'.$kelas);
      }
    }
  }

	public function komen_insert()
	{
		$this->mhs_model->komen_insert();
		$url = $this->input->post('url');
		redirect($url);
	}

	function cari_cat()
	{
		$data['kode']= $this->mhs_model->maxkomen()->row();
		$data['kunci']=$this->config->item('encryption_key');
		$cari=$this->input->get('cari');
 		$data['cari']=$this->mhs_model->cari_cat($cari);
		$data['content'] = 'mahasiswa/hasil_cari';
		$this->load->view('mahasiswa/blank',$data);
 	}

	public function insert_anggota()
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$cek_kelas = $this->mhs_model->cek_kelas();

      if($cek_kelas['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
      	$kd_kelas = $this->input->post('kd_kelas');
      	$kunci=$this->config->item('encryption_key');
			$kelas=encrypt_url($kd_kelas,$kunci);
        $this->mhs_model->insert_anggota($cek_kelas);        

        redirect('mhs_con/tampil_kelas/'.$kelas); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $cek_kelas['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('mhs_con/index');
      }
    }
	}

	public function keluar_kelas($kd_kelas)
	{
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$keluar = $this->mhs_model->hapus_anggota($kd_kelas);

      if($keluar['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        redirect('mhs_con/index'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $keluar['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				redirect('mhs_con/index');
      }
    }
	}

	public function file_uploads($kd_usr)
	{	
		

		$config['join'] = array('kelas b'=>'b.kd_kelas=a.kd_kelas','user c'=>'c.kd_user=a.kd_user');
		$config['where'] = array('a.kd_user'=>$kd_usr);
		$config['order'] = array('a.kd_upload'=>'desc');
        
        $data['uploads'] = $this->mhs_model->getDataDB2('upload a',$config);
        $data['beranda'] = '';
		$data['kelass'] = '';
		$data['content'] = 'mahasiswa/uploads';
        $this->load->view('mahasiswa/blank',$data);
	}
}
