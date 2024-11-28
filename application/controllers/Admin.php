<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Post_model');
        $this->load->model('Category_model');
        $this->load->library('session');

        // Check if the user is logged in and is an admin
        if (!$this->session->userdata('user_id') || $this->session->userdata('role') !== 'admin') {
            redirect('auth/admin_login');
        }
    }

    public function index() {
        $this->load->view('admin/dashboard');
    }

    // User Management
    public function manage_users() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('admin/manage_users', $data);
    }

    public function create_user() {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'password' => '1234', // Set simple password for new users
                'role' => $this->input->post('role'),
            ];
            $this->User_model->create_user($data);
            redirect('admin/manage_users');
        }
        $this->load->view('admin/create_user');
    }

    public function edit_user($id) {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'role' => $this->input->post('role'),
            ];
            // If password is provided, use simple password
            if ($this->input->post('password')) {
                $data['password'] = '1234'; // Set simple password for editing
            }
            $this->User_model->update_user($id, $data);
            redirect('admin/manage_users');
        }
        $data['user'] = $this->User_model->get_user($id);
        $this->load->view('admin/edit_user', $data);
    }

    public function delete_user($id) {
        $this->User_model->delete_user($id);
        redirect('admin/manage_users');
    }

    // Post Management
    public function manage_posts() {
        $data['posts'] = $this->Post_model->get_posts();
        $this->load->view('admin/manage_posts', $data);
    }

    public function create_post() {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category_id'),
            ];
            $this->Post_model->create_post($data);
            redirect('admin/manage_posts');
        }
        $data['categories'] = $this->Category_model->get_categories();
        $this->load->view('admin/create_post', $data);
    }

    public function edit_post($id) {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category_id'),
            ];
            $this->Post_model->update_post($id, $data);
            redirect('admin/manage_posts');
        }
        $data['post'] = $this->Post_model->get_post($id);
        $data['categories'] = $this->Category_model->get_categories();
        $this->load->view('admin/edit_post', $data);
    }

    public function delete_post($id) {
        $this->Post_model->delete_post($id);
        redirect('admin/manage_posts');
    }

    // Category Management
    public function manage_categories() {
        $data['categories'] = $this->Category_model->get_categories();
        $this->load->view('admin/manage_categories', $data);
    }

    public function create_category() {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
            ];
            $this->Category_model->create_category($data);
            redirect('admin/manage_categories');
        }
        $this->load->view('admin/create_category');
    }

    public function edit_category($id) {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
            ];
            $this->Category_model->update_category($id, $data);
            redirect('admin/manage_categories');
        }
        $data['category'] = $this->Category_model->get_category($id);
        $this->load->view('admin/edit_category', $data);
    }

    public function delete_category($id) {
        $this->Category_model->delete_category($id);
        redirect('admin/manage_categories');
    }
}
