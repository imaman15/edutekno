<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

	var $table = 'upload';
	var $column_order = array(null, 'a.deskripsi','a.namafile','a.tgl_post','b.nama_kelas','c.nama_user','a.keterangan'); //set column field database for datatable orderable
	var $column_search = array('a.deskripsi','a.namafile','a.tgl_post','b.nama_kelas','c.nama_user','a.keterangan'); //set column field database for datatable searchable
	var $order = array('kd_upload' => 'asc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function insert($upload)
	{
		$this->load->helper('enc_dec');
		$kd_dosen = $this->input->post('kd_dosen');
		$nid = $this->input->post('nid');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//Enkripsi Password
		$key = $this->config->item('encryption_key');
		$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$en = $cipher->encrypt($password, $key);
		//Penutup
		$jenkel = $this->input->post('jenkel');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$ext = substr($_FILES['foto']['name'],-4);
		$foto = $kd_dosen.$ext;
		$pekerjaan = $this->input->post('pekerjaan');
		$object = array (
				'kd_user' => $kd_dosen,
				'no_induk' => $nid,
				'nama_user' => $nama,
				'email' => $email,
				'password' => $en,
				'jenkel' => $jenkel,
				'agama' => $agama,
				'alamat' => $alamat,
				'tgl_daftar' => $tgl_daftar,
				'foto' => $foto,
				'pekerjaan' => $pekerjaan,
				'status' => 'Pengajar'
		);

		return $this->db->insert('user',$object);
	}

	public function upload()
	{
		$kd_user = $this->input->post('kd_dosen');
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

	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function insert_kelas()
	{
		$kd_kelas = $this->input->post('kd_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$jurusan = $this->input->post('jurusan');
		$kd_user = $this->input->post('kd_user');
		$warna = $this->input->post('warna');
		$object = array (
			'kd_kelas' => $kd_kelas,
			'nama_kelas' => $nama_kelas,
			'jurusan' => $jurusan,
			'warna' => $warna,
			'kd_user' => $kd_user
		);

		$this->db->insert('kelas',$object);
	}

	public function autofield (){
		$kd_upload=$this->input->post('kd_upload');
		$nm_kelas= $this->input->post('nama_kelas');
		$kd_user=$this->session->userdata("kd_user");       
		$judul = '';
		$deskripsi = 'Selamat datang '.$this->session->userdata("nama_user").' di kelas '.$nm_kelas.'. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.';
		$tgl_post = date("Y-m-d H:i:s");
		$kd_kelas = $this->input->post('kd_kelas');		
		$keterangan = 'Catatan';		
		$namafile='Panduan_ET.pptx';
		$object = array (
			'kd_upload' => $kd_upload,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'namafile' => $namafile,
			'tgl_post' => $tgl_post,
			'kd_kelas' => $kd_kelas,
			'kd_user' => 'USR001',
			'keterangan' => $keterangan
		);

		$query = $this->db->insert('upload',$object);
		if ($query) {
			$return = array(
					'result' => 'success',
					'file' => $this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "Anda berhasil membuat kelas!",
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
					'error' => $this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "Anda gagal membuat kelas!",
            type: "error",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>'));
			return $return;
		}
	}

	public function insert_anggota($cek_kelas)
	{
		$kd_kelas = $this->input->post('kd_kelas');
		$kd_user = $this->input->post('kd_user');
		$tgl_masuk = date("Y-m-d H:i:s");
		$object = array (
			'kd_kelas' => $kd_kelas,
			'kd_user' => $kd_user,
			'tgl_masuk' => $tgl_masuk
		);

		return $this->db->insert('anggota',$object);
	}
	//-------------------------------------24/12/2017 | 23:55--
	
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
					'file' => $this->session->set_flashdata('info','<script type="text/javascript">
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
					'error' => $this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Maaf",
            text:  "'.$keterangan.' anda gagal di posting!",
            type: "error",
            timer: 3000,
            showConfirmButton: true
        		});
						},10);
						</script>'));
			return $return;
		}
	}
	
	public function tampil()
	{	
		$kd_user = $this->session->userdata("kd_user");
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
	 	$this->db->where('a.kd_user',$kd_user);
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

	public function tampil_kls2()
	{
		$kd_user = $this->session->userdata('kd_user');
		$query = $this->db->query("select nama_kelas,jurusan,kd_kelas,kd_user from kelas where kd_user ='$kd_user'");
		return $query;
	}

	public function last_anggota($kd_kelas)
	{		
		$query = $this->db->query("select * from upload a join kelas b using (kd_kelas) join user c on c.kd_user=a.kd_user where a.kd_kelas='$kd_kelas' order by a.tgl_masuk DESC Limit 0,4");
		return $query;
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

	public function semua_cat()
	{
		$kd_user = $this->session->userdata("kd_user");
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');
		$this->db->order_by('a.kd_upload','desc');
 		$this->db->where('c.kd_user',$kd_user);
	 	$query = $this->db->get();

	  return $query;
	}

	public function tampil_kls()
	{
		return $this->db->get('kelas');
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

	public function cari_cat($cari)
	{
		$kd_user = $this->session->userdata("kd_user");
		$this->db->select('*');
	 	$this->db->from('upload a');
	 	$this->db->join('kelas b', 'b.kd_kelas=a.kd_kelas');
	 	$this->db->join('user c', 'c.kd_user=a.kd_user');	 	
		$this->db->order_by('a.kd_upload','desc');
		$this->db->like('a.deskripsi',$cari);

		$cari = $this->db->get();
		return $cari->result();
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

	public function kick_anggota($kdKelas, $kdUser){
		$array   = array('kd_kelas' => $kdKelas, 'kd_user' => $kdUser);
		$this->db->where($array);
		$query = $this->db->delete('anggota');

		if($query){
				$return = array(
						'result' => 'success',
						'file' => $this->session->set_flashdata('info',
						'<script type="text/javascript">
						setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Anda berhasil menghapus anggota!",
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
							text:  "Anda gagal menghapus anggota",
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

	public function hapus_anggota($kd_kelas)
	{
		$kd_user = $this->session->userdata("kd_user");
		$query = $this->db->query("delete from kelas where kd_kelas='$kd_kelas'");
		if($query){
			$return = array(
					'result' => 'success',
					'file' => $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
					swal({
						title: "Selamat",
						text:  "Anda berhasil menghapus kelas!",
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
						text:  "Anda gagal menghapus kelas",
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

	public function tampil_profil($table,$where)
	{
		return $this->db->get_where($table,$where);
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

	public function dateindo()
	{
		$tgl = $this->session->userdata("tgl_daftar");
		$tanggal = date('d F Y', strtotime($tgl));
		return $tanggal;
	}

	

//---------DB DINAMIS-----------------------------------------
function getDataDB($tabel,$field = '*', $cond = array(),$join = array(),$limit = array())
    {
        $this->db->select($field);
        $this->db->from($tabel);
        if(count($join) > 0) {
            foreach ($join as $key => $val){
                $this->db->join($key,$val,'left');
            }
        }
        if(count($cond) > 0) $this->db->where($cond);
        if(count($limit) == 1) $this->db->limit($limit[0]);
        if(count($limit) == 2) $this->db->limit($limit[0],$limit[1]);
        return $this->db->get();
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

