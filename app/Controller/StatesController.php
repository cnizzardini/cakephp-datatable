<?php
App::uses('AppController', 'Controller');

class StatesController extends AppController
{
    public $components = array('DataTable');

    public function index() {

        if ($this->RequestHandler->responseType() == 'json') {
            $this->paginate  = array(
                'fields' => array('State.id', 'State.name', 'State.abbrev'),
            );
            $this->set('states', $this->DataTable->getResponse());
            $this->set('_serialize', 'states');
        }
        else{
			// other non json request logic here
		}
    }
}