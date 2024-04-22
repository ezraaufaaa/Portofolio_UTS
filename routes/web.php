<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('home', [
        "title" => "Home Page | Ezra",
        "active" => "home"
    ]);
});

Route::get('/cv', function () {
    return view('cv',[
        "title" => "Experience & Education | Ezra",
        "active" => "cv"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio', [
        "title" => "Portofolio | Ezra",
        "active" => "portofolio"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
