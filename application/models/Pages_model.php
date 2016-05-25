<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
    
    function user_verification($email, $pswd) 
    {
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
    
    function add_recipe($data)
    {
        $this->db->insert('recipes', $data);
        $return_id = $this->db->insert_id();
        return $return_id;
    }
    
    function add_ingredients($data)
    {
        $this->db->insert('ingredients', $data);
    }
}