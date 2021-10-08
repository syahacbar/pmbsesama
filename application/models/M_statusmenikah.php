<?php
 
class M_statusmenikah extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('statusmenikah');  
        return $query->result_array();
    }
}