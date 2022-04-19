<?php

class M_pendaftar extends CI_Model
{ 
    //set nama tabel yang akan kita tampilkan datanya
    var $table = 't_biodata';
    //set kolom order, kolom pertama saya null untuk kolom edit dan hapus
    var $column_order = array(NULL, NULL, 'status','tb. username','namalengkap','pilihan1','pilihan2','pilihan3','suku');

    var $column_search = array('namalengkap','u.username');
    // default order 
    var $order = array('idt_biodata' => 'ASC');

    private function _get_datatables_query()
    {
        $this->db->select('*,(SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1, (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2, (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3');
        $this->db->from('users u');
        $this->db->join('t_biodata tb', 'tb.username = u.username');

        //$this->db->group_start();

        if (isset($_POST['is_tahunakademik']) && $_POST['is_tahunakademik'] != "0") {
            $this->db->where('tahunakademik', $_POST['is_tahunakademik']);
        }

        if (isset($_POST['is_prodi']) && $_POST['is_prodi'] != "0") {
            $this->db->group_start();
            $this->db->where('prodipilihan1', $_POST['is_prodi']);
            $this->db->or_where('prodipilihan2', $_POST['is_prodi']);
            $this->db->or_where('prodipilihan3', $_POST['is_prodi']);
            $this->db->group_end();
        }

        if (isset($_POST['is_suku']) && $_POST['is_suku'] != '0') {
            $this->db->where('suku', $_POST['is_suku']);
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
            $this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_all()
    {
        $this->db->select("tb.*");
        $this->db->from("t_biodata tb");

        $query = $this->db->get();
        return $query->result();
    }

    function get_export_excel()
    {
        $query = $this->db->query("
            SELECT tb.*, u.*, ts.nama_smta AS nama_smta, ts.npsn_smta AS npsn_smta, ts.alamat_smta AS alamatsmta,
            (SELECT a.agama FROM agama a WHERE a.idagama=tb.agama) AS agama,
            (SELECT sm.status FROM statusmenikah sm WHERE sm.idstatusmenikah=tb.statusmenikah) AS statusmenikah,
            (SELECT pr.namaprodi FROM prodi pr WHERE pr.idprodi=tb.prodipilihan1) AS prodipilihan1,
            (SELECT pr.namaprodi FROM prodi pr WHERE pr.idprodi=tb.prodipilihan2) AS prodipilihan2,
            (SELECT pr.namaprodi FROM prodi pr WHERE pr.idprodi=tb.prodipilihan3) AS prodipilihan3,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.prov_tempatlahir) AS prov_tempatlahir,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.kab_tempatlahir) AS kab_tempatlahir,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.prov_tempattinggal) AS prov_tempattinggal,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.kab_tempattinggal) AS kab_tempattinggal,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.kec_tempattinggal) AS kec_tempattinggal,
            (SELECT w.nama FROM wilayah_2020 w WHERE w.kode=tb.des_tempattinggal) AS des_tempattinggal,
            (SELECT namajurusan FROM jurusansmta WHERE idjurusansmta=tb.jurusansmta) AS jurusansmta,
            (SELECT namajenissmta FROM jenissmta WHERE idjenissmta=tb.jenissmta) AS jenissmta,
            (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ayah) AS pekerjaan_ayah,
            (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ibu) AS pekerjaan_ibu,
            (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_wali) AS pekerjaan_wali,
            (SELECT namajenjang FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ayah) AS pendidikan_ayah,
            (SELECT namajenjang FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ibu) AS pendidikan_ibu,
            (SELECT penghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_ortu) AS penghasilan_ortu,
            (SELECT penghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_wali) AS penghasilan_wali,
            (SELECT nama FROM wilayah_2020 WHERE kode=ts.provinsi_smta) AS prov_smta,
            (SELECT nama FROM wilayah_2020 WHERE kode=ts.kabupaten_smta) AS kab_smta,
            (SELECT nama FROM wilayah_2020 WHERE kode=tb.provinsi_tempattinggalortu) AS provinsi_tempattinggalortu,
            (SELECT nama FROM wilayah_2020 WHERE kode=tb.kab_tempattinggalortu) AS kab_tempattinggalortu,
            (SELECT nama FROM wilayah_2020 WHERE kode=tb.kec_tempattinggalortu) AS kec_tempattinggalortu
            FROM t_biodata tb JOIN users u ON u.username=tb.username JOIN t_smta ts ON ts.id = tb.nama_smta
        ");
        return $query->result();
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


    public function data_pendaftar($username)
    {
        $this->db->select('*, u.email AS email, u.phone AS nohp, ts.nama_smta AS namasmta, ts.npsn_smta AS npsnsmta, ts.alamat_smta AS alamatsmta,
        (SELECT ud.namafile FROM upload_data ud WHERE ud.username=tb.username ORDER BY id DESC LIMIT 1) AS fotoprofil,
        (SELECT r.nama_dok FROM rapor r WHERE r.username=tb.username ORDER BY id DESC LIMIT 1) AS file_rapor,
        (SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1,
        (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2,
        (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3,
        (SELECT agama FROM agama WHERE idagama=tb.agama) AS agama,
        (SELECT status FROM statusmenikah WHERE idstatusmenikah=tb.statusmenikah) AS statusmenikah,
        (SELECT namajurusan FROM jurusansmta WHERE idjurusansmta=tb.jurusansmta) AS jurusansmta,
        (SELECT namajenissmta FROM jenissmta WHERE idjenissmta=tb.jenissmta) AS jenissmta,
        (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ayah) AS pekerjaan_ayah,
        (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ibu) AS pekerjaan_ibu,
        (SELECT namapekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_wali) AS pekerjaan_wali,
        (SELECT namajenjang FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ayah) AS pendidikan_ayah,
        (SELECT namajenjang FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ibu) AS pendidikan_ibu,
        (SELECT penghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_ortu) AS penghasilan_ortu,
        (SELECT penghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_wali) AS penghasilan_wali,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.prov_tempattinggal) AS prov_tempattinggal,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.kab_tempattinggal) AS kab_tempattinggal,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.kec_tempattinggal) AS kec_tempattinggal,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.des_tempattinggal) AS des_tempattinggal,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.provinsi_tempattinggalortu) AS provinsi_tempattinggalortu,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.kab_tempattinggalortu) AS kab_tempattinggalortu,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.kec_tempattinggalortu) AS kec_tempattinggalortu,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.prov_tempatlahir) AS prov_tempatlahir,
        (SELECT nama FROM wilayah_2020 WHERE kode=tb.kab_tempatlahir) AS kab_tempatlahir,
        (SELECT nama FROM wilayah_2020 WHERE kode=ts.provinsi_smta) AS prov_smta');
        $this->db->from('users u');
        $this->db->join('t_biodata tb', 'tb.username = u.username');
        $this->db->join('t_smta ts', 'ts.id = tb.nama_smta');
        $this->db->where('u.username', $username);
        $query = $this->db->get();
        return $query;
    }

    public function edit_pendaftar($username)
    {
        // $query = $this->db->query("SELECT * FROM t_biodata WHERE username=$username");
        // return $query;
        // $query = $this->db->query("SELECT tb.*, u.namafile AS fotoprofil FROM t_biodata tb LEFT JOIN upload_data u ON u.username=tb.username WHERE tb.username=$username ORDER BY u.id DESC LIMIT 1");
        $this->db->select('tb.*, u.email AS email, u.phone AS nohp,
        (SELECT ud.namafile FROM upload_data ud WHERE ud.username=tb.username ORDER BY id DESC LIMIT 1) AS fotoprofil,
        (SELECT p1.namaprodi FROM prodi p1 WHERE p1.idprodi=tb.prodipilihan1) AS pilihan1,
        (SELECT p2.namaprodi FROM prodi p2 WHERE p2.idprodi=tb.prodipilihan2) AS pilihan2,
        (SELECT p3.namaprodi FROM prodi p3 WHERE p3.idprodi=tb.prodipilihan3) AS pilihan3,
        
        (SELECT idstatusmenikah FROM statusmenikah WHERE idstatusmenikah=tb.statusmenikah) AS statusmenikah,
        (SELECT idjurusansmta FROM jurusansmta WHERE idjurusansmta=tb.jurusansmta) AS jurusansmta,
        (SELECT idjenissmta FROM jenissmta WHERE idjenissmta=tb.jenissmta) AS jenissmta,
        (SELECT idpekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ayah) AS pekerjaan_ayah,
        (SELECT idpekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_ibu) AS pekerjaan_ibu,
        (SELECT idpekerjaan FROM pekerjaanortu WHERE idpekerjaan=tb.pekerjaan_wali) AS pekerjaan_wali,
        (SELECT idpendidikan FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ayah) AS pendidikan_ayah,
        (SELECT idpendidikan FROM pendidikanortu WHERE idpendidikan=tb.pendidikan_ibu) AS pendidikan_ibu,
        (SELECT idpenghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_ortu) AS penghasilan_ortu,
        (SELECT idpenghasilan FROM penghasilanortu WHERE idpenghasilan=tb.penghasilan_wali) AS penghasilan_wali,
        (SELECT kode FROM wilayah_2020 WHERE kode=tb.prov_tempattinggal) AS prov_tempattinggal,
        (SELECT kode FROM wilayah_2020 WHERE kode=tb.provinsi_tempattinggalortu) AS provinsi_tempattinggalortu,
        (SELECT kode FROM wilayah_2020 WHERE kode=tb.prov_tempatlahir) AS prov_tempatlahir,
        (SELECT kode FROM wilayah_2020 WHERE kode=tb.prov_smta) AS prov_smta');
        $this->db->from('users u');
        $this->db->join('t_biodata tb', 'tb.username = u.username');
        $this->db->where('u.username', $username);
        $query = $this->db->get();
        return $query;
    }

    // public function edit_pendaftar($username)
    // {
    //     $query = $this->db->query("SELECT * FROM t_biodata WHERE username=$username");
    //     return $query;
    // }

    // hapus data pendaftar
    function hapus_data($idt_biodata)
    {
        $this->db->where("idt_biodata", $idt_biodata);
        $this->db->delete("t_biodata");
        return true;
    }

    function get_suku()
    {
        $query = $this->db->query("SELECT suku FROM t_biodata GROUP BY suku");
        return $query->result();
    }

    function count_by_suku($suku = NULL)
    {
        $query = $this->db->query("SELECT * FROM t_biodata WHERE suku='$suku'");
        return $query;
    } 


    public function get_status()
    {
        $query = $this->db->query("SELECT tb.status FROM t_biodata tb GROUP BY tb.status");
        return $query;
    }

    function count_by_status($status = NULL)
    {
        $query = $this->db->query("SELECT * FROM t_biodata tb WHERE tb.status='$status'");
        return $query;
    }

    public function get_rapor()
    {
        $query = $this->db->query("SELECT * FROM rapor");
        return $query;
    }

    public function get_pendaftar($id)
    {
        $query = $this->db->query("SELECT * FROM t_biodata tb WHERE tb.idt_biodata='$id'");
        return $query;
    }
}
