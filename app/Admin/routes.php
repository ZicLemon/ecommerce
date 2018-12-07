<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //用户列表页面
    $router->get('/users','UsersController@index')
        ->name('admin.users.index');

    //新增用户页面
    $router->get('/users/create','UsersController@create')
        ->name('admin.users.create');

    //用户详情页面
    $router->get('/users/{user_id}','UsersController@show')
        ->name('admin.users.show');

    //修改用户页面
    $router->get('/users/{user_id}/edit','UsersController@edit')
        ->name('admin.users.edit');

    //新增用户
    $router->post('/users','UsersController@store')
        ->name('admin.users.store');

    //修改用户
    $router->put('/users/{user_id}','UsersController@update')
        ->name('admin.users.update');

    //删除用户
    $router->delete('/users/{user_id}','UsersController@destroy')
        ->name('admin.users.destroy');

});
