<?php defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_pendaftar');
    }

    public function index()
    {

        $this->load->view('index');
    }
}
