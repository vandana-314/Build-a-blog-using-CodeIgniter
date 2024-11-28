<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
    public function get_posts() {
        return $this->db->get('posts')->result();
    }

    public function get_post($id) {
        return $this->db->get_where('posts', array('id' => $id))->row();
    }

    public function create_post($data) {
        return $this->db->insert('posts', $data);
    }

    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    public function delete_post($id) {
        return $this->db->delete('posts', array('id' => $id));
    }
}
