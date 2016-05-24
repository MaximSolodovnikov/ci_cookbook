<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $data['user'] = $this->session->userdata('email');
        
        echo 'Ololo' . $data['user'];
        
        $name = 'main';
        $this->template->page_view($name, $data);
    }
}
