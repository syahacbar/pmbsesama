<?php

class M_pekerjaanortu extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('pekerjaanortu');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('pekerjaanortu', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idpekerjaan', $id);
        $this->db->update('pekerjaanortu', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idpekerjaan", $id);
        $this->db->delete("pekerjaanortu");
        return true;
    }
}
