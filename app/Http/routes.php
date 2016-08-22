<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//

/* ルート表示（Laravel5の表示が出る画面）
   ※ 今回使用しないのでコメントアウト
Route::get('/', function () {
  return view('welcome');
});
*/

//全トピック表示画面
Route::get('/', 'TopicsController@index');

//任意idのトピック表示
Route::get('/topics/{id}', 'TopicsController@show');

Route::group(['middleware' => 'auth.very_basic', 'prefix' => ''], function() {

    //トピックの新規追加画面
    Route::get('/topics/add', 'TopicsController@add');
    Route::post('/topics/create', 'TopicsController@create');

    //任意idのトピック編集
    Route::get('/topics/edit/{id}', 'TopicsController@edit');
    Route::post('/topics/update/{id}', 'TopicsController@update');

    //任意idのトピック削除
    Route::post('/topics/delete', 'TopicsController@delete');
});
