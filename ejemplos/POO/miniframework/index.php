<?php

/*
require_once 'core/Connection.php';
require_once 'core/EntidadBase.php';
require_once 'core/Route.php';*/


// Autoload de clases
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
});

\Core\Route::handleRequest();