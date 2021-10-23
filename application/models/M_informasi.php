<?php

class M_informasi extends CI_Model
{

    function get_all($limit = NULL)
    {
        if ($limit == NULL) {
            $query = $this->db->get('informasi');
        } else {
            $query = $this->db->query("SELECT * FROM informasi ORDER BY id LIMIT $limit");
        }
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
