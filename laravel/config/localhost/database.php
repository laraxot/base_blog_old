<?php

return [
    'connections' => [

      'mysql' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'geek_food'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'root'),
            //'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
      ],

      'liveuser_general' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
        //'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
            'database' => env('DB_DATABASE_LU', 'geek_lu'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'root'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
      ],

      ],//end connections
];
