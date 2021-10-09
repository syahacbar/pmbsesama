<?php

class M_jenissmta extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('jenissmta');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('jenissmta', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idjenissmta', $id);
        $this->db->update('jenissmta', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idjenissmta", $id);
        $this->db->delete("jenissmta");
        return true;
    }
}
