<?php
 
class M_fakultas extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('fakultas');  
        return $query->result_array();
    }

    function get_all_fakultas_value()
    {
        $query = $this->db->query("SELECT  f.namafakultas,
        (SELECT COUNT(fk.namafakultas) FROM t_biodata tb, prodi pr, fakultas fk WHERE tb.prodipilihan1=pr.idprodi AND pr.idfakultas=fk.idfakultas AND fk.idfakultas=f.idfakultas) AS peminat1,
        (SELECT COUNT(fk.namafakultas) FROM t_biodata tb, prodi pr, fakultas fk WHERE tb.prodipilihan2=pr.idprodi AND pr.idfakultas=fk.idfakultas AND fk.idfakultas=f.idfakultas) AS peminat2,
        (SELECT COUNT(fk.namafakultas) FROM t_biodata tb, prodi pr, fakultas fk WHERE tb.prodipilihan3=pr.idprodi AND pr.idfakultas=fk.idfakultas AND fk.idfakultas=f.idfakultas) AS peminat3
        FROM fakultas f");
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('fakultas', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idfakultas', $id);
        $this->db->update('fakultas', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idfakultas", $id);
        $this->db->delete("fakultas");
        return true;
    }
}