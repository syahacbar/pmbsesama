<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('login', 'refresh');
        }
        if (!$this->ion_auth->in_group('sekolah')) {
            redirect('login', 'refresh');
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
		$this->load->model('M_slider');
		$this->load->model('M_informasi');
    }

    public function index()
    {
        $data['count_all'] = $this->M_pendaftar->count_all();
        $data['count_oap'] = $this->M_pendaftar->count_by_suku('Papua')->num_rows();
        $data['count_noap'] = $this->M_pendaftar->count_by_suku('Non Papua')->num_rows();
        $data['menunggu'] = $this->M_pendaftar->count_by_status('Menunggu')->num_rows();
        $data['diterima'] = $this->M_pendaftar->count_by_status('Diterima')->num_rows();
        $data['ditolak'] = $this->M_pendaftar->count_by_status('Ditolak')->num_rows();
        $data['t_biodata'] = $this->M_pendaftar->get_all(); 
        $data['fakultas'] = $this->M_fakultas->get_all_fakultas_value();
		$data['prodi'] = $this->M_prodi->get_all_prodi_value();
		$data['jurusansmta'] = $this->M_jurusansmta->get_all_jurusansmta_value();
		$data['jenissmta'] = $this->M_jenissmta->get_all_jenissmta_value();
        $data['_view'] = 'admin/dashboard';
        $this->load->view('operator/layout', $data);
    }

    public function pendaftar()
    {
        $this->load->model(['M_pendidikanortu', 'M_penghasilanortu', 'M_pekerjaanortu', 'M_prodi', 'M_informasi', 'M_agama', 'M_statusmenikah', 'M_jurusansmta', 'M_jenissmta']);

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

        $data['_view'] = 'operator/data_pendaftar';
        $this->load->view('operator/layout', $data);
    }
}
