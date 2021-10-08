<?php
 
class M_gelombang extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('t_gelombang');  
        return $query->result_array();
    }
}