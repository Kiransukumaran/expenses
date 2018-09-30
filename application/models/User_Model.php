<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        
        
    }
    
    public function getAll() {
        $this->table_name = 'createsppd';
        return $this->db->from($this->table_name)->get()->result_array();
    }

    public function InsertData($data)
	{	
			if($this->db->insert('createsppd', $data)){
			return true;
		} else {
			return false;
		}
		
	}

     public function InsertDataCuti($data)
    {   
            if($this->db->insert('createcuti', $data)){
            return true;
        } else {
            return false;
        }
        
    }
     public function getAllCuti() {
        $this->table_name = 'createcuti';
        return $this->db->from($this->table_name)->get()->result_array();
    }
 
}