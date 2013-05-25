<?php
App::uses('Controller', 'Controller');

class StatesController extends AppController {
    
    public $components = array('DataTable');
    
    public function index(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->set('states', array());
            $this->set('_serialize', 'states');
        } 
        else{
            
        }
    }
}
