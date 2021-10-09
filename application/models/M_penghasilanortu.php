<?php

class M_penghasilanortu extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('penghasilanortu');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('penghasilanortu', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idpenghasilan', $id);
        $this->db->update('penghasilanortu', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idpenghasilan", $id);
        $this->db->delete("penghasilanortu");
        return true;
    }
}
