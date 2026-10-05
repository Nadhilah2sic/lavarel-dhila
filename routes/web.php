<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

// 1. Route untuk MENAMPILKAN Form (Buka di browser)
Route::get('/', [QuestionController::class, 'index'])->name('home');

// 2. Route untuk MEMPROSES/KIRIM Form ketika tombol diklik
Route::post('/question', [QuestionController::class, 'store'])->name('question.store');

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}' , [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});
use App\Http\Controllers\MatakuliahController;

// Route kustom untuk URL /matakuliah/show/{kode?} sesuai permintaan spesifik
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route resource standar untuk method lainnya
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/home', [HomeController:: class, 'index']);
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');