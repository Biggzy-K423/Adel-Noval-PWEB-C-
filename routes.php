<?php

$routes = [
    'index' => 'index.php',
    'dashboardadmin' => 'dashboardadmin.php',
    'tambah' => 'tambah.php',
    'edit' => 'edit.php',
    'hapus' => 'hapus.php',
];

$route = isset($_GET['route']) ? $_GET['route'] : 'index';

if (array_key_exists($route, $routes)) {
    include $routes[$route];
} 
