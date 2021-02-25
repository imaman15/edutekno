<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Ardhirudyimam24 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public function index(){
		$this->load->helper('enc_dec');
		$data['cipher'] = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$data['key'] = $this->config->item('encryption_key');
		//$en = $cipher->encrypt($string, $kunci);
		//$de = $cipher->decrypt($en, $kunci);
		$this->load->view('home/cek_password',$data);
	}

	public function cekpassword()
	{	
		$this->load->helper('enc_dec');
		$data['cipher'] = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$data['key'] = $this->config->item('encryption_key');
		//$en = $cipher->encrypt($string, $kunci);
		//$de = $cipher->decrypt($en, $kunci);
		$this->load->view('home/cek_password',$data);
	}

		
}
