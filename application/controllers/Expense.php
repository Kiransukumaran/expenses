<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expense extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata("logged_in")) {
            $data = array(
                'name' => $this->session->userdata('name'),
                 );
            $this->load->view('Dashboard', $data);
        } else {
            redirect(base_url());
        }
    }
    public function adminHome()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            $data = array(
                'user' => $this->session->userdata('name')
            );
            $this->load->view('AdminDashboard', $data);
        } else {
            redirect(base_url());
        }
    }

    public function viewDataSppd()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            $this->load->view('viewsppd');
        }
    }

    public function viewDataCuti()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            $this->load->view('viewcuti');
        }
    }
    public function createCuti()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            $this->load->view('createcuti');
        }
    }

    public function getData()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            if ($this->input->post()) {
                $this->form_validation->set_rules('emp', 'EmployeeID', 'required');
                if ($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('msg-false', "All Fields are required");
                    $data = array(
                        'user' => $this->session->userdata('name')
                    );
                    $this->load->view('createsppd', $data);
                    return ($this->input->post());
                } else {
                    $locbr              = $this->input->post('locbr');
                    $month            = $this->input->post('month');
                    $year         = $this->input->post('year');
                    $form       = $this->input->post('form');
                    $name                = $this->input->post('name');
                    $emp              = $this->input->post('emp');
                    $rank               = $this->input->post('rank');
                    $title                = $this->input->post('title');
                    $loc                = $this->input->post('loc');
                    $dep           = $this->input->post('dep');
                    $desi               = $this->input->post('desi');
                    $from             = $this->input->post('from');
                    $purp      = $this->input->post('purp');
                    $follow    = $this->input->post('follow');
                    $datedep           = $this->input->post('datedep');
                    $dateret         = $this->input->post('dateret');
                    $typetra              = $this->input->post('typetra');
                    $lagg      = $this->input->post('lagg');
                    $pendcas         = $this->input->post('pendcas');
                    $group1 = $this->input->post('group1');
                    $brasit      = $this->input->post('brasit');
                    $ware         = $this->input->post('ware');
                    $busi          = $this->input->post('busi');
                    $cost      = $this->input->post('cost');
                    $bppmoney        = $this->input->post('bppmoney');
                    $note1               = $this->input->post('note1');
                    $local             = $this->input->post('local');
                    $note2      = $this->input->post('note2');
                    $out      = $this->input->post('out');
                    $note3      = $this->input->post('note3');
                    $flight       = $this->input->post('flight');
                    $note4               = $this->input->post('note4');
                    $meals              = $this->input->post('meals');
                    $note5              = $this->input->post('note5');
                    $cost1               = $this->input->post('cost1');
                    $note6               = $this->input->post('note6');
                    $others              = $this->input->post('others');
                    $note7              = $this->input->post('note7');
                    $alltotal               = $this->input->post('alltotal');
                    $comcost               = $this->input->post('comcost');
                    $note8              = $this->input->post('note8');
                    $custcost              = $this->input->post('custcost');
                    $note9               = $this->input->post('note9');
                    $flight1               = $this->input->post('flight1');
                    $note10              = $this->input->post('note10');
                    $subfrom              = $this->input->post('subfrom');
                    $sign               = $this->input->post('sign');
                    $title1               = $this->input->post('title1');
                    $sign1               = $this->input->post('sign1');
                    $title2               = $this->input->post('title2');
                    $sign3               = $this->input->post('sign3');
                    $sign4               = $this->input->post('sign4');

                    // 'user' => $this->session->userdata('name'),
                    //     'user_id' => $this->session->userdata('userID')
                    $credntials = array(
                        'locbr' => $locbr,
                         'month' => $month,
                         'year' => $year,
                         'form' => $form,
                         'name' => $name,
                         'emp' => $emp,
                         'rank' => $rank,
                         'title' => $title,
                         'loc' => $loc,
                         'dep' => $dep,
                         'desi' => $desi,
                         'from' => $from,
                         'purp' => $purp,
                         'follow' => $follow,
                         'datedep' => $datedep,
                         'dateret' => $dateret,
                         'typetra' => $typetra,
                         'lagg' => $lagg,
                         'pendcas' => $pendcas,
                         'group1' => $group1,
                         'brasit' => $brasit,
                         'ware' => $ware,
                         'busi' => $busi,
                         'bppmoney' => $bppmoney,
                         'note1' => $note1,
                         'local' => $local,
                         'note2' => $note2,
                         'out' => $out,
                         'note3' => $note3,
                         'flight' => $flight,
                         'note4' => $note4,
                         'meals' => $meals,
                         'note5' => $note5,
                         'cost1' => $cost1,
                         'note6' => $note6,
                         'others' => $others,
                         'note7' => $note7,
                         'alltotal' => $alltotal,
                         'comcost' => $comcost,
                         'note8' => $note8,
                         'custcost' => $custcost,
                         'note9' => $note9,
                         'flight1' => $flight1,
                         'note10' => $note10,
                         'subfrom' => $subfrom,
                         'sign' => $sign,
                         'title1' => $title1,
                         'sign1' => $sign1,
                         'title2' => $title2,
                         'sign3' => $sign3,
                         'sign4' => $sign4

                    );
                    $this->session->set_userdata($credntials);


                    $this->load->model('User_Model');
                    if ($this->User_Model->InsertData($credntials)) {
                        $this->session->set_flashdata('msg-true', "Data Stored Successfully");
                        $this->load->view('spdf',$credntials);
                    } else {
                        $this->session->set_flashdata('msg-false', "Data Storage Failed duplicate emp id");
                        redirect(base_url() . "index.php/get");
                    }
                }
            } else {
                $data = array(
                    'user' => $this->session->userdata('name')
                );
                $this->load->view('createsppd', $data);
            }
        } else {
            redirect(base_url());
        }
    }

    public function getDataEmp()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "employe") {
            if ($this->input->post()) {
                $this->form_validation->set_rules('emp', 'EmployeeID', 'required');
                if ($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('msg-false', "All Fields are required");
                    $data = array(
                        'user' => $this->session->userdata('name')
                    );
                    $this->load->view('createsppdemp', $data);
                    return ($this->input->post());
                } else {
                    $locbr              = $this->input->post('locbr');
                    $month            = $this->input->post('month');
                    $year         = $this->input->post('year');
                    $form       = $this->input->post('form');
                    $name                = $this->input->post('name');
                    $emp              = $this->input->post('emp');
                    $rank               = $this->input->post('rank');
                    $title                = $this->input->post('title');
                    $loc                = $this->input->post('loc');
                    $dep           = $this->input->post('dep');
                    $desi               = $this->input->post('desi');
                    $from             = $this->input->post('from');
                    $purp      = $this->input->post('purp');
                    $follow    = $this->input->post('follow');
                    $datedep           = $this->input->post('datedep');
                    $dateret         = $this->input->post('dateret');
                    $typetra              = $this->input->post('typetra');
                    $lagg      = $this->input->post('lagg');
                    $pendcas         = $this->input->post('pendcas');
                    $group1 = $this->input->post('group1');
                    $brasit      = $this->input->post('brasit');
                    $ware         = $this->input->post('ware');
                    $busi          = $this->input->post('busi');
                    $cost      = $this->input->post('cost');
                    $bppmoney        = $this->input->post('bppmoney');
                    $note1               = $this->input->post('note1');
                    $local             = $this->input->post('local');
                    $note2      = $this->input->post('note2');
                    $out      = $this->input->post('out');
                    $note3      = $this->input->post('note3');
                    $flight       = $this->input->post('flight');
                    $note4               = $this->input->post('note4');
                    $meals              = $this->input->post('meals');
                    $note5              = $this->input->post('note5');
                    $cost1               = $this->input->post('cost1');
                    $note6               = $this->input->post('note6');
                    $others              = $this->input->post('others');
                    $note7              = $this->input->post('note7');
                    $alltotal               = $this->input->post('alltotal');
                    $comcost               = $this->input->post('comcost');
                    $note8              = $this->input->post('note8');
                    $custcost              = $this->input->post('custcost');
                    $note9               = $this->input->post('note9');
                    $flight1               = $this->input->post('flight1');
                    $note10              = $this->input->post('note10');
                    $subfrom              = $this->input->post('subfrom');
                    $sign               = $this->input->post('sign');
                    $title1               = $this->input->post('title1');
                    $sign1               = $this->input->post('sign1');
                    $title2               = $this->input->post('title2');
                    $sign3               = $this->input->post('sign3');
                    $sign4               = $this->input->post('sign4');

                    // 'user' => $this->session->userdata('name'),
                    //     'user_id' => $this->session->userdata('userID')
                    $credntials = array(
                        'locbr' => $locbr,
                         'month' => $month,
                         'year' => $year,
                         'form' => $form,
                         'name' => $name,
                         'emp' => $emp,
                         'rank' => $rank,
                         'title' => $title,
                         'loc' => $loc,
                         'dep' => $dep,
                         'desi' => $desi,
                         'from' => $from,
                         'purp' => $purp,
                         'follow' => $follow,
                         'datedep' => $datedep,
                         'dateret' => $dateret,
                         'typetra' => $typetra,
                         'lagg' => $lagg,
                         'pendcas' => $pendcas,
                         'group1' => $group1,
                         'brasit' => $brasit,
                         'ware' => $ware,
                         'busi' => $busi,
                         'bppmoney' => $bppmoney,
                         'note1' => $note1,
                         'local' => $local,
                         'note2' => $note2,
                         'out' => $out,
                         'note3' => $note3,
                         'flight' => $flight,
                         'note4' => $note4,
                         'meals' => $meals,
                         'note5' => $note5,
                         'cost1' => $cost1,
                         'note6' => $note6,
                         'others' => $others,
                         'note7' => $note7,
                         'alltotal' => $alltotal,
                         'comcost' => $comcost,
                         'note8' => $note8,
                         'custcost' => $custcost,
                         'note9' => $note9,
                         'flight1' => $flight1,
                         'note10' => $note10,
                         'subfrom' => $subfrom,
                         'sign' => $sign,
                         'title1' => $title1,
                         'sign1' => $sign1,
                         'title2' => $title2,
                         'sign3' => $sign3,
                         'sign4' => $sign4

                    );
                    $this->session->set_userdata('cred',$emp);


                    $this->load->model('User_Model');
                    if ($this->User_Model->InsertData($credntials)) {
                        $this->session->set_flashdata('msg-true', "Data Stored Successfully");
                        $this->load->view('spdf',$credntials);
                    } else {
                        $this->session->set_flashdata('msg-false', "Data Storage Failed duplicate emp id");
                        redirect(base_url() . "index.php/getemp");
                    }
                }
            } else {
                $data = array(
                    'user' => $this->session->userdata('name')
                );
                $this->load->view('createsppdemp', $data);
            }
        } else {
            redirect(base_url());
        }
    }
    public function thank()
    {
        $this->load->view('thanku');
    }
}
