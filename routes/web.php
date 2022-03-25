<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;

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
    return view('welcome',['nama'=>'Jen','jurusan'=>'Sistem Informasi']);
});

Route::get('/Mahasiswa', [mahasiswacontroller::class, 'index']);

Route::get('/Mahasiswa/create', [mahasiswacontroller::class, 'create']);

// Route::get('/Mahasiswa', function () {
//     $mhs =[
//         1=> ['nama'=>'Jen','jurusan'=>'Sistem Informasi'],
//         2=> ['nama'=>'Jeko','jurusan'=>'Sistem Informasi'],
//         3=> ['nama'=>'Jen-jen','jurusan'=>'Hukum']
//     ];    
//     return view('listMahasiswa')->with('mhs',$mhs);
// });

// teken CTRL+backspace biar jd comment
