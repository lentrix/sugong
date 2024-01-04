<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Models\Entry;
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
    $entries = Entry::count();
    return view('welcome', ['entries'=>$entries]);
});

Route::get('/login', [SiteController::class, 'loginPage'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::get('/submit', function() {
    return view('site.submit');
});

Route::post('/submit', [SiteController::class, 'submission']);

Route::get('/success/{entry}', function(Entry $entry) {
    return view('site.success');
});

Route::get('/terms',[SiteController::class, 'terms']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('gallery', [UserController::class, 'gallery']);
});
