<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public function index(){
		$this->load->view('home/frontend');
	}
		
	function insert()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');		
		$object = array (				
				'nama' => $nama,
				'email' => $email,
				'subjek' => $subjek,
				'pesan' => $pesan
		);

		$query = $this->db->insert('masukan',$object);
      	if ($query){
      		$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "Pesan anda berhasil dikirim!",
            type: "success",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect(site_url(''));
      	}else{
      		$this->session->set_flashdata('welcome','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "Pesan anda gagal dikirim!",
            type: "failed",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect(site_url(''));
      	}

    	}

  	}	

