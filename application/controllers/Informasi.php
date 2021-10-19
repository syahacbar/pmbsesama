<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_informasi');
        // $this->load->model('M_pendaftar');
    }

    public function index()
    {
        $data['informasi'] = $this->M_informasi->get_all();

        // $data['_view'] = 'pendaftar/navbar';
        $this->load->view('informasi/index', $data);
        // $this->load->view('pendaftar/informasi');
    }
}
