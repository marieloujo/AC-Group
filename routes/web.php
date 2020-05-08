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

Route::get('/', 'MainController@accueil')->name('accueil');
Route::get('/vision', 'MainController@vision')->name('notre-vision');
Route::get('/expertises', 'MainController@expertises')->name('expertises');
Route::get('/faq', 'MainController@faq')->name('faq');
Route::get('/actualites', 'MainController@actualites')->name('actualites');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::post('/send-mail', 'ContactController@sendMail')->name('sendMail');



Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'isAdmin'], function() {

        Route::group(['prefix' => 'admin'], function() {

            Route::get('dashboard', 'Admin\DashboardController@accueil')->name("admin_accueil");
            
            
            Route::get('expertises', 'Admin\ExpertisesController@expertises')->name("admin_expertises");
            Route::post('expertises/add', 'Admin\ExpertisesController@addExpertise')->name("admin_ajouter_expertise");
            Route::post('expertises/delete/{idExpertise}', 'Admin\ExpertisesController@delete')->name("admin_delete_expertise");



            Route::get('formations', 'Admin\FormationsController@formations')->name("admin_formations");
            Route::post('formations/add', 'Admin\FormationsController@ajouter')->name("admin_ajouter_formation");
            Route::post('formations/delete/{idFormation}', 'Admin\FormationsController@delete')->name("admin_delete_formation");



            Route::get('realisations', 'Admin\RealisationsController@realisations')->name("admin_realisations");
            Route::post('realisations/add', 'Admin\RealisationsController@ajouter')->name("admin_ajouter_realisation");
            Route::post('realisations/delete/{idRealisation}', 'Admin\RealisationsController@delete')->name("admin_delete_realisation");



            Route::get('technologies', 'Admin\TechnologiesController@technologies')->name("admin_technologies");
            Route::post('technologies/add', 'Admin\TechnologiesController@ajouter')->name("admin_ajouter_technologie");
            Route::post('technologies/delete/{idTechnologie}', 'Admin\TechnologiesController@delete')->name("admin_delete_technologie");



            Route::get('temoignages', 'Admin\TemoignagesController@temoignages')->name("admin_temoignages");
            Route::post('temoignages/add', 'Admin\TemoignagesController@ajouter')->name("admin_ajouter_temoignage");
            Route::post('temoignages/delete/{idTemoignage}', 'Admin\TemoignagesController@delete')->name("admin_delete_temoignage");


        });

    });

});



Auth::routes();
