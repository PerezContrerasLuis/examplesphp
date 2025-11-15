<?php

namespace Controllers;

use Models\Usuario;

class UsuarioController
{
    public function index()
    {
        $usuario = new Usuario();
        // Ahora incluimos las direcciones
        $usuarios = $usuario->getAllWithDirecciones();
        $this->render('usuarios/index', compact('usuarios'));
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
            $usuario->setActivo(1);

            $usuario->saveUsuario();

            header('Location: index.php?controller=UsuarioController&action=index');
            exit();
        }
    }

    private function render($view, $data = [])
    {
        extract($data);
        require_once "views/{$view}.php";
    }

    public function dashboard(){
        echo "This is a simple dashboard";
    }
}