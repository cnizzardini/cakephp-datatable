<?php
App::uses('Controller', 'Controller');

class CitiesController extends AppController {
    
    public $components = array('DataTable');
    
    public function index(){
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
        else{

        }
    }
}
