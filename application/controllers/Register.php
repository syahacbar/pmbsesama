<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
		$this->load->model('M_jalurmasuk');
		$this->load->model('M_gelombang');
		$this->load->model('M_kelompokujian');
		$this->load->model('M_agama');
		$this->load->model('M_statusmenikah');
		$this->load->model('M_prodi');
		$this->load->model('M_wilayah');
		$this->load->model('Ion_auth_model');
		$this->load->model('M_jurusansmta');
		$this->load->model('M_jenissmta');
	}

	function generateRandomString($length)
	{
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	function add_ajax_kab($id)
	{
		$query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '$id' ORDER BY kode ASC");
		$data = "<option value=''> - Pilih Kabupaten/Kota - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
		}
		echo $data;
	}

	function add_ajax_kec($id)
	{
		$query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 8 AND LEFT(kode,5) = '$id' ORDER BY kode ASC");
		$data = "<option value=''> - Pilih Kecamatan/Distrik - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
		};
		$data .= "<option value='Lainnya'>Lainnya</option>";
		echo $data;
	}

	function add_ajax_des($id)
	{
		$query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 13 AND LEFT(kode,8) = '$id' ORDER BY kode ASC");
		$data = "<option value=''> - Pilih Kelurahan/Desa - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
		};
		$data .= "<option value='Lainnya'>Lainnya</option>";
		echo $data;
	}

	public function index()
	{
		$data = array(
			'jalurmasuk' => $this->M_jalurmasuk->get_all(),
			'gelombang' => $this->M_gelombang->get_all(),
			'kelompokujian' => $this->M_kelompokujian->get_all(),
		);
		$this->load->view('pendaftar/register', $data);
	}


	public function isibiodata()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		$user = $this->ion_auth->user()->row();
		$biodata = $this->M_register->get_biodata_by_username($user->username);
		$data = array(
			'username' => $user->username,
			'nohp' => $user->phone,
			'email' => $user->email,
			'biodata' => $biodata->result_array(),
			'agama' => $this->M_agama->get_all(),
			'statusmenikah' => $this->M_statusmenikah->get_all(),
			'prodi' => $this->M_prodi->get_all(),
			'provinsi' => $this->M_wilayah->get_all_provinsi(),
			'jurusansmta' => $this->M_jurusansmta->get_all(),
			'jenissmta' => $this->M_jenissmta->get_all(),


		);

		$this->load->view('pendaftar/form_biodata', $data);
	}

	public function next1()
	{

		$user = $this->ion_auth->user()->row();
		$params = array(
			'nik' => $this->input->post('nik'),
			'jeniskelamin' => $this->input->post('jenkel'),
			'suku' => $this->input->post('suku'),
			'agama' => $this->input->post('agama'),
			'statusmenikah' => $this->input->post('statusmenikah'),
			'prodipilihan1' => $this->input->post('prodipilihan1'),
			'prodipilihan2' => $this->input->post('prodipilihan2'),
			'prodipilihan3' => $this->input->post('prodipilihan3'),
			'prov_tempatlahir' => $this->input->post('prov_tempatlahir'),
			'kab_tempatlahir' => $this->input->post('kab_tempatlahir'),
			'lokasi_tempatlahir'  => $this->input->post('lokasi_tempatlahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'negara_tempattinggal' => $this->input->post('negara_tempattinggal'),
			'prov_tempattinggal' => $this->input->post('prov_tempattinggal'),
			'kab_tempattinggal' => $this->input->post('kab_tempattinggal'),
			'kec_tempattinggal' => $this->input->post('kec_tempattinggal'),
			'des_tempattinggal' => $this->input->post('des_tempattinggal'),
			'kodepos_tempattinggal' => $this->input->post('kodepos_tempattinggal'),
			'alamat_tempattinggal' => $this->input->post('alamat_tempattinggal'),
			'alamatlain_tempattinggal' => $this->input->post('alamatlain_tempattinggal'),
			'tinggibadan' => $this->input->post('tinggibadan'),
			'beratbadan' => $this->input->post('beratbadan'),
		);
		$this->M_register->update_biodata($user->username, $params);
		echo json_encode(array("statusCode" => 1));
	}

	public function next2()
	{

		$user = $this->ion_auth->user()->row();
		$params2 = array(
			'tahunlulus_smta' => $this->input->post('tahunlulussmta'),
			'jurusansmta' => $this->input->post('jurusansmta'),
			'jenissmta' => $this->input->post('jenissmta'),
			'nama_smta' => $this->input->post('namasmta'),
			'prov_smta' => $this->input->post('provinsismta'),
			'alamat_smta' => $this->input->post('alamatsmta'),
			'lulus_smta' => $this->input->post('lulussmta'),
			'nomor_ijazah' => $this->input->post('nomorijazah'),
			'uan_mtk' => $this->input->post('uanmtk'),
			'uan_bing' => $this->input->post('uanbing'),
			'uan_bind' => $this->input->post('uanbind'),
			'rapor_mtk' => $this->input->post('rapormtk'),
			'rapor_bing' => $this->input->post('raporbing'),
			'rapor_bind' => $this->input->post('raporbind'),

		);
		$this->M_register->update_biodata($user->username, $params2);
		echo json_encode(array("statusCode" => 1));
	}

	public function next3()
	{

		$user = $this->ion_auth->user()->row();
		$params3 = array(
			'nik_ayah' => $this->input->post('nik_ayah'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'alamatkantor_ayah' => $this->input->post('alamatkantor_ayah'),
			'nik_ibu' => $this->input->post('nik_ibu'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'penghasilan_ortu' => $this->input->post('penghasilan_ortu'),
			'alamat_ortu' => $this->input->post('alamat_ortu'),
			'provinsi_tempattinggalortu' => $this->input->post('provinsi_ortu'),
			'kab_tempattinggalortu' => $this->input->post('kabupaten_ortu'),
			'kec_tempattinggalortu' => $this->input->post('kecamatan_ortu'),
			'kodepost_tempattinggalortu' => $this->input->post('kodepos_ortu'),
			'nohp_ortu' => $this->input->post('nohp_ortu'),

		);
		$this->M_register->update_biodata($user->username, $params3);
		echo json_encode(array("statusCode" => 1));
	}

	public function next4()
	{

		$user = $this->ion_auth->user()->row();
		$params4 = array(
			'nama_wali' => $this->input->post('nama_wali'),
			'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
			'penghasilan_wali' => $this->input->post('penghasilan_wali'),
			'alamat_wali' => $this->input->post('alamat_wali'),
		);
		$this->M_register->update_biodata($user->username, $params4);
		echo json_encode(array("statusCode" => 1));
	}
}
