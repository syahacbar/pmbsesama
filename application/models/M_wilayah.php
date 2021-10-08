<?php
 
class M_wilayah extends CI_Model 
{
    function get_all_provinsi()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 2 ORDER BY kode ASC"); 
        return $query->result_array();
    }
}