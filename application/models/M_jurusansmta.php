<?php

class M_jurusansmta extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('jurusansmta');
        return $query->result_array();
    }
}
