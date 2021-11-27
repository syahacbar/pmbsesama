<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftar');

    }

    public function index()
    {

        $data['_view'] = 'admin/dashboard';
        $this->load->view('admin/layout', $data);
    }


}
