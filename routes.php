<?php

include_once('controllers/'.ucfirst($controller).'Controller.php');
$objController = ucfirst($controller).'Controller';
$controller = new $objController();
$controller->$action();


?>