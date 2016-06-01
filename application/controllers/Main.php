<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $data['user'] = $this->session->userdata('email');
        
        $name = 'main';
        $this->template->page_view($name, $data);
    }
    
    public function add_recipe() {
        
        $data['user'] = $this->session->userdata('email');
        $this->form_validation->set_rules($this->rules_model->recipe);
        $data['error'] = '';
        
        if ($this->form_validation->run() && $this->input->post('add')) {
            
            $add['name'] = $this->input->post('name');
            $add['description'] = $this->input->post('description');
            
            $ingredients = $this->input->post('ingredients');
            $quantity = $this->input->post('quantity');
                        
            $recipe_id = $this->pages_model->add_recipe($add);
            
            
            foreach ($ingredients as $i) {
                
                foreach ($quantity as $q) {
                    
                    $ingredients_insert = array (
                        
                            'ingredients' => $i,
                            'quantity' => $q,
                            'recipe_id' => $recipe_id

                    );
                    
                }
            $this->pages_model->add_ingredients($ingredients_insert);    
                
            }
    
            redirect(base_url());
            
        } else {
            
            $name = 'recipe';
            $this->template->page_view($name, $data);
        }
    }
}
