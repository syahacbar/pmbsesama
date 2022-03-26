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
        $this->load->model(['M_wilayah', 'M_pendaftar', 'M_register', 'M_agenda']);
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
