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
    return view('welcome');
});

Route::get('/Photographyview{id}','PhotographyController@viewProfile');

Route::get('/Photography', 'PhotographyController@index')  ; 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'HomeController@category');
Route::get('/hall', 'HomeController@hall');
Route::post('/addphotographyer', 'PhotographyController@store');
Route::post('/addmusician', 'MusicianController@store');
Route::post('/addDecorator', 'decorationController@store');
Route::post('/addSalon', 'SalonController@store');


Route::get('/Cake', function () {
    return view('Cake');
});

Route::get('/Music', 'MusicianController@index')  ;
Route::get('/MusicView{id}','musicianController@viewProfile');

Route::get('/Decorator', 'DecorationController@index')  ;
Route::get('/DecoratorView{id}','DecorationController@viewProfile');

Route::get('/Bridal', 'salonController@index')  ;
Route::get('/SalonView{id}','salonController@viewProfile');

Route::get('/Transport', 'TransportController@index')  ;

Route::post('/addtransport', 'TransportController@store')  ;

/*Route::get('/Dancing', function () {
    return view('Dance');
});*/

Route::get('/Dancing', 'DancingController@index')  ;
Route::get('/DanceView{id}','DancingController@viewProfile');

Route::get('/TransportView{id}','TransportController@viewProfile');


Route::get('/Events', function () {
    return view('Events');
});

Route::post('/addactor', 'ActorController@store')  ;

Route::post('/addcatering', 'CateringController@store')  ;

Route::post('/adddancing', 'DancingController@store')  ;

/*Route::get('/Poruwa', function () {
    return view('PoruwaCeramony');
});*/

Route::post('/addPoruwa', 'PoruwaController@store') ;
Route::get('/Poruwa', 'PoruwaController@index')  ;




Route::get('/Actor', 'ActorController@index')  ;
Route::get('/ActorView{id}','ActorController@viewProfile');
Route::post('/addCakeDesigner', 'CakeController@store')  ;




Route::post('/addCakeDesigner', 'CakeController@store')  ;

Route::get('/catering', 'CateringController@index')  ;
Route::get('/cateringview{id}','CateringController@viewProfile');

Route::get('/PoruwaCeramonyView{id}','PoruwaController@viewProfile');


Route::get('/Actor', 'ActorController@index')  ;
Route::get('/ActorView{id}','ActorController@viewProfile');

Route::post('/addeventplanner','EventPlanersController@store');
Route::get('/EventPlanner', 'EventPlanersController@index')  ;
Route::get('/EventPlannerView{id}','EventPlanersController@viewProfile');

Route::post('/addhotel', 'HallController@store');
Route::post('/addhall{id}', 'HallController@storeReceptionHall');


Route::get('/Venue', 'HallController@index')  ;
Route::get('/HotelView{id}','HallController@viewHotel');

Route::get('/WeddingPhotographer', 'PhotographyController@wedding')  ;
Route::get('/BirthdayPhotographer', 'PhotographyController@birthday')  ;
Route::get('/PartyPhotographer', 'PhotographyController@party')  ;
Route::get('/ProfessionalEventPhotographer', 'PhotographyController@prof')  ;
Route::get('/SportsPhotographer', 'PhotographyController@sports')  ;
Route::get('/OutsidePhotographer', 'PhotographyController@outside')  ;

Route::get('/WeddingMusic', 'MusicianController@wedding')  ;
Route::get('/BirthdayMusic', 'MusicianController@birthday')  ;
Route::get('/PartyMusic', 'MusicianController@party')  ;
Route::get('/OutsideMusic', 'MusicianController@outside')  ;




