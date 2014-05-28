<?php


App::uses('AppController', 'Controller');

/**
 * Users controller
 
 *
 * @package       app.Controller
 * 
 */
class UsersController extends AppController {
    public $components=array('Session');
    
    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index(){
        
    }
    
    public function adminDashboard(){
        
    }
    
    public function login() {
        $this->layout='user';
        if ($this->request->is('post')) {
        if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(
                    __('Username or password is incorrect')
                    
                );
            }
      }
    }
}
