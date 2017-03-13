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
Route::get('/','MenuController@getIndex');

Route::get('/nieuws','MenuController@getNieuws');

Route::get('/over','MenuController@getOverons');

Route::get('/werkplaats','MenuController@getWerkplaats');

Route::get('/contact','MenuController@getContact');

Route::get('/vriendenOverzicht', 'MenuController@friendPage');


/* CMS routes. */
Route::group(array('prefix' => 'cms'), function() {
    Route::get('/', function() {
        return view('cms/cmslogin');
    });
    Route::get('/startpagina', 'MenuController@cmshome');

    // TODO hier komt hoogstwaarschijnlijk nog meer bij
});

Auth::routes();

Route::get('/home', 'HomeController@index');
