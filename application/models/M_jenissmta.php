<?php

class M_jenissmta extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('jenissmta');
        return $query->result_array();
    }
}
