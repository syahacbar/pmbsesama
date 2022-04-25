<?php

class M_pengaturan extends CI_Model
{
    function get_sesidaftar()
    {
        $query = $this->db->query("SELECT * FROM pengaturan WHERE parameter = 'sesidaftar'");
        return $query->row();
    }

    function ubah_sesidaftar($data)
    {
        $query = $this->db->query("UPDATE pengaturan SET nilai = '$data' WHERE parameter = 'sesidaftar'");
        return TRUE;
    }
}
