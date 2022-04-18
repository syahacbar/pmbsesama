<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->in_group('members')) {
			redirect('auth/login', 'refresh');
		}
		$this->load->model('M_wilayah');
		$this->load->model('M_pendaftar');
		$this->load->model('M_register');
		$this->load->model('M_agenda');
		$this->load->model('M_pendidikanortu');
		$this->load->model('M_jurusansmta');
		$this->load->model('M_jenissmta');
		$this->load->model('M_pekerjaanortu');
		$this->load->model('M_penghasilanortu');
		$this->load->model('M_agama');
		$this->load->model('M_statusmenikah');
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		$this->load->model('M_namasmta');

	}


	public function index()
	{
		$data['count_oap'] = $this->M_pendaftar->count_by_suku('Papua')->num_rows();
		$data['count_noap'] = $this->M_pendaftar->count_by_suku('Non Papua')->num_rows();
		$data['menunggu'] = $this->M_pendaftar->count_by_status('Menunggu')->num_rows();
		$data['diterima'] = $this->M_pendaftar->count_by_status('Diterima')->num_rows();
		$data['ditolak'] = $this->M_pendaftar->count_by_status('Ditolak')->num_rows();
		$data['t_biodata'] = $this->M_pendaftar->get_all();

		$data['_view'] = 'admin/dashboard';
		$this->load->view('admin/layout', $data);
	}

	public function ref_agama()
	{
		$this->load->model('M_agama');
		$data['linkform'] = "administrator/tambah_agama";
		$data['agama'] = $this->M_agama->get_all();
		$data['_view'] = 'admin/ref_agama';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_agama() {
		$data = array(
			'agama'  => $this->input->post('agama'),
		);

		$this->M_agama->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_agama');	
	}
	public function edit_agama() {
		$id = $this->input->post('idagama');
		$data = array(
			'agama'  => $this->input->post('agama')
		);
		$this->M_agama->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_agama');
	}
	public function hapus_agama() {
		$id = $this->input->post('idagama');
		$this->M_agama->delete($id);
		// redirect('administrator/ref_agama');
	}


	public function ref_statusmenikah()
	{
		$this->load->model('M_statusmenikah');
		$data['linkform'] = "administrator/tambah_statusmenikah";
		$data['statusmenikah'] = $this->M_statusmenikah->get_all();
		$data['_view'] = 'admin/ref_statusmenikah';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_statusmenikah() {
		$data = array(
			'status'  => $this->input->post('statusmenikah'),
		);

		$this->M_statusmenikah->add($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_statusmenikah');	
	}

	public function edit_statusmenikah() {
		$id = $this->input->post('idstatusmenikah');
		$data = array(
			'status'  => $this->input->post('statusmenikah')
		);
		$this->M_statusmenikah->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_statusmenikah');
	}

	public function hapus_statusmenikah() {
		$id = $this->input->post('idstatusmenikah');
		$this->M_statusmenikah->delete($id);
		redirect('administrator/ref_statusmenikah');
	}


	public function ref_jenissmta()
	{
		$this->load->model('M_jenissmta');
		$data['linkform'] = "administrator/tambah_jenissmta";
		$data['jenissmta'] = $this->M_jenissmta->get_all();
		$data['_view'] = 'admin/ref_jenissmta';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_jenissmta() {
		$data = array(
			'namajenissmta'  => $this->input->post('jenissmta'),
		);

		$this->M_jenissmta->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jenissmta');	
	}

	public function edit_jenissmta() {
		$id = $this->input->post('idjenissmta');
		$data = array(
			'namajenissmta'  => $this->input->post('jenissmta')
		);
		$this->M_jenissmta->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jenissmta');
	}

	public function hapus_jenissmta() {
		$id = $this->input->post('idjenissmta');
		$this->M_jenissmta->delete($id);
		// redirect('administrator/ref_jenissmta');
	}

	public function ref_jurusansmta()
	{
		$this->load->model('M_jurusansmta');

		$data['linkform'] = "administrator/tambah_jurusansmta";
		$data['jurusansmta'] = $this->M_jurusansmta->get_all();
		$data['_view'] = 'admin/ref_jurusansmta';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_jurusansmta() {
		$data = array(
			'namajurusan'  => $this->input->post('jurusansmta'),
		); 

		$this->M_jurusansmta->add($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jurusansmta');
	}

	public function edit_jurusansmta() {
		$id = $this->input->post('idjurusansmta');
		$data = array(
			'namajurusan'  => $this->input->post('jurusansmta')
		);
		$this->M_jurusansmta->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jurusansmta');
	}

	public function hapus_jurusansmta() {
		$id = $this->input->post('idjurusansmta');
		$this->M_jurusansmta->delete($id);
		// redirect('administrator/ref_jurusansmta');
	}
	

	public function ref_pekerjaanortu()
	{
		$this->load->model('M_pekerjaanortu');
		$data['linkform'] = "administrator/tambah_pekerjaanortu";
		$data['pekerjaanortu'] = $this->M_pekerjaanortu->get_all();
		$data['_view'] = 'admin/ref_pekerjaanortu';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_pekerjaanortu() {
		$data = array(
			'namapekerjaan'  => $this->input->post('pekerjaanortu'),
		);

		$this->M_pekerjaanortu->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_pekerjaanortu');
	}

	public function edit_pekerjaanortu() {
		$id = $this->input->post('idpekerjaan');
		$data = array(
			'namapekerjaan'  => $this->input->post('pekerjaanortu')
		);
		$this->M_pekerjaanortu->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_pekerjaanortu');
	}

	public function hapus_pekerjaanortu() {
		$id = $this->input->post('idpekerjaan');
		$this->M_pekerjaanortu->delete($id);
		// redirect('administrator/ref_pekerjaanortu');
	}

	public function ref_pendidikanortu()
	{
		$this->load->model('M_pendidikanortu');
			$data['linkform'] = "administrator/tambah_pendidikanortu";
			$data['pendidikanortu'] = $this->M_pendidikanortu->get_all();

		$data['_view'] = 'admin/ref_pendidikanortu';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_pendidikanortu() {
		$data = array(
			'namajenjang'  => $this->input->post('pendidikanortu'),
		);

		$this->M_pendidikanortu->add($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_pendidikanortu');
	}

	public function edit_pendidikanortu() {
		$id = $this->input->post('idpendidikan');
		$data = array(
			'namajenjang'  => $this->input->post('pendidikanortu')
		);
		$this->M_pendidikanortu->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_pendidikanortu');
	}
	public function hapus_pendidikanortu() {
		$id = $this->input->post('idpendidikan');
		$this->M_pendidikanortu->delete($id);
		redirect('administrator/ref_pendidikanortu');
	}

	public function ref_penghasilanortu()
	{
		$this->load->model('M_penghasilanortu');
		$data['linkform'] = "administrator/tambah_penghasilanortu";
		$data['penghasilanortu'] = $this->M_penghasilanortu->get_all();
		$data['_view'] = 'admin/ref_penghasilanortu';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_penghasilanortu() {
		$data = array(
			'penghasilan'  => $this->input->post('penghasilanortu'),
		);

		$this->M_penghasilanortu->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_penghasilanortu');
	}

	public function edit_penghasilanortu() {
		$id = $this->input->post('idpenghasilan');
		$data = array(
			'penghasilan'  => $this->input->post('penghasilanortu')
		);
		$this->M_penghasilanortu->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_penghasilanortu');
	}

	public function hapus_penghasilanortu() {
		$id = $this->input->post('idpenghasilan');
		$this->M_penghasilanortu->delete($id);
		// redirect('administrator/ref_penghasilanortu');
	}

	public function ref_fakultas()
	{
		$data['linkform'] = "administrator/tambah_fakultas";
		$data['fakultas'] = $this->M_fakultas->get_all();
		$data['_view'] = 'admin/ref_fakultas';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_fakultas()
	{
		$data = array(
			'namafakultas'  => $this->input->post('fakultas'),
		);

		$this->M_fakultas->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_fakultas');
	}
	public function edit_fakultas()
	{
		$id = $this->input->post('idfakultas');
		$data = array(
			'namafakultas'  => $this->input->post('fakultas')
		);
		$this->M_fakultas->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_fakultas');
	}
	public function hapus_fakultas()
	{
		$id = $this->input->post('idfakultas');
		$this->M_fakultas->delete($id);
		redirect('administrator/ref_fakultas');
	}

	public function ref_prodi()
	{
		$data['linkform'] = "administrator/tambah_prodi";
		$data['prodi'] = $this->M_prodi->get_all();
		$data['fakultas'] = $this->M_fakultas->get_all();

		$data['_view'] = 'admin/ref_prodi';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_prodi()
	{
		$data = array(
			'namaprodi'  => $this->input->post('prodi'),
			'idfakultas'  => $this->input->post('optFakultas'),
		);

		$this->M_prodi->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_prodi');
	}

	public function edit_prodi()
	{
		$id = $this->input->post('idprodi');
		$data = array(
			'namaprodi'  => $this->input->post('prodi'),
			'idfakultas'  => $this->input->post('optFakultas'),
		);
		$this->M_prodi->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_prodi');
	}

	public function hapus_prodi()
	{
		$id = $this->input->post('idprodi');
		$this->M_prodi->delete($id);
		redirect('administrator/ref_prodi');	
	}

	public function ref_prov()
	{
		$data['_view'] = 'admin/ref_prov';
		$this->load->view('admin/layout', $data);
	}

	public function ref_kab()
	{
		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
		$data['_view'] = 'admin/ref_kab';
		$this->load->view('admin/layout', $data);
	}

	public function ref_kec()
	{
		$data['kabupaten'] = $this->M_wilayah->get_all_kabupaten();
		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
		$data['_view'] = 'admin/ref_kec';
		$this->load->view('admin/layout', $data);
	}

	public function ref_des()
	{
		$data['kecamatan'] = $this->M_wilayah->get_all_kecamatan();
		$data['kabupaten'] = $this->M_wilayah->get_all_kabupaten();
		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
		$data['_view'] = 'admin/ref_des';
		$this->load->view('admin/layout', $data);
	}

	// DATA DI BAGIAN PENDAFTAR LIST
	public function datapendaftar()
	{
		$this->load->model(['M_prodi', 'M_register', 'M_pendaftar', 'M_informasi']);
		$data = array(
			'agama' => $this->M_agama->get_all(),
			'listprodi' => $this->M_prodi->get_all(),
			'agama' => $this->M_agama->get_all(),
			'statusmenikah' => $this->M_statusmenikah->get_all(),
			'prodi' => $this->M_prodi->get_all(),
			'provinsi' => $this->M_wilayah->get_all_provinsi(),
			'jurusansmta' => $this->M_jurusansmta->get_all(),
			'jenissmta' => $this->M_jenissmta->get_all(),
			'pendidikanortu' => $this->M_pendidikanortu->get_all(),
			'pekerjaanortu' => $this->M_pekerjaanortu->get_all(),
			'penghasilanortu' => $this->M_penghasilanortu->get_all(),
			'kabupaten' => $this->M_wilayah->get_all_kabupaten(),
			'namasmta' => $this->M_namasmta->get_all(),
		);

		$data['_view'] = 'admin/data_pendaftar';
		$this->load->view('admin/layout', $data);

	}
	public function edit_pendaftar()
	{
		if (!empty($this->input->post('prodipilihan2')) && $this->input->post('prodipilihan2') != "0") {
			$prodi2 = $this->input->post('prodipilihan2');
		} else {
			$prodi2 = NULL;
		}

		if (!empty($this->input->post('prodipilihan3')) && $this->input->post('prodipilihan3') != "0") {
			$prodi3 = $this->input->post('prodipilihan3');
		} else {
			$prodi3 = NULL;
		}

		$params = array(
			'nisn_pendaftar' => $this->input->post('nisn_pendaftar'),
			'nik' => $this->input->post('nik'),
			'jeniskelamin' => $this->input->post('jenkel'),
			'suku' => $this->input->post('suku'),
			'agama' => $this->input->post('agama'),
			'statusmenikah' => $this->input->post('statusmenikah'),
			'prodipilihan1' => $this->input->post('prodipilihan1'),
			'prodipilihan2' => $prodi2,
			'prodipilihan3' => $prodi3,
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

			'tahunlulus_smta' => $this->input->post('tahunlulussmta'),
			'jurusansmta' => $this->input->post('jurusansmta'),
			'jenissmta' => $this->input->post('jenissmta'),
			'nrapor1' => $this->input->post('nrapor1'),
			'nrapor2' => $this->input->post('nrapor2'),
			'nrapor3' => $this->input->post('nrapor3'),

			'nik_ayah' => $this->input->post('nik_ayah'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'pendidikan_ayah' => $this->input->post('pendidikanayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
			'alamatkantor_ayah' => $this->input->post('alamatkantor_ayah'),
			'nik_ibu' => $this->input->post('nik_ibu'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pendidikan_ibu' => $this->input->post('pendidikanibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
			'penghasilan_ortu' => $this->input->post('penghasilanortu'),
			'alamat_ortu' => $this->input->post('alamat_ortu'),
			'provinsi_tempattinggalortu' => $this->input->post('provinsi_ortu'),
			'kab_tempattinggalortu' => $this->input->post('kabupaten_ortu'),
			'kec_tempattinggalortu' => $this->input->post('kecamatan_ortu'),
			'kodepost_tempattinggalortu' => $this->input->post('kodepos_ortu'),
			'nohp_ortu' => $this->input->post('nohp_ortu'),

			'nama_wali' => $this->input->post('nama_wali'),
			'pekerjaan_wali' => $this->input->post('pekerjaanwali'),
			'penghasilan_wali' => $this->input->post('penghasilanwali'),
			'alamat_wali' => $this->input->post('alamat_wali'),

		);
		$username = $this->input->post('username');
		$this->M_register->update_biodata($username, $params);
		echo json_encode(array("statusCode" => 1));
	}
	public function hapus_pendaftar()
	{
		$username = $this->input->get('username');
		$response = $this->M_pendaftar->hapus_data($username);
		if ($response == true) {
			echo "Data deleted successfully !";
		} else {
			echo "Error !";
		}
	}

	public function kartupeserta($username)
	{
		$this->load->model(['M_prodi', 'M_register', 'M_pendaftar', 'M_informasi']);

		$data['peserta'] = $this->M_register->get_biodata_by_username($username)->row();
		$this->load->view('pendaftar/kartu_peserta', $data);
	}

	public function kartupendaftaran($username)
	{
		$this->load->library('Pdf');
		//$msg = $this->session->flashdata('msg');
		$r = $this->M_register->get_kartupendaftaran($username)->row();

		
		$data = array(
			'username' => $r->username,
			'password' => $r->pass,
			'namalengkap' => $r->namalengkap,
			'email' => $r->email,
			'nohp' => $r->phone,
		);
		$this->load->view('pendaftar/konfirmasi_pendaftaran_pdf', $data); 
	}

	public function slider()
	{
		$config['upload_path']   = FCPATH . '/assets/upload/slider/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('slider')) {
			$nama = $this->upload->data('file_name');
			$this->db->insert('slider', array('gambar' => $nama));
		}

		$this->load->model('M_slider');

		if ($this->uri->segment(3) == "") {
			$data['linkform'] = "administrator/slider/add";
			$data['slider'] = $this->M_slider->get_all();
		} else if ($this->uri->segment(3) == "add") {
			$data = array(
				'gambar'  => $this->input->post('gambar'),
			);

			$this->M_slider->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/slider');
		} else if ($this->uri->segment(3) == "edit") {
			$id = $this->input->post('id');
			$data = array(
				'gambar'  => $this->input->post('gambar')
			);
			$this->M_slider->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/slider');
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('id');
			$this->M_slider->delete($id);
			redirect('administrator/slider');
		}
		$data['slider'] = $this->M_slider->get_all();
		$data['_view'] = 'admin/slider';
		$this->load->view('admin/layout', $data);
	}

	public function agenda()
	{

		$this->load->model('M_agenda');

		if ($this->uri->segment(3) == "") {
			$data['agenda'] = $this->M_agenda->get_all();
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('id');
			$this->M_agenda->delete($id);
			redirect('administrator/agenda');
		} else if ($this->uri->segment(3) == "edit") {
			$id = $this->input->post('id');
			$data = array(
				'agenda'  => $this->input->post('agenda')
			);
			$this->M_agenda->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/agenda');
		}

		$data['agenda'] = $this->M_agenda->get_all();
		$data['_view'] = 'admin/agenda';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_agenda()
	{
		$id = $this->input->post('id');
		$this->M_agenda->delete($id);
		echo json_encode(array("statusCode" => 1));
	}

	public function informasi()
	{
		$config['upload_path']   = FCPATH . '/assets/upload/informasi/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fileinformasi')) {
			$file = $this->upload->data('file_name');
			$judulinformasi = $this->input->post('judulinformasi');
			$this->db->insert('informasi', array('judul' => $judulinformasi, 'file' => $file));
		}

		$this->load->model('M_informasi');

		if ($this->uri->segment(3) == "") {
			$data['linkform'] = "administrator/informasi/add";
			$data['informasi'] = $this->M_informasi->get_all();
		} else if ($this->uri->segment(3) == "add") {
			$data = array(
				'informasi'  => $this->input->post('informasi'),
			);

			$this->M_informasi->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/informasi');
		} else if ($this->uri->segment(3) == "edit") {
			$id = $this->input->post('id');
			$data = array(
				'informasi'  => $this->input->post('informasi')
			);
			$this->M_informasi->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/informasi');
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('id');
			$this->M_informasi->delete($id);
			redirect('administrator/informasi');
		}
		$data['informasi'] = $this->M_informasi->get_all();
		$data['_view'] = 'admin/informasi';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_informasi() {
		$data = array(
			'informasi'  => $this->input->post('informasi'),
		);

		$this->M_informasi->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/informasi');
	}

	public function edit_informasi() {
		$id = $this->input->post('id');
		$data = array(
			'informasi'  => $this->input->post('informasi')
		);
		$this->M_informasi->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/informasi');
	}

	public function hapus_informasi() {
		$id = $this->input->post('id');
		$this->M_informasi->delete($id);
		// redirect('administrator/informasi');
	}

	// Upload Informasi Panel Admin
	function upload_informasi()
	{
		$config['upload_path']   = FCPATH . '/assets/upload/informasi/';
		$config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fileinformasi')) {
			$fileinformasi = $this->upload->data('file_name');
			$judulinformasi = $this->input->post('judulinformasi');
			$this->db->insert('informasi', array('file' => $fileinformasi, 'judul' => $judulinformasi));
		}
	}

	public function pengaturan()
	{
		$data['_view'] = 'admin/pengaturan';
		$this->load->view('admin/layout', $data);
	}


	public function unggahagenda()
	{
		$config['upload_path']   = FCPATH . 'assets/upload/agenda/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gbr_agenda')) {
			$namafile = $this->upload->data('file_name');
			$judulagenda = $this->input->post('judulagenda');
			$isiagenda = $this->input->post('isiagenda');
			$uploaded_on = date("Y-m-d H:i:s");
			$this->db->insert('agenda', array(
				'gambar' => $namafile,
				'isi_agenda' => $isiagenda,
				'judul' => $judulagenda,
				'waktu' => $uploaded_on
			));
		} 
	}

	public function editagenda()
	{
		$config['upload_path']   = FCPATH . 'assets/upload/agenda/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('editgbr_agenda')) {
			$namafile = $this->upload->data('file_name');
			$judulagenda = $this->input->post('judulagenda');
			$isiagenda = $this->input->post('isiagenda');
			$uploaded_on = date("Y-m-d H:i:s");
			$this->db->update('agenda', array(
				'gambar' => $namafile,
				'isi_agenda' => $isiagenda,
				'judul' => $judulagenda,
				'waktu' => $uploaded_on
			));
		}
	}

	// Upload Informasi Panel Admin
	function uploadinformasi()
	{
		$config['upload_path']   = FCPATH . '/assets/upload/informasi/';
		$config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fileinformasi')) {
			$fileinformasi = $this->upload->data('file_name');
			$judulinformasi = $this->input->post('namask');
			$this->db->insert('informasi', array('file' => $fileinformasi, 'judul' => $judulinformasi));
		}
	}

	// public function saveagenda()
	// {
	// 	$params = array(
	// 		'judul' => $this->input->post('judulagenda'),
	// 		'isi_agenda' => $this->input->post('isiagenda'),
	// 		'waktu' => date("Y-m-d H:i:s"),
	// 		'id' => $this->input->post('id'),
	// 	);

	// 	$this->M_agenda->add_agenda($params);

	// 	$this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
	//        <svg class="bi flex-shrink-0 me-2" width="24"  height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
	//        <div>
	//         Agenda telah berhasil ditambah.
	//        </div>
	//      </div>');
	// 	echo json_encode(array('status' => TRUE));
	// }

	

	public function ref_namasmta()
	{
		$this->load->model('M_namasmta');

		$data['linkform'] = "administrator/tambah_smta";
		$data['namasmta'] = $this->M_namasmta->get_all();
		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
		$data['_view'] = 'admin/ref_namasmta';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_smta()
	{
		$this->load->model('M_namasmta');
		$data = array( 
			'nama_smta'  => $this->input->post('namasmta'),
			'alamat_smta'  => $this->input->post('alamatsmta'),
			'npsn_smta'  => $this->input->post('npsnsmta'),
			'provinsi_smta'  => $this->input->post('provinsismta'),
			'kabupaten_smta'  => $this->input->post('kabupatensmta'),
			'kecamatan_smta'  => $this->input->post('kecamatansmta'),
		);
		$this->M_namasmta->add($data);
		echo json_encode(array("statusCode" => 1));

	}

	public function simpan_editsmta()
	{
		$this->load->model('M_namasmta');
		$idsmta = $this->input->post('idsmta');
		$data = array(
			'nama_smta'  => $this->input->post('namasmta'),
			'alamat_smta'  => $this->input->post('alamatsmta'),
			'npsn_smta'  => $this->input->post('npsnsmta'),
			'provinsi_smta'  => $this->input->post('provinsismta'),
			'kabupaten_smta'  => $this->input->post('kabupatensmta'),
			'kecamatan_smta'  => $this->input->post('kecamatansmta'),
		);
		$this->M_namasmta->edit($data, $idsmta);
		echo json_encode(array("statusCode" => 1));


	}

	public function hapus_smta()
	{
		$this->load->model('M_namasmta');

		$id = $this->input->post('idsmta');
		$this->M_namasmta->delete($id);
		echo json_encode(array("statusCode" => 1));
		
	}

	public function export_pendaftar_excel()
	{
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		$excel = new PHPExcel();
	    // Settingan awal fil excel
	    $excel->getProperties()->setCreator('Admin PMB Sesama')
	                 ->setLastModifiedBy('Admin PMB Sesama')
	                 ->setTitle("Data Pendaftar SESAMA 2022-2023")
	                 ->setSubject("Pendaftar")
	                 ->setDescription("Data Pendaftar SESAMA 2022-2023")
	                 ->setKeywords("Data Pendaftar SESAMA 2022-2023");
	    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
	    $style_col = array(
	      'font' => array('bold' => true), // Set font nya jadi bold
	      'alignment' => array(
	        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
	        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	      ),
	      'borders' => array(
	        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
	        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
	        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
	        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	      ),
	      'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => 'D9D9D9')
          )
	    );

	    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	    $style_row = array(
	      'alignment' => array(
	        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	      ),
	      'borders' => array(
	        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
	        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
	        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
	        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	      )
	    );

	    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Pendaftar SESAMA 2022-2023"); 
	    $excel->getActiveSheet()->mergeCells('A1:BH1'); 
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
	    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1

	    $excel->setActiveSheetIndex(0)->setCellValue('A3', "No."); 
	    $excel->getActiveSheet()->mergeCells('A3:A4'); 

	    $excel->setActiveSheetIndex(0)->setCellValue('B3', "Identitas Pendaftar"); 
	    $excel->getActiveSheet()->mergeCells('B3:AB3'); 

	    $excel->setActiveSheetIndex(0)->setCellValue('AC3', "Data Sekolah"); 
	    $excel->getActiveSheet()->mergeCells('AC3:AL3'); 

	    $excel->setActiveSheetIndex(0)->setCellValue('AM3', "Data Orang Tua"); 
	    $excel->getActiveSheet()->mergeCells('AM3:BB3'); 

	    $excel->setActiveSheetIndex(0)->setCellValue('BC3', "Data Wali"); 
	    $excel->getActiveSheet()->mergeCells('BC3:BG3'); 

	    $excel->setActiveSheetIndex(0)->setCellValue('BH3', "Tgl. Pendaftaran"); 
	    $excel->getActiveSheet()->mergeCells('BH3:BH4'); 


	    $excel->setActiveSheetIndex(0);
	    $excel->getActiveSheet()->getRowDimension('4')->setRowHeight(40);
	    // Buat header tabel nya pada baris ke 3
	    $table_columns = array("No. Pendaftaran","NISN","NIK/No. KTP","Nama Lengkap","Jenis Kelamin","Agama","Suku","Status Menikah","Telp","Email","Tinggi Badan (cm)","Berat Badan (kg)","Prov. Tempat Lahir","Kab/Kota Tempat Lahir","Tempat Lahir","Tanggal Lahir","Pilihan I","Pilihan II","Pilihan III","Negara Tempat Tinggal","Provinsi","Kab/Kota","Kec/Distrik","Kel/Desa","Kode Pos","Alamat 1","Alamat 2","Tahun Lulus SMTA","Jurusan SMTA","Jenis SMTA","Nama SMTA","NPSN SMTA","Prov. SMTA","Kab/Kota SMTA","Rapor Sem 3","Rapor Sem 4","Rapor Sem 5","NIK Ayah","Nama Ayah","Pekerjaan Ayah","Pendidikan Ayah","Alamat Kantor Ayah","NIK Ibu","Nama Ibu","Pekerjaan Ibu","Pendidikan Ibu","Penghasilan Orang Tua","Provinsi Orang Tua","Kab/Kota Orang Tua","Kec/Distrik Orang Tua","Alamat Orang Tua","Kode Pos Orang Tua","No. Telp Orang Tua","Nama Wali","Pekerjaan Wali","Penghasilan Wali","No. HP Wali","Alamat Wali");
	    $column = 1;
	    foreach($table_columns as $field){
	        $excel->getActiveSheet()->setCellValueByColumnAndRow($column, 4, $field);
	        $column++;
	      }

	    for ($i = 'A'; $i !==   $excel->getActiveSheet()->getHighestColumn(); $i++) {
			$excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
			$excel->getActiveSheet()->getStyle($i.'3')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle($i.'4')->applyFromArray($style_col);
		}
		

		$excel->getActiveSheet()->getColumnDimension('BH')->setWidth(15);
		$excel->getActiveSheet()->getStyle('BH3:BH4')->applyFromArray($style_col);

	    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
	    $pendaftar = $this->M_pendaftar->get_export_excel();
	    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
	    $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4

	    foreach($pendaftar as $r){ // Lakukan looping pada variabel siswa
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $r->username);
			$excel->getActiveSheet()->setCellValueExplicit('C'.$numrow, $r->nisn_pendaftar, PHPExcel_Cell_DataType::TYPE_STRING);
			$excel->getActiveSheet()->setCellValueExplicit('D'.$numrow, $r->nik, PHPExcel_Cell_DataType::TYPE_STRING);

			$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow,strtoupper($r->namalengkap));
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow,strtoupper($r->jeniskelamin));
	        $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow,strtoupper($r->agama));
	        $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow,strtoupper($r->suku));
	        $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow,strtoupper($r->statusmenikah));
	        $excel->getActiveSheet()->setCellValueExplicit('J'.$numrow,$r->phone, PHPExcel_Cell_DataType::TYPE_STRING);
	        $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow,$r->email);
	        $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow,$r->tinggibadan);
	        $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow,$r->beratbadan);
	        $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow,strtoupper($r->prov_tempatlahir));
	        $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow,strtoupper($r->kab_tempatlahir));
	        $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow,strtoupper($r->lokasi_tempatlahir));
		    if ($r->tgl_lahir != '')
			{
				$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow,shortdate_indo($r->tgl_lahir));
			} else {
				$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow,'');
			}
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow,strtoupper($r->prodipilihan1));
	        $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow,strtoupper($r->prodipilihan2));
	        $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow,strtoupper($r->prodipilihan3));
	        $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow,strtoupper($r->negara_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow,strtoupper($r->prov_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow,strtoupper($r->kab_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow,strtoupper($r->kec_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow,strtoupper($r->des_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow,strtoupper($r->kodepos_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow,strtoupper($r->alamat_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow,strtoupper($r->alamatlain_tempattinggal));
	        $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow,$r->tahunlulus_smta);
	        $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow,strtoupper($r->jurusansmta));
	        $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow,strtoupper($r->jenissmta));
	        $excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow,strtoupper($r->nama_smta));
	        $excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow,$r->npsn_smta);
	        $excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow,strtoupper($r->prov_smta));
	        $excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow,strtoupper($r->kab_smta));
	        $excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow,$r->nrapor1);
	        $excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow,$r->nrapor2);
	        $excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow,$r->nrapor3);
	        $excel->getActiveSheet()->setCellValueExplicit('AM'.$numrow,$r->nik_ayah, PHPExcel_Cell_DataType::TYPE_STRING);
	        $excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow,strtoupper($r->nama_ayah));
	        $excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow,strtoupper($r->pekerjaan_ayah));
	        $excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow,strtoupper($r->pendidikan_ayah));
	        $excel->setActiveSheetIndex(0)->setCellValue('AQ'.$numrow,strtoupper($r->alamatkantor_ayah));
	        $excel->getActiveSheet()->setCellValueExplicit('AR'.$numrow,$r->nik_ibu, PHPExcel_Cell_DataType::TYPE_STRING);
	        $excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow,strtoupper($r->nama_ibu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow,strtoupper($r->pekerjaan_ibu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow,strtoupper($r->pendidikan_ibu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow,$r->penghasilan_ortu);
	        $excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow,strtoupper($r->provinsi_tempattinggalortu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AX'.$numrow,strtoupper($r->kab_tempattinggalortu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AY'.$numrow,strtoupper($r->kec_tempattinggalortu));
	        $excel->setActiveSheetIndex(0)->setCellValue('AZ'.$numrow,strtoupper($r->alamat_ortu));
	        $excel->setActiveSheetIndex(0)->setCellValue('BA'.$numrow,$r->kodepost_tempattinggalortu);
	        $excel->setActiveSheetIndex(0)->setCellValue('BB'.$numrow,$r->nohp_ortu);
	        $excel->setActiveSheetIndex(0)->setCellValue('BC'.$numrow,strtoupper($r->nama_wali));
	        $excel->setActiveSheetIndex(0)->setCellValue('BD'.$numrow,strtoupper($r->pekerjaan_wali));
	        $excel->setActiveSheetIndex(0)->setCellValue('BE'.$numrow,strtoupper($r->penghasilan_wali));
	        $excel->getActiveSheet()->setCellValueExplicit('BF'.$numrow,$r->nohp_wali, PHPExcel_Cell_DataType::TYPE_STRING);
	        $excel->setActiveSheetIndex(0)->setCellValue('BG'.$numrow,strtoupper($r->alamat_wali));
	        $excel->setActiveSheetIndex(0)->setCellValue('BH'.$numrow,date("d-m-Y",$r->created_on));
	      	
	        for ($i = 'A'; $i !=  $excel->getActiveSheet()->getHighestColumn(); $i++) {
	        	$excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
				$excel->getActiveSheet()->getStyle($i.$numrow)->applyFromArray($style_row);
			}
	      
	      $no++; // Tambah 1 setiap kali looping
	      $numrow++; // Tambah 1 setiap kali looping
	    }

		// for ($i = 'A'; $i !=  $excel->getActiveSheet()->getHighestColumn(); $i++) {
		// 	$excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
		// }
	    
	    
	    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
	    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
	    // Set orientasi kertas jadi LANDSCAPE
	    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	    // Set judul file excel nya
	    $excel->getActiveSheet(0)->setTitle("Data Pendaftar SESAMA 2022-2023");
	    $excel->setActiveSheetIndex(0);
	    // Proses file excel
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment; filename="Data Pendaftar SESAMA 2022-2023.xlsx"'); // Set nama file excel nya
	    header('Cache-Control: max-age=0');
	    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	    $write->save('php://output');
	}

}
