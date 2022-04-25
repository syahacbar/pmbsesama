<?php

class M_user extends CI_Model
{
    function get_all()
    {
        $query = $this->db->query("SELECT u.*,
        (SELECT tsm.nama_smta FROM t_smta tsm WHERE tsm.id=u.id_sekolah) AS nama_smta
        FROM users u, users_groups ug, groups g WHERE u.id=ug.users_id AND ug.group_id=g.id AND g.name='sekolah'");
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('users', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
        return true;
    }

    function group()
    {
        $query = $this->db->get('groups');
        return $query->result_array();
    }

    public function get_by_id()
    {
        $query = $this->db->query("SELECT * FROM users WHERE id");
        return $query->row();
    }

    public function edit($data)
    {
        $sql = "UPDATE users SET first_name='" . $data['first_name'] . "', username='" . $data['username'] . "', company='" . $data['company'] . "', email ='" . $data['email '] . "',phone='" . $data['phone'] . "' WHERE id='" . $data['id'] . "'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function tambah_operator($data)
    {
    }
}
