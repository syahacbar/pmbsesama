<?php

class M_prodi extends CI_Model
{
    function get_all()
    {
        $query = $this->db->query("SELECT p.*, f.namafakultas AS namafakultas FROM prodi p JOIN fakultas f ON p.idfakultas=f.idfakultas");
        return $query->result_array();
    }

    function get_all_prodi_value()
    {
        $query = $this->db->query("SELECT pr.namaprodi,
        (SELECT COUNT(tb.prodipilihan1) FROM t_biodata tb WHERE tb.prodipilihan1=pr.idprodi) AS peminat1,
        (SELECT COUNT(tb.prodipilihan1) FROM t_biodata tb WHERE tb.prodipilihan2=pr.idprodi) AS peminat2,
        (SELECT COUNT(tb.prodipilihan1) FROM t_biodata tb WHERE tb.prodipilihan3=pr.idprodi) AS peminat3        
        FROM prodi pr JOIN fakultas fk ON fk.idfakultas=pr.idfakultas");
        return $query->result();
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
        $query = $this->db->get_where('prodi', array('idprodi' => $id));
        return $query->row();
    }
}
