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
    $data = ['pops' => App\POPS::get(), 'nico' => App\NICO::get(), 'toho' => App\TOHO::get(), 'sega' => App\SEGA::get(), 'game' => App\GAME::get(), 'orig' => App\ORIG::get()];

    return view('page.category')->with('data', $data);
});

Route::get('/category/{catname}', function ($catname) {
    switch ($catname) {
      case "pops":
        $res=App\POPS::get();
        break;
      case "nico":
        $res=App\NICO::get();
        break;
      case "toho":
        $res=App\TOHO::get();
        break;
      case "sega":
        $res=App\SEGA::get();
        break;
      case "game":
        $res=App\GAME::get();
        break;
      case "orig":
        $res=App\ORIG::get();
        break;
      default:
        $res=null;
    }
    if ($res!=null) {
        return view('page.songsbycategory')->with('cat', $catname)->with('data', $res);
    } else {
        return('reject')->with('reason', 4001);
    }
});

Route::get('/song/{catname}/{song_name}', function ($catname, $song_name) {
    switch ($catname) {
      case "pops":
        $res=App\POPS::where('name_jp', $song_name)->get();
        break;
      case "nico":
        $res=App\NICO::where('name_jp', $song_name)->get();
        break;
      case "toho":
        $res=App\TOHO::where('name_jp', $song_name)->get();
        break;
      case "sega":
        $res=App\SEGA::where('name_jp', $song_name)->get();
        break;
      case "game":
        $res=App\GAME::where('name_jp', $song_name)->get();
        break;
      case "orig":
        $res=App\ORIG::where('name_jp', $song_name)->get();
        break;
      default:
        $res=null;
    }
    if ($res!=null) {
        return view('page.song')->with('cat', $catname)->with('data', $res);
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
