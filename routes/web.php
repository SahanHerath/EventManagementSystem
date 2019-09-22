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
Route::group(['middleware'=> ['web','auth']],function(){

    Route::get('/home',function(){
        if(Auth::user()->admin==0)
        {
            return view('home');
        }
        else
        {
            $users['users'] = \App\User::all();
            return view('adminhome',$users);
        }
    });
    

});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Photographyview{id}','PhotographyController@viewProfile');

Route::get('/Photography', 'PhotographyController@index')  ; 
Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/category', 'HomeController@category');
Route::get('/hall', 'HomeController@hall');
Route::post('/addphotographyer', 'PhotographyController@store');
Route::post('/addmusician', 'MusicianController@store');
Route::post('/addDecorator', 'decorationController@store');
Route::post('/addSalon', 'SalonController@store');




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
Route::get('/HallView{id}','HallController@viewHall');

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

Route::get('/WeddingDecoration', 'DecorationController@wedding')  ;
Route::get('/BirthdayDecoration', 'DecorationController@birthday')  ;
Route::get('/PartyDecoration', 'DecorationController@party')  ;
Route::get('/OutsideDecoration', 'DecorationController@outside')  ;

Route::get('/WeddingDancing', 'DancingController@wedding')  ;
Route::get('/BirthdayDancing', 'DancingController@birthday')  ;
Route::get('/PartyDancing', 'DancingController@party')  ;

Route::get('/WeddingCatering', 'CateringController@wedding')  ;
Route::get('/BirthdayCatering', 'CateringController@birthday')  ;
Route::get('/PartyCatering', 'CateringController@party')  ;
Route::get('/OutsideCatering', 'CateringController@outside')  ;
Route::get('/CoperateCatering', 'CateringController@coperate')  ;

Route::get('/WeddingBeautician', 'salonController@wedding')  ;
Route::get('/PartyBeautician', 'salonController@party')  ;

Route::get('/BirthdayMagician', 'ActorController@birthdayMagician')  ;
Route::get('/BirthdayEntertainer', 'ActorController@birthdayEntertainer')  ;
Route::get('/partyEntertainer', 'ActorController@partyEntertainer')  ;
Route::get('/ProfessionalEventAnnouncer', 'ActorController@profAnnouncer')  ;
Route::get('/coperateEventAnnouncers', 'ActorController@copAnnouncer')  ;
Route::get('/coperateEventEntertainer', 'ActorController@copEntertainer')  ;
Route::get('/Singer', 'ActorController@singer')  ;
Route::get('/musicalAnnouncer', 'ActorController@musicAnnouncer')  ;

Route::get('/WeddingEventPlanner', 'EventPlanersController@wedding')  ;
Route::get('/PartyEventPlanner', 'EventPlanersController@party')  ;
Route::get('/ProfessionalEventPlanner', 'EventPlanersController@prof')  ;
Route::get('/OutsideEventPlanner', 'EventPlanersController@outside')  ;
Route::get('/CoperateEventPlanner', 'EventPlanersController@coperate')  ;
Route::get('/SportEventPlanner', 'EventPlanersController@sport')  ;

Route::get('/WeddingHall', 'hallController@wedding')  ;
Route::get('/BirthdayHall', 'hallController@party')  ;
Route::get('/PartyHall', 'hallController@party')  ;
Route::get('/CoperateEventHall', 'hallController@coperate')  ;
Route::get('/ProfessionalEventHall', 'hallController@prof')  ;

Route::get('/WeddingDressDesigner', 'CostumeDesignerController@wedding')  ;
Route::get('/PartyDressDesigner', 'CostumeDesignerController@party')  ;
Route::get('/SportsKitDesigner', 'CostumeDesignerController@sportkit')  ;
Route::get('/CoperateEventDressDesigner', 'CostumeDesignerController@coperate')  ;
Route::get('/SportShoesDesigner', 'CostumeDesignerController@sportshoes')  ;

Route::get('/WeddingCake', 'CakeController@wedding')  ;
Route::get('/BirthdayCake', 'CakeController@birthday')  ;

Route::get('/HallView', function () {
    return view('HallView');
});

/*Route::get('/CostumeDesigner', function () {
    return view('CostumeDesigner');
});*/

Route::get('/CostumeDesigner', 'CostumeDesignerController@index')  ;
Route::get('/CostumeDesignerView{id}','CostumeDesignerController@viewProfile');
Route::post('/addCostumeDesigner', 'CostumeDesignerController@store')  ;

Route::get('/Cake', 'CakeController@index')  ;
Route::get('/Cakeview{id}','CakeController@viewProfile');

Route::get('/rating', function () {
    return view('rating');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/serviceproviders', function () {
    return view('serviceproviders');
});

Route::get('/UserProfile', function () {
    return view('UserProfile');
});

Route::get('/Profile', 'HomeController@profilecategory')  ;


Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.users.index');

    Route::get('/create','UsersController@create')
         ->name('users.users.create');

    Route::get('/show/{users}','UsersController@show')
         ->name('users.users.show')
         ->where('id', '[0-9]+');

    Route::get('/{users}/edit','UsersController@edit')
         ->name('users.users.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UsersController@store')
         ->name('users.users.store');
               
    Route::put('users/{users}', 'UsersController@update')
         ->name('users.users.update')
         ->where('id', '[0-9]+');

    Route::delete('/users/{users}','UsersController@destroy')
         ->name('users.users.destroy')
         ->where('id', '[0-9]+');

});
Route::post('/EditDecoratorEvents{id}', 'decorationController@eventUpdate')  ;
Route::post('/EditDecoratorFeatures{id}', 'decorationController@featureUpdate')  ;
Route::post('/EditDecoratorDetails/{userid}/{decoid}', 'decorationController@InfoUpdate')  ;

Route::post('/EditDancerEvents{id}', 'DancingController@eventUpdate')  ;
Route::post('/EditDancerFeatures{id}', 'DancingController@featureUpdate')  ;
Route::post('/EditDancerDetails/{userid}/{dancerid}', 'DancingController@InfoUpdate')  ;


Route::post('/EditPoruwaFeatures{id}', 'PoruwaController@featureUpdate')  ;
Route::post('/EditPoruwaDetails/{userid}/{poruwaid}', 'PoruwaController@InfoUpdate')  ;

Route::post('/EditPhotographyDetails/{userid}/{photographyid}', 'PhotographyController@InfoUpdate')  ;
Route::post('/EditPhotographyEvents{id}', 'PhotographyController@eventUpdate')  ;
Route::post('/EditPhotographyFeatures{id}', 'PhotographyController@featureUpdate')  ;

Route::post('/EditMusicDetails/{userid}/{Musicid}', 'musicianController@InfoUpdate')  ;