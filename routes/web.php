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

/* Website routes. */
Route::get('/', function() {
    return view('index');
});

Route::get('/nieuws', function() {
    return view('nieuws');
});

Route::get('/over', function() {
    return view('over');
});

Route::get('/werkplaats', function() {
    return view('werkplaats');
});

/* CMS routes. */
Route::group(array('prefix' => 'cms'), function() {
    Route::get('/', function() {
        return view('cms/index');
    });
    // TODO hier komt hoogstwaarschijnlijk nog meer bij
});

Auth::routes();

Route::get('/home', 'HomeController@index');
