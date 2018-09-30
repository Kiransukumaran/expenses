<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expense1 extends CI_Controller
{
    public function getData()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            if ($this->input->post()) {
                $this->form_validation->set_rules('empid', 'EmployeeID', 'required');
                if ($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('msg-false', "All Fields are required");
                    $data = array(
                        'user' => $this->session->userdata('name')
                    );
                    $this->load->view('createcuti', $data);
                    return ($this->input->post());
                } else {
                  $name              = $this->input->post('name');
                $empid            = $this->input->post('empid');
                $dep         = $this->input->post('dep');
                $group       = $this->input->post('group');
                $date                = $this->input->post('date');
                $dateto              = $this->input->post('dateto');
                $days               = $this->input->post('days');
                $pur                = $this->input->post('pur');
                $add                = $this->input->post('add');
                $rec           = $this->input->post('rec');
                $sign1               = $this->input->post('sign1');
                $title1             = $this->input->post('title1');
                $sign2      = $this->input->post('sign2');
                $title2    = $this->input->post('title2');
                $sign3           = $this->input->post('sign3');
                $title3         = $this->input->post('title3');

                    // 'user' => $this->session->userdata('name'),
                    //     'user_id' => $this->session->userdata('userID')
                    $credntials = array(
                      'name' => $name,
                       'empid' => $empid,
                       'dep' => $dep,
                       'group' => $group,
                       'date' => $date,
                       'dateto' => $dateto,
                       'days' => $days,
                       'pur' => $pur,
                       'add' => $add,
                       'rec' => $rec,
                       'sign1' => $sign1,
                       'title1' => $title1,
                       'sign2' => $sign2,
                       'title2' => $title2,
                       'sign3' => $sign3,
                       'title3' => $title3,

                    );


                    $this->load->model('User_Model');
                    if ($this->User_Model->InsertDataCuti($credntials)) {
                        $this->session->set_flashdata('msg-true', "Data Stored Successfully");
                        $this->load->view('cpdf',$credntials);
                    } else {
                        $this->session->set_flashdata('msg-false', "Data Storage Failed duplicate emp id");
                        redirect(base_url() . "index.php/getcuti");
                    }
                }
            } else {
                $data = array(
                    'user' => $this->session->userdata('name')
                );
                $this->load->view('createcuti', $data);
            }
        } else {
            redirect(base_url());
        }
    }

    public function getDataEmp()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "employe") {
            if ($this->input->post()) {
                $this->form_validation->set_rules('empid', 'EmployeeID', 'required');
                if ($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('msg-false', "All Fields are required");
                    $data = array(
                        'user' => $this->session->userdata('name')
                    );
                    $this->load->view('createcutiemp', $data);
                    return ($this->input->post());
                } else {
                  $name              = $this->input->post('name');
                  $empid            = $this->input->post('empid');
                  $dep         = $this->input->post('dep');
                  $group       = $this->input->post('group');
                  $date                = $this->input->post('date');
                  $dateto              = $this->input->post('dateto');
                  $days               = $this->input->post('days');
                  $pur                = $this->input->post('pur');
                  $add                = $this->input->post('add');
                  $rec           = $this->input->post('rec');
                  $sign1               = $this->input->post('sign1');
                  $title1             = $this->input->post('title1');
                  $sign2      = $this->input->post('sign2');
                  $title2    = $this->input->post('title2');
                  $sign3           = $this->input->post('sign3');
                  $title3         = $this->input->post('title3');

                    // 'user' => $this->session->userdata('name'),
                    //     'user_id' => $this->session->userdata('userID')
                    $credntials = array(
                      'name' => $name,
                       'empid' => $empid,
                       'dep' => $dep,
                       'group' => $group,
                       'date' => $date,
                       'dateto' => $dateto,
                       'days' => $days,
                       'pur' => $pur,
                       'add' => $add,
                       'rec' => $rec,
                       'sign1' => $sign1,
                       'title1' => $title1,
                       'sign2' => $sign2,
                       'title2' => $title2,
                       'sign3' => $sign3,
                       'title3' => $title3,

                    );


                    $this->load->model('User_Model');
                    if ($this->User_Model->InsertDataCuti($credntials)) {
                        $this->session->set_flashdata('msg-true', "Data Stored Successfully");
                        $this->load->view('cpdf',$credntials);
                    } else {
                        $this->session->set_flashdata('msg-false', "Data Storage Failed duplicate emp id");
                        redirect(base_url() . "index.php/cutiemp");
                    }
                }
            } else {
                $data = array(
                    'user' => $this->session->userdata('name')
                );
                $this->load->view('createcutiemp', $data);
            }
        } else {
            redirect(base_url());
        }
    }
    public function thank()
    {
        $this->load->view('thankyou');
    }
}
