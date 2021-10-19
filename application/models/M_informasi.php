<?php

class M_informasi extends CI_Model
{

    function get_all()
    {
        $query = $this->db->get('informasi');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('informasi', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('informasi', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("informasi");
        return true;
    }
}
