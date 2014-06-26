CAKEPHP-DATATABLE
========

Provides server-side interoperability between CakePHP 2.x and jQuery DataTables plugin.

Features
------
*	Takes paginated data and converts into json response compatible with datatables
*	Accepts dataTables ORDER BY requests
*	Accepts dataTables WHERE conditions
*	Accepts dataTables pagination
*	Works with LinkableBehavior and to a lesser extent Containable

Dependancies
------
* PHP 5.x
* CakePHP 2.x
* LinkableBehavior is recommended but not required


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

I'm in the process of enhancing documentation and moving it out of the README  and into the [wiki](https://github.com/cnizzdotcom/cakephp-datatable/wiki/_pages).

* [Release Notes and Updates](https://github.com/cnizzdotcom/cakephp-datatable/wiki/0.-Release-Notes-and-Updates)
* [Getting Started](https://github.com/cnizzdotcom/cakephp-datatable/wiki/1.-Getting-Started)
* [Basic Usage](https://github.com/cnizzdotcom/cakephp-datatable/wiki/2.-Basic-Usage-v1.2.0)
* [Model Associations with Linkable](https://github.com/cnizzdotcom/cakephp-datatable/wiki/3.-Model-Associations-with-Linkable)
* Model Associations with Containable
* [SUM, CONCAT, and other SQL Functions](https://github.com/cnizzdotcom/cakephp-datatable/wiki/5.-SUM,-CONCAT,-and-other-SQL-Functions)

Ordering and conditions supplied via DataTables work "automagically" and nothing else is needed. Deep relations using the ContainableBehavior will break the response due to the way conditions work within that behavior. To get around this it is recommended that the [LinkableBehavior](https://github.com/dereuromark/tools/blob/master/Model/Behavior/LinkableBehavior.php) be used instead. The Component respects many of the options you can define within jQuery DataTables settings such as bSearchable and bSortable on a per field basis.


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

Using models from other controllers. Sometimes the case may be that you are in a CustomersController and you have a method within that wants to display data from another model such as an Order model. This 
can be accomplished with the following parameters:
```php
$this->DataTable->getResponse(null,$this->Order);
```

Licensing
------
Code is licensed under the MIT License.
