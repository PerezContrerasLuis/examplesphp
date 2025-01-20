<?php

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'dbname' => 'mini_framework',
            'user' => 'root',
            'password' => 'root',
        ],
        'sqlserver' => [
            'driver' => 'sqlsrv',
            'host' => 'localhost',
            'dbname' => '',
            'user' => '',
            'password' => '',
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => 'localhost',
            'dbname' => '',
            'user' => '',
            'password' => '',
        ],
    ],
];