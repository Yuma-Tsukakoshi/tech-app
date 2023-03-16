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

//後々すべてのphに対応できるようにroute変更予定 
Route::get('/main/ph1' ,function(){
    return view('ph.answerPh1');
});
Route::get('/main/ph2' ,function(){
    return view('ph.answerPh2');
});


// 質問投稿フォームサイトに飛ぶ
Route::get('/main/question' ,function(){
    return view('question');
});

// ヒント詳細ページに飛ぶ
Route::get('/main/hint' ,function(){
    return view('hint');
});

// プロフィール画面に飛ぶ
// Route::get('/main/hint/profile',function(){
//     return view('profile');
// });

