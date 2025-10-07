<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}', function ($id){
return"Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/team', function () {
$arrMahasiswa = ['Risa Lestari','Rudi
Hermawan','Bambang Kusumo', 'Lisa Permata'];
return
view('team')->with('mahasiswa',
$arrMahasiswa); });


Route::fallback(function () {
return view('notfound');
});

Route::get('hello2', function () {
$hello = ['Hello World', 2 => ['Hello
Jakarta','Hello Medan']];
dd($hello);
});