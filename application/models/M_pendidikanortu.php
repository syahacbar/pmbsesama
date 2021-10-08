<?php

class M_pendidikanortu extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('pendidikanortu');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('pendidikanortu', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idpendidikan', $id);
        $this->db->update('pendidikanortu', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idpendidikan", $id);
        $this->db->delete("pendidikanortu");
        return true;
    }
}
