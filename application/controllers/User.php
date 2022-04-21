<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		}
        $this->load->model('M_user');
        $this->load->model('M_register');
        $this->load->model('Ion_auth_model');
        $this->load->library('ion_auth');
    }

    public function reset_password($userawal,$userakhir)
    {
        for ($i=$userawal; $i<=$userakhir; $i++)
        {
            //update di tabel users
            $this->ion_auth->reset_password($i, 'SESAMA2022');

            $this->M_register->update_biodata($i,array('pass'=>'SESAMA2022'));

            echo "Reset pass user ".$i." berhasil ! <br>";
        }
        
    }

    public function index()
    {
        //$data['pengguna'] = $this->M_user->get_all(); 
        $data['pengguna'] = $this->ion_auth->users('sekolah')->result();
        $data['grup'] = $this->M_user->group();

        $data['_view'] = 'admin/user';
        $this->load->view('admin/layout', $data);
    }

    public function create_user()
    {
        $this->load->model('M_user');

        $this->data['title'] = $this->lang->line('create_user_heading');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('user', 'refresh');
        }

        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;

        
            $email = strtolower($this->input->post('email'));
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            ];

            $group = array("3");
        
        if ($this->ion_auth->register($identity, $password, $email, $additional_data, $group)) {
            // check to see if we are creating the user
            // redirect them back to the admin page
		    $this->session->set_flashdata('notif', 'User Berhasil ditambahkan');
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("user", 'refresh');
        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['first_name'] = [
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('first_name'),
                'class' => 'form-control',
            ];
            $this->data['last_name'] = [
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('last_name'),
                'class' => 'form-control',
            ];
            $this->data['identity'] = [
                'name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
                'class' => 'form-control',
            ];
            $this->data['email'] = [
                'name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'value' => $this->form_validation->set_value('email'),
                'class' => 'form-control',
            ];
            $this->data['company'] = [
                'name' => 'company',
                'id' => 'company',
                'type' => 'text',
                'value' => $this->form_validation->set_value('company'),
                'class' => 'form-control',
            ];
            $this->data['phone'] = [
                'name' => 'phone',
                'id' => 'phone',
                'type' => 'text',
                'value' => $this->form_validation->set_value('phone'),
                'class' => 'form-control',
            ];
            $this->data['password'] = [
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password'),
                'class' => 'form-control',
            ];
            $this->data['password_confirm'] = [
                'name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
                'class' => 'form-control',
            ];

            // 	Ambild ata user
            // $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            $this->data['users'] = $this->ion_auth->users()->result();
            foreach ($this->data['users'] as $k => $user) {
                $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }

            // update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            $groups = $this->ion_auth->groups()->result_array();
            $this->data['groups'] = $groups;

            $this->data['pengguna'] = $this->M_user->get_all();
            $data['grup'] = $this->M_user->group();

            $this->data['_view'] = 'admin/user';
            $this->load->view('admin/layout', $this->data);

            //$this->_render_page('auth' . DIRECTORY_SEPARATOR . 'create_user', $this->data);
        }
    }

    public function hapus_user()
    {
        $id = $this->input->post('iduser');
        if ($this->ion_auth->delete_user($id))
        {
            echo json_encode(array('status' => TRUE));
        } else {
            echo json_encode(array('status' => FALSE));
        }
    }

    public function nonaktifkanuser()
    {
        $id = $this->input->post('iduser');
        if ($this->ion_auth->is_admin()) {
            $this->ion_auth->deactivate($id);
        }
        echo json_encode(array('status' => TRUE));
    }

    public function aktifkanuser()
    {
        $id = $this->input->post('iduser');
        if ($this->ion_auth->is_admin()) {
            $this->ion_auth->activate($id);
        }
        echo json_encode(array('status' => TRUE));
    }

    public function edit_admin()
    {
        if (isset($_POST) && !empty($_POST)) 
        {
            $iduser = $this->input->post('iduser');
            $data = [
                'first_name' => $this->input->post('firstname'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            ];
                // update the password if it was posted
            if ($this->input->post('password')) {
                $data['password'] = $this->input->post('password');
            }

            if ($this->ion_auth->update($iduser, $data)) {
                echo json_encode(array("statusCode" => 1));
            } else {
                echo json_encode(array("statusCode" => 0));
            }
        }        
    }

    public function edit_operator()
    {
        if (isset($_POST) && !empty($_POST)) 
        {
            $idoperator = $this->input->post('idoperator');
            $data = [
                'first_name' => $this->input->post('namadepan'),
                'company' => $this->input->post('perusahan'),
                'phone' => $this->input->post('nohp'),
                'email' => $this->input->post('surel')
            ];
                // update the password if it was posted
            if ($this->input->post('katasandi')) {
                $data['password'] = $this->input->post('katasandi');
            }

            if ($this->ion_auth->update($idoperator, $data)) {
                echo json_encode(array("statusCode" => 1));
            } else {
                echo json_encode(array("statusCode" => 0));
            }
        }        
    }
}
