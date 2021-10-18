<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

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
    return view('posts');
});

Route::get('/posts/{post}', function ($slug) {
    if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        abort(404);
    }

    $post = Cache::remember("posts.{$slug}", 3600, function () use ($path) {
        return file_get_contents($path);
    });

    return view('post', compact('post'));
})->where('post', '[A-z_\-]+');
