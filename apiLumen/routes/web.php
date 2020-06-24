<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'ejemplo1';
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('cargo', 'CargoController@index');
    $router->get('cargo/{id}','CargoController@show');
    $router->post('cargo','CargoController@store');
    $router->put('cargo/{id}','CargoController@update');
    $router->delete('cargo/{id}','CargoController@destroy');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('operativo', 'OperativoController@index');
    $router->get('operativo/{id}','OperativoController@show');
    $router->post('operativo','OperativoController@store');
    $router->put('operativo/{id}','OperativoController@update');
    $router->delete('operativo/{id}','OperativoController@destroy');
});
$router->group(['prefix' => 'api'], function () use ($router) {
    
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
    // Matches "/api/login
    $router->post('login', 'AuthController@login');
    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');

    // Matches "/api/users/1 
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');

    // Matches "/api/users
    $router->get('users', 'UserController@allUsers');
 });