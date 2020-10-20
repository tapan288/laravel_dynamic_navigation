<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => '/',
]);

Route::get('/task/create', [
    'uses' => 'TaskController@create',
    'as' => 'task.create'
]);
Route::get('/task/edit', [
    'uses' => 'TaskController@edit',
    'as' => 'task.edit'
]);

Route::get('/tasks', [
    'uses' => 'TaskController@index',
    'as' => 'tasks'
]);

Route::group(['prefix' => 'admin',], function () {
    Route::get('/dashboard', [
        'uses' => 'Auth\AdminLoginCOntroller@dashboard',
        'as' => 'dashboard',
    ]);

    Route::get('/menu/create', [
        'uses' => 'MenuItemController@create',
        'as' => 'menu.create'
    ]);
    Route::post('/menu/store', [
        'uses' => 'MenuItemController@store',
        'as' => 'menu.store'
    ]);
    Route::get('/menu/edit/{id}', [
        'uses' => 'MenuItemController@edit',
        'as' => 'menu.edit'
    ]);
    Route::get('/menus', [
        'uses' => 'MenuItemController@index',
        'as' => 'menus'
    ]);

    Route::get('/submenus', [
        'uses' => 'MenuItemController@index',
        'as' => 'submenus'
    ]);

    Route::get('/submenu/create', [
        'uses' => 'SubMenuItemController@create',
        'as' => 'submenu.create'
    ]);
    Route::post('/submenu/store', [
        'uses' => 'SubMenuItemController@store',
        'as' => 'submenu.store'
    ]);
    Route::get('/submenu/edit', [
        'uses' => 'SubMenuItemController@edit',
        'as' => 'submenu.edit'
    ]);
});
