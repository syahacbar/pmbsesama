<?php

class M_agenda extends CI_Model
{
    // function get_all()
    // {
    //     $query = $this->db->get('agenda');
    //     return $query->result_array();
    // }
    function get_all($limit = NULL)
    {
        if ($limit == NULL) {
            $query = $this->db->get('agenda');
        } else {
            $query = $this->db->query("SELECT * FROM agenda ORDER BY id LIMIT $limit");
        }
        return $query->result_array();
    }

    // function get_image($idagenda)
    // {
    //     $query = $this->db->query("SELECT * FROM upload WHERE idagenda='$idagenda' AND kategori='dokumentasi1'");
    //     return $query->row();
    // }

    function get_by_id($id)
    {
        $query = $this->db->get_where('agenda', array('id' => $id));
        return $query->row();
    }

    public function add_agenda($params)
    {
        $this->db->insert('agenda', $params);
        return $this->db->insert_id();
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
        return TRUE;
    }

    // hapus data pendaftar
    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("agenda");
        return true;
    }

    // function gbr_agenda($gambar)
    // {
    //     $query = $this->db->query("SELECT * FROM agenda WHERE gambar='$gambar'");
    //     return $query->row();
    // }
}
