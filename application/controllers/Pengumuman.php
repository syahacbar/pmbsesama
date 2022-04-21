<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function index()
    {
        $this->load->view('pengumuman/index');
    }

    public function cekhasil()
    {
        $nopendafar = $this->input->post('nopendaftar');
        $pendaftar = $this->db->query("SELECT * FROM t_biodata WHERE username='$nopendafar'");
        if($pendaftar->num_rows() >= 1)
        {
            echo json_encode(array('statusCode' => 1,'pendaftar'=>$pendaftar->row()));
        }
        else
        {
            echo json_encode(array('statusCode' => 0));
        }
        

    }
}
