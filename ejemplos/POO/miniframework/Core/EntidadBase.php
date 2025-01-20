<?php

namespace Core;

abstract class EntidadBase
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->db = (new Connection())->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save(array $data)
    {
        if (isset($data['id']) && $data['id'] > 0) {
            $fields = implode(' = ?, ', array_keys($data)) . ' = ?';
            $sql = "UPDATE {$this->table} SET {$fields} WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            $values = array_values($data);
            $values[] = $data['id'];
        } else {
            $fields = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));
            $sql = "INSERT INTO {$this->table} ({$fields}) VALUES ({$placeholders})";
            $stmt = $this->db->prepare($sql);
            $values = array_values($data);
        }
        return $stmt->execute($values);
    }
}