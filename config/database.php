<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlsrv'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'Me_MuOnline' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_ME_MUONLINE', 'IAMSHAZAM\SQLEXPRESS'),
            'port' => env('DB_PORT_ME_MUONLINE', '1433'),
            'database' => 'Me_MuOnline',
            'username' => env('DB_USERNAME_ME_MUONLINE', 'sa'),
            'password' => env('DB_PASSWORD_ME_MUONLINE', '123456'),
            'charset' => 'utf8',
            'prefix' => '',
            'strict' => false,
        ],
        'MuOnline' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_MUONLINE', 'IAMSHAZAM\SQLEXPRESS'),
            'port' => env('DB_PORT_MUONLINE', '1433'),
            'database' => 'MuOnline',
            'username' => env('DB_USERNAME_MUONLINE', 'sa'),
            'password' => env('DB_PASSWORD_MUONLINE', '123456'),
            'charset' => 'utf8',
            'prefix' => '',
            'strict' => false,
        ],
        'Ranking' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_RANKING', 'IAMSHAZAM\SQLEXPRESS'),
            'port' => env('DB_PORT_RANKING', '1433'),
            'database' => 'Ranking',
            'username' => env('DB_USERNAME_RANKING', 'sa'),
            'password' => env('DB_PASSWORD_RANKING', '123456'),
            'charset' => 'utf8',
            'prefix' => '',
            'strict' => false,
        ],
        'Events' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_EVENTS', 'IAMSHAZAM\SQLEXPRESS'),
            'port' => env('DB_PORT_EVENTS', '1433'),
            'database' => 'Events',
            'username' => env('DB_USERNAME_EVENTS', 'sa'),
            'password' => env('DB_PASSWORD_EVENTS', '123456'),
            'charset' => 'utf8',
            'prefix' => '',
            'strict' => false,
        ],
        'BattleCore' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_BATTLECORE', 'IAMSHAZAM\SQLEXPRESS'),
            'port' => env('DB_PORT_BATTLECORE', '1433'),
            'database' => 'BattleCore',
            'username' => env('DB_USERNAME_BATTLECORE', 'sa'),
            'password' => env('DB_PASSWORD_BATTLECORE', '123456'),
            'charset' => 'utf8',
            'prefix' => '',
            'strict' => false,
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
