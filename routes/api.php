<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-5
 * Time: 下午3:27
 */


$router->get('/', function () {
    return 'Hello world';
});

$router->post('/login', 'AuthController@login');

$router->group(['middleware' => 'auth:api'], function () use ($router) {
    $router->get('/index', 'IndexController@index');
    $router->get('/customer', 'CustomerController@getCustomerList');
});


