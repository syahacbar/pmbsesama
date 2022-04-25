<?php

class M_jalurmasuk extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('t_jalurmasuk');
        return $query->result_array();
    }
}
