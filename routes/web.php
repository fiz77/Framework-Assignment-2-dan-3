<?php

use Illuminate\Support\Facades\Route;

//Return View membuka file pada folder view dengan file bernama welcome
Route::get('/', function () {
    return view('welcome');
});

//Tanpa Function dan Parameter
Route::get('/hello', function () {
return "Hello World!";
});

//Parameter $a, $b
Route::get('/bio/{nama}/{umur}', function ($a, $b) {
return "Halo $a, umur anda : $b Tahun";
});

/*Redirect mendirect link url ke destinasi yang sudah ditentukan, kita bisa membuat route baru bila
    ingin mendirect link yang berbeda dengan tujuan yang berbeda, tapi yang dibawah ini saya direct
    ke url yang sudah saya declare*/
Route::redirect('/about', '/hello');

/*Group dengan menggunakan prefix group ini dibuat nested, jadi bila ingin mengakses nya kita harus
    masuk dengan /role, baru kita tambahkan seperti : /role/penjual*/
Route::prefix('/role')->group(function () {
Route::get('/penjual', function () {
echo "<h1>Daftar Penjual</h1>";
});
Route::get('/pembeli', function () {
echo "<h1>Daftar Pembeli</h1>";
});
Route::get('/barang', function () {
echo "<h1>Daftar Barang</h1>";
});
});

//fallback berfungsi bila user tidak sengaja membuka link yang tidak ada pada website
Route::fallback(function () {
return"Maaf, alamat tidak ditemukan";
});