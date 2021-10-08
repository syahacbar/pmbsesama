<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

	public function index()
	{
		$data['_view'] = 'admin/dashboard';
		$this->load->view('admin/layout',$data);
	}

	public function ref_agama()
	{
		$this->load->model('M_agama');

		if ($this->uri->segment(3) == "")
		{
			$data['linkform'] = "administrator/ref_agama/add";
			$data['agama'] = $this->M_agama->get_all();

		} 
		else if ($this->uri->segment(3) == "add")
		{
			$data = array(
            'agama'  => $this->input->post('agama'),
	        );

	        $this->M_agama->add($data);

	        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('administrator/ref_agama');

		}
		else if ($this->uri->segment(3) == "edit")
		{
			$id = $this->input->post('idagama');
	        $data = array(
	            'agama'  => $this->input->post('agama')
	        );
	        $this->M_agama->edit($data,$id);
	        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('administrator/ref_agama');

		}
		else if($this->uri->segment(3) == "delete")
		{
			$id = $this->input->post('idagama');
	        $this->M_agama->delete($id);
	        redirect('administrator/ref_agama');
		}

		$data['_view'] = 'admin/ref_agama';
		$this->load->view('admin/layout',$data);

	}
	public function ref_statusmenikah()
	{
		$this->load->model('M_agama');

		if ($this->uri->segment(3) == "")
		{
			$data['linkform'] = "administrator/ref_agama/add";
			$data['agama'] = $this->M_agama->get_all();

		} 
		else if ($this->uri->segment(3) == "add")
		{
			$data = array(
            'agama'  => $this->input->post('agama'),
	        );

	        $this->M_agama->add($data);

	        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('administrator/ref_agama');

		}
		else if ($this->uri->segment(3) == "edit")
		{
			$id = $this->input->post('idagama');
	        $data = array(
	            'agama'  => $this->input->post('agama')
	        );
	        $this->M_agama->edit($data,$id);
	        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('administrator/ref_agama');

		}
		else if($this->uri->segment(3) == "delete")
		{
			$id = $this->input->post('idagama');
	        $this->M_agama->delete($id);
	        redirect('administrator/ref_agama');
		}

		$data['_view'] = 'admin/ref_agama';
		$this->load->view('admin/layout',$data);

	}
}
