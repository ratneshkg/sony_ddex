<?php

App::uses('AppController', 'Controller');
/* 
 * Reports controller.
 */

class ReportsController extends AppController {
          

/**
 * index method 
 * return void
 */
    
    public function index() {
        $files=$this->Report->getAllFiles(Configure::read('report_directory_path'));
        $this->set(compact('files'));
    }
    
 /**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($filename = null) {
		if (!$this->Report->existsFile(Configure::read('report_directory_path').'/'.$filename)) {
			throw new NotFoundException(__('Invalid file name '));
		}
                $fileData  = $this->Report->getFileContentsByName(Configure::read('report_directory_path').'/'.$filename);
		$this->set('fileData', $fileData);
	}

}
