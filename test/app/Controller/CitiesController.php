<?php
App::uses('Controller', 'Controller');

class CitiesController extends AppController {
    
    public $components = array('DataTable');
    
    
    public function index(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('City.id', 'City.name', 'City.state_id','City.population'),
            );
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function linkable(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('City.id', 'City.name', 'City.population'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->fields = array('City.id','City.name','State.name','City.population');
            $this->DataTable->emptyElements = 1;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function containable(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('City.id', 'City.name', 'City.population'),
                'contain' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->fields = array('City.id','City.name','State.name','City.population');
            $this->DataTable->emptyElements = 1;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function concat(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('City.id', 'CONCAT(City.name," / ",City.population) as together'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->fields = array('City.id','0.together','State.name');
            $this->DataTable->emptyElements = 1;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function virtualFields(){
        if($this->RequestHandler->responseType() == 'json') {
            
            $this->City->virtualFields = array(
                'together' => 'CONCAT(City.name," / ",City.population)'
            );
            
            $this->paginate = array(
                'fields' => array('City.id','City.together'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->fields = array('City.id','City.together','State.name');
            $this->DataTable->emptyElements = 1;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function noJsonHandler(){
        if($this->request->is('ajax')){
            $this->autoRender = false;
            $this->paginate = array(
                'fields' => array('City.id', 'City.name', 'City.population'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );

            $this->DataTable->fields = array('City.id','City.name','State.name','City.population');
            $this->DataTable->emptyElements = 1;
            echo json_encode($this->DataTable->getResponse());
        }
    }
}
