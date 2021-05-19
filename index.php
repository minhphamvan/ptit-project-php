<?php

require "./Controllers/BaseController.php";

$controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'Dashboard') . 'Controller');
$actionName = strtolower($_REQUEST['action'] ?? 'index');

require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject->$actionName();
