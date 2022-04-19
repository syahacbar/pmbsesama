<?php

class M_jenissmta extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('jenissmta');
        return $query->result_array();
    }

    function get_all_jenissmta_value()
    {
        $query = $this->db->query("SELECT js.namajenissmta,
            COUNT(tb.jenissmta) AS peminat
            FROM t_biodata tb JOIN jenissmta js ON js.idjenissmta=tb.jenissmta GROUP BY js.namajenissmta");
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('jenissmta', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('idjenissmta', $id);
        $this->db->update('jenissmta', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("idjenissmta", $id);
        $this->db->delete("jenissmta");
        return true;
    }
}
