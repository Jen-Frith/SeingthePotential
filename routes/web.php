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


Route::get('/test', function() {

$pain= ('pour un obn sandwich mets y de la confiture du beurre et des épices');

dd($pain);

// dd('Hello Guy');


});


Route::get('/todayMenu', function(){
    $pain= ('pour un obn sandwich mets y de la confiture du beurre et des épices');

    dd($pain);    
    return view ('menu26mai');})->name('todayMenu');