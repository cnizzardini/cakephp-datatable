CAKEPHP-DATATABLE
========

Provides server-side interoperability between CakePHP 2.x and jQuery DataTables plugin.

Features
------
*	Takes paginated data and converts into json response compatible with datatables
*	Accepts dataTables ORDER BY requests
*	Accepts dataTables WHERE conditions
*	Accepts dataTables pagination
*	Works LinkableBehavior and to a lesser extent Containable
*	Save attachments from remote imap server locally

Dependancies
------
* PHP 5.x
* CakePHP 2.x
* LinkableBehavior is recommended but not required

Installation
------

You can either clone the project, download the project, or just copy & paste DataTableComponent.php into your projects Controller/Component directory

Documentation
------

Ordering and conditions supplied via DataTables work "automagically" and nothing else is needed. Deep relations using the ContainableBehavior will break the response due to the way conditions work within that behavior. To get around this it is recommended that the LinkableBehavior be used instead. See: https://github.com/dereuromark/tools/blob/master/Model/Behavior/LinkableBehavior.php

Remember of course to add the component to your controller:
```php
class YourController extends AppController {
    
    public $components = array('DataTable');
```

You should explicitly define all fields you want returned in your paginate fields. If you need to alter the order in which fields are returned set the fields attribute like so:
```php
$this->DataTable->fields = array('Field.A','Field.B','Field.C');
```

If you need to add empty columns to the response set the emptyElements attribute to the number of empty columns needs:
```php
$this->DataTable->emptyElements = 2;
```

Basic Usage:
```php
    $this->paginate = array(
        'fields' => array('Field.A','Field.B', 'Field.C'),
        'conditions' => array(
            'active'=>1
        )
    );
    $this->set('response', $this->DataTable->getResponse($this,$this->NameOfModel));
    $this->set('_serialize','response');
```

With ContainableBehavior:
```php
    $this->paginate = array(
        'fields' => array('Field.A','Field.B', 'Field.C','AssocatiatedModal.D'),
        'conditions' => array(
            'active'=>1
        )
        'contain' => array('AssocatiatedModal')
    );
    $this->set('response', $this->DataTable->getResponse($this,$this->NameOfModel));
    $this->set('_serialize','response');
```

With LinkableBehavior:
```php
	$this->paginate = array(
	    'fields' => array('Field.A','AssocModel.B','Shipment.created_date'),
	    'link' => array('AssocModel')
	);
	$this->set('response',$this->DataTable->getResponse($this,$this->NameOfModel));
	$this->set('_serialize','response');
```

With CONCAT Fields. Note once a CONCAT is used we must tell the component the order the fields should be in.
```php
    $this->paginate = array(
        'fields' => array('Field.A','Field.B'),
        'link' => array(
            'AssocModel' => array(
            	'fields' => array('CONCAT(User.first_name," ",User.last_name) as name')
        	)
        )
    );
    $this->DataTable->fields = array('Field.A','Field.B','0.name');
    $this->set('response',$this->DataTable->getResponse($this,$this->NameOfModel));
    $this->set('_serialize','response');
```

If you don't use Cakes built in REST code you can ofcourse just do the following to get the response data:
```php
$this->autoRender = false;
// your code here
echo json_encode($this->DataTable->getResponse($this,$this->NameOfModel));
```

The conditionsByValidate attribute should be avoided for now, but I am working on a way to make the conditions more intelligent. For now the conditions are entered in as Field.A LIKE '%$var%' OR Field.B LIKE '%$var$' etc...

The Component respects many of the options you can define within jQuery DataTables settings such as bSearchable and bSortable on a per field basis.

Licensing
------
Code is licensed under the MIT License.
