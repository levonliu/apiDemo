<?php
// 修改支持跨越
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: text/html; charset=UTF-8");
//// 修改支持axios请求[有一个OPTIONS请求在前]
//header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,HEAD,PATCH,OPTIONS");
//header("Access-Control-Allow-Headers: Origin,X-Requested-With,Content-Type,Accept,Authorization");
/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/
$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run();
