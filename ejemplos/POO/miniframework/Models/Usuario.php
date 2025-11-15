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

    public function getAllWithDirecciones()
    {
        /*
        $usuarios = $this->getAll();
        $direccionModel = new \Models\Direccion();
        foreach ($usuarios as &$usuario) {
            $usuario['direcciones'] = $direccionModel->getByUserId($usuario['id']);
        }
        return $usuarios; 
        */

         $sql = "SELECT u.*, d.pais, d.estado, d.ciudad, d.calle, d.numero
            FROM usuarios u
            LEFT JOIN direcciones d ON u.id = d.iduser";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}