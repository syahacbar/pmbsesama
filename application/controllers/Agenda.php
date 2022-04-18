<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_agenda');
    }

    public function index()
    {
        $data['agenda'] = $this->M_agenda->get_all();
        $this->load->view('agenda/index', $data);
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_agenda->get_by_id($id);
        $this->load->view('agenda/detail', $data);
    }
}