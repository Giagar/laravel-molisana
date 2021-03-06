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
    $pasta = config("pasta");
    $menuNavs = config("menu-nav");

    return view('home', [
        "pastaArray" => $pasta,
        "menuNavs" => $menuNavs
    ]);
});

Route::get('/product/{id?}', function($id=null) {
    $pasta = config("pasta");
    $menuNavs = config("menu-nav");


    if(empty($id)) {
        return redirect("/");
    }

    if($id > count($pasta)) {
        abort(404);
    }
    
    return view('product', [
        'idProduct' => $id,
        "pastaArray" => $pasta,
        "menuNavs" => $menuNavs
    ]);
});


