<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller 
{
	public function home()
	{
		if ($this->session->userdata('logged_in'))
		{
			redirect(base_url()."index.php/dashboard");
		} else {
			$this->load->view('login');
		}
	}
	public function login()
	{
		if ($this->input->post())
		{
			$this->form_validation->set_rules('username', 'UserName', 'required|alpha_dash');
			$this->form_validation->set_rules('password', 'Password', 'required|alpha_dash');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('errorMsg', 'Invalid Username or Password');
				redirect(base_url());
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$credentials = array(
					'username' => $username,
					'password' => md5($password),
					 );
				$this->load->model('LoginModel');
				if ($this->LoginModel->validateUser($credentials)) {
					$UserData = $this->LoginModel->UserDetails($credentials);
					$sessionData = array(
						'id' => $UserData['0']->sl_no,
						'name' => $UserData['0']->name,
						'role' => $UserData['0']->role,
						'username' => $UserData['0']->username,
						'logged_in' => TRUE,
						 );
					$this->session->set_userdata($sessionData);
					if ($sessionData['role'] == 'admin') {
						redirect(base_url()."index.php/admin");
					} else {
						redirect(base_url()."index.php/dashboard");
					}
					
				} else {
					$this->session->set_flashdata('errorMsg', 'Invalid Username or Password');
					redirect(base_url());
				}
			}
		} else {
			redirect(base_url());
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}