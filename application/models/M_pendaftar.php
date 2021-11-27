<?php
 
class M_pendaftar extends CI_Model 
{
    //set nama tabel yang akan kita tampilkan datanya
    var $table = 't_biodata';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(NULL,'namalengkap','namalengkap');

    var $column_search = array('nama');
    // default order 
    var $order = array('idt_biodata' => 'ASC');

    private function _get_datatables_query()
    {
        $this->db->select('*,(SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1, (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2, (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3');     
        $this->db->from('users u');
        $this->db->join('t_biodata tb', 'tb.username = u.username');

        //$this->db->group_start();
        
        if(isset($_POST['is_tahunakademik']) && $_POST['is_tahunakademik'] != "0") 
        {
            $this->db->where('tahunakademik',$_POST['is_tahunakademik']);
        }

        if(isset($_POST['is_prodi']) && $_POST['is_prodi'] != "0") 
        {
            $this->db->group_start();
            $this->db->where('prodipilihan1',$_POST['is_prodi']);
            $this->db->or_where('prodipilihan2',$_POST['is_prodi']);
            $this->db->or_where('prodipilihan3',$_POST['is_prodi']);
            $this->db->group_end();
           
        } 
        

        if(isset($_POST['is_suku']) && $_POST['is_suku'] != '0') 
        {
            $this->db->where('suku',$_POST['is_suku']);
        }

        //$this->db->group_end();

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


    // ADDED BY ME AT 26112021
    // Tampild data di dalam modal view pendaftar list
    // public function data_pendaftar()
    // {
    //     return $this->db->get('t_biodata')->result_array();

    // }

    public function data_pendaftar($username)
    {
        $query = $this->db->query("SELECT * FROM t_biodata WHERE username=$username");
        return $query;

    }

    // hapus data pendaftar
    public function hapus_pendaftar($idt_biodata)
    {
        $this->db->where('idt_biodata', $idt_biodata);
        $this->db->delete('t_biodata'); 
    }

}