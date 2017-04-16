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
Route::get('/', 'HomeController@index');

Route::get('nieuws', 'NewsController@getNewsList');

Route::get('nieuws/{id}', 'NewsController@getNewsItem');

Route::get('/over', 'MenuController@getOverons');

Route::get('/werkplaats', 'MenuController@getWerkplaats');


Route::get('/contact', 'MenuController@getContact');

Route::get('/vrienden-overzicht', 'MenuController@friendPage');

Route::group(array('prefix' => 'vacatures'), function () {
    Route::get('', 'VacatureController@getVacaturePage');
    Route::get('/{id}', 'VacatureController@getDetailPage');

});


Route::get('/sponsors', 'SponsorController@getSponsorPage');

Route::get('/vriend-worden', 'MenuController@friendPage');

Route::get('/vriend-worden-pay', 'FriendController@becomeFriend');

Route::post('/vriend-worden-redirect', 'FriendController@paymentUpdate');

Route::get('/winkel', 'ShopController@getShopWindow');

Route::get('/werkplaats-overzicht', 'WorkplaceController@getWorkspacePage');

Route::get('/detailed-werkplaats/{id}', 'WorkplaceController@getDetailedWerkplaats');

Route::get('/dag-planning/{currentday}/{id}', 'WorkplaceController@getDayplanning');
Route::post('/dag-planning/{currentday}/{id}', 'WorkplaceController@createReservation');


/* CMS routes. */
Route::get('/agenda', 'AgendaController@getExpositions');

Route::get('/agendaitem/{id}', 'AgendaItemController@getExpositionItem');

Route::get('/archief-agenda', 'ArchiveAgendaController@getArchiveAgenda');
Route::get('/mijn-reserveringen', 'WorkplaceController@myReservations');


/* CMS routes. */
Route::group(['prefix' => 'cms', 'middleware' => 'admin'], function () {

    Route::resource('news', 'NewsItemController');

    Route::get('/startpagina', 'MenuController@cmshome');
    Route::get('/nieuwtentoonstelling', 'MenuController@cmsTentoonstellingen');
    Route::post('/nieuwtentoonstelling', 'CmsTentoonstelling@newTentoonstelling');
    Route::get('/bewerktentoonstelling/{id}', 'MenuController@cmsEditTentoonstelling');
    Route::post('/bewerktentoonstelling/{id}', ['as' => 'bewerktentoonstelling', 'uses' => 'CmsTentoonstelling@editTentoonstelling']);
    Route::get('/deletetentoonstelling/{id}', ['as' => 'deletetentoonstelling', 'uses' => 'CmsTentoonstelling@deleteTentoonstelling']);
    Route::get('/workshop', 'MenuController@cmsWorkshop');
    Route::get('/lijsttentoonstellingen', ['as' => 'lijsttentoonstellingen', 'uses' => 'MenuController@cmslijstTentoonstellingen']);
    Route::get('/workshops', 'MenuController@cmsworkshops');
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

    Route::get('/vacature', 'VacatureController@getCmsVacature');
    Route::get('/vacature/edit/{id}', 'VacatureController@getCMSRUVacature');
    Route::patch('/vacature/update/{id}', 'VacatureController@update');
    Route::get('/vacature/getcreate', 'VacatureController@getcreate');
    Route::post('/vacature/create', 'VacatureController@create');
    Route::get('/vacature/delete/{id}', 'VacatureController@delete');
    Route::post('/vacature/toon/{id}', 'VacatureController@updateToon');

    // TODO hier komt hoogstwaarschijnlijk nog meer bij
});


Auth::routes();

Route::get('/home', 'HomeController@index');
