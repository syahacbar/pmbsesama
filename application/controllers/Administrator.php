<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('pmbsesama/login', 'refresh');
		}
		if ($this->ion_auth->in_group('members')) {
			redirect('pmbsesama/login', 'refresh');
		}
		$this->load->model('M_wilayah');
		$this->load->model('M_pendaftar');
		$this->load->model('M_register');
		$this->load->model('M_agenda');
		$this->load->model('M_jenissmta');
		$this->load->model('M_jurusansmta');
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

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_agama/add";
			$data['agama'] = $this->M_agama->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'agama'  => $this->input->post('agama'),
			);

			$this->M_agama->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_agama');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('idagama');
			$data = array(
				'agama'  => $this->input->post('agama')
			);
			$this->M_agama->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_agama');
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idagama');
			$this->M_agama->delete($id);
			redirect('administrator/ref_agama');
		}

		$data['_view'] = 'admin/ref_agama';
		$this->load->view('admin/layout', $data);
	}

	public function ref_statusmenikah()
	{
		$this->load->model('M_statusmenikah');

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_statusmenikah/add";
			$data['statusmenikah'] = $this->M_statusmenikah->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'status'  => $this->input->post('statusmenikah'),
			);

			$this->M_statusmenikah->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_statusmenikah');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('idstatusmenikah');
			$data = array(
				'status'  => $this->input->post('statusmenikah')
			);
			$this->M_statusmenikah->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_statusmenikah');
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idstatusmenikah');
			$this->M_statusmenikah->delete($id);
			redirect('administrator/ref_statusmenikah');
		}

		$data['_view'] = 'admin/ref_statusmenikah';
		$this->load->view('admin/layout', $data);
	}

	public function ref_jenissmta()
	{
		$this->load->model('M_jenissmta');
		$data['linkform'] = "administrator/tambah_jenissmta";
		$data['jenissmta'] = $this->M_jenissmta->get_all();
		$data['_view'] = 'admin/ref_jenissmta';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_jenissmta()
	{
		$data = array(
			'namajenissmta'  => $this->input->post('jenissmta'),
		);

		$this->M_jenissmta->add($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jenissmta');
	}

	public function edit_jenissmta()
	{
		$id = $this->input->post('idjenissmta');
		$data = array(
			'namajenissmta'  => $this->input->post('jenissmta')
		);
		$this->M_jenissmta->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jenissmta');

	}
	public function hapus_jenissmta()
	{
		$id = $this->input->post('idjenissmta');
		$this->M_jenissmta->delete($id);
	}

	public function tambah_smta()
	{
		$this->load->model('M_namasmta');

		$data = array(
			'nama_smta'  => $this->input->post('namasmta'),
			'alamat_smta'  => $this->input->post('alamatsmta'),
			'npsn_smta'  => $this->input->post('npsnsmta'),
			'provinsi_smta'  => $this->input->post('optProvinsi'),
		);
		$this->M_namasmta->add($data);
		redirect('pmbsesama/administrator/ref_namasmta');
	}

	public function edit_smta()
	{
		$this->load->model('M_namasmta');
		$idsmta = $this->input->post('idsmta');
		$data = array(
			'nama_smta'  => $this->input->post('namasmta'),
			'alamat_smta'  => $this->input->post('alamatsmta'),
			'npsn_smta'  => $this->input->post('npsnsmta'),
			'provinsi_smta'  => $this->input->post('optProvinsi'),
		);
		$this->M_namasmta->edit($data, $idsmta);
		redirect('pmbsesama/administrator/ref_namasmta');

	}

	public function hapus_smta()
	{
		$this->load->model('M_namasmta');

		$id = $this->input->post('idsmta');
		$this->M_namasmta->delete($id);
		//redirect('pmbsesama/administrator/ref_namasmta');
	}

	public function ref_namasmta()
	{
		$this->load->model('M_namasmta');

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/tambah_smta";
			$data['namasmta'] = $this->M_namasmta->get_all();
		
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idjenissmta');
			$this->M_jenissmta->delete($id);
			redirect('administrator/ref_jenissmta');
		}
		
		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
		$data['_view'] = 'admin/ref_namasmta';
		$this->load->view('admin/layout', $data);
	}

	public function ref_jurusansmta()
	{
		$this->load->model('M_jurusansmta');
		$data['linkform'] = "administrator/tambah_jurusansmta";
		$data['jurusansmta'] = $this->M_jurusansmta->get_all();
		$data['_view'] = 'admin/ref_jurusansmta';
		$this->load->view('admin/layout', $data);
	}

	public function tambah_jurusansmta()
	{
		$data = array(
			'namajurusan'  => $this->input->post('jurusansmta'),
		);

		$this->M_jurusansmta->add($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jurusansmta');
	}

	public function edit_jurusansmta()
	{
		$id = $this->input->post('idjurusansmta');
		$data = array(
			'namajurusan'  => $this->input->post('jurusansmta')
		);
		$this->M_jurusansmta->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/ref_jurusansmta');
	}

	public function hapus_jurusansmta()
	{
		$id = $this->input->post('idjurusansmta');
		$this->M_jurusansmta->delete($id);	
	}

	public function ref_pekerjaanortu()
	{
		$this->load->model('M_pekerjaanortu');

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_pekerjaanortu/add";
			$data['pekerjaanortu'] = $this->M_pekerjaanortu->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'namapekerjaan'  => $this->input->post('pekerjaanortu'),
			);

			$this->M_pekerjaanortu->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_pekerjaanortu');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('idpekerjaan');
			$data = array(
				'namapekerjaan'  => $this->input->post('pekerjaanortu')
			);
			$this->M_pekerjaanortu->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_pekerjaanortu');
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idpekerjaan');
			$this->M_pekerjaanortu->delete($id);
			redirect('administrator/ref_pekerjaanortu');
		}

		$data['_view'] = 'admin/ref_pekerjaanortu';
		$this->load->view('admin/layout', $data);
	}

	public function ref_pendidikanortu()
	{
		$this->load->model('M_pendidikanortu');

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_pendidikanortu/add";
			$data['pendidikanortu'] = $this->M_pendidikanortu->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'namajenjang'  => $this->input->post('pendidikanortu'),
			);

			$this->M_pendidikanortu->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_pendidikanortu');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('idpendidikan');
			$data = array(
				'namajenjang'  => $this->input->post('pendidikanortu')
			);
			$this->M_pendidikanortu->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_pendidikanortu');
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idpendidikan');
			$this->M_pendidikanortu->delete($id);
			redirect('administrator/ref_pendidikanortu');
		}

		$data['_view'] = 'admin/ref_pendidikanortu';
		$this->load->view('admin/layout', $data);
	}

	public function ref_penghasilanortu()
	{
		$this->load->model('M_penghasilanortu');

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_penghasilanortu/add";
			$data['penghasilanortu'] = $this->M_penghasilanortu->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'penghasilan'  => $this->input->post('penghasilanortu'),
			);

			$this->M_penghasilanortu->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_penghasilanortu');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('idpenghasilan');
			$data = array(
				'penghasilan'  => $this->input->post('penghasilanortu')
			);
			$this->M_penghasilanortu->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_penghasilanortu');
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('idpenghasilan');
			$this->M_penghasilanortu->delete($id);
			redirect('administrator/ref_penghasilanortu');
		}

		$data['_view'] = 'admin/ref_penghasilanortu';
		$this->load->view('admin/layout', $data);
	}

	public function ref_fakultas()
	{
		$this->load->model('M_fakultas');
		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_fakultas/add";
			$data['fakultas'] = $this->M_fakultas->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'namafakultas'  => $this->input->post('fakultas'),
			);

			$this->M_fakultas->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_fakultas');
		} else if ($this->uri->segment(3) == "edit") {
			$id = $this->input->post('idfakultas');
			$data = array(
				'namafakultas'  => $this->input->post('fakultas')
			);
			$this->M_fakultas->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_fakultas');
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('idfakultas');
			$this->M_fakultas->delete($id);
			redirect('administrator/ref_fakultas');
		}

		$data['_view'] = 'admin/ref_fakultas';
		$this->load->view('admin/layout', $data);
	}

	public function edit_fakultas()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		$id = $this->input->post('idfakultas');
		$data = array(
			'namafakultas'  => $this->input->post('fakultas')
		);
		$this->M_fakultas->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('pmbsesama/administrator/ref_fakultas');
	}

	public function hapus_fakultas()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		$id = $this->input->post('idfakultas');
		$this->M_fakultas->delete($id);
		redirect('pmbsesama/administrator/ref_fakultas');
	}
	public function ref_prodi()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/ref_prodi/add";
			$data['prodi'] = $this->M_prodi->get_all();
			$data['fakultas'] = $this->M_fakultas->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'namaprodi'  => $this->input->post('prodi'),
				'idfakultas'  => $this->input->post('optFakultas'),
			);

			$this->M_prodi->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_prodi');
		} else if ($this->uri->segment(3) == "edit") {
			$id = $this->input->post('idprodi');
			$data = array(
				'namaprodi'  => $this->input->post('prodi'),
				'idfakultas'  => $this->input->post('optFakultas'),
			);
			$this->M_prodi->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/ref_prodi');
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('idprodi');
			$this->M_prodi->delete($id);
			redirect('administrator/ref_prodi');
		}

		$data['_view'] = 'admin/ref_prodi';
		$this->load->view('admin/layout', $data);
	}

	public function edit_prodi()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		$id = $this->input->post('idprodi');
		$data = array(
			'namaprodi'  => $this->input->post('prodi'),
			'idfakultas'  => $this->input->post('optFakultas'),
		);
		$this->M_prodi->edit($data, $id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('pmbsesama/administrator/ref_prodi');
	}

	public function hapus_prodi()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		$id = $this->input->post('idprodi');
		$this->M_prodi->delete($id);
		redirect('pmbsesama/administrator/ref_prodi');
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
		$this->load->model(['M_pendidikanortu', 'M_penghasilanortu', 'M_pekerjaanortu', 'M_prodi', 'M_register', 'M_pendaftar', 'M_informasi', 'M_agama', 'M_statusmenikah', 'M_jurusansmta', 'M_jenissmta']);

		if ($this->uri->segment(4) == "") {
			$data['listprodi'] = $this->M_prodi->get_all();
			$data['agama'] = $this->M_agama->get_all();
			$data['prodi'] = $this->M_prodi->get_all();
			$data['statusmenikah'] = $this->M_statusmenikah->get_all();
			$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
			$data['kabupaten'] = $this->M_wilayah->get_all_kabupaten();
			$data['kecamatan'] = $this->M_wilayah->get_all_kecamatan();
			$data['desa'] = $this->M_wilayah->get_all_desa();
			$data['jurusansmta'] = $this->M_jurusansmta->get_all();
			$data['jenissmta'] = $this->M_jenissmta->get_all();
			$data['pendidikanortu'] = $this->M_pendidikanortu->get_all();
			$data['pekerjaanortu'] = $this->M_pekerjaanortu->get_all();
			$data['penghasilanortu'] = $this->M_penghasilanortu->get_all();

			$data['_view'] = 'admin/data_pendaftar';
			$this->load->view('admin/layout', $data);
		} else if ($this->uri->segment(4) == "kartupeserta") {
        	$this->load->library('Pdf');

			$data['peserta'] = $this->M_register->get_biodata_by_username($this->uri->segment(5))->row();
			$this->load->view('admin/kartu_peserta_pdf', $data);
		} else if ($this->uri->segment(4) == "detail_pendaftar") {
			$data['data_pendaftar'] = $this->M_pendaftar->data_pendaftar($this->uri->segment(5))->result_array();
			$data['editpendaftar'] = $this->M_pendaftar->edit_pendaftar($this->uri->segment(5))->result_array();
			$data['rapor'] = $this->M_pendaftar->get_rapor($this->uri->segment(5))->result_array();
			$data['_view'] = 'admin/detail_pendaftar';
			$this->load->view('admin/layout', $data);
		} else if ($this->uri->segment(4) == "hapus_pendaftar") {
			$data['hapus_pendaftar'] = $this->M_pendaftar->hapus_data($this->uri->segment(5));
			redirect('administrator/datapendaftar');
		} else if ($this->uri->segment(4) == "editpendaftar") {
			$data['editpendaftar'] = $this->M_pendaftar->edit_pendaftar($this->uri->segment(5))->result_array();
			$data['agama'] = $this->M_agama->get_all();
			$data['statusmenikah'] = $this->M_statusmenikah->get_all();
			$data['prodi'] = $this->M_prodi->get_all();
			$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
			$data['kabupaten'] = $this->M_wilayah->get_all_kabupaten();
			$data['kecamatan'] = $this->M_wilayah->get_all_kecamatan();
			$data['desa'] = $this->M_wilayah->get_all_desa();
			$data['jurusansmta'] = $this->M_jurusansmta->get_all();
			$data['jenissmta'] = $this->M_jenissmta->get_all();
			$data['pendidikanortu'] = $this->M_pendidikanortu->get_all();
			$data['pekerjaanortu'] = $this->M_pekerjaanortu->get_all();
			$data['penghasilanortu'] = $this->M_penghasilanortu->get_all();
			$data['_view'] = 'admin/edit_pendaftar';
			$this->load->view('admin/layout', $data);
		}
	}


	public function pendaftar_update()
	{
		$username = $this->input->post('username');
		$params = array(
			'nisn_pendaftar' => $this->input->post('nisn_pendaftar'),
			'nik' => $this->input->post('nik'),
			'namalengkap' => $this->input->post('namalengkap'),
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
			'tahunlulus_smta' => $this->input->post('tahunlulussmta'),
			'jurusansmta' => $this->input->post('jurusansmta'),
			'jenissmta' => $this->input->post('jenissmta'),
			'nama_smta' => $this->input->post('namasmta'),
			'nisn_smta' => $this->input->post('nisnsmta'),
			'prov_smta' => $this->input->post('provinsismta'),
			'alamat_smta' => $this->input->post('alamatsmta'),
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

		//update data tabel t_biodata

		$this->M_register->update_biodata($username, $params);

		$datauser = [
			'first_name' => $this->input->post('namalengkap'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('nohp'),
		];

		//update data tabel users

		$user = $this->M_register->get_user_username($username);
		$this->ion_auth->update($user->id, $datauser);
		$biodata = $data['peserta'] = $this->M_register->get_biodata_by_username($username)->row();


		echo json_encode(array("statusCode" => 1,"fotoprofil"=>$biodata->fotoprofil));
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

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/slider/add";
			$data['slider'] = $this->M_slider->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'gambar'  => $this->input->post('gambar'),
			);

			$this->M_slider->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/slider');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('id');
			$data = array(
				'gambar'  => $this->input->post('gambar')
			);
			$this->M_slider->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/slider');
		} else if ($this->uri->segment(4) == "delete") {
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

		if ($this->uri->segment(4) == "") {
			$data['agenda'] = $this->M_agenda->get_all();
		} else if ($this->uri->segment(4) == "delete") {
			$id = $this->input->post('id');
			$this->M_agenda->delete($id);
			redirect('administrator/agenda');
		}
		// else if ($this->uri->segment(4) == "edit") {
		// 	$id = $this->input->post('id');
		// 	$data = array(
		// 		'agenda'  => $this->input->post('agenda')
		// 	);
		// 	$this->M_agenda->edit($data, $id);
		// 	$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// 	redirect('administrator/agenda');
		// }

		$data['agenda'] = $this->M_agenda->get_all();
		$data['_view'] = 'admin/agenda';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_agenda()
	{
		$this->load->model('M_agenda');
		$id = $this->input->post('id');
		$this->M_agenda->delete($id);
		redirect('pmbsesama/administrator/agenda');
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

		if ($this->uri->segment(4) == "") {
			$data['linkform'] = "administrator/informasi/add";
			$data['informasi'] = $this->M_informasi->get_all();
		} else if ($this->uri->segment(4) == "add") {
			$data = array(
				'informasi'  => $this->input->post('informasi'),
			);

			$this->M_informasi->add($data);

			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/informasi');
		} else if ($this->uri->segment(4) == "edit") {
			$id = $this->input->post('id');
			$data = array(
				'informasi'  => $this->input->post('informasi')
			);
			$this->M_informasi->edit($data, $id); 
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/informasi');
		} else if ($this->uri->segment(3) == "delete") {
			$id = $this->input->post('id');
			if ($this->M_informasi->delete($id))
			{
				echo json_encode(array("statusCode" => 1));
			} else {
				echo json_encode(array("statusCode" => 0));
			}
			//redirect('pmbsesama/administrator/informasi');
		}
		$data['informasi'] = $this->M_informasi->get_all();
		$data['_view'] = 'admin/informasi';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_informasi()
	{
		$this->load->model('M_informasi');

		$id = $this->input->post('id');

		if ($this->M_informasi->delete($id))
		{
			echo json_encode(array("statusCode" => 1));
		} else {
			echo json_encode(array("statusCode" => 0));
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
			$id = $this->input->post('idagenda');
			$namafile = $this->upload->data('file_name');
			$judulagenda = $this->input->post('judulagenda');
			$isiagenda = $this->input->post('isiagenda');
			$uploaded_on = date("Y-m-d H:i:s");
			// $this->db->update('agenda', array(
			// 	'gambar' => $namafile,
			// 	'isi_agenda' => $isiagenda,
			// 	'judul' => $judulagenda,
			// 	'waktu' => $uploaded_on
			// ));
			$data = array(
				'gambar' => $namafile,
				'isi_agenda' => $isiagenda,
				'judul' => $judulagenda,
				'waktu' => $uploaded_on
			);

			//$this->M_agenda->edit($data, $id);
			$this->db->where('id', $id);
			$this->db->update('agenda', $data);
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

	public function editFoto()
	{
		$config['upload_path']   = FCPATH . 'assets/upload/profile/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('edit_fotoprofil')) {
			$nama = $this->upload->data('file_name');
			$username = $this->input->post('username');
			$this->db->insert('upload_data', array('namafile' => $nama, 'username' => $username));
		}
	}



	public function uploadrapor()
	{
		$config['upload_path']   = FCPATH . '/assets/upload/rapor/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('rapor')) {
			$nama = $this->upload->data('file_name');
			$username = $this->input->post('username');
			$this->db->insert('rapor', array('nama_dok' => $nama, 'username' => $username));
		}
	}


}
