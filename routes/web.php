<?php

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
    return view('page.home');
});

Route::get('/category', function () {
    $data= array("pops" => App\POPS::get(), "nico" => App\NICO::get(), "toho" => App\TOHO::get(), "sega" => App\SEGA::get() ,"game" => App\GAME::get(), "orig" => App\ORIG::get());
    return view('page.category')->with('data', $data);
});

Route::get('/category/{catname}', function ($catname) {
    if(in_array($catname, array('pops','nico','toho','sega','game','orig'))) {
        return view('page.songsbycategory')->with('cat', $catname)->with('data', App\strtoupper($catname)::get());
    } else {
        return('reject')->with('reason', 4001);
    }
});

Route::get('/song/{catname}/{song_name}', function ($catname,$song_name) {
    if(in_array($catname, array('pops','nico','toho','sega','game','orig'))) {
        return view('page.song')->with('cat', $catname)->with('data', App\strtoupper($catname)::where('name_jp', $song_name)->get());
    } else {
        return('reject')->with('reason', 4001);
    }
});

Route::get('/level', function () {
    return view('page.level');
});

Route::get('/level/{level}', function ($level) {
    return view('page.songsbylevel');
});
