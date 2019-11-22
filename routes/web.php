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


Auth::routes();

//add all service provider
Route::post('/addphotographyer', 'PhotographyController@store');
Route::post('/addmusician', 'MusicianController@store');
Route::post('/addDecorator', 'decorationController@store');
Route::post('/addSalon', 'SalonController@store');
Route::post('/addtransport', 'TransportController@store')  ;
Route::post('/addactor', 'ActorController@store')  ;
Route::post('/addcatering', 'CateringController@store')  ;
Route::post('/adddancing', 'DancingController@store')  ;
Route::post('/addPoruwa', 'PoruwaController@store') ;
Route::post('/addCakeDesigner', 'CakeController@store')  ;
Route::post('/addCakeDesigner', 'CakeController@store')  ;
Route::post('/addeventplanner','EventPlanersController@store');
Route::post('/addhotel', 'HallController@store');
Route::post('/addhall{id}', 'HallController@storeReceptionHall');
Route::post('/addCostumeDesigner', 'CostumeDesignerController@store')  ;

//All service provider main page and profile page
Route::get('/Photographyview{id}','PhotographyController@viewProfile');
Route::get('/Photography', 'PhotographyController@index')  ; 

Route::get('/Music', 'MusicianController@index')  ;
Route::get('/MusicView{id}','musicianController@viewProfile');

Route::get('/Decorator', 'DecorationController@index')  ;
Route::get('/DecoratorView{id}','DecorationController@viewProfile');

Route::get('/Bridal', 'salonController@index')  ;
Route::get('/SalonView{id}','salonController@viewProfile');

Route::get('/Dancing', 'DancingController@index')  ;
Route::get('/DanceView{id}','DancingController@viewProfile');

Route::get('/Transport', 'TransportController@index')  ;
Route::get('/TransportView{id}','TransportController@viewProfile');


//Route::get('/hall', 'HomeController@hall');

Route::get('/Actor', 'ActorController@index')  ;
Route::get('/ActorView{id}','ActorController@viewProfile');

Route::get('/catering', 'CateringController@index')  ;
Route::get('/cateringview{id}','CateringController@viewProfile');

Route::get('/Poruwa', 'PoruwaController@index')  ;
Route::get('/PoruwaCeramonyView{id}','PoruwaController@viewProfile');

Route::get('/Actor', 'ActorController@index')  ;
Route::get('/ActorView{id}','ActorController@viewProfile');

Route::get('/EventPlanner', 'EventPlanersController@index')  ;
Route::get('/EventPlannerView{id}','EventPlanersController@viewProfile');

Route::get('/Venue', 'HallController@index')  ;
Route::get('/HotelView{id}','HallController@viewHotel');
Route::get('/HallView{id}','HallController@viewHall');

Route::get('/CostumeDesigner', 'CostumeDesignerController@index')  ;
Route::get('/CostumeDesignerView{id}','CostumeDesignerController@viewProfile');

Route::get('/Cake', 'CakeController@index')  ;
Route::get('/Cakeview{id}','CakeController@viewProfile');

//search bar in main pages
Route::get('/ActorSearch', 'ActorController@Search')  ;
Route::get('/CakeSearch', 'CakeController@Search')  ;
Route::get('/CateringSearch', 'CateringController@Search')  ;
Route::get('/CostumeDesignerSearch', 'CostumeDesignerController@Search')  ;
Route::get('/DancerSearch', 'DancingController@Search')  ;
Route::get('/DecoratorSearch', 'decorationController@Search')  ;
Route::get('/EventPlannerSearch', 'EventPlanersController@Search')  ;
Route::get('/MusicSearch', 'musicianController@Search')  ;
Route::get('/PhotographySearch', 'PhotographyController@Search')  ;
Route::get('/PoruwaSearch', 'PoruwaController@Search')  ;
Route::get('/SalonSearch', 'salonController@Search')  ;
Route::get('/TransportSearch', 'TransportController@Search')  ;
Route::get('/HotelSearch', 'HallController@Search')  ;

Route::get('/category', 'HomeController@category');


//all event page details
Route::get('/Events', function () {
    return view('Events');
});

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

