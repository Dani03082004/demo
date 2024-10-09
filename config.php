<?php

    //constantes
    define ('VIEWS',__DIR__.'/src/views');
    define ('CONTR',__DIR__.'/src/controllers');
    define ('MODS',__DIR__.'/src/models');
    
    //DSN
    $dbhost='localhost';
    $dbname='demo2';
    $dbuser='demo2';
    $dbpassword='linuxlinux';
    $dsn='mysql:host='.$dbhost.';dbname='.$dbname;

    // Rutas

    $routes=[
        'home',
        'add',
        'admin',
        'add-book',
        'delete',
        'edit',
        'update-book',
        'delete-book'
    ];