<?php
App::uses('Controller', 'Controller');

class CitiesController extends AppController {
    
    public $components = array('DataTable');
    
    public function index(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array();
            $this->DataTable->mDataProp = true;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function linkable(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('id', 'name', 'population'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            $this->DataTable->mDataProp = true;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function containable(){
        if($this->RequestHandler->responseType() == 'json') {
            $this->paginate = array(
                'fields' => array('id', 'name', 'population'),
                'contain' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->mDataProp = true;
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
                'fields' => array('id','together'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );
            
            $this->DataTable->mDataProp = true;
            $this->set('cities', $this->DataTable->getResponse());
            $this->set('_serialize','cities');
        }
    }
    
    public function noJsonHandler(){
        if($this->request->is('ajax')){
            $this->autoRender = false;
            $this->paginate = array(
                'fields' => array('id', 'name', 'population'),
                'link' => array(
                    'State' => array(
                        'fields' => array('name')
                    )
                )
            );

            $this->DataTable->mDataProp = true;
            echo json_encode($this->DataTable->getResponse());
        }
    }
}
