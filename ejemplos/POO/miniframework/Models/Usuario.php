<?php

namespace Models;

use Core\EntidadBase;

class Usuario extends EntidadBase
{
    protected $table = 'usuarios';

    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $activo;

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getApellido() { return $this->apellido; }
    public function setApellido($apellido) { $this->apellido = $apellido; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }

    public function getActivo() { return $this->activo; }
    public function setActivo($activo) { $this->activo = $activo; }

    public function saveUsuario()
    {
        $data = [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => $this->password,
            'activo' => $this->activo,
        ];
        return $this->save($data);
    }
}