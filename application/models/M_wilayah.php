<?php
 
class M_wilayah extends CI_Model 
{
    //set nama tabel yang akan kita tampilkan datanya
    var $table = 'wilayah_2020';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(NULL,'kode','nama');

    var $column_search = array('nama');
    // default order 
    var $order = array('kode' => 'ASC');

    private function _get_datatables_query($wil)
    {
        if ($wil == "provinsi")
        {
            $this->db->select('w.kode'); 
            $this->db->select('w.nama AS namaprov');      
            $this->db->from('wilayah_2020 w');
            $this->db->where('LENGTH(kode)', '2');
            $column_order = array(NULL,'kode','namaprov');
        }
        elseif ($wil == "kabupaten")
        {
            $this->db->select('w.kode');
            $this->db->select('w.nama AS namakab');  
            $this->db->select('(SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprov');       
            $this->db->from('wilayah_2020 w');
            $this->db->where('LENGTH(kode)', '5');
            $column_order = array(NULL,'kode','namakab','namaprov');
            
        }  
        elseif ($wil == "kecamatan")
        {
            $this->db->select('w.kode');
            $this->db->select('w.nama AS namakec');  
            $this->db->select('(SELECT kab.nama FROM wilayah_2020 kab WHERE kab.kode = LEFT(w.kode,5)) AS namakab');   
            $this->db->select('(SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprov');    
            $this->db->from('wilayah_2020 w');
            $this->db->where('LENGTH(kode)', '8'); 
            $column_order = array(NULL,'kode','namakec','namakab','namaprov');
        }  
        elseif ($wil == "desa")
        {
            $this->db->select('w.kode');
            $this->db->select('w.nama AS namades');  
            $this->db->select('(SELECT des.nama FROM wilayah_2020 des WHERE des.kode = LEFT(w.kode,8)) AS namakec');  
            $this->db->select('(SELECT kab.nama FROM wilayah_2020 kab WHERE kab.kode = LEFT(w.kode,5)) AS namakab');   
            $this->db->select('(SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprov');      
            $this->db->from('wilayah_2020 w');
            $this->db->where('LENGTH(kode)', '13');

            $column_order = array(NULL,'kode','namades','namakec','namakab','namaprov');
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
            $this->db->order_by($column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables($wil)
    {
        $this->_get_datatables_query($wil);
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($wil)
    {
        $this->_get_datatables_query($wil);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }





    function get_all_provinsi()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 2 ORDER BY kode ASC"); 
        return $query->result_array();
    }

    function get_all_kabupaten()
    {
        $query = $this->db->query("SELECT w.kode, w.nama AS namakabupaten,(SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprovinsi FROM wilayah_2020 w WHERE LENGTH(kode) = 5 ORDER BY kode ASC"); 
        return $query->result_array();
    }

    function get_all_kecamatan()
    {
        $query = $this->db->query("SELECT w.kode, w.nama AS namakecamatan,(SELECT kab.nama FROM wilayah_2020 kab WHERE kab.kode = LEFT(w.kode,5)) AS namakabupaten, (SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprovinsi FROM wilayah_2020 w WHERE LENGTH(kode) = 8 ORDER BY kode ASC"); 
        return $query->result_array();
    }

    function get_all_desa()
    {
        $query = $this->db->query("SELECT w.kode, w.nama AS namadesa,
                                    (SELECT des.nama FROM wilayah_2020 des WHERE des.kode = LEFT(w.kode,8)) AS namakecamatan,
                                    (SELECT kab.nama FROM wilayah_2020 kab WHERE kab.kode = LEFT(w.kode,5)) AS namakabupaten,
                                    (SELECT pr.nama FROM wilayah_2020 pr WHERE pr.kode = LEFT(w.kode,2)) AS namaprovinsi
                                    FROM wilayah_2020 w
                                    WHERE LENGTH(kode) = 13 ORDER BY kode ASC"); 
        return $query->result_array();
    }

    function add($data)
    {
        $this->db->insert('wilayah_2020', $data);
        return TRUE;
    }

    function edit($data, $id){
        $this->db->where('kode',$id);
        $this->db->update('wilayah_2020', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("kode", $id);
        $this->db->delete("wilayah_2020");
        return TRUE;
    }
}