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

/*Route::get('/', function () {
    return view('welcome');
});*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/rooms', [PagesController::class, 'rooms']);
Route::get('/rooms/{url}',[RoomsController::class, 'show']);
Route::get('/inscription', function () { 
    return view('inscription');
});
Route::post('/inscription', function () {
    return 'Formulaire reçu';
});
Route::post('/inscription', function () {
    return 'Votre email est ' . $_POST['email'];
});
Route::post('/inscription', function () {
    return 'Votre email est ' . request('email');
});
Route::get('/contact', [ContactController::class, 'create']);
//Route::post('contact', [ContactController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);