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
Route::get('/', 'MenuController@getIndex');

Route::get('/nieuws', 'MenuController@getNieuws');

Route::get('/over', 'MenuController@getOverons');

Route::get('/werkplaats', 'MenuController@getWerkplaats');

//Route::get('/detailedWerkplaats/{id}', 'WorkplaceController@getDetailedWerkplaats');

Route::get('/contact', 'MenuController@getContact');

Route::get('/vrienden-overzicht', 'MenuController@friendPage');

Route::get('/sponsors', 'SponsorController@getSponsorPage');

Route::get('/vriend-worden', 'MenuController@friendPage');

Route::get('/winkel', 'ShopController@getShopWindow');

Route::get('/werkplaats-overzicht', 'WorkplaceController@getWorkspacePage');

Route::get('/detailed-werkplaats/{id}', 'WorkplaceController@getDetailedWerkplaats');

Route::get('/dag-planning/{currentday}/{id}','WorkplaceController@getDayplanning');
Route::post('/dag-planning/{currentday}/{id}', 'WorkplaceController@createReservation');

Route::get('function', 'WorkplaceController@saveToDatabase');
//Route::get('/dagPlanning/{currentDay}', function ($currentDay){
//    dd($currentDay);
//});

// temporary rout without an id parameter
Route::get('/detailedWerkplaats', 'WorkplaceController@getDetailedWerkplaats');




/* CMS routes. */
Route::group(array('prefix' => 'cms'), function () {

    Route::get('/startpagina', 'MenuController@cmshome');
    Route::get('/tentoonstellingen', 'MenuController@cmsTentoonstellingen');
    Route::get('/workshop', 'MenuController@cmsWorkshop');
    Route::get('/lijsttentoonstellingen', 'MenuController@cmslijstTentoonstellingen');
    Route::get('/workshops', 'MenuController@cmsworkshops');
    Route::get('/newNews', 'MenuController@cmsnewnews');
    Route::get('/news', 'MenuController@cmsnews');
    Route::get('/educatie', 'MenuController@cmsEducatie');
    Route::get('/newEducatie', 'MenuController@cmsNewEducatie');
    Route::get('/Scholen', 'MenuController@cmsSchool');
    Route::get('/Shop', 'MenuController@cmsShop');
    Route::get('/newShopItem', 'MenuController@cmsnewShopItem');
    Route::get('/sponsors', 'MenuController@cmssponsors');
    Route::get('/newSponsor', 'MenuController@cmsNewSponsor');
    Route::get('/informatie', 'MenuController@cmsInformatie');
    Route::get('/menu', 'MenuController@cmsMenu');
    Route::get('/newMenu', 'MenuController@cmsNewMenu');
    Route::get('/nieuwsbrief', 'MenuController@cmsNieuwsbrief');


    // TODO hier komt hoogstwaarschijnlijk nog meer bij
});

Auth::routes();

Route::get('/home', 'HomeController@index');
