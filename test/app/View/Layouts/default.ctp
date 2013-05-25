<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		CakePHP DataTables Example
	</title>
    <link rel="stylesheet" media="screen" href="/js/datatables/css/jquery.dataTables.css" type="text/css" /> 
    <link rel="stylesheet" media="screen" href="/css/bootstrap.min.css" type="text/css" /> 
    <link rel="stylesheet" media="screen" href="/css/bootstrap-responsive.min.css" type="text/css" /> 
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">CakePHP DataTables Demo</a>
          <div class="nav-collapse collapse">
<!--             <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p> -->
            <ul class="nav">
              <li><a href="/">Using Linkable</a></li>
              <li><a href="/">Using Containable</a></li>
                          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/examples.js"></script>
</body>
</html>
