<?php


App::uses('AppController', 'Controller');

/**
 * Users controller
 
 *
 * @package       app.Controller
 * 
 */
class UsersController extends AppController {

    public function index(){
        
    }
    
    public function adminDashboard(){
         $this->layout='admin';
    }
}
