<?php
 
class M_fakultas extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('fakultas');  
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('fakultas', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idfakultas', $id);
        $this->db->update('fakultas', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idfakultas", $id);
        $this->db->delete("fakultas");
        return true;
    }
}