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
    // return view('welcome');
    try {
        DB::connection()->getPdo();
        $caught = false;
    } catch (Exception $e) {
        $caught = true;
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }

    if(!$caught){
        echo 'Hello, world.';
    }
});