<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienDo;
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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::POST('/register', [PasienDo::class, 'regis_pasien']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/rumah-sakit', function () {
    return view('hospital');
});

Route::get('/info-rs', function () {
    return view('info-hospital');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/buat janji', function () {
    return view('buatjanji');
});

Route::get('/form janji', function () {
    return view('form-buatjanji');
});

Route::get('/admin-article', function () {
    return view('landing-page-admin-article');
});

Route::get('/admin-rs', function () {
    return view('admin-landingPage');
});

Route::get('/upload-artikel', function () {
    return view('upload-article');
});

Route::get('/admin-edit-infoRS', function () {
    return view('admin-editInfoRS');
});

Route::get('/admin-addDokter', function () {
    return view('admin-addDoc');
});

Route::get('/isi-artikel', function () {
    return view('isi-article');
});