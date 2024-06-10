<?php

use Ductong\FpolyBaseWeb3014\Controllers\Client\HomeController;
use Ductong\FpolyBaseWeb3014\Controllers\Client\AuthController;
use Ductong\FpolyBaseWeb3014\Controllers\Client\ProductController;

$router->get( '/', HomeController::class . '@index');
$router->mount('/products', function () use ($router) {
    $router->get( '/', ProductController::class . '@index');
    $router->get('/detail/{id}', ProductController::class . '@detail');
});
//Sử dụng phương thức match để tối ưu code gọn hơn
$router->match('GET|POST', '/login', AuthController::class . '@index');
$router->get('/logout', AuthController::class . '@logout');


