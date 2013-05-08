<?php

return array
    (
    'default' => array
        (
        'type' => 'mysql',
        'connection' => array(
            /**
             * The following options are available for MySQL:
             *
             * string   hostname     server hostname, or socket
             * string   database     database name
             * string   username     database username
             * string   password     database password
             * boolean  persistent   use persistent connections?
             * array    variables    system variables as "key => value" pairs
             *
             * Ports and sockets may be appended to the hostname.
             */
            'hostname' => 'localhost',
            'database' => 'agebdeb',
            'username' => "agebdeb",
            'password' => "agebdeb",
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    ),
    'wordpress' => array
        (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'agebdeb',
            'username' => "agebdeb",
            'password' => "agebdeb",
            'persistent' => FALSE,
        ),
        'table_prefix' => 'wp_',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    ),
);
?>
