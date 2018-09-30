<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        if ($this->input->post()) {
            $to  = $this->input->post('to');
            $cc  = $this->input->post('cc');
            $sub = $this->input->post('sub');
            $msg = $this->input->post('msg');
            $path = 
            $this->email->initialize(array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.sendgrid.net',
                'smtp_user' => 'indotruckutama',
                'smtp_pass' => '!nd0truck',
                'smtp_port' => 587,
                'crlf' => "\r\n",
                'newline' => "\r\n"
            ));
            
            $this->email->from('data@indotruckutama.co.id', 'Indotruck Utama');
            $this->email->to($to);
            $this->email->cc($cc);
            $this->email->bcc('thejaslalatl@gmail.com');
            $this->email->subject($sub);
            $this->email->message($msg);
            $this->email->attach($path);
            $this->email->send();
            if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
                $this->load->view('email');
            } else {
                $this->load->view('emailemp');
            }
        } else {
            if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
                $this->load->view('email');
            } else {
                $this->load->view('emailemp');
            }
        }
    }
}