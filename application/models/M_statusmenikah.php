<?php

class M_statusmenikah extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('statusmenikah');
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('statusmenikah', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idstatusmenikah', $id);
        $this->db->update('statusmenikah', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idstatusmenikah", $id);
        $this->db->delete("statusmenikah");
        return true;
    }
}
