<?php

class Login extends CI_Controller{

	function index(){
		$this->load->view('home/daftar');
	}

	function insert()
	{
		if($this->input->post('submit')){
			//cek nomor induk
		$no_induk = $this->input->post('no_induk');
		$where = array('no_induk' => $no_induk);
		$cek = $this->mhs_model->cek_login("user",$where);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Info",
            text:  "NIM sudah ada!",
            type: "info",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect("login");
			}else{
				$upload = $this->mhs_model->upload();
      			if($upload['result'] == "success"){ 
         
        		$this->mhs_model->insert($upload);

        		redirect('login'); 
      			}else{ 
        		$data['message'] = $upload['error']; 
				redirect('login');
      			}
			}
      
    	}
  	}

	function aksi_login(){
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
			'status' => 'Pelajar'
			);
		$cek = $this->mhs_model->cek_login("user",$where);
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
			$this->session->set_flashdata('welcome','<script type="text/javascript">
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

			redirect(base_url("mhs_con/index"));

		}else{
			$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "Anda gagal login, NIM atau password salah! ",
            type: "error",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect("login");
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
