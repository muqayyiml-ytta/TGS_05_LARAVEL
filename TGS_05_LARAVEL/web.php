<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AboutUsController;
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
Route::get('/aboutus', [AboutUsController::class, 'index']);

Route::get('/profil-mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

//Route dgn value
Route::get('/hello', function () {
    return "Hello World!";
});

//Route dgn parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return "Nama Pegawai : ".$nama."<br/>Departemen : ".$divisi;
});

//Route redirect views
Route::get('/kabar', function () {
    return view('p3.kondisi');
});

// Route to UserController
Route::get("/user",[UserController::class, 'index']);

// Route to SantriController
Route::get("/santri",[SantriController::class, 'dataSantri']);

//Route redirect views nilai
Route::get('/nilai', function () {
    return view('p4.nilai');
});

//Route redirect views daftar_nilai
Route::get('/daftar_nilai', function () {
    return view('p4.daftar_nilai');
});

//Route redirect views layouts
Route::get('/framework', function () {
    return view('p4.layouts.index');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/home",[HomeController::class,"index"]);

// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

// 2. TAMBAHKAN ROUTE BARU KHUSUS MAHASANTRI
Route::get('/mahasantri', function () {
    // Data dummy Mahasantri (Laki-laki)
    $mahasantri = [
        ['nim' => '202601001', 'nama' => 'Ahmad Fauzi', 'jurusan' => 'Pengembangan Perangkat Lunak', 'provinsi' => 'Jawa Timur'],
        ['nim' => '202601002', 'nama' => 'M. Wildan Bashirat', 'jurusan' => 'Pengembangan Perangkat Lunak', 'provinsi' => 'Jawa Timur'],
        ['nim' => '202601003', 'nama' => 'Muhammad Rizky', 'jurusan' => 'Digital Marketing', 'provinsi' => 'Jawa Barat'],
        ['nim' => '202601004', 'nama' => 'Budi Utomo', 'jurusan' => 'Pengembangan Perangkat Lunak', 'provinsi' => 'Jawa Tengah'],
    ];

    // Memanggil file 'mahasantri.blade.php' di dalam folder 'mahasantri'
    return view('mahasantri.mahasantri', compact('mahasantri'));
});