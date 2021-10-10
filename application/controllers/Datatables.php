<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatables extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->is_admin())
		{
			redirect('auth/login', 'refresh');
		}
		$this->load->model('M_wilayah');
        $this->load->model('M_pendaftar');
	}

	function provinsi_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_wilayah->get_datatables('provinsi');
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $prov) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $prov->kode;
            $row[] = $prov->namaprov;
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namaprovinsi="'.$prov->namaprov.'" data-kodeprovinsi="'.$prov->kode.'" data-kodewilayah="'.$prov->kode.'"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
            		<a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodeprovinsi="'.$prov->kode.'"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_wilayah->count_all('provinsi'),
            "recordsFiltered" => $this->M_wilayah->count_filtered('provinsi'),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));

    }

    function provinsi_save($id=NULL)
    {
    	$data = array(	'kode'  => $this->input->post('kodeprov'),
    					'nama'  => $this->input->post('namaprov'),
    				);

    	if($id==NULL)
    	{
    		$this->M_wilayah->add($data);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	} else {
    		$id = $this->input->post('kodewilayah');
    		$this->M_wilayah->edit($data, $id);
			$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	}
		
    }

    function provinsi_delete()
    {
    	$id = $this->input->post('kodeprov');
		$this->M_wilayah->delete($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    }  

    function kabupaten_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_wilayah->get_datatables('kabupaten');
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $kab) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $kab->kode;
            $row[] = $kab->namakab;
            $row[] = $kab->namaprov;
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namakabupaten="'.$kab->namakab.'" data-kodeprovinsi="'.substr($kab->kode,0,2).'" data-kodekabupaten="'.substr($kab->kode,3,2).'" data-kodewilayah="'.$kab->kode.'"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodekabupaten="'.$kab->kode.'"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_wilayah->count_all('kabupaten'),
            "recordsFiltered" => $this->M_wilayah->count_filtered('kabupaten'),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));

    } 

    function kabupaten_save($id=NULL)
    {
        $kode = $this->input->post('kodeprov').".".$this->input->post('kodekab');
        $data = array(  'kode'  => $kode,
                        'nama'  => $this->input->post('namakab'),
                    );

        if($id==NULL)
        {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }        
    }

    function kabupaten_delete()
    {
        $id = $this->input->post('kodekab');
        $this->M_wilayah->delete($id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    }  

    function kecamatan_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_wilayah->get_datatables('kecamatan');
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $kec) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $kec->kode;
            $row[] = $kec->namakec;
            $row[] = $kec->namakab;
            $row[] = $kec->namaprov;
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namakecamatan="'.$kec->namakec.'" data-kodeprovinsi="'.substr($kec->kode,0,2).'" data-kodekabupaten="'.substr($kec->kode,0,5).'" data-kodekecamatan="'.substr($kec->kode,6,2).'" data-kodewilayah="'.$kec->kode.'"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodeprovinsi="'.$kec->kode.'"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_wilayah->count_all('kecamatan'),
            "recordsFiltered" => $this->M_wilayah->count_filtered('kecamatan'),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    } 

    function kecamatan_save($id=NULL)
    {
        $kode = $this->input->post('kodekab').".".$this->input->post('kodekec');
        $data = array(  'kode'  => $kode,
                        'nama'  => $this->input->post('namakec'),
                    );

        if($id==NULL)
        {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }        
    }

    function desa_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_wilayah->get_datatables('desa');
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $des) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $des->kode;
            $row[] = $des->namades;
            $row[] = $des->namakec;
            $row[] = $des->namakab;
            $row[] = $des->namaprov;
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namaprovinsi="'.$des->namakec.'" data-kodeprovinsi="'.$des->kode.'" data-kodewilayah="'.$des->kode.'"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodeprovinsi="'.$des->kode.'"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_wilayah->count_all('desa'),
            "recordsFiltered" => $this->M_wilayah->count_filtered('desa'),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    } 

    function pendaftar_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_pendaftar->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $des) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = $no;
            $row[] = $des->username;
            $row[] = $des->namalengkap;
            $row[] = $des->nik;
            $row[] = $des->jeniskelamin;
            $row[] = $des->agama;
            $row[] = $des->suku;
            $row[] = $des->statusmenikah;
            $row[] = $des->prodipilihan1;
            $row[] = $des->prodipilihan2;
            $row[] = $des->prodipilihan3;
            $row[] = $des->prov_tempatlahir;
            $row[] = $des->kab_tempatlahir;
            $row[] = $des->lokasi_tempatlahir;
            $row[] = $des->tgl_lahir;
            $row[] = $des->negara_tempattinggal;
            $row[] = $des->prov_tempattinggal;
            $row[] = $des->kab_tempattinggal;
            $row[] = $des->kec_tempattinggal;
            $row[] = $des->des_tempattinggal;
            $row[] = $des->kodepos_tempattinggal;
            $row[] = $des->alamat_tempattinggal;
            $row[] = $des->alamatlain_tempattinggal;
            $row[] = $des->phone;
            $row[] = $des->email;
            $row[] = $des->tinggibadan;
            $row[] = $des->beratbadan;
            $row[] = '';
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_pendaftar->count_all(),
            "recordsFiltered" => $this->M_pendaftar->count_filtered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    } 
}