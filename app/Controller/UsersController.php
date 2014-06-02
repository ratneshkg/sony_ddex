<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        public function beforeFilter() {
            parent::beforeFilter();
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
            /**
             * @todo : use cake's pagingation in view to display records instead of current javascript pagination 
             */
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
        
        
        public function adminDashboard(){
        
        }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
                $user  = $this->User->getUserById($id);
		$this->set('user', $user);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    if($this->User->validatePassword($this->request->data['User']['password'],$this->request->data['User']['confirm_password'])) { 
                        $this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'),'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'error');
			}
                    }
                    else {
                        $this->Session->setFlash(__('Please enter valid Password'),'error');
                    }
			
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    $validPassword                    =false;
                    if(trim($this->request->data['User']['new_password'])=='') {
                        $validPassword                =true;
                    }
                    else {
                        if($this->User->validatePassword($this->request->data['User']['new_password'],$this->request->data['User']['confirm_password'])) { 
                            $validPassword                            = true;
                            $this->request->data ['User']['password'] = $this->request->data['User']['new_password'];
                        }
                        else {
                            $validPassword =false;
                        }
                    }
                        if($validPassword) {
                            if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'),'success');
				return $this->redirect(array('action' => 'index'));
                            } else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'error');
                            }
                        }
                        else {
                            	$this->Session->setFlash(__('Please enter valid Password'),'error');
                        }
		} else {
			$this->request->data = $this->User->getUserById($id);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'),'success');
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'),'error');
		}
		return $this->redirect(array('action' => 'index'));
	}

 /**
  * 
  * Login Method
  */
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
                        $this->Session->setFlash(__('Username or password is incorrect'),'default',array(),'auth');
                    }
                }
        }
    
/**
 * Logout method.
 */        
        public function logout() {
            $this->redirect($this->Auth->logout());
        }
}
