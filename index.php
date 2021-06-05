<?php

// URL: ptit-project-php=index.php?controller=${controllerName}&action=${actionName}

require "./Core/Database.php";
require "./Models/BaseModel.php";
require "./Controllers/BaseController.php";

$controllerName = ucfirst(strtolower($_REQUEST['controller'])) . 'Controller';
$actionName = strtolower($_REQUEST['action'] ?? 'index');

require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject->$actionName();
