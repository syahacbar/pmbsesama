<?php

class M_namasmta extends CI_Model
{
    function get_all()
    {
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

    function edit_smta($idsmta)
    {
        $query = $this->db->query("SELECT * FROM t_smta WHERE id='$idsmta'");
        return $query;
    }

    //set nama tabel yang akan kita tampilkan datanya
    var $table = 't_smta';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(NULL, 'nama_smta');

    var $column_search = array('nama_smta');
    // default order 
    var $order = array('id' => 'ASC');

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('t_smta');

        if (isset($_POST['is_provinsi']) && $_POST['is_provinsi'] != "0") {
            $this->db->where('provinsi_smta', $_POST['is_provinsi']);
        }
        if (isset($_POST['is_kabupaten']) && $_POST['is_kabupaten'] != "0") {
            $this->db->where('kabupaten_smta', $_POST['is_kabupaten']);
        }
        if (isset($_POST['is_kecamatan']) && $_POST['is_kecamatan'] != "0") {
            $this->db->where('kecamatan_smta', $_POST['is_kecamatan']);
        }

        $i = 0;
        foreach ($this->column_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($this->column_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
