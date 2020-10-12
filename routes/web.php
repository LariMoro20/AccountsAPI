<?php
/*
Laravel Application
Author: Larissa Moro S. dos Santos
https://github.com/LariMoro20/AccountsAPI
*/
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
    return response()->json(['message' => 'Bank API', 'status' => 'Connected','Author' => 'Larissa Moro S. dos Santos' ]);;
});
