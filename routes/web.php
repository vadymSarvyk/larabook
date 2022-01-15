<?php

use App\Http\Controllers\TopicController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockController;
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

Route::get("/info", function () {
    return view("test.info");
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('topic/index', [TopicController::class, 'index']);
Route::get('topic/create', [TopicController::class, 'create']);
Route::post('topic/store', [TopicController::class, 'store'])->name('topiccreate');
Route::resource('topic', TopicController::class);
Route::post('block/create', [BlockController::class, 'store'])->name('blockcreate');
Route::put('block/update', [BlockController::class, 'update'])->name('editblock');
Route::resource('block', BlockController::class);