<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',function(){
    return view('main');
});

Route::get('/main/ph1' ,function(){
    return view('answerPh1');
});
Route::get('/main/ph2' ,function(){
    return view('answerPh2');
});

// 質問投稿フォームサイトに飛ぶ
Route::get('/main/question' ,function(){
    return view('question');
});

// 質問投稿フォームで投稿されたときの処理,コントローラーに飛ぶようにする。
Route::post('/main/question' , [QuesionController::class, "post"]);