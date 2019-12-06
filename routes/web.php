<?php

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
Route::get('/', function(){
    return view('welcome');
});

Route::group(['prefix' => 'event'], function(){
    Route::get('/', [
        'uses' => 'EventController@index',
        'as' => 'event'
    ]);
    Route::get('/detail/{id}', [
        'uses' => 'EventController@detail',
        'as' => 'event.detail'
    ]);
});

Route::group(['prefix' => 'ticket'], function(){
    Route::get('/', [
        'uses' => 'TicketController@index',
        'as' => 'ticket'
    ]);
    Route::get('/detail/{id}', [
        'uses' => 'TicketController@detail',
        'as' => 'ticket.detail'
    ]);
});

Route::group(['prefix' => 'order'], function(){
    Route::post('/{id}', [
        'uses' => 'OrderController@order',
        'as' => 'order.order'
    ]);
});
