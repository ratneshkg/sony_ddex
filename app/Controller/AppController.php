<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
/**
 *
 * Components declaration.
 */
    public $components = array(
        'Cookie',
    'Auth' => array(
        'loginAction' => array(
            'controller' => 'users',
            'action'     => 'login',
        ),
        'authError'   => 'You are not authorised to access that location ',
        'authenticate'=> array(
            'Form'       => array('passwordHasher' => array(
                    'className' => 'Simple',
                    'hashType' => 'sha256'
                   )
                )
        ),
        'loginRedirect'  => array(
            'controller'  => 'users',
            'action'      =>  'adminDashboard'
        ),
        'logoutRedirect' => array(
            'controller'   => 'users',
            'action'       => 'login'
        )
    )
  );
   
/**
 * 
 * Beforefilter callback.
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout='admin';
        $title_for_layout = 'Library ideas';
                $this->_checkCoockieAndAutologin();

        $this->set(compact('title_for_layout'));

    }
/**
 * BeforeRender callback 
 * 
 */    
    public function beforeRender() {
        parent::beforeRender();
        $this->_setLoggedInUserData();
    }

/**
 * @method : _loggedInUserData
 * Set the logged in user status and user data.
 */    
    public function _setLoggedInUserData() {
        $loggedInUser=$this->Auth->user();
        $this->set(compact('loggedInUser'));
    }
    
    public function _checkCoockieAndAutologin() {

        if(!$this->Auth->user() && $this->Cookie->read('User')) {
            $userData=$this->Cookie->read('User');
            $this->request->data['User']['username']=$userData['username'];
            $this->request->data['User']['password']=$userData['password'];
            $this->Auth->login();
        }
    }
}
