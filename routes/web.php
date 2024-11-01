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

Route::statamic('posts/type/{type}', 'type')->name('posts.type');
Route::statamic('sitemap.xml', 'sitemap', ['content_type' => 'text/xml'])->name('sitemap');
Route::statamic('feed.xml', 'feed', ['content_type' => 'text/xml'])->name('feed');
Route::statamic('search', 'search_results')->name('search');

