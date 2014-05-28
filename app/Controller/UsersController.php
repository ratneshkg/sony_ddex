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
        if($this->Auth->user()){
            $this->redirect(array('controller'=>'users','action'=>'adminDashboard'));
        }
        $this->layout='user';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                 $this->redirect($this->Auth->redirectUrl());
            } 
            else {
                $this->Session->setFlash(
                    __('Username or password is incorrect'),
                       'default',
                        array(),
                        'auth'
                );
            }
        }
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
