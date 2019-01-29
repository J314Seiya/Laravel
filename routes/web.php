<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * 全タスク表示
 */
Route::get('/', function () {
    //
});

/**
 * 新タスク追加
 */
Route::post('/', function ()  {
	return view('tasks');
    //
});

/**
 * 既存タスク削除
 */
Route::delete('/task/{id}', function ($id) {
    //
});