//adding rating ,complaint ,suggestion
Route::post('/AddRating{id}', 'RatingController@addrating')  ;
Route::get('/AddComplaint{id}', 'ComplaintController@form')  ;
Route::post('/newComplain', 'ComplaintController@addcomplaint')  ;
Route::post('/addSuggestion', 'SuggestionsController@store')  ;

//contact us and about us
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contact');
});

//all the login verified routes
Route::group(['middleware'=> 'AuthenticateMiddleware'],function(){

    //All service provider functions in admin profile
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
    
    //All the routes related to admin dashboards awards
    Route::get('/Awards', 'AwardController@all')  ;
    Route::get('/HotelAwards', 'AwardController@Hotel')  ;
    Route::get('/PhotographyAwards', 'AwardController@Photography')  ;
    Route::get('/SalonAwards', 'AwardController@Salon')  ;
    Route::get('/MusicAwards', 'AwardController@Music')  ;
    Route::get('/CateringAwards', 'AwardController@Catering')  ;
    Route::get('/ActorAwards', 'AwardController@Actor')  ;
    Route::get('/CakeAwards', 'AwardController@Cake')  ;
    Route::get('/CostumeAwards', 'AwardController@Costume')  ;
    Route::get('/DancingAwards', 'AwardController@Dancing')  ;
    Route::get('/DecorationAwards', 'AwardController@Decoration')  ;
    Route::get('/TransportAwards', 'AwardController@Transport')  ;
    Route::get('/EventAwards', 'AwardController@Event')  ;
    Route::get('/PoruwaAwards', 'AwardController@Poruwa')  ;

    //Awads changing in admin panel
    Route::get('/PlatinumAward{id}', 'AwardController@platinum')  ;
    Route::get('/GoldAward{id}', 'AwardController@gold')  ;
    Route::get('/SilverAward{id}', 'AwardController@silver')  ;
    Route::get('/BronzeAward{id}', 'AwardController@bronze')  ;
    Route::get('/RemoveAward{id}', 'AwardController@remove')  ;

    //All suggestions from admin panel
    Route::get('/FinancialSuggestions', 'SuggestionsController@Finance')  ;
    Route::get('/AdvertisingSuggestions', 'SuggestionsController@Advertising')  ;
    Route::get('/ServiceSuggestions', 'SuggestionsController@Service')  ;
    Route::get('/CommunitySuggestions', 'SuggestionsController@Community')  ;
    Route::get('/DevelopmentSuggestions', 'SuggestionsController@Development')  ;
    Route::get('/GeneralSuggestions', 'SuggestionsController@General')  ;
    Route::get('/BugSuggestions', 'SuggestionsController@Bug')  ;
    Route::get('/DonationSuggestions', 'SuggestionsController@Donation')  ;
    Route::get('/suggestions', 'SuggestionsController@allsuggestions')  ;
    Route::get('/RemoveSuggestion{id}', 'SuggestionsController@removesuggestions')  ;
    Route::get('/ReplySuggestion{id}', 'SuggestionsController@reply')  ;

    //all summary and report in admin panel
    Route::get('/Summary', 'SummaryController@types')  ;
    Route::get('/VenueSummary', 'SummaryController@venue')  ;
    Route::get('/PhotographySummary', 'SummaryController@photography')  ;
    Route::get('/CakeSummary', 'SummaryController@cake')  ;
    Route::get('/DanceSummary', 'SummaryController@dance')  ;
    Route::get('/DecorationSummary', 'SummaryController@decoration')  ;
    Route::get('/ActorSummary', 'SummaryController@actor')  ;
    Route::get('/CateringSummary', 'SummaryController@catering')  ;
    Route::get('/CostumeSummary', 'SummaryController@costume')  ;
    Route::get('/PlannerSummary', 'SummaryController@planner')  ;
    Route::get('/DJSummary', 'SummaryController@music')  ;
    Route::get('/PoruwaSummary', 'SummaryController@poruwa')  ;
    Route::get('/SalonSummary', 'SummaryController@salon')  ;
    Route::get('/TransportSummary', 'SummaryController@transport')  ;
    Route::get('/CommentsSummary', 'SummaryController@comments')  ;
    Route::get('/ComplaintsSummary', 'SummaryController@complaints')  ;
    Route::get('/SuggestionSummary', 'SummaryController@suggestions')  ;
    Route::get('/FullReport', 'SummaryController@fullReport')  ;

    //All complaints in admin panel
    Route::get('/HotelComplaint', 'ComplaintController@Hotelcomplaints')  ;
    Route::get('/PhotographyComplaint', 'ComplaintController@Photographycomplaints')  ;
    Route::get('/SalonComplaint', 'ComplaintController@Saloncomplaints')  ;
    Route::get('/TransportComplaint', 'ComplaintController@Transportcomplaints')  ;
    Route::get('/CakeComplaint', 'ComplaintController@Cakecomplaints')  ;
    Route::get('/EventPlannerComplaint', 'ComplaintController@EventPlannercomplaints')  ;
    Route::get('/PoruwaComplaint', 'ComplaintController@Poruwacomplaints')  ;
    Route::get('/ActorComplaint', 'ComplaintController@Actorcomplaints')  ;
    Route::get('/DJComplaint', 'ComplaintController@DJcomplaints')  ;
    Route::get('/CateringComplaint', 'ComplaintController@Cateringcomplaints')  ;
    Route::get('/CostumeComplaint', 'ComplaintController@Costumecomplaints')  ;
    Route::get('/DancingComplaint', 'ComplaintController@Dancingcomplaints')  ;
    Route::get('/DecorationComplaint', 'ComplaintController@Decorationcomplaints')  ;
    //complaint options in admin panel
    Route::get('/complaints', 'ComplaintController@allcomplaints')  ;
    Route::get('/ReviewComplaint{id}', 'ComplaintController@reviewComplaint')  ;
    Route::get('/SolveComplaint{id}', 'ComplaintController@SolveComplaint')  ;
    Route::get('/DeleteComplaint{id}', 'ComplaintController@DeleteComplaint')  ;

    //all comments in admin panel
    Route::get('/HotelComments', 'RatingController@Hotelcomments')  ;
    Route::get('/PhotographyComments', 'RatingController@Photographycomments')  ;
    Route::get('/SalonComments', 'RatingController@Saloncomments')  ;
    Route::get('/TransportComments', 'RatingController@Transportcomments')  ;
    Route::get('/CakeComments', 'RatingController@Cakecomments')  ;
    Route::get('/EventPlannerComments', 'RatingController@EventPlannercomments')  ;
    Route::get('/PoruwaComments', 'RatingController@Poruwacomments')  ;
    Route::get('/ActorComments', 'RatingController@Actorcomments')  ;
    Route::get('/DJComments', 'RatingController@DJcomments')  ;
    Route::get('/CateringComments', 'RatingController@Cateringcomments')  ;
    Route::get('/CostumeComments', 'RatingController@Costumecomments')  ;
    Route::get('/DancingComments', 'RatingController@Dancingcomments')  ;
    Route::get('/DecorationComments', 'RatingController@decorationcomments')  ;
    //comment options in admin panel
    Route::get('/comments', 'RatingController@allcomments')  ;
    Route::get('/BlockComment{id}', 'RatingController@blockComment')  ;
    Route::get('/UnblockComment{id}', 'RatingController@unblockComment')  ;
    Route::get('/DeleteComment{id}', 'RatingController@deleteComment')  ;

    //admin profile and admin options in admin panel
    Route::get('/admins', 'AdminController@index')  ;
    Route::get('/addAdmin', 'AdminController@registerAdmin')  ;
    Route::post('/NewAdmin', 'AdminController@store')  ;
    Route::get('/removeAdmin{id}', 'AdminController@destroy')  ;
    Route::post('/EditAdmin{id}', 'AdminController@update')  ;
    Route::post('/EditBio{id}', 'AdminController@updateBio')  ;
    Route::post('/AdminMainpic{id}', 'AdminController@changeMainpic')  ;
    Route::post('/AdminCoverpic{id}', 'AdminController@changeCoverpic')  ;
    Route::post('/RemoveAdminAccount{id}', 'AdminController@deactivateAccount')  ;

    //all service provider details in admin profile
    Route::get('/AllHotels', 'UsersController@allhotel')  ;
    Route::get('/AllPhotography', 'UsersController@allphotography')  ;
    Route::get('/AllBeautician', 'UsersController@allbeautician')  ;
    Route::get('/AllMusic', 'UsersController@alldjband')  ;
    Route::get('/AllDJBand', 'UsersController@alldjband')  ;
    Route::get('/AllCatering', 'UsersController@allcatering')  ;
    Route::get('/AllRepresenter', 'UsersController@allrepresenter')  ;
    Route::get('/AllCakeDesigner', 'UsersController@allcakeDesigner')  ;
    Route::get('/AllCostumeDesigner', 'UsersController@allcostumedesigner')  ;
    Route::get('/AllDancing', 'UsersController@alldancing')  ;
    Route::get('/AllDecoration', 'UsersController@alldecoration')  ;
    Route::get('/AllTransport', 'UsersController@alltransport')  ;
    Route::get('/AllEventPlanners', 'UsersController@alleventplanners')  ;
    Route::get('/AllPoruwaRituals', 'UsersController@allporuwarituals')  ;
    //view any service provider in admin
    Route::get('/ViewServiceProvider{id}', 'UsersController@viewService')  ;

    //Actor profile all edits and changes
    Route::post('/EditActorDetails/{userid}/{actorid}', 'ActorController@InfoUpdate')  ;
    Route::post('/EditActorEvents{id}', 'ActorController@eventUpdate')  ;
    Route::post('/EditActorFeatures{id}', 'ActorController@featureUpdate')  ;
    Route::post('/ChangeActorMainpic{id}', 'ActorController@changeMainPic')  ;
    Route::post('/actorpic1{id}', 'ActorController@changePic1')  ;
    Route::post('/actorpic2{id}', 'ActorController@changePic2')  ;
    Route::post('/actorpic3{id}', 'ActorController@changePic3')  ;
    Route::post('/actorpic4{id}', 'ActorController@changePic4')  ;
    Route::post('/AddActorPackage{id}', 'ActorController@AddNewPackage')  ;
    Route::post('/EditActorPackage', 'ActorController@EditPackage')  ;
    Route::post('/DeleteActorPackage', 'ActorController@deletePackage')  ;

    //Cake Designer profile all edits and changes
    Route::post('/EditCakeFeatures{id}', 'CakeController@featureUpdate')  ;
    Route::post('/EditCakeDetails/{userid}/{cateringid}', 'CakeController@InfoUpdate')  ;
    Route::post('/ChangeCakeMainpic{id}', 'CakeController@changeMainPic')  ;
    Route::post('/cakepic1{id}', 'CakeController@changePic1')  ;
    Route::post('/cakepic2{id}', 'CakeController@changePic2')  ;
    Route::post('/cakepic3{id}', 'CakeController@changePic3')  ;
    Route::post('/cakepic4{id}', 'CakeController@changePic4')  ;
    Route::post('/AddCakePackage{id}', 'CakeController@AddNewPackage')  ;
    Route::post('/EditCakePackage', 'CakeController@EditPackage')  ;
    Route::post('/DeleteCakePackage', 'CakeController@deletePackage')  ;
    
    //all acccount deactivate routes
    Route::get('/RemoveTransportAccount{id}', 'TransportController@removeAccount')  ;
    Route::get('/RemoveMusicAccount{id}', 'musicianController@removeAccount')  ;
    Route::get('/RemoveHotelAccount{id}', 'HallController@removeAccount')  ;
    Route::get('/RemovePoruwaAccount{id}', 'PoruwaController@removeAccount')  ;
    Route::get('/RemoveEventPlannerAccount{id}', 'EventPlanersController@removeAccount')  ;
    Route::get('/RemoveDecorationAccount{id}', 'decorationController@removeAccount')  ;
    Route::get('/RemoveCateringAccount{id}', 'CateringController@removeAccount')  ;
    Route::get('/RemoveCostumeDesignerAccount{id}', 'CostumeDesignerController@removeAccount')  ;
    Route::get('/RemoveActorAccount{id}', 'ActorController@removeAccount')  ;
    Route::get('/RemoveCakeAccount{id}', 'CakeController@removeAccount')  ;
    Route::get('/RemoveSalonAccount{id}', 'salonController@removeAccount')  ;
    Route::get('/RemovePhotographyAccount{id}', 'PhotographyController@removeAccount')  ;
    Route::get('/RemoveDancerAccount{id}', 'DancingController@removeAccount')  ;



    //all Decoration profile options
    Route::post('/EditDecoratorEvents{id}', 'decorationController@eventUpdate')  ;
    Route::post('/EditDecoratorFeatures{id}', 'decorationController@featureUpdate')  ;
    Route::post('/EditDecoratorDetails/{userid}/{decoid}', 'decorationController@InfoUpdate')  ;
    Route::post('/AddDecorationPackage{id}', 'decorationController@AddNewPackage')  ;
    Route::post('/EditDecorationPackage', 'decorationController@EditPackage')  ;
    Route::post('/DeleteDecoratorPackage', 'decorationController@deletePackage')  ;
    Route::post('/ChangeDecorationMainpic{id}', 'decorationController@changeMainPic')  ;
    Route::post('/decarationpic1{id}', 'decorationController@changePic1')  ;
    Route::post('/decarationpic2{id}', 'decorationController@changePic2')  ;
    Route::post('/decarationpic3{id}', 'decorationController@changePic3')  ;
    Route::post('/decarationpic4{id}', 'decorationController@changePic4')  ;
    
    //all photography profile options
    Route::post('/EditPhotographyDetails/{userid}/{photographyid}', 'PhotographyController@InfoUpdate')  ;
    Route::post('/EditPhotographyEvents{id}', 'PhotographyController@eventUpdate')  ;
    Route::post('/EditPhotographyFeatures{id}', 'PhotographyController@featureUpdate')  ;
    Route::post('/ChangePhotographyMainpic{id}', 'PhotographyController@changeMainPic')  ;
    Route::post('/photographypic1{id}', 'PhotographyController@changePic1')  ;
    Route::post('/photographypic2{id}', 'PhotographyController@changePic2')  ;
    Route::post('/photographypic3{id}', 'PhotographyController@changePic3')  ;
    Route::post('/photographypic4{id}', 'PhotographyController@changePic4')  ;
    Route::post('/AddPhotographyPackage{id}', 'PhotographyController@AddNewPackage')  ;
    Route::post('/EditPhotographyPackage', 'PhotographyController@EditPackage')  ;
    Route::post('/DeletePhotographyPackage', 'PhotographyController@deletePackage')  ;
    Route::post('/AddVedio{id}', 'PhotographyController@uploadVideo')  ;
    Route::post('/DeletePhotographyVideo', 'PhotographyController@deleteVideo')  ;

    //all salon profile options
    Route::post('/EditSalonDetails/{userid}/{Salonid}', 'salonController@InfoUpdate')  ;
    Route::post('/EditSalonEvents{id}', 'salonController@eventUpdate')  ;
    Route::post('/EditSalonFeatures{id}', 'salonController@featureUpdate')  ;
    Route::post('/ChangeSalonMainpic{id}', 'salonController@changeMainPic')  ;
    Route::post('/Salonpic1{id}', 'salonController@changePic1')  ;
    Route::post('/Salonpic2{id}', 'salonController@changePic2')  ;
    Route::post('/Salonpic3{id}', 'salonController@changePic3')  ;
    Route::post('/Salonpic4{id}', 'salonController@changePic4')  ;
    Route::post('/AddSalonPackage{id}', 'salonController@AddNewPackage')  ;
    Route::post('/EditSalonPackage', 'salonController@EditPackage')  ;
    Route::post('/DeleteSalonPackage', 'salonController@deletePackage')  ;
    
    //All poruwa profile options
    Route::post('/EditPoruwaFeatures{id}', 'PoruwaController@featureUpdate')  ;
    Route::post('/EditPoruwaDetails/{userid}/{poruwaid}', 'PoruwaController@InfoUpdate')  ;
    Route::post('/ChangePoruwaMainpic{id}', 'PoruwaController@changeMainPic')  ;
    Route::post('/poruwapic1{id}', 'PoruwaController@changePic1')  ;
    Route::post('/poruwapic2{id}', 'PoruwaController@changePic2')  ;
    Route::post('/poruwapic3{id}', 'PoruwaController@changePic3')  ;
    Route::post('/poruwapic4{id}', 'PoruwaController@changePic4')  ;
    Route::post('/AddPoruwaPackage{id}', 'PoruwaController@AddNewPackage')  ;
    Route::post('/EditPoruwaPackage', 'PoruwaController@EditPackage')  ;
    Route::post('/DeletePoruwaPackage', 'PoruwaController@deletePackage')  ;
    
    //all Music profile options
    Route::post('/EditMusicDetails/{userid}/{Musicid}', 'musicianController@InfoUpdate')  ;
    Route::post('/EditMusicEvents{id}', 'musicianController@eventUpdate')  ;
    Route::post('/EditMusicFeatures{id}', 'musicianController@featureUpdate')  ;
    Route::post('/ChangeMusicMainpic{id}', 'musicianController@changeMainPic')  ;
    Route::post('/Musicpic1{id}', 'musicianController@changePic1')  ;
    Route::post('/Musicpic2{id}', 'musicianController@changePic2')  ;
    Route::post('/Musicpic3{id}', 'musicianController@changePic3')  ;
    Route::post('/Musicpic4{id}', 'musicianController@changePic4')  ;
    Route::post('/AddMusicPackage{id}', 'musicianController@AddNewPackage')  ;
    Route::post('/EditMusicPackage', 'musicianController@EditPackage')  ;
    Route::post('/DeleteMusicPackage', 'musicianController@deletePackage')  ;
    Route::post('/AddMusicVideo{id}', 'musicianController@uploadVideo')  ;
    Route::post('/DeleteMusicVideo', 'musicianController@deleteVideo')  ;
    
    //all transport profile options
    Route::post('/EditTransportDetails/{userid}/{Transportid}', 'TransportController@InfoUpdate')  ;
    Route::post('/EditTransportFeatures{id}', 'TransportController@featureUpdate')  ;
    Route::post('/ChangeTransportMainpic{id}', 'TransportController@changeMainPic')  ;
    Route::post('/Transportpic1{id}', 'TransportController@changePic1')  ;
    Route::post('/Transportpic2{id}', 'TransportController@changePic2')  ;
    Route::post('/Transportpic3{id}', 'TransportController@changePic3')  ;
    Route::post('/Transportpic4{id}', 'TransportController@changePic4')  ;
    Route::post('/AddTransportPackage{id}', 'TransportController@AddNewPackage')  ;
    Route::post('/EditTransportPackage', 'TransportController@EditPackage')  ;
    Route::post('/DeleteTransportPackage', 'TransportController@deletePackage')  ;

    //all event planner profile options
    Route::post('/EditEventPlannerEvents{id}', 'EventPlanersController@eventUpdate')  ;
    Route::post('/EditEventPlannerDetails/{userid}/{plannersid}', 'EventPlanersController@InfoUpdate')  ;
    Route::post('/ChangePlannerMainpic{id}', 'EventPlanersController@changeMainPic')  ;
    Route::post('/plannerpic1{id}', 'EventPlanersController@changePic1')  ;
    Route::post('/plannerpic2{id}', 'EventPlanersController@changePic2')  ;
    Route::post('/plannerpic3{id}', 'EventPlanersController@changePic3')  ;
    Route::post('/plannerpic4{id}', 'EventPlanersController@changePic4')  ;
    Route::post('/AddEventPlannerPackage{id}', 'EventPlanersController@AddNewPackage')  ;
    Route::post('/EditPlannerPackage', 'EventPlanersController@EditPackage')  ;
    Route::post('/DeletePlannerPackage', 'EventPlanersController@deletePackage')  ;

    //all dancer profile options
    Route::post('/EditDancerEvents{id}', 'DancingController@eventUpdate')  ;
    Route::post('/EditDancerFeatures{id}', 'DancingController@featureUpdate')  ;
    Route::post('/EditDancerDetails/{userid}/{dancerid}', 'DancingController@InfoUpdate')  ;
    Route::post('/ChangeDancerMainpic{id}', 'DancingController@changeMainPic')  ;
    Route::post('/dancerpic1{id}', 'DancingController@changePic1')  ;
    Route::post('/dancerpic2{id}', 'DancingController@changePic2')  ;
    Route::post('/dancerpic3{id}', 'DancingController@changePic3')  ;
    Route::post('/dancerpic4{id}', 'DancingController@changePic4')  ;
    Route::post('/AddDancerPackage{id}', 'DancingController@AddNewPackage')  ;
    Route::post('/EditDancerPackage', 'DancingController@EditPackage')  ;
    Route::post('/DeleteDancerPackage', 'DancingController@deletePackage')  ;
    Route::post('/AddDanceVideo{id}', 'DancingController@uploadVideo')  ;
    Route::post('/DeleteDancerVideo', 'DancingController@deleteVideo')  ;

    //all Costume Designer profile
    Route::post('/EditCostumeDesignerDetails/{userid}/{costumeid}', 'CostumeDesignerController@InfoUpdate')  ;
    Route::post('/EditCateringEvents{id}', 'CostumeDesignerController@eventUpdate')  ;
    Route::post('/EditCostumeDesignerFeatures{id}', 'CostumeDesignerController@featureUpdate')  ;
    Route::post('/ChangeCostumeMainpic{id}', 'CostumeDesignerController@changeMainPic')  ;
    Route::post('/costumepic1{id}', 'CostumeDesignerController@changePic1')  ;
    Route::post('/costumepic2{id}', 'CostumeDesignerController@changePic2')  ;
    Route::post('/costumepic3{id}', 'CostumeDesignerController@changePic3')  ;
    Route::post('/costumepic4{id}', 'CostumeDesignerController@changePic4')  ;
    Route::post('/AddCostumePackage{id}', 'CostumeDesignerController@AddNewPackage')  ;
    Route::post('/EditCostumePackage', 'CostumeDesignerController@EditPackage')  ;
    Route::post('/DeleteCostumePackage', 'CostumeDesignerController@deletePackage')  ;

    //All Catering profile options
    Route::post('/EditCateringDetails/{userid}/{cateringid}', 'CateringController@InfoUpdate')  ;
    Route::post('/EditCateringEvents{id}', 'CateringController@eventUpdate')  ;
    Route::post('/EditCateringFeatures{id}', 'CateringController@featureUpdate')  ;
    Route::post('/ChangeCateringMainpic{id}', 'CateringController@changeMainPic')  ;
    Route::post('/cateringpic1{id}', 'CateringController@changePic1')  ;
    Route::post('/cateringpic2{id}', 'CateringController@changePic2')  ;
    Route::post('/cateringpic3{id}', 'CateringController@changePic3')  ;
    Route::post('/cateringpic4{id}', 'CateringController@changePic4')  ;
    Route::post('/AddCateringPackage{id}', 'CateringController@AddNewPackage')  ;
    Route::post('/EditCateringPackage', 'CateringController@EditPackage')  ;
    Route::post('/DeleteCateringPackage', 'CateringController@deletePackage')  ;

    //hotel and hall options
    Route::get('/HallUserProfile{id}','HallController@hallProfile');
    Route::post('/EditHotelDetails/{userid}/{hotelid}', 'HallController@HotelUpdate')  ;
    Route::post('/AddNewHall', 'HallController@AddnewHall')  ;
    Route::post('/newhall', 'HallController@newHall')  ;
    Route::post('/EditHallDetails{hallid}', 'HallController@editHall')  ;
    Route::post('/EditHallFeatures{id}', 'HallController@featureUpdate')  ;
    Route::post('/EditHallArrangement{id}', 'HallController@arrangeUpdate')  ;
    Route::get('/RemoveHall{hallid}', 'HallController@removehall')  ;
    Route::post('/EditHallEvents{eventid}', 'HallController@eventUpdate')  ;
    Route::post('/ChangeHotelMainpic{id}', 'HallController@changeHotelMainPic')  ;
    Route::post('/ChangeHotelCoverpic{id}', 'HallController@changeHotelCoverPic')  ;
    Route::post('/ChangeHallMainpic{id}', 'HallController@changeHallMainPic')  ;
    Route::post('/hallpic1{id}', 'HallController@changePic1')  ;
    Route::post('/hallpic2{id}', 'HallController@changePic2')  ;
    Route::post('/hallpic3{id}', 'HallController@changePic3')  ;
    Route::post('/hallpic4{id}', 'HallController@changePic4')  ;
    Route::post('/AddHallPackage{id}', 'HallController@AddNewPackage')  ;
    Route::post('/EditHallPackage', 'HallController@EditPackage')  ;
    Route::post('/DeleteHallPackage', 'HallController@deletePackage')  ;
    
    //Profile
    Route::get('/Profile', 'HomeController@profilecategory')  ;
    Route::post('/ChangePassword', 'UsersController@changepassword')  ;

});









 
