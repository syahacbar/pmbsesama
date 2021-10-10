<?php

class M_slider extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('slider');  
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('slider', $data);
        return TRUE;
    }

    function edit($data, $id){
        $this->db->where('id',$id);
        $this->db->update('slider', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("slider");
        return true;
    }
}