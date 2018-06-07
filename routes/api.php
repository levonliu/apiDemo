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

$router->group(['namespace' => 'App\Http\Controllers\api','middleware' => 'auth:api'], function () use ($router) {
    $router->get('/index', 'IndexController@index');
});

