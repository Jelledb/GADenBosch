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

Route::get('/over', 'OverOnsController@informatie');

Route::get('/werkplaats', 'MenuController@getWerkplaats');


Route::get('/contact', 'ContactController@contact');

Route::group(array('prefix' => 'vacatures'), function () {
    Route::get('', 'VacatureController@getVacaturePage');
    Route::get('/{id}', 'VacatureController@getDetailPage');
});
Route::group(array('prefix' => 'educatie'), function () {
    Route::get('', 'EducationController@education');
    Route::get('{id}', 'EducationController@index');
});


Route::get('/sponsors', 'SponsorController@getSponsorPage');

Route::get('/vriend-worden', ['as' => 'vriend-worden', 'uses' => 'MenuController@friendPage']);

Route::get('/vriend-worden-pay', 'FriendController@becomeFriend');

Route::get('/winkel',['as'=>'/products','uses'=>'ProductsController@getProducts'] );

Route::get('/vriend-worden-redirect/{user}', 'FriendController@paymentRedirect');

Route::post('/vriend-worden-webhook/{user}', 'FriendController@paymentUpdate');

Route::get('/werkplaats-overzicht', 'WorkplaceController@getWorkspacePage');

Route::get('/detailed-werkplaats/{id}', 'WorkplaceController@getDetailedWerkplaats');

Route::get('/dag-planning/{currentday}/{id}', 'WorkplaceController@getDayplanning');

Route::get('/agenda', 'AgendaController@getExpositions');

Route::get('/agendaitem/{id}', 'AgendaItemController@getExpositionItem');

Route::get('/archief-agenda', 'ArchiveAgendaController@getArchiveAgenda');


Route::group(['middleware' => ['auth']], function () {
    Route::post('/dag-planning/{currentday}/{id}', 'WorkplaceController@createReservation');
    Route::get('/mijn-reserveringen', ['as' => 'mijn-reserveringen', 'uses' => 'WorkplaceController@myReservations']);
    Route::get('/delete-reservering/{res}', ['as' => 'delete-reservering', 'uses' => 'WorkplaceController@deleteReservation']);

});

