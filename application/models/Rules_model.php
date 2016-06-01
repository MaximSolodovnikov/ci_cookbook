<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {
    
    /*Rules for adding recipe*/
    public $recipe = array (
        
        array
            (
                'field' => 'name',
                'label' => 'Название рецепта',
                'rules' => 'required'
            ),
        
        array
            (
                'field' => 'description',
                'label' => 'Описание рецепта',
                'rules' => 'required'
            )
        );
}