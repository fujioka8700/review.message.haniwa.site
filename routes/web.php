<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;

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

Route::get('/tutorial/index', function () {
    $str = 'tutorial<br>index';
    $ary = ['tutorial10','tutorial20','tutorial30'];
    $number = 10;
    // $data = ['str'=>$str,'ary'=>$ary];
    return view('tutorial.index', compact('str', 'ary', 'number'));
});