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
        $this->load->model('Ion_auth_model');
        $this->load->library(['ion_auth', 'form_validation']);
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
        $id = $this->input->post('id');
        $this->Ion_auth_model->delete_user($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus')</script>";
        }
        echo "<script>window.location='" . site_url('user') . "';</script>";
    }

    // public function edit()
    // {
    //     $id = $this->input->post('iduser');
    //     $data['hasil'] = $id;
    //     $this->load->view('admin/formedituser', $data);
    // }

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

    public function edit_user($id, $data)
    {
        // $this->data['title'] = $this->lang->line('edit_user_heading');

        if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            redirect('auth', 'refresh');
        }

        $user = $this->ion_auth->user($id)->row();
        $groups = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result_array();

        //USAGE NOTE - you can do more complicated queries like this
        //$groups = $this->ion_auth->where(['field' => 'value'])->groups()->result_array();


        // validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'trim|required');
        $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'trim|required');
        $this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'trim');
        $this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'trim');

        if (isset($_POST) && !empty($_POST)) {
            // do we have a valid request?
            // if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
            //     show_error($this->lang->line('error_csrf'));
            // }

            // update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            if ($this->form_validation->run() === TRUE) {
                $data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                ];

                // update the password if it was posted
                if ($this->input->post('password')) {
                    $data['password'] = $this->input->post('password');
                }

                // Only allow updating groups if user is admin
                if ($this->ion_auth->is_admin()) {
                    // Update the groups user belongs to
                    $this->ion_auth->remove_from_group('', $id);

                    $groupData = $this->input->post('groups');
                    if (isset($groupData) && !empty($groupData)) {
                        foreach ($groupData as $grp) {
                            $this->ion_auth->add_to_group($grp, $id);
                        }
                    }
                }

                // check to see if we are updating the user
                // if ($this->ion_auth->update($user->id, $data)) {
                //     // redirect them back to the admin page if admin, or to the base url if non admin
                //     $this->session->set_flashdata('message', $this->ion_auth->messages());
                //     $this->redirect();
                // } else {
                //     // redirect them back to the admin page if admin, or to the base url if non admin
                //     $this->session->set_flashdata('message', $this->ion_auth->errors());
                //     $this->redirect();
                // }
            }
        }

        // display the edit user form
        // $this->data['csrf'] = $this->_get_csrf_nonce();

        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // pass the user to the view
        $this->data['user'] = $user;
        $this->data['groups'] = $groups;
        $this->data['currentGroups'] = $currentGroups;

        $this->data['first_name'] = [
            'name'  => 'first_name',
            'id'    => 'first_name',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('first_name', $user->first_name),
        ];
        $this->data['last_name'] = [
            'name'  => 'last_name',
            'id'    => 'last_name',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('last_name', $user->last_name),
        ];
        $this->data['company'] = [
            'name'  => 'company',
            'id'    => 'company',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('company', $user->company),
        ];
        $this->data['phone'] = [
            'name'  => 'phone',
            'id'    => 'phone',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('phone', $user->phone),
        ];
        $this->data['password'] = [
            'name' => 'password',
            'id'   => 'password',
            'type' => 'password'
        ];
        $this->data['password_confirm'] = [
            'name' => 'password_confirm',
            'id'   => 'password_confirm',
            'type' => 'password'
        ];

        // $this->_render_page('user/edit_user', $this->data);
        $this->load->view('admin/user', $data);
    }
}
