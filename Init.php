<?php

namespace init;

include_once '/APP/Config.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Init
 *
 * @author jonny
 */
class INIT {

    /** @var null The controller */
    private $controller = null;

    /** @var null The method (of the above controller), often also named "action" */
    private $url_action = null;

    /** @var null Parameter one */
    private $url_parameter_1 = null;

    /** @var null Parameter two */
    private $url_parameter_2 = null;

    /** @var null Parameter three */
    private $url_parameter_3 = null;

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct() {

        echo 'Init works';
// create array with URL parts in $url
        $this->splitUrl();
        // check for controller: does such a controller exist ?
    }

    public function splitUrl() {
        if (isset($_GET['url'])) {
            // split URL
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            print_r($url);

            $this->controller = (isset($url[0]) ? $url[0] : NULL);
            $this->url_action = (isset($url[1])) ? $url[1] : NULL;
             $controller_class = "\APP\Controllers\\".$this->controller;
        if(!class_exists($controller_class))
         {
            (new \APP\Controllers\Error())->index();
            return;
            
            if (!method_exists($controller_class, $this->url_action)) {
            (new \APP\Controllers\Error())->index();
            ;
              echo 'Method not found';
            }
        
            
            }else{    $controller_class_name = new $controller_class();
             $controller_class_name->{$this->url_action}();             }
 
         }
         
       
        }
    }
    
   


