<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'welcome');

Route::get('/test', TestController::class);

Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::get('/request/demo', function () {
    return view('request.demo');
});

Route::post('/request/demo', function (Request $request) {
    $data = $request->validate([
        'email' => 'required|email',
        'name' => 'required|min:2',
    ]);
    dd($data);
});
