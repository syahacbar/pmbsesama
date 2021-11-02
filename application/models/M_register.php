<?php

class M_register extends CI_Model
{
    function add_biodata($params)
    {
        $this->db->insert('t_biodata', $params);
        return $this->db->insert_id();
    }

    function get_last_id()
    {
        $last_id = $this->db->order_by('id', "desc")
            ->limit(1)
            ->get('users');
        return $last_id;
    }

    function update_username($id)
    {
        if ($id < 10) {
            $nourut = "0000" . $id;
        } elseif ($id < 100) {
            $nourut = "000" . $id;
        } elseif ($id < 1000) {
            $nourut = "00" . $id;
        } elseif ($id < 10000) {
            $nourut = "0" . $id;
        } elseif ($id < 100000) {
            $nourut = $id;
        }

        $username = date('Y') . "33" . $nourut;

        $query = $this->db->query("UPDATE t_akun SET username='$username' WHERE id='$id'");
        return $query;
    }

    // function get_biodata_by_username($username)
    // {
    //     $query = $this->db->get_where('t_biodata', array('username' => $username));
    //     return $query;
    // }

    function update_biodata($username, $params)
    {
        $this->db->where('username', $username);
        $this->db->update('t_biodata', $params);
    }


    function get_biodata_by_username($username)
    { 
        $query = $this->db->query("SELECT tb.*, u.namafile AS fotoprofil FROM t_biodata tb LEFT JOIN upload u ON u.username=tb.username WHERE tb.username=$username ORDER BY u.id DESC LIMIT 1");
        return $query;
    }
}
