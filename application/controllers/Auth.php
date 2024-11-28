<?php
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function register() {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'password' => '1234', // Set a simple password directly
                'role' => 'user'
            ];
            $this->User_model->register($data);
            redirect('auth/login');
        }
        $this->load->view('auth/register');
    }

    public function login() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->login($username, $password);

            if ($user) {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('role', $user->role);
                redirect($user->role === 'admin' ? 'admin/dashboard' : 'blog/index');
            } else {
                $this->session->set_flashdata('error', 'Invalid login credentials');
                redirect('auth/login');
            }
        }
        $this->load->view('auth/login');
    }

    public function admin_login() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->login($username, $password);

            if ($user && $user->role === 'admin') {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('role', $user->role);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid admin login credentials');
                redirect('auth/admin_login');
            }
        }
        $this->load->view('auth/admin_login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
