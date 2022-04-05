<?php

class M_namasmta extends CI_Model
{
    function get_all()
    {
        //$query = $this->db->get('t_smta');
        $query = $this->db->query("SELECT ts.*, w.kode AS kodeprovinsi, w.nama AS provinsi_smta FROM t_smta ts, wilayah_2020 w WHERE ts.provinsi_smta=w.kode");
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('t_smta', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('t_smta', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("t_smta");
        return true;
    }

    function getSMTA($str)
    {
        $this->db->select('id, nama_smta AS text');
        $this->db->like('nama_smta', $str);
        $query = $this->db->get('t_smta');
        return $query->result();
    }
}
