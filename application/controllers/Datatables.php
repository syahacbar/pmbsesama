<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatables extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        if ($this->ion_auth->in_group('members')) {
            redirect('auth/login', 'refresh');
        }
        $this->load->model(['M_wilayah', 'M_pendaftar', 'M_prodi', 'M_register','M_namasmta']);
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
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namaprovinsi="' . $prov->namaprov . '" data-kodeprovinsi="' . $prov->kode . '" data-kodewilayah="' . $prov->kode . '"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
            		<a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodeprovinsi="' . $prov->kode . '"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
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

    function provinsi_save($id = NULL)
    {
        $data = array(
            'kode'  => $this->input->post('kodeprov'),
            'nama'  => $this->input->post('namaprov'),
        );

        if ($id == NULL) {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', 'Data Berhasil ditambahkan');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', 'Data Berhasil diubah');
        }
    }

    function provinsi_delete()
    {
        $id = $this->input->post('kodeprov');
        $this->M_wilayah->delete($id);
		echo json_encode(array("statusCode" => 1));

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
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namakabupaten="' . $kab->namakab . '" data-kodeprovinsi="' . substr($kab->kode, 0, 2) . '" data-kodekabupaten="' . substr($kab->kode, 3, 2) . '" data-kodewilayah="' . $kab->kode . '"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodekabupaten="' . $kab->kode . '"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
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

    function kabupaten_save($id = NULL)
    {
        $kode = $this->input->post('kodeprov') . "." . $this->input->post('kodekab');
        $data = array(
            'kode'  => $kode,
            'nama'  => $this->input->post('namakab'),
        );

        if ($id == NULL) {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', 'Data Berhasil ditambahkan');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', 'Data Berhasil diubah');
        }
    }

    function kabupaten_delete()
    {
        $id = $this->input->post('kodekab');
        $this->M_wilayah->delete($id);
		echo json_encode(array("statusCode" => 1));
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
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namakecamatan="' . $kec->namakec . '" data-kodeprovinsi="' . substr($kec->kode, 0, 2) . '" data-kodekabupaten="' . substr($kec->kode, 0, 5) . '" data-kodekecamatan="' . substr($kec->kode, 6, 2) . '" data-kodewilayah="' . $kec->kode . '"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodekecamatan="' . $kec->kode . '"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
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

    function kecamatan_save($id = NULL)
    {
        $kode = $this->input->post('kodekab') . "." . $this->input->post('kodekec');
        $data = array(
            'kode'  => $kode,
            'nama'  => $this->input->post('namakec'),
        );

        if ($id == NULL) {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', 'Data Berhasil ditambahkan');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', 'Data Berhasil diubah');
        }
    }

    // Update 22 Aprill
    function kecamatan_delete()
    {
        $id = $this->input->post('kodekec');
        $this->M_wilayah->delete($id);
		echo json_encode(array("statusCode" => 1));
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
            $row[] = '<a href="#" class="btn btn-info btn-icon-split btn-sm editdata" data-namaprovinsi="' . $des->namakec . '" data-kodeprovinsi="' . $des->kode . '" data-kodewilayah="' . $des->kode . '"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-kodeprovinsi="' . $des->kode . '"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a>';
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
    

    // Update 22 April
    function desa_save($id = NULL)
    {
        $kode = $this->input->post('kodekec') . "." . $this->input->post('kodedes');
        $data = array(
            'kode'  => $kode,
            'nama'  => $this->input->post('kodedes'),
        );

        if ($id == NULL) {
            $this->M_wilayah->add($data);
            $this->session->set_flashdata('notif', 'Data Berhasil ditambahkan');
        } else {
            $id = $this->input->post('kodewilayah');
            $this->M_wilayah->edit($data, $id);
            $this->session->set_flashdata('notif', 'Data Berhasil diubah');
        }
    }

    // Update 22 April
    function desa_delete()
    {
        $id = $this->input->post('kodewilayah');
        $this->M_wilayah->delete($id);
        echo json_encode(array("statusCode" => 1));
    }


    function proseslaporan($idt_biodata)
    {
        $status = $this->input->post('status');
        $this->M_register->proseslaporan($idt_biodata, $status);
    }

    function pendaftar_list()
    {


        header('Content-Type: application/json');
        $list = $this->M_pendaftar->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $pes) {
            if ($pes->status == "Diterima") {
                $classbtnTerima = "disabled";
                $classbtnTolak = "";
            } else if ($pes->status == "Ditolak") {
                $classbtnTerima = "";
                $classbtnTolak = "disabled";
            } else if ($pes->status == "Menunggu") {
                $classbtnTerima = "";
                $classbtnTolak = "";
            }

            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] = '<button class="btn btn-sm btn-info btnTerima ' . $classbtnTerima . '" idt_biodata="' . $pes->username . '" title="Terima" value="' . $pes->idt_biodata . '"><i class="fa fa-check-circle"></i></button>&nbsp;<button class="btn btn-sm btn-danger btnTolak ' . $classbtnTolak . '" idt_biodata="' . $pes->username . '" title="Tolak" value="' . $pes->idt_biodata . '"><i class="fa fa-ban"></i></button>';
            $row[] = $no;
            $row[] = $pes->status;
            $row[] = $pes->username;
            $row[] = $pes->namalengkap;
            $row[] = $pes->pilihan1;
            $row[] = $pes->pilihan2;
            $row[] = $pes->pilihan3;
            $row[] = $pes->suku;
            $row[] = '
            <a href="' . site_url('administrator/kartupendaftaran/') . $pes->username . '" target="_blank" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Kartu Pendaftar"><i class="fa fa-user"></i></a>&nbsp;
            <a href="' . site_url('administrator/kartupeserta/') . $pes->username . '" target="_blank" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Kartu Peserta"><i class="fa fa-print"></i></a>&nbsp;
            <a href="" data-username="' . $pes->username . '" data-toggle="modal" data-target="#modalDetail" class="btn btn-sm btn-info btnDetail" data-toggle="tooltip" data-placement="top" title="Detail Pendaftar"><i class="fa fa-eye"></i></a>&nbsp;
            <a href="" data-username="' . $pes->username . '" data-toggle="modal" data-target="#modalEdit"  class="btn btn-sm btn-primary btnEdit" data-toggle="tooltip" data-placement="top" title="Ubah Pendaftar"><i class="fa fa-edit"></i></a>&nbsp;
            <button class="btn btn-sm btn-danger btnHapus" idt_biodata="' . $pes->idt_biodata . '"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Pendaftar"></i></button>&nbsp;
            ';
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

    public function detailpendaftar($username)
    {
        $data['data_pendaftar'] = $this->M_pendaftar->data_pendaftar($username)->result_array();
        $this->load->view('admin/detail_pendaftar', $data);
    } 

    public function editpendaftar($username)
    {
        $data = $this->M_pendaftar->edit_pendaftar($username)->row();

        echo json_encode($data); 
    }

    public function deletependaftar()
    {
        $idt_biodata = $this->input->post('idt_biodata');
        $this->M_pendaftar->hapus_data($idt_biodata);
        echo json_encode(array("statusCode" => 1));
    }

    function smta_list()
    {
        header('Content-Type: application/json');
        $list = $this->M_namasmta->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        //looping data smta
        foreach ($list as $smta) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $smta->nama_smta;
            $row[] = $smta->npsn_smta;
            $row[] = $smta->alamat_smta;
            $row[] = '
            <a data-idsmta="' . $smta->id . '" data-toggle="modal" data-target="#editDataSMTA"  class="btn btn-sm btn-info btnEdit" data-placement="top" title="Ubah SMTA"><i class="fa fa-edit"></i></a>&nbsp;
            <a data-idsmta="' . $smta->id . '" class="btn btn-sm btn-danger btnHapus" data-toggle="tooltip" data-placement="top" title="Hapus SMTA"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->M_namasmta->count_all(),
            "recordsFiltered" => $this->M_namasmta->count_filtered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }

    public function editsmta($idsmta)
    {
        $data = $this->M_namasmta->edit_smta($idsmta)->row();

        echo json_encode($data);
    }
}
