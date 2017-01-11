<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function index() {
        if (isset($_POST['deletesiswa'])) {
            $id = $this->input->post('id');
            $url = $this->input->post('url');
            $this->db->delete('siswadatainduk', ['id'=>  $id]);
            redirect($url);
        }  else {
            redirect('dashboard');
        }
    }
}