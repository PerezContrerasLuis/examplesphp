<?php

namespace Models;

use Core\EntidadBase;

class Direccion extends EntidadBase
{
    protected $table = 'direcciones';

    private $id;
    private $iduser;
    private $pais;
    private $estado;
    private $ciudad;
    private $municipio;
    private $calle;
    private $numero;
    private $codigopostal;

    public function __construct()
    {
        parent::__construct();
    }

    // ==== Getters ====

    public function getId() { return $this->id; }
    public function getIdUser() { return $this->iduser; }
    public function getPais() { return $this->pais; }
    public function getEstado() { return $this->estado; }
    public function getCiudad() { return $this->ciudad; }
    public function getMunicipio() { return $this->municipio; }
    public function getCalle() { return $this->calle; }
    public function getNumero() { return $this->numero; }
    public function getCodigoPostal() { return $this->codigopostal; }

    // ==== Setters ====

    public function setIdUser($iduser) { $this->iduser = $iduser; }
    public function setPais($pais) { $this->pais = $pais; }
    public function setEstado($estado) { $this->estado = $estado; }
    public function setCiudad($ciudad) { $this->ciudad = $ciudad; }
    public function setMunicipio($municipio) { $this->municipio = $municipio; }
    public function setCalle($calle) { $this->calle = $calle; }
    public function setNumero($numero) { $this->numero = $numero; }
    public function setCodigoPostal($cp) { $this->codigopostal = $cp; }

    // ==== Obtener direcciones por usuario ====

    public function getByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE iduser = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}