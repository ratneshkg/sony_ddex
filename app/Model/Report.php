<?php
App::import('AppModel','Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/* 
 *Report Moidel.
 * 
 */
class Report extends AppModel{
        public $useTable = false; // This model does not use a database table
         
/**
 * getAllFiles() function 
 * get  all the file names present in to directory. 
 * @param string $dirpath  full path of directory .
 * @return array $files 
 */        
 
        public function getAllFiles($dirpath=null) {
            $dir    = new Folder($dirpath);
            $files  = $dir->find();
            return $files;
        }
        
/**
 * existsFile method : checks perticular file present or not
 * @param type $filepath  : filename with full path 
 * @return boolean 
 */        
        public function existsFile($filepath = null) {
            $file= $this->_getFileObject($filepath);
            return $file->exists();
        }
        
/**
 * getFileContentsByName method 
 * @param string $filepath full file path 
 * @return string content of file 
 */        
        
        public function getFileContentsByName($filepath =null) {
            $file= $this->_getFileObject($filepath);
            $contents = $file->read(true);
            $file->close();
            return $contents;
        }
        
/**
 * _getFileObject method.
 * @param string $filename
 * @return \File  file class object 
 */
        public function _getFileObject($filename =null) {
            return new File($filename);
        }
}