/* CMS routes. */
Route::group(['prefix' => 'cms', 'middleware' => 'admin'], function () {

    Route::resource('news', 'Cms\NewsItemController');
    Route::resource('educatie', 'Cms\EducationCMSController');
    Route::get('titel-beschrijving', [
        'as' => 'titel-beschrijving.index',
        'uses' => 'Cms\TitleDescriptionController@index'
    ]);
    Route::post('upload/image', 'ImageUploadController@uploadImage' );

    Route::get('titel-beschrijving/edit/{id}', 'Cms\TitleDescriptionController@edit');
    Route::patch('titel-beschrijving/update/{id}', 'Cms\TitleDescriptionController@update');

    Route::get('/startpagina', 'MenuController@cmshome');
    Route::get('/nieuwtentoonstelling', 'MenuController@cmsTentoonstellingen');
    Route::post('/nieuwtentoonstelling', 'Cms\CmsTentoonstellingController@newTentoonstelling');
    Route::get('/bewerktentoonstelling/{id}', 'MenuController@cmsEditTentoonstelling');
    Route::post('/bewerktentoonstelling/{id}', ['as' => 'bewerktentoonstelling', 'uses' => 'Cms\CmsTentoonstellingController@editTentoonstelling']);
    Route::get('/deletetentoonstelling/{id}', ['as' => 'deletetentoonstelling', 'uses' => 'Cms\CmsTentoonstellingController@deleteTentoonstelling']);
    Route::get('/workshop', 'MenuController@cmsWorkshop');
    Route::get('/lijsttentoonstellingen', ['as' => 'lijsttentoonstellingen', 'uses' => 'MenuController@cmslijstTentoonstellingen']);
    Route::get('/workshops', 'MenuController@cmsworkshops');

    Route::get('/fotos-slider', ['as' => 'fotos-slider', 'uses' => 'MenuController@cmsFotosSlider']);
    Route::get('/nieuwfoto-slider', ['as' => 'newimageslider', 'uses' => 'Cms\CmsImageSliderController@newImage']);
    Route::post('/nieuwfoto-slider', ['as' => 'newimageslider', 'uses' => 'Cms\CmsImageSliderController@newImageOpslaan']);
    Route::get('/bewerkfoto-slider/{id}', ['as' => 'bewerkimageslider', 'uses' => 'Cms\CmsImageSliderController@editImage']);
    Route::post('/bewerkfoto-slider/{id}', ['as' => 'bewerkimageslider', 'uses' => 'Cms\CmsImageSliderController@editOpslaan']);
    Route::get('/verwijder-slider/{id}', ['as' => 'deleteimageslider', 'uses' => 'Cms\CmsImageSliderController@destroy']);

    Route::get('/Scholen', 'MenuController@cmsSchool');
    Route::get('/Shop', 'MenuController@cmsShop');
    Route::get('/newShopItem', 'MenuController@cmsnewShopItem');
    Route::get('/sponsors', 'MenuController@cmssponsors');
    Route::get('/sponsors', ['as' => 'sponsors', 'uses' => 'MenuController@cmssponsors']);
    Route::get('/nieuwsponsor', ['as' => 'nieuwsponsor', 'uses' => 'Cms\CmsSponsorController@newsponsor']);
    Route::post('/nieuwsponsor', ['as' => 'opslaan', 'uses' => 'Cms\CmsSponsorController@opslaan']);
    Route::get('/bewerksponsor/{id}', ['as' => 'bewerksponsor', 'uses' => 'Cms\CmsSponsorController@edit']);
    Route::post('/bewerksponsor/{id}', ['as' => 'bewerksponsoropslaan', 'uses' => 'Cms\CmsSponsorController@editOpslaan']);
    Route::get('/deletesponsor/{id}', ['as' => 'deletesponsor', 'uses' => 'Cms\CmsSponsorController@destroy']);
    Route::get('/newSponsor', 'MenuController@cmsNewSponsor');

    Route::get('/informatie', 'OverOnsController@cmsInformatie');
    Route::patch('/informatie/update', 'OverOnsController@update');

    Route::get('/contact', 'ContactController@cmsContact');
    Route::patch('/contact/update', 'ContactController@update');

    Route::get('/menu', 'MenuController@cmsMenu');
    Route::get('/newMenu', 'MenuController@cmsNewMenu');
    Route::get('/nieuwsbrief', 'MenuController@cmsNieuwsbrief');

    Route::get('/orders', 'Cms\OrderController@index');

    Route::get('/vacature', 'VacatureController@getCmsVacature');
    Route::get('/vacature/edit/{id}', 'VacatureController@getCMSRUVacature');
    Route::patch('/vacature/update/{id}', 'VacatureController@update');
    Route::get('/vacature/getcreate', 'VacatureController@getcreate');
    Route::post('/vacature/create', 'VacatureController@create');
    Route::get('/vacature/delete/{id}', 'VacatureController@delete');
    Route::post('/vacature/toon/{id}', 'VacatureController@updateToon');

    Route::get('/reserveringen', ['as' => 'reserveringen','uses' => 'CMS\ReserveringenController@showView']);
    Route::get('/reserveringen/{id}', 'CMS\ReserveringenController@getReservationsFrom');
    Route::get('/deleteReservering/{id}', 'CMS\ReserveringenController@deleteReservation');

});


Auth::routes();

Route::get('/home', 'HomeController@index');

//webshop routes

Route::group(['middleware' => ['auth']], function () {
    Route::get('/myCart', ['as'=>'/myCart' ,'uses'=>'CartController@index']);
    Route::get('/orders', 'CartController@showOrders');
    Route::get('/purchase',['as'=>'product.purchase','uses'=> 'CartController@purchase']);
    Route::get('/cart-redirect', 'CartController@paymentRedirect');
    Route::get('/winkel-webhook','CartController@paymentUpdate');
    Route::get('/removeOrder',['as'=>'/removeOrder','uses'=> 'CartController@removeOrder']);
    Route::get('/addtocart/{id}',['uses' => 'ProductsController@getAddToCart','as' => 'product.addToCart']);

});
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('product', 'ProductsController');
    Route::get('/remove/{id}',['uses' => 'CartController@removeFromCart','as' => 'product.remove']);
    Route::get('/dashboard', 'AdminController@index');

});

Route::get('/search/{id}', ['as' => 'search', 'uses' => 'ProductsController@search']);
