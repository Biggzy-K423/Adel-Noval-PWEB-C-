<?php

$routes = [
    'index' => 'v_login.php',
    'dashboardadmin' => 'v_dashboardadmin.php',
    'tambah' => 'v_tambah.php',
    'edit' => 'v_edit.php',
    'hapus' => 'c_hapus.php',
];

$route = isset($_GET['route']) ? $_GET['route'] : 'index';

if (array_key_exists($route, $routes)) {
    include $routes[$route];
} 
