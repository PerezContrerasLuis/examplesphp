<?php

namespace Core;

use PDO;
use PDOException;

class Connection
{
    private $connection;

    public function __construct()
    {
        $config = require 'config/database.php';
        $default = $config['default'];
        $dbConfig = $config['connections'][$default];

        if ($dbConfig['driver'] === 'mysql') {
            $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}";
        } elseif ($dbConfig['driver'] === 'sqlsrv') {
            $dsn = "sqlsrv:Server={$dbConfig['host']};Database={$dbConfig['dbname']}";
        } elseif ($dbConfig['driver'] === 'pgsql') {
            $dsn = "pgsql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}";
        } else {
            throw new \Exception("Driver no soportado: {$dbConfig['driver']}");
        }

        try {
            $this->connection = new PDO($dsn, $dbConfig['user'], $dbConfig['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}