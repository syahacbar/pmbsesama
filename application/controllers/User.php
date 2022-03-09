<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('Ion_auth_model');
    }

    public function index()
    {
        $data['user'] = $this->M_user->get_all();
        $data['grup'] = $this->M_user->group();

		$data['_view'] = 'admin/user';
		$this->load->view('admin/layout', $data);
    }
}
