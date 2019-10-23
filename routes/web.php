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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola',function(){
	return 'Hola mundo';
});

Route::get('prueba', function () {
    return view('layouts.master',['name' => 'Pedro']);
});

Route::get('prueba2', function () {
    return view('child',['name' => 'Pedro']);
});

Route::get('blog', function () {
    return view('blog',['name' => 'Pedro', 'surname' => 'Velazquez']);
});

Route::get('lista', function () {
    return view('lis',['name' => 'Pedro', 'surname' => 'Velazquez']);
});

Route::get('/posts/{id}', function ($id) {
    return App\Post::find($id);
});

Route::get('posts','PostController@index');
