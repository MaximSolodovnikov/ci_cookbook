<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
    
    function user_verification($email, $pswd) {
        
        $this->db->where('email', $email);
        $this->db->where('pswd', $pswd);
        $this->db->select('email');
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    
    function user_info($email) {
        
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row_array();
    }
}