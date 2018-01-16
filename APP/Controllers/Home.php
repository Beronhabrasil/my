<?php

namespace APP\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author jonny
 */
use APP\Models\Model_home;

class Home {

    public $listar;
    public $insert;

    public function __construct() {
      
    }
    
    
   public function index(){       echo 'hello';}
   
     public function error(){       echo 'erro method not found';}

    public function Getlistar() {
        $this->listar = \APP\Models\Model_home::listar();
        return $this->listar;
    }

    public function Insert($data) {
        $data = array('berufe' => 'me',
            'ausweiss' => 11231231);
 $data = \APP\Models\Model_home::createit($data);
        return $data;
    }

}
