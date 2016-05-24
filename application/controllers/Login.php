<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if ($this->input->post('enter')) {
            
            if (!$this->input->post('email') || !$this->input->post('pswd')) {
                
                $name = 'login';
                $this->template->login_view($name);
                
            } else {
                
                $email = $this->input->post('email');
                $pswd = $this->input->post('pswd');
                
                $autorization = $this->pages_model->user_verification($email, $pswd);
                
                if ($autorization) {
                    
                    $data['user'] = $this->pages_model->user_info($email);
                    $ses_data = array(
                        
                        'user' => $email
                    );
                
                    $this->session->set_userdata($ses_data);
                    redirect(base_url());
                
                } else {
                
                $name = 'login';
                $this->template->login_view($name);
                }
            }
        } else {
            
            $name = 'main';
            $this->template->page_view($name);
        }
    }
    
    public function logout() {
        
        $this->session->unset_userdata('email');
        redirect(base_url());
    }
}
