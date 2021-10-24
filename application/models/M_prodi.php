<?php
 
class M_prodi extends CI_Model
{
    function get_all()
    {
        $query = $this->db->query("SELECT p.*, f.namafakultas AS namafakultas FROM prodi p JOIN fakultas f ON p.idfakultas=f.idfakultas");  
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('prodi', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idprodi', $id);
        $this->db->update('prodi', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idprodi", $id);
        $this->db->delete("prodi");
        return true;
    }

    function get_by_id($id)
    {
        $query = $this->db->get_where('prodi', array('idprodi'=>$id));
        return $query->row();
    }
}