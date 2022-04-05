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
		$this->load->model('M_fakultas');
		if ($this->uri->segment(3) == "") {
			$data['linkform'] = "administrator/ref_fakultas/add";
			$data['fakultas'] = $this->M_fakultas->get_all();
		} else if ($this->uri->segment(3) == "add") {
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

	public function ref_prodi()
	{
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		if ($this->uri->segment(3) == "") {
			$data['linkform'] = "administrator/ref_prodi/add";
			$data['prodi'] = $this->M_prodi->get_all();
			$data['fakultas'] = $this->M_fakultas->get_all();
		} else if ($this->uri->segment(3) == "add") {
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

		if ($this->uri->segment(3) == "") {
			$data['listprodi'] = $this->M_prodi->get_all();
			$data['_view'] = 'admin/data_pendaftar';
			$this->load->view('admin/layout', $data);
		} else if ($this->uri->segment(3) == "kartupeserta") {
			$data['peserta'] = $this->M_register->get_biodata_by_username($this->uri->segment(4))->row();
			$this->load->view('pendaftar/kartu_peserta', $data);
		} else if ($this->uri->segment(3) == "detail_pendaftar") {
			$data['data_pendaftar'] = $this->M_pendaftar->data_pendaftar($this->uri->segment(4))->result_array();
			$data['rapor'] = $this->M_pendaftar->get_all();
			$this->load->view('admin/detail_pendaftar', $data);
		} else if ($this->uri->segment(3) == "hapus_pendaftar") {
			$data['hapus_pendaftar'] = $this->M_pendaftar->hapus_data($this->uri->segment(4));
			redirect('administrator/datapendaftar');
		} else if ($this->uri->segment(3) == "editpendaftar") {
			$data['editpendaftar'] = $this->M_pendaftar->data_pendaftar($this->uri->segment(4))->result_array();
			$this->load->view('admin/edit_pendaftar', $data);
		}
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

}
