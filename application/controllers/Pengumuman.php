<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function index()
    {
        // $data['_view'] = 'pendaftar/navbar';
        // $this->load->view('pendaftar/informasi', $data);
        $this->load->view('pendaftar/pengumuman');
    }
}
