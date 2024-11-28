<?php
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Category_model');
        $this->load->library('session');
    }

    public function index($category_id = null) {
        $data['posts'] = $this->Post_model->get_posts($category_id);
        $data['categories'] = $this->Category_model->get_categories();
        $this->load->view('blog/index', $data);
    }
    
    // Additional methods for handling posts will go here...
}
