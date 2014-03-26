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

Dependancies
------
* PHP 5.x
* CakePHP 2.x
* LinkableBehavior is recommended but not required

Updates
------
* Mar 14, 2014 (v1.2.0) - Added support for mDataProp 
* Feb 13, 2014 (v1.1.2) - Updated to support LIMIT and OFFSET parameters in newer versions of CakePHP
* Nov 1, 2013 (v1.1.1) - Improved performance of table count by setting model->recursive = -1 on count queries
* May 25, 2013 - added full demo under test. Resolved some bugs dealing with SQL LIMITS and cleared up some error handling.
* March 28, 2013 - added initialize method. It use to be that you had to pass in a reference to the Controller and Model when calling getResponse. This is no longer required.
```php
// old way
$this->DataTable->getResponse($this->OrdersController,$this->Order);
// new way
$this->DataTable->getResponse();
```

Installation
------

You can either clone the project, download the project, or just copy & paste DataTableComponent.php into your projects Controller/Component directory

Demo
------
http://cakephpdatatables.cnizz.com/

You can setup the demo locally with the following steps:

1. Download demo application and move it into your webroot.
2. Configure hosts and sites-enabled in apache to point at the location of demo application and setup the local hostname (ie datatables.local)
3. Create a database (call this datatables)
4. Configure database.php 
5. From the shell run Console/cake schema create
6. Import app/Config/Schema/schema.sql into your database
7. Ensure your app/tmp directory and app/tmp sub directories are writable

The demo application is designed for CakePHP 2.3 and was built on Ubuntu 12.10 running Apache2 with PHP 5.4. It does not have the full Cake framework in it, so you'll need to have cakephp in your php include paths or create a symbolic link to cake in test. 

Documentation
------

I'm in the process of enhancing documentation and moving it out of the README.
[Basic Usage](https://github.com/cnizzdotcom/cakephp-datatable/wiki/Basic-Usage-v1.2.0)

Ordering and conditions supplied via DataTables work "automagically" and nothing else is needed. Deep relations using the ContainableBehavior will break the response due to the way conditions work within that behavior. To get around this it is recommended that the LinkableBehavior be used instead. See: https://github.com/dereuromark/tools/blob/master/Model/Behavior/LinkableBehavior.php


With ContainableBehavior:
```php
    $this->paginate = array(
        'fields' => array('Field.A','Field.B', 'Field.C','AssocatiatedModal.D'),
        'conditions' => array(
            'active'=>1
        )
        'contain' => array('AssocatiatedModal')
    );
    $this->set('response', $this->DataTable->getResponse());
    $this->set('_serialize','response');
```

With LinkableBehavior:
```php
	$this->paginate = array(
	    'fields' => array('Field.A','AssocModel.B'),
	    'link' => array('AssocModel')
	);
	$this->set('response',$this->DataTable->getResponse());
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
    $this->set('response',$this->DataTable->getResponse());
    $this->set('_serialize','response');
```

If you don't use Cakes built in REST code you can ofcourse just do the following to get the response data:
```php
$this->autoRender = false;
// your code here
echo json_encode($this->DataTable->getResponse());
```

The conditionsByValidate attribute should be avoided for now, but I am working on a way to make the conditions more intelligent. For now the conditions are entered in as Field.A LIKE '%$var%' OR Field.B LIKE '%$var$' etc...

The Component respects many of the options you can define within jQuery DataTables settings such as bSearchable and bSortable on a per field basis.


Using models from other controllers. Sometimes the case may be that you are in a CustomersController and you have a method within that wants to display data from another model such as an Order model. This 
can be accomplished with the following parameters:
```php
$this->DataTable->getResponse(null,$this->Order);
```

Using mData

New in v1.2.0 is support for mData. When I originally wrote this component I didn't realize that dataTables supported 
strings for indexes (such as aData.User.name instead of aData[1]). This functionality is off by default (for now). To 
enable this parameter set your mData properties in your JS code (https://datatables.net/usage/columns) and in your 
server side code set DataTable->mDataProp = true just before calling getResponse.
```php
$this->DataTable->mDataProp = true;
$this->DataTable->getResponse();
```

Licensing
------
Code is licensed under the MIT License.
