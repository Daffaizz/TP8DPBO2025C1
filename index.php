<?php
$controller = $_GET['controller'] ?? 'student';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . "/controllers/{$controllerName}.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerObj = new $controllerName;

    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    } else {
        echo "Method '$action' not found in controller '$controllerName'";
    }
} else {
    echo "Controller '$controllerName' not found.";
}
