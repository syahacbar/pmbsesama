<?php
 
class M_prodi extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('prodi');  
        return $query->result_array();
    }
}