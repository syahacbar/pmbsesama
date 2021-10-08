<?php

class M_agama extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('agama');  
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('agama', $data);
        return TRUE;
    }

    function edit($data, $id){
        $this->db->where('idagama',$id);
        $this->db->update('agama', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idagama", $id);
        $this->db->delete("agama");
        return true;
    }
}