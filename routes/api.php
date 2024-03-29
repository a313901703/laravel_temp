<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->group(["prefix"=>''],function($api){
        $api->post('login','AuthController@login');
        $api->get('me','AuthController@me');
    });

    $api->group(["prefix"=>'users'],function($api){
        $api->get('/','UserController@index');
    });
});
