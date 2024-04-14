<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api;

Route::get('/', function () {
    return view('home');
});
Route::get('helpme',[api::class, 'helpme']);
Route::get('buynow', function () {
    return view('buynow');
});
Route::get('read',function(){
    return view('read');
});
Route::get('price',function(){
    return view('card');
});
Route::get('buynow',[api::class, 'buynow']);


