<?php
/*
namespace Core;

class Route
{
    public static function handleRequest()
    {
        $controllerName = $_GET['controller'] ?? 'UsuarioController';
        $action = $_GET['action'] ?? 'index';

        $controllerPath = "controllers/{$controllerName}.php";
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controllerClass = "\\Controllers\\{$controllerName}";
            $controller = new $controllerClass();
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                die("Acción no encontrada.");
            }
        } else {
            die("Controlador no encontrado.");
        }
    }
}*/


namespace Core;

class Route
{
    public static function handleRequest()
    {
        $controllerName = $_GET['controller'] ?? 'UsuarioController';
        $action = $_GET['action'] ?? 'index';

        $controllerClass = "\\Controllers\\{$controllerName}";
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                die("Acción no encontrada.");
            }
        } else {
            die("Controlador no encontrado.");
        }
    }
}