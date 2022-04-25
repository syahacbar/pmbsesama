<?php

class M_kelompokujian extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('t_kelompokujian');
        return $query->result_array();
    }
}
