<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model {

	var $table = 'upload';
	var $column_order = array(null, 'a.deskripsi','a.namafile','a.tgl_post','b.nama_kelas','c.nama_user','a.keterangan'); //set column field database for datatable orderable
	var $column_search = array('a.deskripsi','a.namafile','a.tgl_post','b.nama_kelas','c.nama_user','a.keterangan'); //set column field database for datatable searchable
	var $order = array('kd_upload' => 'asc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function upload()
	{
		$kd_user = $this->input->post('kd_user');
		$ext = substr($_FILES['foto']['name'],-4);
		$foto = $kd_user.$ext;
		$config['upload_path'] = 'assets/foto/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $foto;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$return = array(
				'result' => 'success',
				'file' => $this->session->set_flashdata('welcome',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Anda berhasil mendaftar!",
							type: "success",
							timer: 3000,
							showConfirmButton: true
						});
					},10);
					</script>'),
				'error' => '');
			return $return;
		}else{
			$return = array(
				'result' => 'failed',
				'file' => '',
				'error' => $this->session->set_flashdata('welcome',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Maaf",
							text:  "Anda gagal mendaftar!",
							type: "error",
							timer: 3000,
							showConfirmButton: true
						});
					},10);
					</script>'
				));
			return $return;
		}
	}

	public function insert($upload)
	{
		$kd_user = $this->input->post('kd_user');
		$no_induk = $this->input->post('no_induk');
		$nama_user = $this->input->post('nama_user');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//Enkripsi Password
		$this->load->helper('enc_dec');
		$key = $this->config->item('encryption_key');
		$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$en = $cipher->encrypt($password, $key);
		//Penutup
		$jenkel = $this->input->post('jenkel');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$ext = substr($_FILES['foto']['name'],-4);
		$foto = $kd_user.$ext;
		$pekerjaan = $this->input->post('pekerjaan');
		$status = $this->input->post('status');
		$object = array (
			'kd_user' => $kd_user,
			'no_induk' => $no_induk,
			'nama_user' => $nama_user,
			'email' => $email,
			'password' => $en,
			'jenkel' => $jenkel,
			'agama' => $agama,
			'alamat' => $alamat,
			'tgl_daftar' => $tgl_daftar,
			'foto' => $foto,
			'pekerjaan' => $pekerjaan,
			'status' => $status
		);

		return $this->db->insert('user',$object);
	}

	public function tampil()
	{
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.kd_upload','desc');
		//ORDER BY article_rating DESC, article_time DESC
	 	$query = $this->db->get();

	  return $query;
	}

	public function tampil2()
	{
		$kd_user = $this->session->userdata('kd_user');
		$query = $this->db->query("select * from upload a join kelas b using (kd_kelas) join user c on c.kd_user=a.kd_user
						where a.kd_kelas in (select kd_kelas from anggota where kd_user='$kd_user') order by a.kd_upload desc");
	  return $query;
	}

	public function tampil_profil($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function tampil_komen()
	{
		$this->db->select('*');
	 	$this->db->from('komentar a');
	 	$this->db->join('upload b', 'b.kd_upload=a.kd_upload');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.kd_komen','asc');
	 	$query = $this->db->get();

	  return $query;
	}

	public function cat_saya()
	{
		$kd_user = $this->session->userdata('kd_user');
		$query = $this->db->query("select * from upload a join kelas b using (kd_kelas) join user c on c.kd_user=a.kd_user
						where a.kd_kelas in (select kd_kelas from anggota where kd_user='$kd_user')
						and a.kd_user='$kd_user' 
						order by a.kd_upload desc");
	  return $query;
	}

	public function tampil_kls()
	{
		return $this->db->get('kelas');
	}

	public function tampil_kls2()
	{
		$kd_user = $this->session->userdata('kd_user');
		$query = $this->db->query("select a.nama_kelas,a.jurusan,b.kd_kelas,b.kd_user from kelas a join anggota b using (kd_kelas) where b.kd_user ='$kd_user'");
		return $query;
	}

	public function kelas($kd_kelas)
	{
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.kd_upload','desc');
		$this->db->where('a.kd_kelas',$kd_kelas);
	 	$query = $this->db->get();

	  return $query;
	}

	public function judul_kelas($kd_kelas)
	{
		$this->db->select('*');
	 	$this->db->from('kelas a');
	 	$this->db->join('user b', 'b.kd_user=a.kd_user');	 			
		$this->db->where('a.kd_kelas',$kd_kelas);
	 	$query = $this->db->get();

	  return $query;
	}

	public function anggota($kd_kelas)
	{
		$this->db->select('*');
	 	$this->db->from('anggota a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.tgl_masuk','desc');
		$this->db->where('a.kd_kelas',$kd_kelas);
	 	$query = $this->db->get();

	  return $query;
	}

	public function maxkode()
	{
		$sql=$this->db->query('select max(kd_upload) as maxKode from upload');
		return $sql;
	}

	public function maxuser()
	{
		$sql=$this->db->query('select max(kd_user) as maxUser from user');
		return $sql;
	}

	public function maxkomen()
	{
		$sql=$this->db->query('select max(kd_komen) as maxKomen from komentar');
		return $sql;
	}

	public function cat_upload()
	{
		$kd_upload = $this->input->post('kd_upload');
		$keterangan = $this->input->post('keterangan');
		$namafile = $kd_upload;
		$config['upload_path'] = 'assets/files/';
    $config['allowed_types'] = array('docx','xlsx','pptx','pdf','doc','xls','ppt');
		$config['file_name'] = $namafile;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('namafile')) {
			$return = array(
					'result' => 'success',
					'file' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "'.$keterangan.' anda berhasil di posting!",
            type: "success",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>'),
					'error' => '');
			return $return;
		}else{
			$return = array(
					'result' => 'failed',
					'file' => '',
					'error' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "'.$keterangan.' anda gagal di posting!",
            type: "error",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>'
					));
			return $return;
		}
	}

	public function cat_insert($upload)
	{
		$kd_upload = $this->input->post('kd_upload');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$tgl_post = $this->input->post('tgl_post');
		$kd_kelas = $this->input->post('kd_kelas');
		$kd_user = $this->input->post('kd_user');
		$keterangan = $this->input->post('keterangan');
		$ext = $this->upload->data('file_ext');
		$namafile= $kd_upload.$ext;
		$object = array (
			'kd_upload' => $kd_upload,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'namafile' => $namafile,
			'tgl_post' => $tgl_post,
			'kd_kelas' => $kd_kelas,
			'kd_user' => $kd_user,
			'keterangan' => $keterangan
		);

		return $this->db->insert('upload',$object);
	}

	public function komen_insert()
	{
		$kd_komen = $this->input->post('kd_komen');
		$isi_komen = $this->input->post('isi_komen');
		$tgl_komen = $this->input->post('tgl_komen');
		$kd_upload = $this->input->post('kd_upload');
		$kd_user = $this->input->post('kd_user');
		$object = array (
			'kd_komen' => $kd_komen,
			'isi_komen' => $isi_komen,
			'tgl_komen' => $tgl_komen,
			'kd_upload' => $kd_upload,
			'kd_user' => $kd_user
		);

		return $this->db->insert('komentar',$object);
	}

	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function cari_cat($cari)
	{
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.kd_upload','desc');
		$this->db->like('a.deskripsi',$cari);
		$cari = $this->db->get();
		return $cari->result();
 	}

	public function dateindo()
	{
		$tgl = $this->session->userdata("tgl_daftar");
		$tanggal = date('d F Y', strtotime($tgl));
		return $tanggal;
	}

	public function cek_kelas()
	{
		$kd_user = $this->session->userdata('kd_user');
		$kd_kelas = $this->input->post('kd_kelas');
		$cek = $this->db->get_where('kelas',array('kd_kelas' => $kd_kelas));
		$cek2 = $this->db->get_where('anggota',array('kd_kelas' => $kd_kelas, 'kd_user' => $kd_user));
		if(!$cek2->num_rows() > 0){
			if($cek->num_rows() > 0){
				$return = array(
						'result' => 'success',
						'file' => $this->session->set_flashdata('info',
						'<script type="text/javascript">
						setTimeout(function () {
					  swal({
	            title: "Selamat",
	            text:  "Anda berhasil bergabung dengan kelas!",
	            type: "success",
	            timer: 3000,
	            showConfirmButton: true
	        		});
							},10);
							</script>'),
						'error' => '');
				return $return;
			}else{
				$return = array(
						'result' => 'failed',
						'file' => '',
						'error' => $this->session->set_flashdata('info',
						'<script type="text/javascript">
						setTimeout(function () {
					  swal({
	            title: "Maaf",
	            text:  "Anda gagal bergabung dengan kelas, karena kode kelas tidak valid!",
	            type: "error",
	            timer: 3000,
	            showConfirmButton: true
	        		});
							},10);
							</script>'
						));
			return $return;
		}
		}else{
			$return = array(
					'result' => 'failed',
					'file' => '',
					'error' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
					swal({
						title: "Info",
						text:  "Anda sudah berada di dalam kelas!",
						type: "info",
						timer: 3000,
						showConfirmButton: true
						});
						},10);
						</script>'
					));
		return $return;
			}
	}

	public function insert_anggota($cek_kelas)
	{
		$kd_kelas = $this->input->post('kd_kelas');
		$kd_user = $this->session->userdata("kd_user");
		$tgl_masuk = date("Y-m-d H:i:s");
		$object = array (
			'kd_kelas' => $kd_kelas,
			'kd_user' => $kd_user,
			'tgl_masuk' => $tgl_masuk
		);

		return $this->db->insert('anggota',$object);
	}

	public function hapus_anggota($kd_kelas)
	{
		$kd_user = $this->session->userdata("kd_user");
		$query = $this->db->query("delete from anggota where kd_kelas='$kd_kelas' and kd_user='$kd_user' limit 1");
		if($query){
			$return = array(
					'result' => 'success',
					'file' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
					swal({
						title: "Selamat",
						text:  "Anda berhasil keluar kelas!",
						type: "success",
						timer: 3000,
						showConfirmButton: true
						});
						},10);
						</script>'),
					'error' => '');
			return $return;
		}else{
			$return = array(
					'result' => 'failed',
					'file' => '',
					'error' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
					swal({
						title: "Maaf",
						text:  "Anda gagal keluar kelas",
						type: "error",
						timer: 3000,
						showConfirmButton: true
						});
						},10);
						</script>'
					));
		return $return;
		}
	}

	function getDataDB2($tabel,$config = array())
    {
        $data = array(
                'field' => '*',
                'join' => array(),
                'like' => array(),
                'where' => array(),
                'order' => array(),
                'limit' => array()
            );
        foreach ($config as $key => $val){
            $data[$key] = $val;
        }
 
        $this->db->select($data['field']);
        $this->db->from($tabel);
 
        if(count($data['join']) > 0) {
            foreach ($data['join'] as $key => $val){
                $this->db->join($key,$val,'left');
            }
        }
 
        if(count($data['where']) > 0) $this->db->where($data['where']);
 
        if(count($data['like']) > 0){
            foreach ($data['like'] as $key => $val){
                if(is_array($val)) $this->db->like($key,$val[0],$val[1]);
                else $this->db->like($key,$val);
            }
        }
 
        if(count($data['order']) > 0) {
            foreach ($data['order'] as $key => $val){
                $this->db->order_by($key,$val);
            }
        }
 
        if(count($data['limit']) == 1) $this->db->limit($data['limit'][0]);
 
        if(count($data['limit']) == 2) $this->db->limit($data['limit'][0],$data['limit'][1]);
 
        return $this->db->get();
    }



}
