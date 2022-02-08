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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.admin.login');
});

Route::get('/loginsiswa', function () {
    return view('auth.login');
});

Route::get('/dashboardadmin', function () {
    return view('pages.dashboard');
});

Route::get('/penilaian', function () {
    return view('pages.penilaian.index');
});

Route::get('/dataadmin', function () {
    return view('pages.admin.index');
});

Route::get('/dataguru', function () {
    return view('pages.guru.index');
});

Route::get('/datasiswa', function () {
    return view('pages.murid.index');
});

Route::get('/datakelas', function () {
    return view('pages.kelas.index');
});

Route::get('/datajadwal', function () {
    return view('pages.jadwal.index');
});

Route::get('/datalevel', function () {
    return view('pages.level.index');
});

Route::get('/dataruangan', function () {
    return view('pages.ruangan.index');
});

Route::get('/matapelajaran', function () {
    return view('pages.matapelajaran.index');
});

Route::get('/banksoal', function () {
    return view('pages.banksoal.index');
});
