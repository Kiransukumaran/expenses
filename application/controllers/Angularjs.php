<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angularjs extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('url'));
        // $this->load->view('angularjs_view');
    }

    public function get_list() {
        $this->load->model(array('User_Model'));
        $data = $this->User_Model->getAll();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function get_list_cuti() {
        $this->load->model(array('User_Model'));
        $data = $this->User_Model->getAllCuti();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
}
