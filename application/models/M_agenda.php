<?php

class M_agenda extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('agenda');
        return $query->result_array();
    }

    function get_by_id($id)
    {
        $query = $this->db->get_where('agenda', array('id' => $id));
        return $query->row();
    }

    function add($data)
    {
        $this->db->insert('agenda', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("agenda");
        return true;
    }
}
