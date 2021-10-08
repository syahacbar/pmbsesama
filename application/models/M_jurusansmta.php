<?php

class M_jurusansmta extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('jurusansmta');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('jurusansmta', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idjurusansmta', $id);
        $this->db->update('jurusansmta', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idjurusansmta", $id);
        $this->db->delete("jurusansmta");
        return true;
    }
}
