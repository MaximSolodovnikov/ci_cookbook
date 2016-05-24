<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

class Template {

    function page_view($name, $data)
    {
        $CI =& get_instance();
        
        $CI->load->view('blocks/scripts_view');
        
        if(empty($data['user'])) {
            $CI->load->view('blocks/header_view', $data);
        }
        else {
            $CI->load->view('blocks/authorization_view', $data);
        }
        
        $CI->load->view('blocks/leftsidebar_view');
        $CI->load->view($name . '_view');
        $CI->load->view('blocks/footer_view');
    }
    
    function login_view($name)
    {
        $CI =& get_instance();

        $CI->load->view($name . '_view');
    }

}